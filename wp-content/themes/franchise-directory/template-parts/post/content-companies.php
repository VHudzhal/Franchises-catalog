<?php
$fr_obj = New FranchiseClass();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('company-post'); ?> style="margin-bottom: 20px; border-bottom: 1px solid black; padding: 20px 0" >
        <div class="entry-header">
            <div class="entry-title">
                <a href="<?php the_permalink();?>"> <?php the_title('<h5>','</h5>');?></a>
            </div>
        </div>

        <div class="company-excerpt" style="display: flex; flex-flow: row; justify-content: space-between; align-items: flex-end; ">
            <div class="entry-thumbnail" style="">
                <?php
                $post_medium_img = $fr_obj->get_thumbnail(get_the_ID(), 'medium');
                $post_full_img = $fr_obj->get_thumbnail(get_the_ID(), 'full'); ?>

                <img style="visibility: visible" width="" src="<?php echo esc_url($post_medium_img);?>"  data-src="<?php echo esc_url($post_full_img);?>" class="fr_lazyload" alt="<?php the_title_attribute();?>">
            </div>
            <div>
                <?php echo '<span style="font-size: 12px">'.the_excerpt().'</span>'; ?>
            </div>
        </div>
</article>
