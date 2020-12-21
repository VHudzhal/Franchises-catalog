<?php
/*
 * The template for displaying archive pages
 */

get_header();
$sp_obj = new FranchiseClass();

?>
<div class="breadcrumbs" typeof="breadcrumbList" vocab="http://schema.org">
   <?php
    if (function_exists('bcn_display'))
        bcn_display();
?>
   </div>
<h1><?php $sp_obj->get_title();?><h1>
<?php
$post_type = 'posts';
//$taxonomy = 'franchise_categories'; ?>
<?php

		//get ONE post assigned to this term
		$custom_loop = new WP_Query( array(
		'post_type' => $post_type,
			'cat' => '26',
		) );

		//LOOP
		if( $custom_loop->have_posts() ): ?>
			<?php
			while( $custom_loop->have_posts() ) : $custom_loop->the_post(); ?>
<!--                			<article>-->
                				<h2><?php the_title(); ?></h2>
<!---->
                				<?php the_post_thumbnail(); ?>

<!--                                <div><strong>Price Min: </strong>--><?php //echo esc_attr( get_post_meta( get_the_ID(), 'price_min', true ) ); ?><!--</div>-->
<!--                            </article>-->
<!--				--><?php //get_template_part('archive', $term->slug);?>
			<?php
				the_excerpt();

			endwhile;
		endif;

?>
<?php
get_footer();
