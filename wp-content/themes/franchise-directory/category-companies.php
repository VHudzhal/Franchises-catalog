<?php
get_header();
$fr_obj = New FranchiseClass();
$args = array('post_type' => 'companies',
    'posts_per_page' => -1,
    'taxonomy' => 'company_categories');
$comapny = new WP_Query($args);
query_posts('category_name=companies&posts_per_page=-1');
?>
<section class="companies-block" style="">
    <?php get_sidebar('left-main');?>
    <div  class="companies-list-content " style="width: 100%">
        <div class="section-header">
            <h6><?php the_archive_title();?></h6>
        </div>
        <div class="breadcrumbs" typeof="breadcrumbList" vocab="http://schema.org">
            <?php
            if (function_exists('bcn_display'))
                bcn_display();
            ?>
        </div>
            <main class="companies-main">
                <div class="header-mob"><span id="head-title"><?php the_title()?></span></div>

                <?php
        if (have_posts()) :

            while (have_posts()) : the_post();
                ?>
                <div id="<?php the_ID();?>" class="company company-<?php the_ID();?> row <?php post_class();?>">
                    <div class="left-company col-md-6">
                    <div class="entry-header">
                        <div class="entry-title">
                            <a href="<?php the_permalink();?>"> <?php the_title('<h3>','</h3>');?></a>
                        </div>
                    </div>
                    <div class="entry-thumbnail" style="">

                        <?php
                        $post_medium_img = $fr_obj->get_thumbnail(get_the_ID(), 'medium');
                        $post_full_img = $fr_obj->get_thumbnail(get_the_ID(), 'full');?>
                        <img style="visibility: visible" width="150px" src="<?php echo esc_url($post_medium_img);?>"  data-src="<?php echo esc_url($post_full_img);?>" class="fr_lazyload" alt="<?php the_title_attribute();?>">
                    </div>
                    </div>
                    <div class="col-md-2">
                        <?php get_the_category()?>
                    </div>
                    <div class="company-contacts" hidden>            <?php the_field('contacts'); ?></div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else :
            get_template_part( 'no-results' );
        endif;

        ?>

            </main>
    </div>
</section>
<?php get_footer();?>
