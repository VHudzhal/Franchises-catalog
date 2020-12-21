<?php
/*
 * Template: Franchise Catalog
 * Template Name: New Franchise
 * The template for displaying all pages
 */

get_header();

$fr_obj = New FranchiseClass();
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="header-mob"><span id="head-title"><?php the_title()?></span></div>
        <?php

        /* Start the Loop */
        get_template_part( 'template-parts/post/single', 'franchise-catalog' );

        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }
        ?>

    </main><!-- #main -->
</section><!-- #primary -->


<?php get_footer(); ?>
