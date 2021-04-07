<div class="data_news" categories="<?php block_field('news-category'); ?>">
    <img src="<?php block_field('news-img'); ?>" />
    <h2 class="news_capture"><?php block_field('news-title'); ?></h2>
    <div class="news_text_wrap">
        <span class="news_text">
            <?php block_field('news-content') ?> 
        </span>
    </div>
    <div class="only_tags">
        <span><?php block_field('news-tag'); ?></span>
    </div>
    <span class="news_date"><?php block_field('news-date'); ?></span>
</div>