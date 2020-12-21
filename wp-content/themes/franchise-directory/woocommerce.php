<?php
/*
 * The template for displaying all pages
 */
get_header();
$fr_obj = New FranchiseClass();
?>

<section id="primary" class="content-area">
    <?php    get_sidebar('left-main');?>

    <main id="main" class="site-main container">

        <?php
        ubermenu('main');
        woocommerce_content(); ?>
    </main><!-- #main -->
</section><!-- #primary -->


<?php //get_sidebar();
get_footer(); ?>
