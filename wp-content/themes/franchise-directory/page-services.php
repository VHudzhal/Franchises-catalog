<?php get_header(); ?>
<!--    <div class="breadcrumbs" typeof="breadcrumbList" vocab="http://schema.org">--><?php
//        if (function_exists('bcn_display'))
//            bcn_display();
//
//        ?>
<!--    </div>-->
<style>
section.services{
    height: 100%;
    min-height: 200px;
    display: flex;
}
</style>
    <section class="services" >
        <?php get_sidebar('left-main');?>
        <div style="padding-top: 70px">
<h1>Рекламные услуги для франчайзеров</h1>
        <div class="services-list">
            <a href="http://bizov.com.ua/services/new-fr/">
                <img src="<?php echo  get_template_directory_uri(); ?>/images/icon-new.png" alt="Новая франшиза" width="110px">
                Размещение франшизы на сайте
            </a>
            <a href="http://bizov.com.ua/services/exist-fr"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fr-existing.jpg" alt="" width="125px">
                Усиление рекламы на сайте
            </a>
        </div>
        </div>
    </section>

<?php get_footer() ?>
