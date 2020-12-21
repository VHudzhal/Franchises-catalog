<?php
/*
 * Template: Franchise Catalog
 * The template for displaying all pages
 */

get_header();

$fr_obj = New FranchiseClass();
?>
<style type="text/css">

    .post-list .post-featuredImage .featImg{
        height: auto;
        min-height: 170px;
        width: 100%;
    }
    </style>

<section class="fr-catalog">
<?php
get_sidebar('left-main');

        ?>

    <div id="primary" class="content-area">
        <div class="header-mob"><span id="head-title"><?php the_title()?></span></div>

        <?php
        $custom_loop = array(
            'post_type' => 'franchises',
            'posts_per_page' => -1
        );
        $franchises = new WP_Query( $custom_loop );
        $count  = $franchises->found_posts;
        ?>
        <span id="fr-title">
    <label for="">Купить франшизу в каталоге Бизов</label>
    <h1><?php echo $count;
        //        echo pluralForm($count, 'предложение', 'предложения', 'предложений') ."<br/>"
        ?> &nbsp; предложений по франчайзингу</h1>
   </span>
        <div class="navigation">
            <button href="#" class="category-toggle-nav btn btn-default"><i class="fa "></i> Категории франшиз: <i class="fa fa-angle-down"></i></button>

            <?php get_sidebar('sidebar-1');?>

            <nav id="top-navigation" class="top-navigation" role="navigation">

                <?php
                wp_nav_menu( array(
                    'container'       => 'div',
                    'theme_location'  => 'catalog',
                    'menu_id'         => '',
                    'menu_class'	  => 'nav-pages-link',
                    'depth'           => 1,
                ) );
                ?>

            </nav>
        </div>

    <main id="main" class="site-main franchises-list">
        <div class="articles-list">

        <ul class="clearfix">
		<?php

        /* Start the Loop */
        if ($franchises->have_posts()):
        while ($franchises->have_posts()) : $franchises->the_post();?>
<li>
            <article id="post-<?php the_ID(); ?>" <?php post_class('company-post'); ?> style="margin-bottom: 20px; border-bottom: 1px solid black; padding: 20px 0" >
            <div class="entry-header">
                <div class="entry-title">
                    <a href="<?php the_permalink();?>"> <?php the_title('<h5>','</h5>');?></a>
                </div>
            </div>

            <div class="company-excerpt" style="display: flex; flex-flow: row; justify-content: space-between; align-items: flex-end; ">
                <div class="entry-thumbnail" style="">
<!--                    <a href="--><?php //the_permalink();?><!--"><img alt="--><?php //the_title_attribute();?><!--" width="160px" height="120px" src="--><?php //echo get_field( 'image' )['url']; ?><!--"/></a>-->

                    <?php
                    if (has_post_thumbnail()) {
                         $post_medium_img = $fr_obj->get_thumbnail(get_the_ID(), 'medium');
                    $post_full_img = $fr_obj->get_thumbnail(get_the_ID(), 'full'); ?>

<!--                    <img style="visibility: visible" width="" src="--><?php //echo esc_url($post_medium_img);?><!--"  data-src="--><?php //echo esc_url($post_full_img);?><!--" class="fr_lazyload" alt="--><?php //the_title_attribute();?><!--">-->
                 <?php   }
                    else {
                        echo '<img src="' . get_bloginfo('template_directory') . '/imgs/placeholder.png' . '" width="300" height="200" alt="thumbnail" />';
                    }
                   ?>
                </div>
                <div>

                    <?php echo '<span style="font-size: 12px">'.the_excerpt().'</span>'; ?>
                </div>
            </div>
            </article>
</li>
        <?php
            wp_reset_postdata();
        endwhile;
        endif;
//        echo do_shortcode('[px_filter id="hzgtunkrzjqkhvl_1" post_type="franchises" featured_label="price__pxid_jyagxggvfilipxj_0"]');
        if ( function_exists( 'pgntn_display_pagination' ) ) pgntn_display_pagination( 'multipage' );
        wp_reset_query();

        ?>
</ul>
        </div>
	</main><!-- #main -->
</div><!-- #primary -->
</section>

<?php get_footer(); ?>
