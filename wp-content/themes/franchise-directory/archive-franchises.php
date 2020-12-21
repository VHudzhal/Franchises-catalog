<?php
/*
 * The template for displaying archive pages
 */
get_header();
$sp_obj = new FranchiseClass();
//$post_type = 'franchises';
$post_type = get_post_type();
$taxonomies = get_object_taxonomies($post_type); // Find taxonomies
$tax_name = 'franchises-categories';
$term_count = get_terms( array (
    'taxonomy' => $tax_name,
    'fields'   => 'count',
) );
// define the number of terms per page
$terms_per_page = 10;

// find out the number of pages to use in pagination
$max_num_pages = ceil($term_count/$terms_per_page);

// get the page number from URL query
$current_page = get_query_var( 'paged', 1 );

// calculate offset
$offset = ( $terms_per_page * $current_page ) - $terms_per_page;
$tax = $wp_query->get_queried_object();
$tax_term = get_terms();
$tax = get_taxonomy($tax->taxonomy);
$args = array (
    'taxonomy' => $tax_name,
    'post_type' => $post_type,
    'term' => 'auto',
    'order'    => 'ASC',
    'orderby'  => 'name',
    'number'   => $terms_per_page,
    'offset'   => $offset,
    'posts_per_page' => -1
);
// get all taxonomy terms
$posts = get_posts($args);
$query = new WP_Query($args)
?>

    <section class="all-franchise">
        <?php get_sidebar('left-main');?>
        <main class="franchise-main">
            <div class="section-header">
                <h6><?php
                    echo "$tax_term";?>
                </h6>
            </div>
            <div class="breadcrumbs" typeof="breadcrumbList" vocab="http://schema.org"><?php
                if (function_exists('bcn_display'))
                    bcn_display();
                ?>
            </div>

            <?php
                    if ($query->have_posts()):?>
            <div id="franchise_category_<?php echo get_the_ID(); ?>">

                <?php
                while ($query->have_posts()) : $query->the_post();
                    ?>
                    <?php get_template_part('template-parts/post/content', 'franchise-catalog'); ?>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>

            <?php if ($wp_query->max_num_pages > 1) : ?>
            <!--                    <div id="franchises_pagination" class="store-pagination page-navigation">-->
            <!--                        --><?php
            //                        $big = 999999999; // need an unlikely integer
            //                        echo paginate_links( array(
            //                            'base'		=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            //                            'format'	=> '?paged=%#%',
            ////                            'current'	=> max( 1, get_query_var( 'paged' ) ),
            //                            'current'	=> $current_page,
            ////                            'total'		=> $wp_query->max_num_pages,
            //                            'total' => $max_num_pages,
            //                            'prev_text'	=> __( '&laquo; Пред', 'sp-theme' ),
            //                            'next_text'	=> __( 'След.  &raquo;', 'sp-theme' ),
            //                        ) );
            //                        ?>
            <!--                    </div>-->
            <?php endif; ?>
            <?php else: ?>
            <section class="store-404 not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php _e('Oops! There\'s nothing to see here.', 'vendd'); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <p><?php _e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'vendd'); ?></p>

                    <?php get_search_form(); ?>

                    <?php the_widget('WP_Widget_Recent_Posts'); ?>

                    <?php if (vendd_categorized_blog()) : // Only show the widget if site has multiple categories. ?>
                        <div class="widget widget_categories">
                            <h2 class="widget-title"><?php _e('Most Used Categories', 'sp-theme'); ?></h2>
                            <ul>
                                <?php
                                wp_list_categories(array(
                                    'orderby' => 'count',
                                    'order' => 'DESC',
                                    'show_count' => 1,
                                    'title_li' => '',
                                    'number' => 10,
                                ));
                                ?>
                            </ul>
                        </div><!-- .widget -->
                    <?php endif; ?>

                </div><!-- .page-content -->
            </section><!-- .store-404 -->

            <?php
            endif;
            ?>

        </main>
    </section>
<?php get_footer() ?>
