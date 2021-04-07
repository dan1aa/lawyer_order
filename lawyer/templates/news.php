<?php
/* Template name: News*/
?>
<?php get_header() ?>
<div class="news_container">
    <div class="main_content">
        <div class="content">
            <div class="left_column">
                <span><a href="/">Главная</a> / Новости</span>
                <div class="search">
                    <h2><?php the_field('search_title') ?></h2>
                    <hr/>
                    <div class="input_wrapper">
                        <input class="search_input" name="search" />
                        <img class="search_button" src="<?php the_field('search_icon'); ?>" />
                    </div>
                </div>
                <div class="categories">
                    <h2><?php the_field('category_title') ?></h2>
                    <hr/>
                </div>
                <div class="tags">
                    <h2><?php the_field('tag_title') ?></h2>
                    <hr/>
                </div>
            </div>
            <div class="news">
                <h1><?php the_field('news_title') ?></h1>
                <div class="only_news">
                    <?php
                        
                        the_content();
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>