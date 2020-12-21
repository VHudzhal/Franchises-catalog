<?php
/*
 * The template for displaying all pages
 */
get_header();
$fr_obj = New FranchiseClass();
$taxonomy = 'companies';
$args = array(
        'post_type' => 'company',
    'tax' =>  $taxonomy,
    'posts_per_page' => -1,
    'order' => 'ASC',
    );
$company = new WP_Query($args)
?>
<style type="text/css">
          .pagination{
  
  padding:20px;
    }
  
 .pagination a{
    display:inline-block;
    padding:0 10px;
    cursor:pointer;
     
 }
    .pagination .disabled{
      opacity:.3;
      pointer-events: none;
    cursor:not-allowed;
    }
    .pagination .current{
      background:#f3f3f3;
    }
</style>
<section id="primary" class="content-area company">
    <?php    get_sidebar('left-main');?>

    <main id="main" class="site-main container">
        <div class="header"><span id="head-title"><?php the_title()?></span></div>

<!--        <div class="section-header">-->
<!--            <h6>Компании</h6>-->
<!--        </div>-->
		<div id="pagin-list">
		<?php
        //		/* Start the Loop */
if($company->have_posts()):
		while ( $company->have_posts() ) :
			$company->the_post();
?>
<div class="company-block line-content" style="" >
    <div class="entry-header">
                <div class="entry-title">
                    <a href="<?php the_permalink();?>"> <?php the_title('<h5>','</h5>');?></a>
                </div>
            </div>

    <div class="company-excerpt" style="display: flex; flex-flow: row; justify-content: space-between; align-items: flex-end; ">
    <div class="entry-thumbnail" style="">
<?php       if ( has_post_thumbnail() ) {?>
			<div class="entry-thumbnail" style="flex: 0 0 auto; padding: 6px;">
                            <?php $post_medium_img = $fr_obj->get_thumbnail(get_the_ID(), 'small');
                            $post_full_img = $fr_obj->get_thumbnail(get_the_ID(), 'full');?>
                            <img class="thumb-img" style="visibility: visible" width="100%" height="100%" src="<?php echo esc_url($post_medium_img);?>"  data-src="<?php echo esc_url($post_full_img);?>" class="fr_lazyload" alt="<?php the_title_attribute();?>" style="max-width: 150px">
                        </div>
		 <?php
				}else{?>
		    <img class="none-img" width="150" height="150" src="<?php echo get_stylesheet_directory_uri();?>/images/none-image.png" alt="" style="max-width: 150px">
<?php	} ?>
    </div>
        <div>

            <?php //echo get_the_terms_list($post->ID, $taxonomy); ?>
        </div>
    </div>
    </div>
        <?php
		endwhile; // End of the loop.
    wp_reset_query();
endif;
        ?>
        </div>
    </main><!-- #main -->
</section><!-- #primary -->


<?php //get_sidebar();
get_footer(); ?>
