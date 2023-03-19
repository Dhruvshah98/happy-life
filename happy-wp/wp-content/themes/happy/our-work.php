<?php

/* Template Name: work Page */

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
    <div class="main-container work-container">
    <?php
                $latest_project_data = get_field('latest_project');
                if( $latest_project_data ): ?>
        <div class="container">
            <div class="work-banner">
                <div class="comm-banner-wrap">
                <?php echo $latest_project_data['title']; ?>
                    <p><?php echo $latest_project_data['content']; ?></p>
                    <a href="<?php echo $latest_project_data['contact_cta']; ?>" class="button yellow shadow">Contact us</a>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="work-boxes-section">
            <div class="container">
                <div class="work-boxes">
                    <div class="work-boxes-left">
                            <?php
                                $queryObject = new  Wp_Query(array(
                                    'posts_per_page'   => '-1',
                                    'post_type'        => 'work',
                                    'post_status'      => 'publish'
                                )); ?>
                            <?php
                                $cnt = 0;
                            if ($queryObject->have_posts()) {
                                while ($queryObject->have_posts()) : $queryObject->the_post();
                                    $title = get_the_title();
                            ?>
                        <a href="<?php the_permalink() ?>" class="work-box-wrap">
                            <div class="work-box">
                                <div class="work-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/work-2.jpg" alt="">
                                </div>
                                <div class="work-content">
                                    <p class="work-tag"><?php echo get_field('work_type')?></p>
                                    <h3 class="work-head"><?php the_title() ?></h3>
                                    <!-- <p class="work-txt">Spice AI delivers enterprise-scale web3 data</p> -->
                                    <div class="work-txt">
                                    <?php the_excerpt() ?></div>
                                </div>
                            </div>
                        </a>
                        <?php endwhile;
                        } wp_reset_query();  // Restore global post data stomped by the_post().
                        ?>
                        <!-- <a href="work-detail.html" class="work-box-wrap">
                            <div class="work-box">
                                <div class="work-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/work-1.jpg" alt="">
                                </div>
                                <div class="work-content">
                                    <p class="work-tag">APP DEVELOPMENT</p>
                                    <h3 class="work-head">A memory roll with your friends</h3>
                                    <p class="work-txt">Nash is an API-based platform for last-mile delivery.</p>
                                </div>
                            </div>
                        </a>
                        <a href="work-detail.html" class="work-box-wrap">
                            <div class="work-box">
                                <div class="work-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/work-3.jpg" alt="">
                                </div>
                                <div class="work-content">
                                    <p class="work-tag">DEVELOPMENT</p>
                                    <h3 class="work-head">Data & AI Infrastructure for Web3</h3>
                                    <p class="work-txt">Spice AI delivers enterprise-scale web3 data</p>
                                </div>
                            </div>
                        </a>
                        <a href="work-detail.html" class="work-box-wrap">
                            <div class="work-box">
                                <div class="work-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/work-4.jpg" alt="">
                                </div>
                                <div class="work-content">
                                    <p class="work-tag">DEVELOPMENT</p>
                                    <h3 class="work-head">Data & AI Infrastructure for Web3</h3>
                                    <p class="work-txt">Spice AI delivers enterprise-scale web3 data</p>
                                </div>
                            </div>
                        </a>
                        <a href="work-detail.html" class="work-box-wrap">
                            <div class="work-box">
                                <div class="work-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/work-5.jpg" alt="">
                                </div>
                                <div class="work-content">
                                    <p class="work-tag">DEVELOPMENT</p>
                                    <h3 class="work-head">Data & AI Infrastructure for Web3</h3>
                                    <p class="work-txt">Spice AI delivers enterprise-scale web3 data</p>
                                </div>
                            </div>
                        </a>
                        <a href="work-detail.html" class="work-box-wrap">
                            <div class="work-box">
                                <div class="work-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/work-6.jpg" alt="">
                                </div>
                                <div class="work-content">
                                    <p class="work-tag">DEVELOPMENT</p>
                                    <h3 class="work-head">Data & AI Infrastructure for Web3</h3>
                                    <p class="work-txt">Spice AI delivers enterprise-scale web3 data</p>
                                </div>
                            </div>
                        </a> -->
                    </div>
                    <div class="work-boxes-right"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Container Ends -->
 

<?php
get_footer(); ?>