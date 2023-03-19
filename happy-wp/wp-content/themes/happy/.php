<?php

/* Template Name: Landing Page */

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
 <div class="main-container home-container">
        <div class="home-anim-container">
            <div class="banner-trigger-1"></div>
            <div class="banner-trigger-2"></div>
            <div class="banner-trigger-3"></div>
            <div class="banner-trigger-4"></div>
            <div class="home-banner">
                <div class="banner-img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/flash.png" alt="">
                </div>
                <div class="banner-txt-wrap">
                    <div class="comm-head head-1">
                        <h2>the</h2>
                    </div>
                    <div class="comm-head head-2">
                        <h2>creative</h2>
                    </div>
                    <div class="comm-head head-3">
                        <h2>marketing</h2>
                    </div>
                    <div class="comm-head head-4">
                        <h2>plug</h2>
                    </div>
                </div>
                <div class="banner-links">
                    <div class="banner-links-wrap">
                        <a href="" class="banner-link banner-link-1">our work</a>
                        <a href="" class="banner-link banner-link-2">services </a>
                        <a href="" class="banner-link banner-link-3">contact </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Main Container Ends -->

<?php
get_footer(); ?>