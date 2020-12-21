<?php
/*
 * The sidebar containing the main widget area
 */
 if (is_active_sidebar( 'sidebar-8' ) ):
?>
<aside class="widget" id="left-main-sidebar">

    <?php dynamic_sidebar( 'sidebar-8' );
    ?>
    <style type="text/css">
        a#banner div{
            background:  url(http://bizov.com.ua/wp-content/uploads/2020/02/БЛЕЭСТ-банер-360х360.gif);
            background-repeat: no-repeat;
            background-position: top;
            background-size: contain;
            display: flex;
            width: auto;
            height: 100%;
            min-height: 230px;
        }
    </style>
    <a id="banner" href="http://map.cn.ua/info/7045/"   redirect><div></div></a>
</aside>
<?php endif; ?>
