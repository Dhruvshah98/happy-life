<?php

/* Template Name: Service Page */

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
    <div class="main-container service-container">
    
            
        <div class="container">
            <!-- Service Banner Starts -->
            <div class="services-banner">
                <div class="comm-banner-wrap">
                <?php  echo get_field('title'); ?>
                    <p><?php  echo get_field('content'); ?></p>
                    <a href="<?php  echo get_field('page_link'); ?>" class="button pink shadow">Contact us</a>
                </div>
            </div>
            <!-- Service Banner Ends -->
        </div>
        <!-- Service Section Starts -->
        <div class="service-box">
            <div class="container">

            <?php $i = 1;  if( have_rows('services') ):
                        while( have_rows('services') ) : the_row(); ?>
                <div class="service">
                    <div class="service-head"><?php echo get_sub_field('title'); ?></div>
                    <div class="service-hidden">
                        <div class="service-txt"><?php echo get_sub_field('content'); ?></div>
                        <a href="<?php echo get_sub_field('work_toge'); ?>" class="button shadow">Work together</a>
                    </div>
                    <div class="service-img">
                        <img src="<?php echo get_sub_field('service_image'); ?>" alt="">
                    </div>
                </div>
                <?php $i++;
                    endwhile;
                    endif; ?>
                <!-- <div class="service">
                    <div class="service-head">Community management</div>
                    <div class="service-hidden">
                        <div class="service-txt">WE FOCUS ON THE CONTENT THAT FITS YOUR BRAND, THUS BUILDING AN ENTIRE
                            STRATEGY AROUND IT TO MAKE SURE YOUR BUSINESS OBJECTIVES ARE BEING MET.</div>
                        <a href="" class="button shadow">Work together</a>
                    </div>
                    <div class="service-img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/service-2.jpg" alt="">
                    </div>
                </div>
                <div class="service">
                    <div class="service-head">Creative services</div>
                    <div class="service-hidden">
                        <div class="service-txt">WE FOCUS ON THE CONTENT THAT FITS YOUR BRAND, THUS BUILDING AN ENTIRE
                            STRATEGY AROUND IT TO MAKE SURE YOUR BUSINESS OBJECTIVES ARE BEING MET.</div>
                        <a href="" class="button shadow">Work together</a>
                    </div>
                    <div class="service-img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/service-2.jpg" alt="">
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Service Section Ends -->


    </div>
    <!-- Main Container Ends -->

<?php
get_footer(); ?>