<?php
/*
 * The template for displaying all single posts
  Template Name: My Single
  Template Post: post
 */

get_header();
?>
	<div id="primary" class="content-area" style="">
        <?php get_sidebar('sidebar-2'); ?>
		<main id="main" class="single-main" style="">

<?php
if (have_posts()) :

while (have_posts()) : the_post();
if(is_category('services-list')) {
    get_template_part('template-parts/post/content', 'services-list');
}else {
    the_content();
}
//if(is_tax('franchises')){
//    get_template_part( 'template-parts/post/content', 'franchise-catalog' );
//}
            endwhile;
wp_reset_postdata();
else :
    get_template_part( 'no-results' );
endif;
?>
		</main>
	</div>

<?php
//get_sidebar();
get_footer();
