window.onload = function() {
    if(document.body.contains(document.querySelector('.search_button'))) {
        if(!document.body.contains(document.querySelector('.data_news'))) {
            var noContentSpan = document.createElement('span');
            noContentSpan.innerHTML = 'Здесь нету новостей';
            document.querySelector('.only_news').appendChild(noContentSpan)
        }
        
        const greenHeaderElem = document.querySelector('.header_content > div:last-child');
        greenHeaderElem.style.backgroundColor = '#39be56'
        const readMore = document.querySelectorAll('.read_more');
        const readMoreSpan = document.querySelectorAll('.news_text')
        const footer = document.querySelector('footer')
        const allNews = document.querySelectorAll('.data_news');
        const searchButton = document.querySelector('.search_button');
        const onlyTags = document.querySelectorAll('.only_tags > span');
        let display_tags = document.querySelector('.tags');
        const display_category = document.querySelector('.categories');
        
        
        allNews.forEach(news => {
            var attrs = news.getAttribute('categories').split(' ');
            attrs.forEach(attr => {
                let category = document.createElement('span')
                category.innerHTML = attr
                display_category.appendChild(category)
            })
        })
        
        let categories_span = document.querySelectorAll('.categories > span');
        
        Array.prototype.forEach.call(categories_span,category => {
            category.onclick = function() {
                var categoryContent = category.textContent;
                Array.prototype.forEach.call(allNews, news => {
                            switch(news.getAttribute('categories') == categoryContent) {
                                case false: news.style.display = 'none'
                                break;
                                case true: news.style.display = 'flex'
                                break;
                                default: err => new Error(err)
                                break;
                            }
                });
            }
        })

        onlyTags.forEach(only_tag => {
            let tag = document.createElement('span')
            tag.innerHTML = only_tag.innerHTML
            display_tags.appendChild(tag)
        })
        
        const tags = document.querySelectorAll('.tags > span');
    
        tags.forEach(tag => {
            tag.onclick = function() {
                var tagContent = tag.textContent;
                Array.prototype.forEach.call(allNews, news => {
                    for(var i = 0; i < news.children.length; i++) {
                        if(news.children[i].className === 'only_tags') {
                            switch(news.children[i].textContent.includes(tagContent)) {
                                case false: news.style.display = 'none'
                                break;
                                case true: news.style.display = 'flex'
                                break;
                            }
                        }
                    }
                });
            }
        })
    
        searchButton.onclick = function() {
        const searchValue = document.querySelector('.search_input').value;
            Array.prototype.forEach.call(allNews, news => {
                var checkContent = news.textContent;
                switch(checkContent.includes(searchValue)) {
                    case false: news.style.display = 'none'
                    break;
                    case true: news.style.display = 'flex' 
                    break;
                }
            });
        }
    }
    
    else if(document.body.contains(document.querySelector('.question'))) {
        var allPlus = document.querySelectorAll('.plus_icon');
        var greenHeaderBlock = document.querySelector('.header_content > a:nth-child(7)')
        var lastHeaderBlock = document.querySelector('.header_content > div:last-child')
        greenHeaderBlock.style.backgroundColor = '#39be56';
        greenHeaderBlock.style.width = '130px'
        greenHeaderBlock.style.height = '100%'
        lastHeaderBlock.style.width = 'auto'
        
        allPlus.forEach(plus => {
            plus.onclick = function() {
                var parent = this.parentElement.parentElement;
                for(var i = 0; i < parent.children.length; i++) {
                    if(parent.children[i].className == 'answer') {
                        var questionBlock = this.parentElement;
                        var questionAttr = questionBlock.getAttribute('isactive')
                        questionAttr == 'false' 
                        ? (parent.children[i].style.display = 'flex', questionBlock.style.backgroundColor = '#2C3E50', questionBlock.style.color = 'white',  questionBlock.setAttribute('isactive', 'true')) 
                        : (parent.children[i].style.display = 'none', questionBlock.style.backgroundColor = 'white', questionBlock.style.color = 'black', questionBlock.setAttribute('isactive', 'false'))
                    }
                }
            }
        })
    }
    
    else if(document.body.contains(document.querySelector('.mainscreen'))) {
        const greenHeaderElem = document.querySelector('.header_content > div:first-child');
        const questions = document.querySelectorAll('.question');
        
        greenHeaderElem.style.backgroundColor = '#39be56';
    }
    
        const menu = document.querySelector('.menu_logo')
        const menu_block = document.querySelector('.mobile_menu')
        const header = document.querySelector('header')
        var isOpen = false;
        const submitInput = document.querySelector('.submit_input')
        const inputs = document.querySelectorAll('.inputs');
        
        menu.onclick = function() {
                if (isOpen === false) {
                    menu_block.classList.toggle('active')
                    menu_block.classList.remove('hidden')
                    isOpen = true
                }
                
                else {
                    isOpen = false
                    menu_block.classList.toggle('hidden')
                    menu_block.classList.remove('active')
                }
        }
        
        window.addEventListener('scroll', () => {
            if(document.documentElement.scrollTop !== 0) {
                header.style.position = 'fixed'
                header.style.top = '0'
                menu_block.style.position = 'fixed'
                menu_block.style.top = '80px'
            }
            
            else if(document.documentElement.scrollTop === 0) {
                header.removeAttribute('style')
                menu_block.style.position = 'fixed'
                menu_block.style.top = '80px'
            } 
        })
}