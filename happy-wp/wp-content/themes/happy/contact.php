<?php

/* Template Name: Contact Page */

/**

 * The template for displaying all pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.

 *

 *

 * @package blank

 */

get_header();

?>


    <!-- Main Container Starts -->
    <div class="main-container contact-wrap">
        <div class="footer-wrap">
            <div class="footer-box">
                <div class="container">
                    <div class="footer-top">
                        <div class="footer-head-box">
                            <h2 class="footer-head">Let’s get</h2>
                            <h2 class="footer-head-color pink">in touch</h2>
                            <div class="contact-links">
                                <a href="tel:<?php echo get_field('number')?>" class="contact-link clickable">
                                    <div class="contact-icon">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/phone.svg" alt="">
                                    </div> <?php echo get_field('number')?>
                                </a>
                                <div class="contact-link">
                                    <div class="contact-icon">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/location.svg" alt="">
                                    </div><?php echo get_field('address')?>
                                </div>
                                <a href="mailto:<?php echo get_field('email')?>" class="contact-link clickable">
                                    <div class="contact-icon">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/mail.svg" alt="">
                                    </div><?php echo get_field('email')?>
                                </a>
                            </div>
                        </div>
                        <div class="footer-links">
                            <ul>
                                <li><a href="<?php echo get_field('instagram')?>">Instagram <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_outward.svg" alt=""></a></li>
                                <li><a href="<?php echo get_field('twitter')?>">Twitter<img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_outward.svg" alt=""></a> </li>
                                <li><a href="<?php echo get_field('facebook')?>">Facebook<img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_outward.svg" alt=""></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Main Container Ends -->
