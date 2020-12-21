<?php
get_header();
$fr_obj = New FranchiseClass();

?>
<?php
$group_premium = array(
    'category_name' => 'services-list',
'posts_per_page' =>  13,
'orderby' => 'post__in',
    'post__in' => array(665,884,717,1947,842,1970,948,833,1958,777,1950,740,850),

);
$group_optimum = array(
    'category_name' => 'services-list',
'posts_per_page' =>  10,
'orderby' => 'post__in',
    'post__in' => array(665,884,717,1947,842,1970,948,833,1958,777),

);
$group_basic = array(
    'category_name' => 'services-list',
'posts_per_page' =>  7,
'orderby' => 'post__in',
    'post__in' => array(665,884,717,1947,842,1970,948),

);

$premium_posts = new WP_Query( $group_premium);
$optimum_posts = new WP_Query( $group_optimum);
$basic_posts = new WP_Query( $group_basic);
?>
<style type="text/css">
    div.breadcrumbs i:first-child{
        display: none;
    }
</style>

    <div class="service-content" style="">
            <?php
            if (function_exists('dimox_breadcrumbs'))
                dimox_breadcrumbs();
            ?>
        <div class="services-header" style="background-color: white; display: flex; flex-flow: row; justify-content: space-between; margin-bottom: 50px">

            <div id="service-packet-name" style="display: flex; flex-flow: column; flex: 0 0 70%">
                <h3 id="service-title" style=""></h3>
            </div>
            <div id="service-packet-file" style="background-color: lightgrey; padding: 5px 15px;display: flex; width: 26%; margin-right: 40px;">
                <a style="background-color: white; border-radius: 100px; padding: 13px 16px; color: black; width: 60px; height: 60px; margin-right: 15px" href="http://bizov.com.ua/wp-content/uploads/2019/10/Уильямс-Б.-Дэмстра-Д.-Стэрн-Х.-WordPress-для-профессионалов-Для-профессионалов-2014.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-2x"></i></a>
                <a href="http://bizov.com.ua/wp-content/uploads/2019/10/Уильямс-Б.-Дэмстра-Д.-Стэрн-Х.-WordPress-для-профессионалов-Для-профессионалов-2014.pdf" target="_blank">Скачать комерческое предложение</a>
            </div>
        </div>
        <div class="services-grid-block">
            <ul class="tab-header">
                <li class="tab-header__item js-tab-trigger active" data-tab="1">Пакет «"ПРЕМИУМ"»</li>
                <li class="tab-header__item js-tab-trigger" data-tab="2">Пакет «"ОПТИМУМ"»</li>
                <li class="tab-header__item js-tab-trigger" data-tab="3">Пакет «"БАЗОВЫЙ"»</li>
            </ul>
            <ul class="tab-content block-content">
                <li class="tab-content__item js-tab-content active" data-tab="1">
                <div class="services-list">
                        <?php if ( $premium_posts->have_posts() ) :

                            while ( $premium_posts->have_posts() ) :
                                $premium_posts->the_post();
                                ?>

                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <?php
                                        the_post_thumbnail('150');
                                    ?>
                                    <div class="entry-content" style="">
                                        <div class="entry-header">
                                            <a href="<?php the_permalink();?>" class="h5"><?php the_title();?></a>
                                        </div>
                                        <div class="entry-text" style="">
                <span class="service-title">				<?php the_field('service_title'); ?>
</span>
                                            <span class="service-period">
                                    <?php the_field('full_period_prem');?>
                </span>
                                        </div>
                                    </div>
                                </article>
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </li>
                <li class="tab-content__item js-tab-content" data-tab="2">
                <div class="services-list">
                        <?php if ( $optimum_posts->have_posts() ) :

                            while ( $optimum_posts->have_posts() ) :
                                $optimum_posts->the_post();
                                ?>

                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <?php
                                        the_post_thumbnail('150');
                                    ?>
                                    <div class="entry-content" style="">
                                        <div class="entry-header">
                                            <a href="<?php the_permalink();?>" class="h5"><?php the_title();?></a>
                                        </div>
                                        <div class="entry-text" style="">
                <span class="service-title">				<?php the_field('service_title'); ?>
</span>
                                            <span class="service-period">
                                    <?php the_field('full_period_opt');?>
                </span>
                                        </div>
                                    </div>
                                </article>
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </li>
                <li class="tab-content__item js-tab-content" data-tab="3">
                <div class="services-list">
                        <?php if ( $basic_posts->have_posts() ) :

                            while ( $basic_posts->have_posts() ) :
                                $basic_posts->the_post();
                                ?>

                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <?php
                                        the_post_thumbnail('150');
                                    ?>
                                    <div class="entry-content" style="">
                                        <div class="entry-header">
                                            <a href="<?php the_permalink();?>" class="h5"><?php the_title();?></a>
                                        </div>
                                        <div class="entry-text" style="">
                <span class="service-title">				<?php the_field('service_title'); ?>
</span>
                                            <span class="service-period">
                                    <?php the_field('full_period_bas');?>
                </span>
                                        </div>
                                    </div>
                                </article>
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
