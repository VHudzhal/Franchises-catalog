<?php
/*
 * Template: Franchise Catalog
 * The template for displaying all pages
 */

get_header();

$fr_obj = New FranchiseClass();
?>

<div class="breadcrumbs" typeof="breadcrumbList" vocab="http://schema.org"><?php
//	if (function_exists('dimox_breadcrumbs'))
//        dimox_breadcrumbs();
//	?>
</div>
<div id="primary" class="content-area">
<!--    --><?php //get_sidebar('sidebar-1');?>

    <main id="main" class="site-main">

		<?php

        /* Start the Loop */
		get_template_part( 'template-parts/post/content', 'business-idea' );
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
		?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
