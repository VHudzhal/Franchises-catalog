<?php
get_header();
$fr_obj = New FranchiseClass();

?>

<?php
$group_basic = array(
	'category_name' => 'services-list',
    'posts_per_page' => 3,
    'orderby' => 'post_in',
    'post__in' => array(665,884, 760),
    'order' => 'ASC',
);
$group_optimum = array(
	'category_name' => 'services-list',
    'order' => 'ASC',
    'orderby' => 'post__in',
    'post__in' => array(665,884, 717, 740),
    'posts_per_page' => 4
);
$group_premium = array(
	'category_name' => 'services-list',
    'order' => 'ASC',
    'orderby' => array(get_the_ID() => 'ASC'),
    'p' => array(665,884,717, 740, 746, 760, 777, 797),
    'posts_per_page' => 8
);
$basic_posts = new WP_Query( $group_basic );
$optimum_posts = new WP_Query( $group_optimum );
$premium_posts = new WP_Query( $group_premium ); ?>
<section class="services-block" style="">
    <?php get_sidebar('left-main');?>
<div class="service-content" style="">

    <div class="service-title">
    <span id="packet-name" style="">Пaкет "БАЗОВЫЙ"</span>
    <div class="breadcrumbs" typeof="breadcrumbList" vocab="http://schema.org">
        <?php
        if (function_exists('dimox_breadcrumbs'))
            dimox_breadcrumbs();
        ?>
    </div>
    </div>
<div class="tabs">
    <ul class="tab-header">
        <li class="tab-header__item js-tab-trigger active" data-tab="1" value="Пaкет БАЗОВЫЙ"> <span class="packet-name">Пaкет "БАЗОВЫЙ"</span></li>
        <li class="tab-header__item js-tab-trigger" data-tab="2"><span class="packet-name">Пакет "ОПТИМУМ"</span></li>
        <li class="tab-header__item js-tab-trigger" data-tab="3"><span class="packet-name">Пакет "ПРЕМИУМ"</span></li>
    </ul>
<ul class="tab-content">
    <li class="js-tab-content tab-content__item active" data-tab="1">
    <div class="services-list">
    <?php if ( $basic_posts->have_posts() ) :

	while ( $basic_posts->have_posts() ) :
		$basic_posts->the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
			if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;
			?>
            <div class="entry-content" style="">
			<div class="entry-header">
                <a href="<?php echo esc_url(get_the_permalink());?>" class="h5"><?php the_title();?></a>
			</div>
			<div class="entry-text" style="">
                <span class="service-title">				<?php the_field('service_title'); ?>
</span>
                <span class="service-period">
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
    </li>
    <li class="js-tab-content tab-content__item " data-tab="2">
    <div class="services-list">
    <?php if ( $optimum_posts->have_posts() ) :

	while ( $optimum_posts->have_posts() ) :
		$optimum_posts->the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
			if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;
			?>
            <div class="entry-content">
			<div class="entry-header">
                <a href="<?php echo esc_url(get_the_permalink());?>" class="h5"><?php the_title();?></a>
			</div>
			<div class="entry-text">
<span class="service-title">				<?php the_field('service_title'); ?>
</span>
                <span class="service-period">
                                    <?php the_field('period');?>
                </span>			</div>
            </div>
		</article>
	<?php
	endwhile;
endif;
?>
    </div>
    </li>
    <li class="js-tab-content tab-content__item " data-tab="3">
    <div class="services-list">
    <?php if ( $premium_posts->have_posts() ) :

	while ( $premium_posts->have_posts() ) :
		$premium_posts->the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
			if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;
			?>
            <div class="entry-content">
			<div class="entry-header">
                <a href="<?php echo esc_url(get_the_permalink());?>" class="h5"><?php the_title();?></a>
			</div>
			<div class="entry-text">
<span class="service-title">				<?php the_field('service_title'); ?>
</span>
                <span class="service-period">
                                    <?php the_field('period');?>
                </span>			</div>
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
</section>
