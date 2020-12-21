<?php
/*
 * Template: Franchise Catalog
 * The template for displaying all pages
 */

get_header();

$fr_obj = New FranchiseClass();

	if (function_exists('bcn_display'))
		bcn_display();
	?>
<section id="primary" class="content-area">
    <?php get_sidebar('sidebar-1');?>

    <main id="main" class="site-main">
        <div class="header-mob"><span id="head-title"><?php the_title()?></span></div>

		<?php

		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			get_template_part( 'content/post/content', 'franchise' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</section><!-- #primary -->


<?php get_footer(); ?>
