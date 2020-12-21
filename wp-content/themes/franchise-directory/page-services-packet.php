<?php get_header();
?>
<!--<div style="background-color: white">-->
<?php
//if (function_exists('dimox_breadcrumbs'))
//    dimox_breadcrumbs();
//?>
    <section class="services-block" style="">
<?php get_sidebar('left-main');?>
    <?php get_template_part('single', 'services-packet-grid');?>
    </section>
<?php
get_footer();