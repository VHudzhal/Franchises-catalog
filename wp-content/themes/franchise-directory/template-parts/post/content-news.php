<?php
$fr_obj = New FranchiseClass();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('consult-post'); ?> style="">
<div class="public-content" style="">
    <header class="entry-header">
        <div class="entry-title">
           <a href="<?php the_permalink();?>" rel="nofollow"> <?php the_title('<h3>','</h3>');?></a>
        </div>
    </header>
    <hr>
    <div class="entry-thumbnail" style="">
    </div>

    <div class="entry-content">
        <?php the_content('more'); ?>
    </div>

</div>

</article>
