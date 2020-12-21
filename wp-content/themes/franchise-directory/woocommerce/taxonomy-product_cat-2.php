
<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header(); ?>
<div id="business-products-2" class="business-content-area">
    <?php get_sidebar('left-main');?>
    <main id="prod-2-main" class="business-products-main" role="main">
        <header class="woocommerce-products-header">
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                <h6 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h6>
            <?php endif; ?>

            <?php
            /**
             * Hook: woocommerce_archive_description.
             *
             * @hooked woocommerce_taxonomy_archive_description - 10
             * @hooked woocommerce_product_archive_description - 10
             */
            do_action( 'woocommerce_archive_description' );
            ?>
        </header>
        <?php
        wp_nav_menu(array(
            'container'       => 'nav',
            'theme_location'  => 'categories-list',
            'menu_id'         => 'product-cat-menu-list',
            'menu_class'	  => 'product-cat-links',
            'depth'           => 3,
        ) );
//        wp_nav_menu(array(
//            'container'       => 'div',
//            'theme_location'  => 'category-bez-2',
//            'menu_id'         => 'product-cat-menu-2',
//            'menu_class'	  => 'product-cat-link',
//            'depth'           => 1,
//        ) );
        // tutsplus_product_subcategories('cat=21&order=asc')
        ?>

    </main>
</div>
<?php //get_sidebar() ?>
<?php get_footer() ?>

