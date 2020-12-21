<?php
/*
 * The template for displaying all pages
 */
get_header();
$fr_obj = New FranchiseClass();
//if (function_exists('wp_recall')) wp_recall();

?>

<section id="primary" class="content-area">
<?php    get_sidebar('left-main');?>

    <main id="main" class="site-main container" style="padding-top: 67px;">
        <div class="header-mob"><span id="head-title"><?php the_title()?></span></div>

        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile; // End of the loop.
        ?>
    </main><!-- #main -->
</section><!-- #primary -->


<?php //get_sidebar();
get_footer(); ?>
