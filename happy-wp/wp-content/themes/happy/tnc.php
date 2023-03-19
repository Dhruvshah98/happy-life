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
        <?php the_content() ?>

    </div>
    <!-- Main Container Ends -->

<?php
get_footer(); ?>