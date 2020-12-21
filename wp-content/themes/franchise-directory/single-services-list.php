<?php
get_header();
$fr_obj = New FranchiseClass();

?>
<?php
$group_basic = array(
    'category_name' => 'services-list',
'posts_per_page' =>  17,
'orderby' => 'post__in',
    'post__in' => array(805,777,740,823,842,857,866,892,717,746,948,884,957,965,973,983,990),

);

$basic_posts = new WP_Query( $group_basic );?>
<section class="services-block" style="">
    <?php get_sidebar('left-main');?>
    <div class="service-content" style="">
        <div style="background-color: white; display: flex; flex-flow: row; justify-content: space-between">

            <div style="display: flex; flex-flow: column; flex: 0 0 70%">
                <h3 id="service-title" style=""><b>Реклама уже зарегистрированной франшизы на портале</b></h3>
                <h5>Выберите подходящее для себя предложение</h5>
            </div>
            <div style="background-color: lightgrey; padding: 5px 15px;display: flex; width: 26%; margin-right: 40px">
                <a style="background-color: white; border-radius: 100px; padding: 13px 16px; color: black; width: 60px; height: 60px; margin-right: 15px" href="http://bizov.com.ua/wp-content/uploads/2019/10/Уильямс-Б.-Дэмстра-Д.-Стэрн-Х.-WordPress-для-профессионалов-Для-профессионалов-2014.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-2x"></i></a>
                <a href="http://bizov.com.ua/wp-content/uploads/2019/10/Уильямс-Б.-Дэмстра-Д.-Стэрн-Х.-WordPress-для-профессионалов-Для-профессионалов-2014.pdf" target="_blank">Скачать комерческое предложение</a>
            </div>
        </div>
        <div class="services-grid-block">

<!--            <ul class="block-content">-->
                    <div class="services-list">
                        <?php if ( $basic_posts->have_posts() ) :

                            while ( $basic_posts->have_posts() ) :
                                $basic_posts->the_post();
                                ?>

                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <?php
//                                    if ( has_post_thumbnail() ) :
                                        the_post_thumbnail('150');
//                                    endif;
                                    ?>
                                    <div class="entry-content" style="">
                                        <div class="entry-header">
                                            <a href="<?php the_permalink();?>" class="h5"><?php the_title();?></a>
                                        </div>
                                        <div class="entry-text" style="">
                <span class="service-title">				<?php the_field('service_title'); ?>
</span>
                                            <span class="service-period">

                                    <?php the_field('service_price');?>
                                    <?php echo '<b>/</b>';?>
                                    <?php the_field('period');?>
                </span>
                                        </div>
                                    </div>
                                </article>
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
<!--            </ul>-->
        </div>
    </div>
</section>
