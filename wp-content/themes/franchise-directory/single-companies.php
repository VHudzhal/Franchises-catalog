<?php
/*
 * The template for displaying all single posts
  Template Name: My Single
  Template Post: post
 */
get_header();
?>
    <style type="text/css">

    </style>
	<div id="primary" class="content-area" style="">
        <?php get_sidebar('left-main'); ?>
		<main id="main" class="single-main single-company" style="">

<?php
if (have_posts()) :

while (have_posts()) : the_post();
    get_template_part('template-parts/post/content', 'company');

            endwhile;
wp_reset_postdata();
else :
    get_template_part( 'no-results' );
endif;
?>

		</main>
	</div>


<?php
get_footer();
