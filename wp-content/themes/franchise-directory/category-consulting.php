<?php
get_header();
$fr_obj = New FranchiseClass();
$args = array('category_name' => 'consulting',
    'posts_per_page' => -1);
$consulting = new WP_Query($args);
query_posts('category_name=consulting&posts_per_page=-1');
?>

<section class="consulting-block" style="display: flex; flex-flow: row">
    <?php get_sidebar('left-main');?>
<div class="consulting-content" style="">
    <div class="breadcrumbs" typeof="breadcrumbList" vocab="http://schema.org">
        <?php
        if (function_exists('bcn_display'))
            bcn_display();
        ?>
    </div>
    <div></div>

    <?php
    if (have_posts()) :

        while (have_posts()) : the_post();

            get_template_part( 'template-parts/post/content', 'consulting' );


        endwhile;
        wp_reset_postdata();
    else :
        get_template_part( 'no-results' );
    endif;
    ?>
</div>
</section>
