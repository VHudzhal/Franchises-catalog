<?php
/**
 * The header for our theme
 */
?>
<!--
 _________
|    __   \             ___________        __________     ____                ____
|   |  |  |    ___     |______    /       /          \    \   \              /   /
|   |__|  |   |   |          /   /       /    ____    \    \   \            /   /
|   ______/   |   |         /   /       /    /    \    \    \   \          /   /
|  |______    |   |        /   /       /    /      \    \    \   \        /   /
|    __   \   |   |       /   /        \    \      /    /     \   \      /   /
|   |  |  |   |   |      /   /          \    \____/    /       \   \    /   /
|   |__|  |   |   |     /   /_____       \            /         \   \__/   /
|_________/   |___|    /__________|       \__________/           \________/
-->
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154961319-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-154961319-1');
    </script>


    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="Kq6cDXKHTJwLtde54hDjbDx-awFi5EBT7ajPh2FrjoE"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!--    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/95b20d39001493ff89e66f1b5/b47f110f7caf87c0e6d9b2bc4.js");</script>-->
    <!--    <script src="https://api-maps.yandex.ru/2.1/?apikey=52fbc99f-264d-4c1f-84eb-7ce58dd89e69&lang=ru_RU" type="text/javascript"></script>-->
    <style type="text/css">
        ul#top-head-menu > li {
            padding: 2px 5px;
            margin-right: 5px;

        }

        div.menu-head-menu-container a {
            padding: 2px 5px;
        }

        div#mail-block {
            margin: -5px 10px;
            position: relative;
        }

        div#panel-mail {
            /*display: none;*/
            /*background: #FFFFFF;*/
            /*height: 50px;*/
            width: max-content;
            width: -moz-max-content;

            /*border: 1px solid aliceblue;*/
            position: relative;
            /*margin-top: 35px;*/
            /*right: -4%;*/
            /*box-shadow: 0 1px 10px rgba(0, 0, 0, 0.9) inset;*/
            padding: 10px;
        }

        p.mail a:focus {
            outline: none;
        }

        .dropdown-toggle::after {
            display: none !important;
        }

        div.dropdown-menu {
            /*font-size: 12px!important;*/
            margin-left: -6em !important;
        }
        div#cart nav li{
            list-style-type: none;
            width: max-content;
            float: right;
        }
        div.nav-cart{
            display: none;
            visibility: hidden;
        }
    </style>
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '318528666067591');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=318528666067591&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script type="text/javascript">
    // FB.getLoginStatus(function (response) {
    //     statusChangeCallback(response);
    // });
</script>
<!--begin header-->
<header id="header">
<!--    <div class="btn-group" id="fr-cat-menu-mob">-->
<!--        --><?// if (!is_front_page()): ?>
<!--        <a href="#" class="toggle-nav">|||</a>-->
<?php //endif;?>
<!--    </div>-->
<section id="primary-navigation">
    <? if (!is_front_page()): ?>
        <div class="site-branding" style="padding-left: 15px; padding-top: 6px">
            <?php if (has_custom_logo()):

                $custom_logo_id = get_theme_mod('custom_logo');
                $logo_img_array = wp_get_attachment_image_src($custom_logo_id, 'full');
                $logo_img_src = esc_url($logo_img_array[0]); ?>

                <a href="<?php echo esc_url(get_home_url()); ?>" rel="home"
                   title="<?php echo esc_attr(get_bloginfo('title')); ?>"><img class="site-logo"
                                                                               src="<?php echo esc_url($logo_img_src); ?>"
                                                                               alt="<?php echo esc_attr(get_bloginfo('title')); ?>"></a>
            <?php else: ?>

                <a href="<?php echo esc_url(get_home_url()); ?>"
                   class="h4 site-title"><?php echo esc_html(get_bloginfo('name')); ?></a>
                <p class="site-description"><?php echo esc_html(get_bloginfo('description')); ?></p>

            <?php endif; ?>
        </div>
    <?php endif;
    ?>

<?php get_sidebar('head-top-right');?>
</section>
    <section id="bottom-navigation">
        <?php get_sidebar('head-left');?>
        <div id="cart">
            <?php
            get_sidebar('head-right');
            ?>
        </div>
    </section>

</header>
<!--end header-->
