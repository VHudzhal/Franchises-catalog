<?php
/*
 * The template for displaying all single posts
  Template Name: My Single
  Template Post: post
 */
//acf_form_head();
if ( ( is_user_logged_in() && $current_user->ID == $post->post_author ) ) { // Execute code if user is logged in or user is the author
    acf_form_head();
    wp_deregister_style( 'wp-admin' );
}
get_header();
?>
    <style type="text/css">
        .spoiler_body {display:none;}
        .spoiler_links {cursor:pointer;}
    </style>
	<div id="primary" class="content-area" style="">
        <?php get_sidebar('left-main'); ?>
		<main id="main" class="single-main single-company" style="display: flex; flex-flow: column;">
<?php
if (have_posts()) :

while (have_posts()) : the_post();
//Кнопка редактировать с помощью ACF
    // Сбор информации о пользователе

    get_template_part('template-parts/post/content', 'company');

            endwhile;
wp_reset_postdata();
else :
    get_template_part( 'no-results' );
endif;
?>
<div>
    <?php
    //echo do_shortcode('[bizov_company]');
    //echo do_shortcode('[swift-template name="company"]');
    ?>
</div>
		</main>
	</div>


<?php get_footer();
