
<?php
                                
                                $queryObject = new  Wp_Query(array(
                                    'posts_per_page'   => '1',
                                    'post_type'        => 'footer',
                                    'post_status'      => 'publish'
                                )); ?>
                        <?php
                                $cnt = 0;

                            if ($queryObject->have_posts()) {
                                while ($queryObject->have_posts()) : $queryObject->the_post();
                                    $title = get_the_title();
                            ?>
<footer id="footer" class="footer">    
    <div class="footer-wrap">
        <div class="footer-box">
            <div class="container">
                <div class="f-row">
                    <div class="w50 w-768-100">
                        <div class="contact-links">
                            <div class="link">
                                <a href="tel:<?php echo get_field('number')?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/call.svg" alt=""> <?php echo get_field('number')?></a>
                            </div>
                            <div class="link">
                                <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/assets/img/fax.svg" alt=""><?php echo get_field('address')?></a>
                            </div>
                            <div class="link">
                                <a
                                    href="mailto:<?php echo get_field('email')?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/mail.svg" alt=""><?php echo get_field('email')?></a>
                            </div>
                            <div class="follow-wrap">
                                <p>Follow us</p>
                                <div class="follow-links">
                                    <a href="<?php echo get_field('facebook')?>">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.png" alt="">
                                    </a>
                                    <a href="<?php echo get_field('instagram')?>">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/insta.png" alt="">
                                    </a>
                                    <a href="<?php echo get_field('linkedin')?>">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/linkedin.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w50 w-768-100">
                        <div class="footer-left">
                            <div class="logo">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="">
                            </div>
                            <p><?php echo get_field('copy_rights')?></p>
                            <div class="privacy-wrap">
                                <a href="<?php echo get_field('privacy_policy')?>">Privacy Policy</a>
                                <a href="<?php echo get_field('terms')?>">Terms & conditions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php endwhile;
                                } wp_reset_query();  // Restore global post data stomped by the_post().
                                ?>
<?php wp_footer(); ?>
</body>

</html>