<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lawyer
 */

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet"> 
    <title>Main</title>
</head>
<body>
    <div class="container">
        <nav>
            <div class="nav_box">
                <h3>Телефон: &nbsp;</h3>
                <h3><?php the_field('nav_phone'); ?></h3>
            </div>
            <div class="nav_box">
                <h3>E-mail: &nbsp;</h3>
                <h3><?php the_field('nav_email'); ?></h3>
            </div>
            <div class="nav_box">
                <h3>пн.-пт.: &nbsp;</h3>
                <h3><?php the_field('nav_schedule'); ?></h3>
            </div>
            <div class="nav_social">
                <div>
                    <a href="<?php the_field('viber_link') ?>"><img src="<?php the_field('viber_icon'); ?>" alt=""></a>
                </div>
                <div>
                    <a href="<?php the_field('whatsapp_link') ?>"><img src="<?php the_field('whatsapp_icon') ;?>" alt=""></a>
                </div>
                <div>
                    <a href="<?php the_field('telegram_link') ?>"><img src="<?php the_field('telegram_icon'); ?>" alt=""></a>
                </div>
            </div>
        </nav>
        <header>
            <div class="header_content">
                <div><a href="/"><?php the_field('header_first_item'); ?></a></div>
                <a href="/#about"><?php the_field('header_second_item'); ?></a>
                <a href="/#services"><?php the_field('header_third_item'); ?></a>
                <a href="/#advantages"><?php the_field('header_fourth_item'); ?></a>
                <a href="/#reviews"><?php the_field('header_fifth_item'); ?></a>
                <a href="/#contacts"><?php the_field('header_sixth_item'); ?></a>
                <a href="/questions"><?php the_field('header_seventh_item'); ?></a>
                <div><a href="/news"><?php the_field('header_eight_item'); ?></a></div>
            </div>
            <img src="<?php the_field('mobile_menu_img'); ?>" class="menu_logo mobile" alt="">
        </header>
		<div class="mobile_menu mobile">
            <a href="/"><?php the_field('header_first_item'); ?></a>
            <a href="/#about"><?php the_field('header_second_item'); ?></a>
            <a href="/#services"><?php the_field('header_third_item'); ?></a>
            <a href="/#advantages"><?php the_field('header_fourth_item'); ?></a>
            <a href="/#reviews"><?php the_field('header_fifth_item'); ?></a>
            <a href="/#contacts"><?php the_field('header_sixth_item'); ?></a>
            <a href="/questions"><?php the_field('header_seventh_item'); ?></a>
            <a href="/news"><?php the_field('header_eight_item'); ?></a>
        </div>
