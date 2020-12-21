<?php
/*
 * The sidebar containing the main widget area
 */

if ( ! is_active_sidebar( 'sidebar-11' ) ) :
    return;?>
<?php endif;?>
<?php
if ( is_active_sidebar( 'sidebar-11' ) ) : ?>
	<aside id="head-right-sidebar" class="sidebar  widget-area" role="complementary">
        <div class="head" style="">
            <?php        if (is_user_logged_in()): ?>

                <input id="vip" type="checkbox" class="checkbox ui-stoggle--hidden">
            <?php
            endif; ?>
            <div id="mail-block">
                <div class="btn-group">
                    <a class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fal fa-envelope fa-2x"></i>
                    </a>
                    <div class="dropdown-menu">
                        <div id="panel-mail">
                            <div style="padding: 12px; display: flex; flex-flow: column;">
                                <?php if (is_user_logged_in()): ?>
                                    <label for="" style="display: flex; flex-flow: column">
                                        <a><b>Почта нет новых писем</b></a>
                                        <a href="mailto:info@bizov.com.ua"><b>Написать письмо</b></a>
                                    </label>
                                <?php else: ?>
                                    <label style="padding: 12px; display: flex; flex-flow: column;">
                                        <a href="#">Почта</a> &nbsp;&nbsp;&nbsp;<a href="#">Завести почту</a>
                                        <a href="#" class="btn btn-default">Войти в почту</a>
                                    </label>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if (is_user_logged_in()):
            ?>
            <div id="user-city" style="margin: 17px 7px">
                <a href="" target="_blank" value="Kiev">
                    <i class="fas fa2x fa-map-marker-alt"></i></a>
            </div>
        <?php
        endif; ?>
		<?php dynamic_sidebar( 'sidebar-11' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>

