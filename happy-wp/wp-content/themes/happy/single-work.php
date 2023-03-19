<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Main Container Starts -->
<div class="main-container work-detail-container">
        <div class="container">
            <div class="w-detail-wrap">
                <div class="w-detail-head">
                    <p class="w-detail-tag">
                    <?php echo get_field('work_type')?>
                    </p>
                    <h2><?php the_title() ?></h2>
                    <div class="w-detail-txt">
                            <?php the_excerpt() ?></div>
                </div>
                <div class="w-detail-img">
        <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div>

        <div class="detail-wrap">
            <div class="container">
                <?php
                $section_1_data = get_field('section_1');
                if( $section_1_data ): ?>
                <div class="f-row">
                    <div class="w50">
                        <h3 class="detail-year"><?php echo $section_1_data['year']; ?></h3>
                        <h5 class="status"><?php echo $section_1_data['status']; ?></h5>
                    </div>

                    <div class="w50">
                        <h3 class="detail-head"><?php echo $section_1_data['title']; ?></h3>
                        <p class="detail-txt">
                        <?php echo $section_1_data['content']; ?>
                        </p>
                    </div>
                </div>
                <?php endif; ?>


                <div class="detail-img">
                    <img src="<?php echo get_field('image_1')?>" alt="">
                </div>
                <?php
                $section_2_data = get_field('section_2');
                if( $section_2_data ): ?>
                <div class="detail-content">
                    <div class="detail-head"><?php echo $section_2_data['title']; ?></div>
                    <div class="detail-txt">
                    <?php echo $section_2_data['content']; ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php
                $section_3_data = get_field('section_3');
                if( $section_3_data ): ?>
                <div class="detail-content">
                    <div class="f-row">
                        <div class="w50">
                            <div class="detail-head"><?php echo $section_3_data['title']; ?></div>
                            <div class="detail-txt">
                            <?php echo $section_3_data['content']; ?>
                            </div>
                        </div>
                        <div class="w50">
                            <div class="detail-img">
                                <img src="<?php echo $section_3_data['image']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <div class="detail-img">
                    <img src="<?php echo get_field('image_2')?>" alt="">
                </div>
                <div class="detail-img">
                    <img src="<?php echo get_field('image_3')?>" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Main Container Ends -->






<?php endwhile; endif; ?>

<?php get_footer(); ?>