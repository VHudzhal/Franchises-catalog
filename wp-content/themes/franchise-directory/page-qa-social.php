<?php
/*
 * The template for displaying all pages
 */
get_header();
$fr_obj = New FranchiseClass();

?>

<section id="community" class="question-content">
<?php
    get_sidebar('left-main');
    ?>

    <main id="main" class="questions">
        <div class="header-mob"><span id="head-title"><?php the_title()?></span></div>

        <div class="comm-header">
            <label for="comm-descr">Сообщество</label>
            <span id="comm-descr">Место для обмена знаниями о бизнесе</span>
        </div>
        <div class="breadcrumbs" typeof="breadcrumbList" vocab="http://schema.org"><?php
            if (function_exists('bcn_display'))
                bcn_display();

            ?>
        </div>
        <?php
        wp_nav_menu(array(
            'container'       => 'nav',
            'theme_location'  => 'qa-social',
            'menu_id'         => 'social-menu',
            'menu_class'	  => 'social-menu-links',
            'depth'           => 1,
        ) )
        ?>
                <div id="feeds-container">

                    <?php

		/* Start the Loop */
        echo do_shortcode('[custom-facebook-feed]');
		?>
            </div>
    </main><!-- #main -->
</section><!-- #primary -->


<?php //get_sidebar();
get_footer(); ?>
