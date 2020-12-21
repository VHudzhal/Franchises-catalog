<?php
/*
 * The template for displaying all pages
 */
get_header();
?>

<section id="primary" class="content-area">
    <?php    get_sidebar('left-main');?>

    <main id="main" class="site-main container">
        <?php

//		/* Start the Loop */
//		while ( have_posts() ) :
//			the_post();
//the_content();
////			get_template_part( 'template-parts/content/content', 'page' );
//		endwhile; // End of the loop.
//?>
        <?php

            /* Start the Loop */

//            get_template_part('template-parts/page/content', 'page');

            // If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) {
//				comments_template();
//			}

            while (have_posts()) : the_post();
                the_content();
            endwhile; // End of the loop.
        ?>
    </main><!-- #main -->
</section><!-- #primary -->


<?php //get_sidebar();
get_footer(); ?>
