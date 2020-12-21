<?php
/*
 * The template for displaying all pages
 */

get_header();

$fr_obj = New FranchiseClass();
?>
<!--<div class="desc-info-block" style="width: max-content; position: absolute; right: 30px; top: 15px; ">-->
<!--    --><?php //if (is_user_logged_in()):
//        echo '<div style="padding: 12px; box-shadow: 0 0 2px 0 rgba(0,0,0,.1), 0 2px 6px 0 rgba(0,0,0,.1);background-color: white; display: flex; flex-flow: column;">
//            <label for=""><b>';
//        global $current_user;
//        get_currentuserinfo();
//        echo $current_user->user_firstname . '   ' . $current_user->user_lastname . "\n" . '</b></label>';
//        echo do_shortcode('[is login][user image=avatar size=50][/is]');
//echo '<a>Почта  нет новых писем</a>';
//echo '<a href="mailto:info@bizov.com.ua">Написать письмо</a>';
//        echo '</div>';
//    else:
//        echo '<div style="padding: 12px; box-shadow: 0 0 2px 0 rgba(0,0,0,.1), 0 2px 6px 0 rgba(0,0,0,.1);background-color: white; display: flex; flex-flow: column;">
//<div><a href="#">Почта</a> &nbsp;&nbsp;&nbsp;<a href="#">Завести почту</a></div>
//<div><a href="#" class="btn btn-default">Войти в почту</a></div>
//</div>';
//    endif;
//
//    ?>
<!--</div>-->

<!--Main block begin-->
<main id="content" class="row">

    <style type="text/css">
        /* jquery классы */
        .active {
            color: red;
        }
        div.mo-openid-app-icons{
            display: none!important;
        }
        a.elementor-post__thumbnail__link{
            position: absolute!important;
            z-index: 0;
        }
        div.elementor-post__text {
            z-index: 1;
            position: relative;

        }
        div.franchises-grid img{
            height: 100% !important;
        }
        div.info{
            margin-right: 25px;
        }
        ul.news{
            list-style-type: none;
        }
        ul>li{
            margin-bottom: 7px;
        }
    </style>

    <div class="wrapper-front col">

        <div id="news-line" class="container">

            <?php
            $args = array(
                    'cat' => '104',
                'order' => 'DESC',
                'posts_per_page' => 5,
                );
            query_posts($args);
			//echo do_shortcode('[custom-facebook-feed]');
            if(have_posts()):
    while (have_posts()): the_post();?>
        <a href="<?php the_permalink()?>" redirect>
            <h6 class="block-item__head"><?php the_title(); ?></h6>
        </a>
    <?php
            endwhile;
            wp_reset_query();
            endif;
            ?>
        </div>
<div class="container">
        <section id="main-content" class="content-area row">
            <div id="logo" class="col-home-logo " style="">
                <div class="home-logo" style="">
                    <a href="http://bizov.com.ua/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/bizov-logo.png" alt="Bizov"
                             width="150px">
                    </a>
                </div>
            </div>
            <div class="search-block" style="width: 100%;">

                <?php get_sidebar('main'); ?>

                <?php get_search_form() ?>
                <?php
                wp_nav_menu(array(
                    'container' => 'nav',
                    'theme_location' => 'main-menu-mob',
                    'menu_id' => 'main-mob',
                    'menu_class' => 'nav-main-mob',
                    'depth' => 1,
                ));
                ?>
            </div>
            
        </section>
</div>
        <div class="container">

        <section class="info-section">
                            <div id="weather" class="info" style="flex: 0 0 auto;">
                                <label class="info-title">Погода</label><br>

<!--                                <a href="https://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*https://yandex.com/weather/143" target="_blank"><img src="https://info.weather.yandex.net/143/3_white.en.png?domain=us" border="0" alt="Yandex.Weather"/><img width="1" height="1" src="https://clck.yandex.ru/click/dtype=stred/pid=7/cid=1227/*https://img.yandex.ru/i/pix.gif" alt="" border="0"/></a>-->
                                <link rel="stylesheet" type="text/css" href="https://www.gismeteo.ua/assets/flat-ui/legacy/css/informer.min.css">
                                <div id="gsInformerID-u2UVL5MpSmY5dI" class="gsInformer" style="width:126px;height:168px">
                                    <div class="gsIContent">
                                        <div id="cityLink">
                                            <a href="https://www.gismeteo.ua/ua/weather-kyiv-4944/" target="_blank" title="Погода у Києві">
                                                <img src="https://www.gismeteo.ua/assets/flat-ui/img/gisloader.svg" width="24" height="24" alt="Погода у Києві">
                                            </a>
                                        </div>
                                        <div class="gsLinks">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="leftCol">
                                                            <a href="https://www.gismeteo.ua/ua/" target="_blank" title="Погода">
                                                                <img alt="Погода" src="https://www.gismeteo.ua/assets/flat-ui/img/logo-mini2.png" align="middle" border="0" width="11" height="16" />
                                                                <img src="https://www.gismeteo.ua/assets/flat-ui/img/informer/gismeteo.svg" border="0" align="middle" style="left: 5px; top:1px">
                                                            </a>
                                                        </div>
                                                        <div class="rightCol">
                                                            <a href="https://www.gismeteo.ua/ua/weather-kyiv-4944/2-weeks/" target="_blank" title="Погода у Києві на 2 тижні">
                                                                <img src="https://www.gismeteo.ua/assets/flat-ui/img/informer/forecast-2weeks.ua.svg" border="0" align="middle" style="top:auto" alt="Погода у Києві на 2 тижні">
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <script async src="https://www.gismeteo.ua/api/informer/getinformer/?hash=u2UVL5MpSmY5dI"></script>
                            </div>

                <div id="currency" class="info" style="">
                    <!--                <label for="">Валюты</label>-->
                    <div>
                        <!--                    <iframe src="https://ru.widgets.investing.com/live-currency-cross-rates?theme=darkTheme&roundedCorners=true&pairs=1,1073359,1073360,1073358,1620,1691,1709,53087,10032,940802,10064,940809,993168,53085,2124,962711,2208" width="100%" height="362" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Предоставлено <a href="https://ru.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=LIVE_CURRENCY_X_RATES&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">Investing.com</a></div>                </div>-->
                        <!-- Minfin.com.ua currency informer 245x120 yellow-->
                        <span>Украинская Гривна</span>
                        <div id="minfin-informer-m1Fn-currency" style="display: flex; justify-content: center">Загружаем
                            <a href="https://minfin.com.ua/currency/"
                               target="_blank">курсы валют</a> от
                            minfin.com.ua</a></div>
                        <script>var iframe = '<ifra' + 'me width="304" height="120" fram' + 'eborder="0" src="https://informer.minfin.com.ua/gen/course/?color=yellow" vspace="0" scrolling="no" hspace="0" allowtransparency="true"style="width:304px;height:120px;ove' + 'rflow:hidden;"></iframe>';
                            var cl = 'minfin-informer-m1Fn-currency';
                            document.getElementById(cl).innerHTML = iframe; </script>
                        <noscript><img src="https://informer.minfin.com.ua/gen/img.png" width="1" height="1"
                                       alt="minfin.com.ua: курсы валют" title="Курс валют" border="0"/></noscript>
                        <!-- Minfin.com.ua currency informer 245x120 yellow-->


                    </div>
                </div>
                <div class="info">
                    <label>Драгоценные металы</label>

                    <!--  FOREXPF.RU - Драгоценные металлы start -->
                    <div id="metals"
                         style="background:; width:186px; height:90px; border: 1px solid #808080; color:#84057A; text-decoration:none; text-align:left; top; overflow: hidden; font-style:normal; font-variant:normal; font-weight:normal; font-size:9px; font-family:Verdana, sans-serif;">
                        <a href="http://www.profinance.ru/" title="Драгоценные металлы" target="_blank"
                           style="line-height:15px;color:#000000;text-decoration:none;padding-left: 35px;">Драгоценные
                            металлы</a><br><a href="http://www.profinance.ru/chart/gold/" title="Золото" target="_blank"
                                              style="line-height:15px;color:#000000;text-decoration:none;padding-left: 30px;">Золото</a><br><a
                                href="http://www.profinance.ru/chart/palladium/" title="Палладий" target="_blank"
                                style="line-height:14px;color:#000000;text-decoration:none;padding-left: 23px;">Палладий</a><br><a
                                href="http://www.profinance.ru/chart/platinum/" title="Платина" target="_blank"
                                style="line-height:15px;color:#000000;text-decoration:none;padding-left: 25px;">Платина</a><br>
                        <a href="http://www.profinance.ru/chart/silver/" title="серебро" target="_blank"
                           style="line-height:14px;color:#000000;text-decoration:none;padding-left: 26px;">Серебро</a><br>
                    </div>
                    <script src="https://informers.forexpf.ru/js/metals.js"></script>
                    <!--  FOREXPF.RU - Драгоценные металлы end -->
                </div>
<!--                <div class="info">-->
                    <!--  FOREXPF.RU - Цены на нефть start -->
<!--                    <div id="brent"-->
<!--                         style="background:; width:186px; height:61px; border: 1px solid #808080; color:#84057A; text-decoration:none; text-align:left; top; overflow: hidden; font-style:normal; font-variant:normal; font-weight:normal; font-size:9px; font-family:Verdana, sans-serif;">-->
<!--                        <a href="http://www.profinance.ru/" title="Цены на нефть" target="_blank"-->
<!--                           style="line-height:14px;color:#000000;text-decoration:none;padding-left: 50px;">Цены на-->
<!--                            нефть</a><br><a href="http://www.profinance.ru/chart/brent/" title="Brent" target="_blank"-->
<!--                                            style="line-height:15px;color:#000000;text-decoration:none;padding-left: 33px;">Brent</a><a-->
<!--                                href="http://www.profinance.ru/chart/lightsweet/" title="Light Sweet" target="_blank"-->
<!--                                style="line-height:15px;color:#000000;text-decoration:none;padding-left: 63px;">Light</a>-->
<!--                    </div>-->
<!--                    <script src="https://informers.forexpf.ru/js/brent-light.js"></script>-->
                    <!--  FOREXPF.RU - Цены на нефть end -->
<!--                </div>-->
        </section>
        </div>
        <div style="margin: 0 auto">
        <div class="container">
            <table border="1" cellpadding="0" cellspacing="10" bgcolor="#FBFBFB" width="100%"
                   style="border-collapse:collapse;border-color:#D7D7D7;">
                <tr>
                    <td align="center" colspan="2"><a href="http://www.profinance.ru" id="forexpf_forexfond"
                                                      style="font-size: 13px; margin-bottom: 5px; font-weight:bold">Рынок
                            Forex | Фондовый рынок</a></td>
                </tr>
                <tr valign="top">
                    <td width="50%">
                        <script charset="utf-8" src="https://informers.forexpf.ru/export/news.js"></script>
                    </td>
                    <td width="50%">
                        <script charset="utf-8" src="https://informers.forexpf.ru/export/fond.js"></script>
                    </td>
                </tr>
            </table>
        </div>
        <div class="container">
            <table border="1" cellpadding="0" cellspacing="10" bgcolor="#FBFBFB" width="100%"
                   style="border-collapse:collapse;border-color:#D7D7D7;">
                <tr>
                    <td><a href="http://www.profinance.ru" id="forexpf_economic"
                           style="font-size: 13px; margin-bottom: 5px; font-weight:bold">Новости экономики</a><br>
                        <script src="https://informers.forexpf.ru/export/economic.js"></script>
                    </td>
                </tr>
            </table>
        </div>
        </div>
<div class="franchises-grid">
    <?php
    the_content();
?>
</div>
</div>

</main>
<?php get_footer(); ?>
