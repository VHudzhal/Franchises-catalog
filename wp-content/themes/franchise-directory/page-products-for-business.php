<?php
/*
 * The template for displaying all pages
 */
get_header();
$fr_obj = New FranchiseClass();
?>
<!--<div class="breadcrumbs" typeof="breadcrumbList" vocab="http://schema.org" style="margin-left: 45px;">--><?php
//    if (function_exists('bcn_display'))
//        bcn_display();
//
//    ?>
<!--</div>-->
<section id="" class="business-content-area">
    <?php    get_sidebar('left-main');?>
    <main id="main" class="site-main container">
        <div class="header-mob"><span id="head-title"><?php the_title()?></span></div>
,
        <?php
//        wp_nav_menu(array(
//            'container'       => 'nav',
//            'theme_location'  => 'business-products',
//            'menu_id'         => 'product-for-biz',
//            'menu_class'	  => 'business-products',
//            'depth'           => 1,
//        ) );
        the_content();
        ?>

    </main><!-- #main -->
</section><!-- #primary -->


<?php //get_sidebar();
get_footer(); ?>
