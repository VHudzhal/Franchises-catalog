<?php
/*
 * The template for displaying archive pages
 */

get_header();?>
<?php
$fr_obj = new FranchiseClass();

$args = array(
    'post_type' => 'post',
    'tag_ID' => '63',
    'cat' => 'services'
);
$franchise = new WP_Query( $args );
?>
<h1><?php $fr_obj->get_title();?><h1>

<?php if ( $franchise->have_posts() ) :

	/* Start the Loop */
	while ( $franchise->have_posts() ) : $franchise->the_post(); ?>

		<div <?php post_class('one-post');?>>

			<div class="entry-thumbnail">
				<a href="<?php echo esc_url(get_the_permalink());?>">

					<?php $post_medium_img = $fr_obj->get_thumbnail(get_the_ID(), 'medium');
					$post_full_img = $fr_obj->get_thumbnail(get_the_ID(), 'full');?>

					<img src="<?php echo esc_url($post_medium_img);?>"  data-src="<?php echo esc_url($post_full_img);?>" class="fr_lazyload" alt="<?php the_title_attribute();?>">

				</a>
			</div>

			<div class="entry-title">
				<a href="<?php echo esc_url(get_the_permalink());?>" class="h3"><?php the_title();?></a>
			</div>

			<div class="entry-summary"><?php

				if(has_excerpt()){
					echo wp_kses_post(get_the_excerpt());
				} else {
					echo wp_kses_post(wp_trim_words(get_the_content(), 30, ' ...' ));
				}

			?></div>

			<?php $fr_obj->get_entry_meta();?>

		</div>

	<?php endwhile;


endif;

?>
<?php
get_footer();
?>