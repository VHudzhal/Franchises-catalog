jQuery.noConflict();
jQuery(document).ready(function($) {
    /*************************
     * First table
     * ******************************/
    $('div.ptsCol-1 div.ptsRows div.ptsCell:first-child').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">10 000 грн.</div>');
    },function () {
     $(this).text('1 год');

    });
    $('div.ptsCol-1 div.ptsRows div.ptsCell:nth-child(2)').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">20 000 грн.</div>');
    },function () {
     $(this).text('9 недель');

    });
    $('div.ptsCol-1 div.ptsRows div.ptsCell:nth-child(3)').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">30 000 грн.</div>');
    },function () {
     $(this).text('9 недель');
    });
    $('div.ptsCol-1 div.ptsRows div.ptsCell:nth-child(4)').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">19 000 грн.</div>');
    },function () {
     $(this).text('1 шт.');
    });
    $('div.ptsCol-1 div.ptsRows div.ptsCell:nth-child(5)').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">19 000 грн.</div>');
    },function () {
     $(this).text('100 шт.');
    });
    $('div.ptsCol-1 div.ptsRows div.ptsCell:nth-child(6)').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">19 000 грн.</div>');
    },function () {
     $(this).text('10 000 показов');
    });


        $('div.ptsCol-1 div.ptsRows div.ptsCell:nth-child(7)').hover(function () {
            $(this).css('padding', '3px');
            $(this).html('<div class="publ-price">19 000 грн.</div>');
    },function () {
     $(this).text('1 месяц');
    });

    $('div.ptsCol-1 div.ptsRows div.ptsCell:last-child').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">9 000 грн.</div>');
    },function () {
     $(this).text('1 шт.');
    });


    /*************************
 * Second table
 * ******************************/
    $('div.ptsCol-2 div.ptsRows div.ptsCell:first-child').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">10 000 грн.</div>');
    },function () {
     $(this).text('1 год');

    });
    $('div.ptsCol-2 div.ptsRows div.ptsCell:nth-child(2)').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">15 000 грн.</div>');
    },function () {
     $(this).text('6 недель');

    });
    $('div.ptsCol-2 div.ptsRows div.ptsCell:nth-child(3)').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">20 000 грн.</div>');
    },function () {
     $(this).text('6 недель');

    });
    $('div.ptsCol-2 div.ptsRows div.ptsCell:nth-child(4)').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">30 000 грн.</div>');
    },function () {
     $(this).text('1 шт.');
    });

    /*************************
     * Third table
     * ******************************/
    $('div.ptsCol-3 div.ptsRows div.ptsCell:first-child').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">25 000 грн.</div>');
    },function () {
        $(this).text('1 год');

    });

    $('div.ptsCol-3 div.ptsRows div.ptsCell:nth-child(2)').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">10 000 грн.</div>');
    },function () {
        $(this).text('2 недели');

    });
    $('div.ptsCol-3 div.ptsRows div.ptsCell:nth-child(3)').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">10 000 грн.</div>');
    },function () {
        $(this).text('2 недели');
    });
    $('div.ptsCol-3 div.ptsRows div.ptsCell:nth-child(6)').hover(function () {
        $(this).css('padding', '3px');
        $(this).html('<div class="publ-price">25 000 грн.</div>');
    },function () {
        $(this).text('10 000 показов');

    });
    $('.js-tab-trigger').click(function() {
        var id = $(this).attr('data-tab'),
            content = $('.js-tab-content[data-tab="'+ id +'"]');
        if ('.js-tab-content:')
        $('.js-tab-trigger.active').removeClass('active');
        $(this).addClass('active');

        $('.js-tab-content.active').removeClass('active');
        content.addClass('active');
    });

});
jQuery(document).ready(function($){

        // $('#vip').checkToggler({
        //     labelOn:'On',
        //     labelOff:'Off',
        // }).on('click', function () {
        //     let url = "http://bizov.com.ua/vip/";
        //     $(location).attr('href', url);
        // });
$('div.elementor-widget-price-table:first-child a.elementor-price-table__button').on('click', function () {

$('span#vip-price-month').text('199.99 ₴');
});
$('div.elementor-widget-price-table:nth-child(2) a.elementor-price-table__button').on('click', function () {
    $('span#vip-price-month').text('');
    $('span#vip-price').text('1900 ₴');
})
$('section#primary aside#right-sidebar div#right-sidebar-content div#send-application input[type="text"]').after('<div style="z-index: 2; position: absolute; transform: translateY(-120%);left: 15px; font-size: 24px;"><i class="fal fa-user"></i></div>')
$('section#primary aside#right-sidebar div#right-sidebar-content div#send-application input[type="email"]').after('<div style="z-index: 2; position: absolute; transform: translateY(-120%);left: 15px; font-size: 24px;"><i class="fal fa-envelope"></i></div>')
$('section#primary aside#right-sidebar div#right-sidebar-content div#send-application input[type="tel"]').after('<div style="z-index: 2; position: absolute; transform: translateY(-120%);left: 15px; font-size: 24px;"><i class="fa fa-phone"></i></div>')
   if($('ul.tab-header>li.js-tab-trigger:first-child').hasClass('active')) {
           $('h3#service-title').text('Пакет «"ПРЕМИУМ"»').css('font-weight', 'bold');
       }
   if($('ul.tab-header>li.js-tab-trigger:first-child').on(
       'click', function () {
           $('h3#service-title').text('Пакет «"ПРЕМИУМ"»').css('font-weight', 'bold');

       }
   ));
   $('ul.tab-header>li.js-tab-trigger:nth-child(2)').on('click',function () {
       $('h3#service-title').text('Пакет «"ОПТИМУМ"»').css('font-weight', 'bold');
   });
    $('ul.tab-header>li.js-tab-trigger:last-child').on('click',function () {
       $('h3#service-title').text('Пакет «"БАЗОВЫЙ"»').css('font-weight', 'bold');
    });

$('div.field button[name="write"]').click(function () {
        location.href = "report.php";
    });

    $('li li:has(li)').find('a:first').addClass ('arrow');

    $('div.breadcrumbs i.fa.fa-arrow-right:first-child').css('display', 'none');
    $.get("http://ipinfo.io", function (response) {
        $('div#user-city a').attr('title', response.city);
    }, "jsonp")

});
try{
    var el=document.getElementById('menu-left-menu').getElementsByTagName('a');
    var url=document.location.href;
    for(var i=0;i<el.length; i++){
        if (url==el[i].href){
            el[i].className += ' act';
        };
    };
}catch(e){}
    jQuery(document).ready(function($){
        //
        // $(".btn-mail").click(function(){
        //     $("#panel-mail").slideToggle("slow");
        //     $(this).toggleClass("active"); return false;
        // });
        $(".dropdown-toggle").dropdown();
        // $("section.fr-catalog div#primary div.navigation aside.widget-area").dropdown();


    });
jQuery(document).ready(function($){
    $('.toggle-nav').click(function() {
        $("aside#left-main-sidebar").animate({
            width: "toggle"
        });
    });
// Dropdown toggle
    $('.category-toggle-nav').click(function() {
        $(this).next('section.fr-catalog div#primary div.navigation aside.widget-area').toggle();
    });
    $('.copy_link').click(function() {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($('#page-link').text()).select();
        document.execCommand("copy");
        $temp.remove();

        $(this).text('Тест скопирован!');
    });
    var footerHeight, $footer = $('div.footer'),
        $main = $('section#primary');
    $(window).resize(function() {
        // вешаем обработчик на изменение размеров страницы - т.е. если меняется ширина страницы,
        // или высота, даже если в футер кто то потом аяксом что то подгрузит -
        // сработает ресайз и все сам поменяет
        footerHeight = $footer.height('auto').height();
        // важный момент - чтобы "снять" правильную высоту элемента - надо чтобы поток документа сам
        // назначил верную высоту футеру. а для этого сделаем её "auto". даже если забыли/не захотели убрать
        // из стилей жестко прописаную высоту - инлайн стиль перебивает весом, и поэтому высота
        // будет такая "как надо". потом снимаем мерку, и юзаем её
        $main.css({
            'paddingBottom': (footerHeight + 15)
        });
        // не забываем кемел-кейс для значений-через-дефис
        $footer.css({
            'height': footerHeight,
            'marginTop': (footerHeight * -1)
        })
    }).trigger('resize'); // после навешивания обработчиков насильно запускаем первый ресайз
});
function copytext(el) {
    var $tmp = jQuery("<input>");
    jQuery("body").append($tmp);
    $tmp.val(jQuery(el).text()).select();
    document.execCommand("copy");
    $tmp.remove();
}

jQuery(document).ready(function($) {
    $("form#acf-form div[data-name='seotitle'], div[data-name='seo_description'], div[data-name='seo_keywords']").wrapAll("<div class='part-block-form'></div>");
    $("form#acf-form input#acf-field_5e7a2c5376d6d, input#acf-field_5e7a2d95cf5d3, input#acf-field_5e7a2dbacf5d4").prop("disabled", true);
   /*Graphic group begin*/
    $("form#acf-form div.graphic-group div.day-block select, div.lunch-block select").prop("disabled", true);
    $("form#acf-form div.graphic-group div.day-block").prepend('<input type="checkbox" class="agree" />');
    $("form#acf-form div.graphic-group div.lunch-block").prepend('<input type="checkbox" class="lunch-agree" />');
    /*Monday group begin*/
    $("form#acf-form div[data-name='monday_day'] .agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#monday-group div.day-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#monday-group div.day-block select').prop("disabled", true);
        }
    });
    $("form#acf-form div[data-name='monday_lunch'] .lunch-agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#monday-group div.lunch-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#monday-group div.lunch-block select').prop("disabled", true);
        }
    });
    /*Monday group end*/
    /*Tuesday group begin*/
    $("form#acf-form div[data-name='tuesday_day'] .agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#tuesday-group div.day-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#tuesday-group div.day-block select').prop("disabled", true);
        }
    });
    $("form#acf-form div[data-name='tuesday_lunch'] .lunch-agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#tuesday-group div.lunch-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#tuesday-group div.lunch-block select').prop("disabled", true);
        }
    });
    /*tuesday group end*/
    /*Wednesday group begin*/
    $("form#acf-form div[data-name='wednesday_day'] .agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#wednesday-group div.day-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#wednesday-group div.day-block select').prop("disabled", true);
        }
    });
    $("form#acf-form div[data-name='wednesday_lunch'] .lunch-agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#wednesday-group div.lunch-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#wednesday-group div.lunch-block select').prop("disabled", true);
        }
    });
    /* Wednesday group end*/
    /* Thursday group begin*/
    $("form#acf-form div[data-name='thursday_day'] .agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#thursday-group div.day-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#thursday-group div.day-block select').prop("disabled", true);
        }
    });
    $("form#acf-form div[data-name='thursday_lunch'] .lunch-agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#thursday-group div.lunch-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#thursday-group div.lunch-block select').prop("disabled", true);
        }
    });
    /* Thursday group end*/
    /*Friday group begin*/
    $("form#acf-form div[data-name='friday_day'] .agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#friday-group div.day-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#friday-group div.day-block select').prop("disabled", true);
        }
    });
    $("form#acf-form div[data-name='friday_lunch'] .lunch-agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#friday-group div.lunch-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#friday-group div.lunch-block select').prop("disabled", true);
        }
    });
    /*Friday group end*/
    /*Saturday group begin*/
    $("form#acf-form div[data-name='saturday_day'] .agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#saturday-group div.day-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#saturday-group div.day-block select').prop("disabled", true);
        }
    });
    $("form#acf-form div[data-name='saturday_lunch'] .lunch-agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#saturday-group div.lunch-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#saturday-group div.lunch-block select').prop("disabled", true);
        }
    });
    /*Saturday group end*/
    /*Sunday group begin*/
    $("form#acf-form div[data-name='sunday_day'] .agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#sunday-group div.day-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#sunday-group div.day-block select').prop("disabled", true);
        }
    });
    $("form#acf-form div[data-name='sunday_lunch'] .lunch-agree").click(function(){
        if($(this).is(":checked")){
            $('form#acf-form div#sunday-group div.lunch-block select').prop("disabled", false);
        }
        else{
            $('form#acf-form div#sunday-group div.lunch-block select').prop("disabled", true);
        }
    });
    /*Sunday group end*/
    /*Graphic group end*/

    // $("a.edit_link").click(function () {
    //     $(this).parent().children("div.edit-block").fadeToggle("slow");
    // })
 });
jQuery(document).ready(function($) {
            $( '#company-slider' ).sliderPro({
                width: 960,
                height: 500,
                fade: true,
                arrows: true,
                buttons: false,
                fullScreen: true,
                shuffle: true,
                smallSize: 500,
                mediumSize: 1000,
                largeSize: 3000,
                thumbnailArrows: true,
                autoplay: false
            });
});
jQuery(document).ready(function($) {

$('select#pa_parus > option:nth-child(5)').slice(2).appendTo('#pa_parus');
});

var day=new Date().getDay();
jQuery(document).ready(function($){
    $.fn.textToggle = function(cls, str) {
        return this.each(function(i) {
            $(this).click(function() {
                var c = 0, el = $(cls).eq(i), arr = [str,el.text()];
                return function() {
                    el.text(arr[c++ % arr.length]);
                }}());
        })};
    // $(function(){
    //     $('.sh_nmr').textToggle(".sh_nmr","").click();
    //     $('.sh_nmr').textToggle(".num_hide","ХХХХХХХ").click();
    // });
    $(".day"+day+" div").addClass("highlighted1");
    $('#cart-punkt').hover(function () {
        $('.widget_shopping_cart').addClass('widget_shopping_cart-open');
    }, function () {
        $('#cart-punkt').data('timer', setTimeout(function () {
            $('.widget_shopping_cart').removeClass('widget_shopping_cart-open');
        }, 200));
    });
});
//Pagination
(function($) {
	var pagify = {
		items: {},
		container: null,
		totalPages: 1,
		perPage: 3,
		currentPage: 0,
		createNavigation: function() {
			this.totalPages = Math.ceil(this.items.length / this.perPage);

			$('.pagination', this.container.parent()).remove();
			var pagination = $('<div class="pagination"></div>').append('<a class="nav prev disabled" data-next="false"><</a>');

			for (var i = 0; i < this.totalPages; i++) {
				var pageElClass = "page";
				if (!i)
					pageElClass = "page current";
				var pageEl = '<a class="' + pageElClass + '" data-page="' + (
				i + 1) + '">' + (
				i + 1) + "</a>";
				pagination.append(pageEl);
			}
			pagination.append('<a class="nav next" data-next="true">></a>');

			this.container.after(pagination);

			var that = this;
			$("body").off("click", ".nav");
			this.navigator = $("body").on("click", ".nav", function() {
				var el = $(this);
				that.navigate(el.data("next"));
			});

			$("body").off("click", ".page");
			this.pageNavigator = $("body").on("click", ".page", function() {
				var el = $(this);
				that.goToPage(el.data("page"));
			});
		},
		navigate: function(next) {
			// default perPage to 5
			if (isNaN(next) || next === undefined) {
				next = true;
			}
			$(".pagination .nav").removeClass("disabled");
			if (next) {
				this.currentPage++;
				if (this.currentPage > (this.totalPages - 1))
					this.currentPage = (this.totalPages - 1);
				if (this.currentPage == (this.totalPages - 1))
					$(".pagination .nav.next").addClass("disabled");
				}
			else {
				this.currentPage--;
				if (this.currentPage < 0)
					this.currentPage = 0;
				if (this.currentPage == 0)
					$(".pagination .nav.prev").addClass("disabled");
				}

			this.showItems();
		},
		updateNavigation: function() {

			var pages = $(".pagination .page");
			pages.removeClass("current");
			$('.pagination .page[data-page="' + (
			this.currentPage + 1) + '"]').addClass("current");
		},
		goToPage: function(page) {

			this.currentPage = page - 1;

			$(".pagination .nav").removeClass("disabled");
			if (this.currentPage == (this.totalPages - 1))
				$(".pagination .nav.next").addClass("disabled");

			if (this.currentPage == 0)
				$(".pagination .nav.prev").addClass("disabled");
			this.showItems();
		},
		showItems: function() {
			this.items.hide();
			var base = this.perPage * this.currentPage;
			this.items.slice(base, base + this.perPage).show();

			this.updateNavigation();
		},
		init: function(container, items, perPage) {
			this.container = container;
			this.currentPage = 0;
			this.totalPages = 1;
			this.perPage = perPage;
			this.items = items;
			this.createNavigation();
			this.showItems();
		}
	};

	// stuff it all into a jQuery method!
	$.fn.pagify = function(perPage, itemSelector) {
		var el = $(this);
		var items = $(itemSelector, el);

		// default perPage to 5
		if (isNaN(perPage) || perPage === undefined) {
			perPage = 3;
		}

		// don't fire if fewer items than perPage
		if (items.length <= perPage) {
			return true;
		}

		pagify.init(el, items, perPage);
	};
})(jQuery);

jQuery("#pagin-list").pagify(10, ".line-content");
