<?php acf_form_head(); ?>

<?php
get_header();?>
    <div class="header-mob"><span id="head-title"><?php the_title()?></span></div>

       <?php while ( have_posts() ) : the_post(); ?>
<!--	--><?php //get_template_part( 'content/post/content', 'franchise' );?>

            <?php acf_form(array(
                'post_id'       => 'new_post',
                'post_title' => 'franchise_name',
                'field_groups' => array(49), // Create post field group ID(s)
                'new_post'      => array(
                    'post_type'     => 'franchise_apps',
                    'post_status'   => 'publish'
                ),
                'submit_value'  => 'Отправить заявку'
            )); ?>
        <?php endwhile; ?>
<?php
