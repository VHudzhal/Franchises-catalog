<?php
get_header();
$fr_obj = New FranchiseClass();
$args = array(
        'category_name' => 'companies',
    'posts_per_page' => -1);
$company = new WP_Query($args);
query_posts('category_name=companies&posts_per_page=-1');
?>

<section class="companies-block">
    <?php get_sidebar('left-main');?>
    <div class="companies-list-content" style="">
        <div class="section-header">
            <h6>Компании</h6>
        </div>
            <main class="companies-main">
                <?php
                if (have_posts()) :

                    while (have_posts()) : the_post();?>
<?php
                    the_content();
                    endwhile;
                    wp_reset_postdata();
                else :
                    get_template_part( 'no-results' );
                endif;
                ?>
            </main>
        </div>
</section>
<!--<div class="work-graphic">-->
<!--    <div id="Monday" class="day day1"> <h4> Пн</h4><h5>8<sup>00</sup></h5><h5>18<sup>00</sup></h5></div>-->
<!--    <div id="Tuesday" class="day day2"> <h4> Вт</h4><h5>8<sup>00</sup></h5><h5>18<sup>00</sup></h5></div>-->
<!--    <div id="Wednesday" class="day day3"> <h4> Ср</h4><h5>8<sup>00</sup></h5><h5>18<sup>00</sup></h5></div>-->
<!--    <div id="Thursday" class="day day4"> <h4> Чт</h4><h5>8<sup>00</sup></h5><h5>18<sup>00</sup></h5></div>-->
<!--    <div id="Friday" class="day day5"> <h4> Пт</h4><h5>8<sup>00</sup></h5><h5>18<sup>00</sup></h5></div>-->
<!--    <div id="Saturday" class="day day6"> <h4> Сб</h4><h5>8<sup>00</sup></h5><h5>18<sup>00</sup></h5></div>-->
<!--    <div id="Sunday" class="day day0"> <h4> Вс</h4><h1>X</h1</div>-->
<!--</div>-->
<div class="calendar">
    <div id="calendartest1">
        <h2>Test1</h2>

        <div class="day">
            <div class="dayname">
                <h4>Пн</h4>
            </div>
            <div class="daycontent">
                <h5>8<sup>00</sup></h5><h5>18<sup>00</sup></h5>
            </div>
        </div>
        <div class="day">
            <div class="dayname">
                <p>Вт</p>
            </div>
            <div class="daycontent">
                <h5>8<sup>00</sup></h5><h5>18<sup>00</sup></h5>
            </div>
        </div>
        <div class="day">
            <div class="dayname">
                <p>Ср</p>
            </div>
            <div class="daycontent">
                <h5>8<sup>00</sup></h5><h5>18<sup>00</sup></h5>
            </div>
        </div>
        <div class="day">
            <div class="dayname">
                <p>Чт</p>
            </div>
            <div class="daycontent">
                <h5>8<sup>00</sup></h5><h5>18<sup>00</sup></h5>
            </div>
        </div>
        <div class="day">
            <div class="dayname">
                <p>Пт</p>
            </div>
            <div class="daycontent">
                <h5>8<sup>00</sup></h5><h5>18<sup>00</sup></h5>
            </div>
        </div>
        <div class="day">
            <div class="dayname">
                <p>Сб</p>
            </div>
            <div class="daycontent">
                <h5>8<sup>00</sup></h5><h5>18<sup>00</sup></h5>

            </div>
        </div>
        <div class="day" style="border-right: 1px solid #404040;">
            <div class="dayname">
                <p>Вс</p>
            </div>
            <div class="daycontent">
<h1>X</h1>
            </div>
        </div>
    </div>
</div>
