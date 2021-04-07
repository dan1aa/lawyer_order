<?php
/* Template name: Questions*/
?>
<?php get_header() ?>
<div class="questions_container">
    <h1><?php the_field('question_title'); ?></h1>
    <div class="questions">
        <?php the_content(); ?>
    </div>
</div>
<?php get_footer(); ?>