<?php
$taxonomy = 'franchises-categories'; ?>

<?php get_header(); ?>

<?php

$terms = wp_get_object_terms($post->ID, $taxonomy);
$taxonomy_slug = $terms[0]->slug;
$args = array(
    'post_type' => 'company',
    'taxonomy' => $taxonomy,
    'term' => $taxonomy_slug,
);
//go through each term in this taxonomy one at a time
$custom_loop = new WP_Query($args);

?>
<section class="all-franchise">
<?php get_sidebar('left-main');?>
    <main class="franchises-list">        <div class="header"><span id="head-title">

        <?php
        $tax = $wp_query->get_queried_object();
        $tax_term = $tax->name;
        $tax = get_taxonomy($tax->taxonomy);
        echo "$tax_term";?>
            </span>
        </div>
        <div class="articles-list">
            <ul class="clearfix">
                <?php
                if ($custom_loop->have_posts()):
                    while ($custom_loop->have_posts()) : $custom_loop->the_post(); ?>
                        <li>
                            <?php get_template_part('template-parts/post/content', 'franchise-catalog'); ?>
                        </li>
                    <?php
                    endwhile;
                endif;
                if ( function_exists( 'pgntn_display_pagination' ) ) pgntn_display_pagination( 'multipage' );        wp_reset_query();
                ?>
            </ul>
        </div>

    </main>
</section>

    <?php //get_sidebar() ?>
<?php get_footer() ?>
