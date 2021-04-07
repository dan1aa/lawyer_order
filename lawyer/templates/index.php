<?php
/* Template name: Main*/
?>
<?php get_header() ?>
<a name="main"></a>
        <div class="mainscreen" style="background-image: url(<?php the_field('desktop_mainscreen_background') ?>)">
            <div>
                <h1><?php the_field('mainscreen_maintext'); ?></h1>
                
            </div>
                <span><span class="mobile_inline"><?php the_field('mainscreen_thesmallest_text'); ?>&nbsp;</span><?php the_field('mainscreen_third_text'); ?></span>
                <span><?php the_field('mainscreen_fourth_text'); ?></span>
                <button class="main_button"><a href="#contacts"><?php the_field('get_consultation_text'); ?></a></button>
        </div>
        <div class="statistic">
            <div>
                <h1><?php the_field('statistic_num_first'); ?></h1>
                <span><?php the_field('statistic_text_first'); ?></span>
            </div>
            <div>
                <h1><?php the_field('statistic_num_second'); ?></h1>
                <span><?php the_field('statistic_text_second'); ?></span>
            </div>
            <div>
                <h1><?php the_field('statistic_num_third'); ?></h1>
                <span><?php the_field('statistic_text_third'); ?></span>
            </div>
        </div>
        <a name="about"></a>
        <div class="about">
            <img class="about_img" src="<?php the_field('about_title_img'); ?>" alt="">
            <h1><?php the_field('about_title'); ?></h1>
            <span><?php the_field('about_first_text'); ?></span>
            <span><?php the_field('about_second_text'); ?></span>
        </div>
        <a name="services"></a>
        <div class="services">
            <h1><?php the_field('services_title'); ?></h1>
            <span><?php the_field('services_small_info'); ?></span>
            <div class="service_row">
                <div class="card">
                    <div>
                    <img src="<?php the_field('first_card_img') ?>" alt="">
                    <h3><?php the_field('first_card_title'); ?></h3>
                    <span><?php the_field('first_card_text'); ?></span>
                    </div>
                </div>
                <div class="card">
                    <div>
                    <img src="<?php the_field('second_card_img') ?>" alt="">
                    <h3><?php the_field('second_card_title'); ?></h3>
                    <span><?php the_field('second_card_text'); ?></span>
                    </div>
                </div>
                <div class="card">
                    <div>
                    <img src="<?php the_field('third_card_img') ?>" alt="">
                    <h3><?php the_field('third_card_title'); ?></h3>
                    <span><?php the_field('third_card_text'); ?></span>
                    </div>
                </div>
            </div>
            <div class="service_row">
                <div class="card">
                    <div>
                    <img src="<?php the_field('fourth_card_img') ?>" alt="">
                    <h3><?php the_field('fourth_card_title'); ?></h3>
                    <span><?php the_field('fourth_card_text'); ?></span>
                    </div>
                </div>
                <div class="card">
                    <div>
                    <img src="<?php the_field('fifth_card_img') ?>" alt="">
                    <h3><?php the_field('fifth_card_title'); ?></h3>
                    <span><?php the_field('fifth_card_text'); ?></span>
                    </div>
                </div>
                <div class="card last_card">
                    <div>
                    <img src="<?php the_field('sixth_card_img') ?>" alt="">
                    <h3><?php the_field('sixth_card_title'); ?></h3>
                    <span><?php the_field('sixth_card_text'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="consultation_info" style="background-image: url(<?php the_field('consultation_info_bakground') ?>)">
            <h2 class="consultation_h2"><?php the_field('consultation_info_title'); ?></h2>
            <h3><?php the_field('consultation_info_undertitle'); ?></h3>
            <button class="contact_button"><a href="#contacts"><?php the_field('get_consultation_text') ?></a></button>
        </div>
        <a name='advantages'></a>
        <div class="our_advantages">
            <h1><?php the_field('advantages_title'); ?></h1>
            <span><?php the_field('advantages_undertitle') ?></span>
            <div class="advantages">
                <div class="adv_col">
                    <div>
                        <img src="<?php the_field('advantage_first_img') ?>" alt="">
                        <div><h3><?php the_field('first_advantage_text') ?></h3></div>
                    </div>
                    <div>
                        <img src="<?php the_field('advantage_second_img') ?>" alt="">
                        <div><h3><?php the_field('second_advantage_text') ?></h3></div>
                    </div>
                </div>
                <div class="adv_col">
                    <div>
                        <img src="<?php the_field('advantage_third_img') ?>" alt="">
                        <div><h3><?php the_field('third_advantage_text') ?></h3></div>
                    </div>
                    <div>
                        <img src="<?php the_field('advantage_fourth_img') ?>" alt="">
                        <div><h3><?php the_field('fourth_advantage_text') ?></h3></div>
                    </div>
                </div>
                <div class="adv_col">
                    <div>
                        <img src="<?php the_field('advantage_fifth_img') ?>" alt="">
                        <div><h3><?php the_field('fifth_advantage_text') ?></h3></div>
                    </div>
                    <div>
                        <img src="<?php the_field('advantage_sixth_img') ?>" alt="">
                        <div><h3><?php the_field('sixth_advantage_text') ?></h3></div>
                    </div>
                </div>
            </div>
        </div>
        <a name='reviews'></a>
        <div class="reviews">
            <h1><?php the_field('reviews_title') ?></h1>
            <div>
                <div class="review">
                    <img src="<?php the_field('review_first_img') ?>" alt="">
                    <h3></h3>
                    <span><?php the_field('first_review_text') ?></span>
                </div>
                <div class="review">
                    <img src="<?php the_field('review_second_img') ?>" alt="">
                    <h3></h3>
                    <span><?php the_field('second_review_text') ?></span>
                </div>
                <div class="review">
                    <img src="<?php the_field('review_third_img') ?>" alt="">
                    <h3></h3>
                    <span><?php the_field('third_review_text') ?></span>
                </div>
            </div>
        </div>
        <a name='contacts'></a>
        <div class="consultation" style="background-image: url(<?php the_field('form_background') ?>)"> 
            <h2 class="form_h2"><?php the_field('form_title'); ?></h2>
            <h3><?php the_field('form_undertitle'); ?></h3>
            <form class="form" action="" method="post">
                    <div class="form_row">
                        <input required name="visitor_name" class="inputs" placeholder="Ваше имя:" type="text">
                        <input required name="visitor_phone" class="inputs" placeholder="Номер телефона:" type="text">
                    </div>
                    <div class="form_row">
                        <input required name="visitor_surname" class="inputs" placeholder="Ваша фамилия:" type="text">
                        <input required name="visitor_email" class="inputs" placeholder="E-mail:" type="email">
                    </div>
                <input class="submit_input" type="submit" name="submit" value="<?php the_field('get_consultation_text'); ?>" />
            </form>
        </div>

<?php get_footer(); ?>


    
<?php

    if(isset($_REQUEST['submit'])){
      $name = $_POST['visitor_name'];
      $email = $_POST['visitor_email'];
      $surname = $_POST['visitor_surname'];
      $phone = $_POST['visitor_phone'];
      $msg = ' Имя: ' . htmlspecialchars($name) . ', ' . 'Фамилия: ' . htmlspecialchars($surname) . ', ' . ' Телефон: ' . htmlspecialchars($phone) . ', ' . ' Почта: ' . htmlspecialchars($email);
      $recipient = 'help@migrationagency.com.ua';
      
      mail($recipient, 'MIGRATION AGENCY', $msg);
      header("Location: /succes-form");
    }

?>