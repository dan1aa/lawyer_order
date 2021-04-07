<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lawyer
 */

?>

<footer>
            <div class="footer_column">
                <span><?php the_field('footer_firstcolumn_first_item'); ?></span>
                <span><?php the_field('footer_firstcolumn_second_item'); ?></span>
                <span><?php the_field('footer_firstcolumn_third_item'); ?></span>
                <span><?php the_field('footer_firstcolumn_fourth_item'); ?></span>
                <span><?php the_field('footer_firstcolumn_fifth_item'); ?></span>
                <span><?php the_field('footer_firstcolumn_sixth_item'); ?></span>
            </div>
            <div class="footer_column">
                <div>
                    <h4><?php the_field('footer_menu_title'); ?></h4>
                    <div>
                        <a href="/"><?php the_field('footer_secondcolumn_first_item'); ?></a>
                        <a href="/#about"><?php the_field('footer_secondcolumn_second_item'); ?></a>
                        <a href="/#services"><?php the_field('footer_secondcolumn_third_item'); ?></a>
                        <a href="/#advantages"><?php the_field('footer_secondcolumn_fourth_item'); ?></a>
                        <a href="/#reviews"><?php the_field('footer_secondcolumn_fifth_item'); ?></a>
                        <a href="/#contacts"><?php the_field('footer_secondcolumn_sixth_item'); ?></a>
                    </div>
                </div>
            </div>
            <div class="footer_column">
                <div class="footer_social">
                    <div>
                        <a href="<?php the_field('viber_link') ?>"><img class="footer_social_img" src="<?php the_field('viber_icon'); ?>" alt=""></a>
                    </div>
                    <div>
                        <a href="<?php the_field('whatsapp_link') ?>"><img class="footer_social_img" src="<?php the_field('whatsapp_icon'); ?>" alt=""></a>
                    </div>
                    <div>
                        <a href="<?php the_field('telegram_link') ?>"><img class="footer_social_img" src="<?php the_field('telegram_icon'); ?>" alt=""></a>
                    </div>
                </div>
            </div>
            </div>
        </footer> 
    </div>
    <script src="js/main.js"></script>
</body>
</html>