<?php
/**
 * The template for displaying the footer
 */

wp_footer(); ?>
<footer class="footer fixed_block_stop">
    <section class="foot-block container">
        <div id="top-footer">
            <div id="left-foot" class="foot">
                <h5 class="foot-title">Разделы</h5>
                <?php wp_nav_menu(array(
                    'container' => 'div',
                    'theme_location' => 'foot-left',
                    'menu_id' => 'foot-left-menu',
                    'menu_class' => 'nav-foot-link',
                    'depth' => 1,
                ));
                ?>
            </div>
            <div id="right-foot" class="foot">
                <h5 class="foot-title">Мой сайт</h5>
                <?php wp_nav_menu(array(
                    'container' => 'div',
                    'theme_location' => 'foot-right',
                    'menu_id' => 'foot-left-menu',
                    'menu_class' => 'nav-foot-link',
                    'depth' => 1,
                ));
                ?>
                <button class="btn btn-success" data-toggle="modal" data-target="#footerModal">Служба поддержки</button>
                <?php if (function_exists('users_online')): ?>
                    <p>Пользователей онлайн: <div id="useronline-count"><?php users_online(); ?></div></p>
                <?php endif; ?>
                <div class="modal fade" id="footerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document" style="max-width: 70%; top: 20%; padding: 20px">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><strong>Служба поддержки</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <h5 style="padding: 5px 17px">Выберите удобный для себя способ связи</h5>

                            <div class="modal-body">
                                <section class="contacts-group">
                                    <div class="contact-block" id="free-calls">
                                        <div class="col">
                                            <strong>8 800 123-45-67</strong>
                                            <h6>Для бесплатных звонков</h6>
                                        </div>
                                    </div>
                                    <div class="contact-block" id="inter-calls">
                                        <div class="col">
                                            <strong>+38 (012) 345-67-89</strong>
                                            <h6>Для международных звонков</h6>
                                        </div>
                                    </div>
                                </section>
                                <section class="contacts-group">
                                    <div class="contact-block" id="graphic">
                                        <div>
                                            <h5><strong>9:00 &nbsp; - &nbsp; 18:00 </strong></h5>
                                            <h6>Понедельник - Пятница</h6>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="" class="foot">
                <h5 class="foot-title">Соцсети</h5>
                <?php wp_nav_menu(array(
                    'container' => 'div',
                    'theme_location' => 'foot-soc',
                    'menu_id' => 'foot-left-menu',
                    'menu_class' => 'nav-foot-link',
                    'depth' => 1,
                ));
                ?>
            </div>

        </div>
    </section>
</footer>

<script>
    (function (w, d, u) {
        var s = d.createElement('script');
        s.async = true;
        s.src = u + '?' + (Date.now() / 60000 | 0);
        var h = d.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s, h);
    })(window, document, 'https://cdn.bitrix24.ua/b12323311/crm/site_button/loader_2_s0uine.js');
</script>

<script id="bx24_form_button" data-skip-moving="true">
    (function (w, d, u, b) {
        w['Bitrix24FormObject'] = b;
        w[b] = w[b] || function () {
            arguments[0].ref = u;
            (w[b].forms = w[b].forms || []).push(arguments[0])
        };
        if (w[b]['forms']) return;
        var s = d.createElement('script');
        s.async = 1;
        s.src = u + '?' + (1 * new Date());
        var h = d.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s, h);
    })(window, document, 'https://b24-85edjg.bitrix24.ua/bitrix/js/crm/form_loader.js', 'b24form');

    b24form({"id": "8", "lang": "ua", "sec": "he0633", "type": "button", "click": ""});
</script>
<!--<script>-->
<!--    window.fbAsyncInit = function() {-->
<!--        FB.init({-->
<!--            appId      : '{584429302364014}',-->
<!--            cookie     : true,-->
<!--            xfbml      : true,-->
<!--            version    : '{39df0bb88dee18c85551bf0d34731cb2}'-->
<!--        });-->
<!---->
<!--        FB.AppEvents.logPageView();-->
<!---->
<!--    };-->
<!---->
<!--    (function(d, s, id){-->
<!--        var js, fjs = d.getElementsByTagName(s)[0];-->
<!--        if (d.getElementById(id)) {return;}-->
<!--        js = d.createElement(s); js.id = id;-->
<!--        js.src = "https://connect.facebook.net/en_US/sdk.js";-->
<!--        fjs.parentNode.insertBefore(js, fjs);-->
<!--    }(document, 'script', 'facebook-jssdk'));-->
<!--</script>-->
<!--<script>-->
<!--    ymaps.ready(init);-->
<!--    function init() {-->
<!---->
<!--        var geolocation = ymaps.geolocation;-->
<!---->
<!--        ymaps.geolocation.get({-->
<!--            // Выставляем опцию для определения положения по ip-->
<!--            provider: 'yandex',-->
<!--            // Автоматически геокодируем полученный результат.-->
<!--            autoReverseGeocode: true-->
<!--        }).then(function (result) {-->
<!--            //данные, полученные в результате геокодирования объекта.-->
<!--            geodataRaw=result.geoObjects.get(0).properties.get('metaDataProperty');-->
<!--            var geodata = {};-->
<!--            //Страна-->
<!--            geodata.country=geodataRaw.GeocoderMetaData.AddressDetails.Country.CountryName;-->
<!--            //Регион-->
<!--            geodata.region=geodataRaw.GeocoderMetaData.AddressDetails.Country.AdministrativeArea.AdministrativeAreaName;-->
<!--            //Город-->
<!--            geodata.city=geodataRaw.GeocoderMetaData.AddressDetails.Country.AddressLine;-->
<!---->
<!--            //Тут уже можно использовать эти данные-->
<!--            //Например записать в cookie ( Используется плагин jquery.cookie )-->
<!--            $.cookie('cityName', geodata.city, { expires: 356,path: '/',});-->
<!--            return true;-->
<!--        });-->
<!--    }-->
<!---->
<!--    ymaps.ready(init);-->
<!---->
<!--    function init() {-->
<!--        // Создание карты.-->
<!--        // https://tech.yandex.ru/maps/doc/jsapi/2.1/dg/concepts/map-docpage/-->
<!--        var myMap = new ymaps.Map("map", {-->
<!--            // Координаты центра карты.-->
<!--            // Порядок по умолчнию: «широта, долгота».-->
<!--            center: [55.76, 37.64],-->
<!--            // Уровень масштабирования. Допустимые значения:-->
<!--            // от 0 (весь мир) до 19.-->
<!--            zoom: 12,-->
<!--            // Элементы управления-->
<!--            // https://tech.yandex.ru/maps/doc/jsapi/2.1/dg/concepts/controls/standard-docpage/-->
<!--            controls: [-->
<!---->
<!--                'zoomControl', // Ползунок масштаба-->
<!--                'rulerControl', // Линейка-->
<!--                'routeButtonControl', // Панель маршрутизации-->
<!--                'trafficControl', // Пробки-->
<!--                'typeSelector', // Переключатель слоев карты-->
<!--                'fullscreenControl', // Полноэкранный режим-->
<!---->
<!--                // Поисковая строка-->
<!--                new ymaps.control.SearchControl({-->
<!--                    options: {-->
<!--                        // вид - поисковая строка-->
<!--                        size: 'large',-->
<!--                        // Включим возможность искать не только топонимы, но и организации.-->
<!--                        provider: 'yandex#search'-->
<!--                    }-->
<!--                })-->
<!---->
<!--            ]-->
<!--        });-->
<!---->
<!--        // Добавление метки-->
<!--        // https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/Placemark-docpage/-->
<!--        var myPlacemark = new ymaps.Placemark([55.76, 37.64], {-->
<!--            // Хинт показывается при наведении мышкой на иконку метки.-->
<!--            hintContent: 'Содержимое всплывающей подсказки',-->
<!--            // Балун откроется при клике по метке.-->
<!--            balloonContent: 'Содержимое балуна'-->
<!--        });-->
<!---->
<!--        // После того как метка была создана, добавляем её на карту.-->
<!--        myMap.geoObjects.add(myPlacemark);-->
<!---->
<!--    }-->
<!--</script>-->
<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6AL5TEsQqnTIa-xpYm6hK2CK587giyqM&callback=initMap"-->
<!--        type="text/javascript"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
