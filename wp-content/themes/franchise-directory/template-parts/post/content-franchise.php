<?php //get_header();?>
<?php acf_form_head(); ?>

<?php
//if ( ( is_user_logged_in() && $current_user->ID == $post->post_author ) ) { // Execute code if user is logged in or user is the author
//acf_form_head();
//wp_deregister_style( 'wp-admin' );
//}
//get_header();
$args = array(
	'post_type' => 'franchise_apps'
);
global $post;
?>

<?php
//if ( ( is_user_logged_in() && $current_user->ID == $post->post_author ) ) {
	echo "<div class='acf-edit-post'>";
	while (have_posts() ) : the_post();

	acf_form( array(
		'field_groups' => array(24), // Same ID(s) used before
		'form'         => true,
		'return'       => '%post_url%',
		'submit_value' => 'Save Changes',
		'post_title'   => true,
		'post_content' => true,
	) );
	echo "</div>";
//}
//$franchises = new WP_Query($args);
//while ($franchises->have_posts() ) : $franchises->the_post();
//the_title();
//$post->ID;
//$franchises->post_count


endwhile;
//get_footer();
?>
