<?php get_header(); ?>
<div class="breadcrumbs" typeof="breadcrumbList" vocab="http://schema.org"><?php
    if (function_exists('bcn_display'))
        bcn_display();
    ?>
</div>
<?php get_sidebar('left-main');?>
<div class="prices-table">
    <?php
    echo do_shortcode("[supsystic-price-table id='12']");
    ?>
</div>
