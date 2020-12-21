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
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title">
                        <?php
                        if ( is_category() ) :
                            single_cat_title();

                        elseif ( is_tag() ) :
                            single_tag_title();

                        elseif ( is_author() ) :
                            printf( __( 'Author: %s', 'vendd' ), '<span class="vcard">' . get_the_author() . '</span>' );

                        elseif ( is_day() ) :
                            printf( __( 'Day: %s', 'vendd' ), '<span>' . get_the_date() . '</span>' );

                        elseif ( is_month() ) :
                            printf( __( 'Month: %s', 'vendd' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'vendd' ) ) . '</span>' );

                        elseif ( is_year() ) :
                            printf( __( 'Year: %s', 'vendd' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'vendd' ) ) . '</span>' );

                        else :
                            _e( 'Archives', 'vendd' );

                        endif;
                        ?>
                    </h1>
                    <?php
                    // Show an optional term description.
                    $term_description = term_description();
                    if ( ! empty( $term_description ) ) :
                        printf( '<div class="taxonomy-description">%s</div>', $term_description );
                    endif;
                    ?>
                </header><!-- .page-header -->

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that
                     * will be used instead.
                     */

                    get_template_part( 'template-parts/page/content', get_post_format() );
                    ?>

                <?php endwhile; ?>
                <?php vendd_paging_nav(); ?>


            <?php else : ?>

                <?php get_template_part( 'template-parts/page/content', 'none' ); ?>

            <?php endif; ?>

        </main><!-- #main -->
    </section><!-- #primary -->
<?php
get_footer();
