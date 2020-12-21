<?php
/*
 * sp functions and definitions
 */

if ( ! function_exists( 'sp_setup' ) ) :

	function sp_setup() {

		load_theme_textdomain( 'sp-theme', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		add_theme_support( 'custom-background', apply_filters( 'sp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		add_theme_support( 'custom-avatar', array(
			'height'      => 50,
			'width'       => 50,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_image_size('avatar',20, 20);
add_action( 'after_setup_theme', 'sp_setup' );

add_filter('widget_text', 'do_shortcode');
add_filter('the_content', 'do_shortcode');
add_filter('the_posts', 'do_shortcode');

function sp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sp_content_width', 640 );
}
add_action( 'after_setup_theme', 'sp_content_width', 0 );

//Register widget area.
function franchise_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sp-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sp-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	));
	register_sidebar( array(
		'name'          => esc_html__( 'Head right', 'sp-theme' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'sp-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	));
    register_sidebar( array(
        'name'          => esc_html__( 'Right sidebar In Franchise', 'sp-theme' ),
        'id'            => 'sidebar-3',
        'description'   => esc_html__( 'Add widgets here.', 'sp-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => esc_html__( 'Left sidebar In Franchise', 'sp-theme' ),
        'id'            => 'sidebar-4',
        'description'   => esc_html__( 'Add widgets here.', 'sp-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => esc_html__( 'Top search sidebar ', 'sp-theme' ),
        'id'            => 'sidebar-5',
        'description'   => esc_html__( 'Add widgets here.', 'sp-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => esc_html__( 'Site map ', 'sp-theme' ),
        'id'            => 'sidebar-6',
        'description'   => esc_html__( 'Add widgets here.', 'sp-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => esc_html__( 'Community themes ', 'sp-theme' ),
        'id'            => 'sidebar-7',
        'description'   => esc_html__( 'Add widgets here.', 'sp-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => esc_html__( 'Left Main ', 'sp-theme' ),
        'id'            => 'sidebar-8',
        'description'   => esc_html__( 'Add widgets here.', 'sp-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '',
        'after_title'   => '',
    ));
    register_sidebar( array(
        'name'          => esc_html__( 'Share buttons', 'sp-theme' ),
        'id'            => 'sidebar-9',
        'description'   => esc_html__( 'Add widgets here.', 'sp-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '',
        'after_title'   => '',
    ));
    register_sidebar( array(
        'name'          => esc_html__( 'Head left', 'sp-theme' ),
        'id'            => 'sidebar-10',
        'description'   => esc_html__( 'Add widgets here.', 'sp-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '',
        'after_title'   => '',
    ));
    register_sidebar( array(
        'name'          => esc_html__( 'Head top Right', 'sp-theme' ),
        'id'            => 'sidebar-11',
        'description'   => esc_html__( 'Add widgets here.', 'sp-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '',
        'after_title'   => '',
    ));
    register_sidebar( array(
        'name'          => esc_html__( 'Right Company Sidebar', 'sp-theme' ),
        'id'            => 'sidebar-12',
        'description'   => esc_html__( 'Add widgets here.', 'sp-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action( 'widgets_init', 'franchise_widgets_init' );
// Register Navigation Menus
function franchises_navigation_menus() {

	$locations = array(
        'main-menu' => esc_html__( 'Main', 'sp-theme' ),
        'header-menu' => esc_html__( 'Header menu', 'sp-theme' ),
        'main-menu-mob' => esc_html__( 'Main Mob', 'sp-theme' ),
        'menu-1' => esc_html__( 'Categories', 'sp-theme' ),
        'catalog' => esc_html__( 'Catalog', 'sp-theme' ),
        'head' => esc_html__( 'Head', 'sp-theme' ),
        'foot-left' => esc_html__( 'Foot Left', 'sp-theme' ),
        'foot-right' => esc_html__( 'Foot Right', 'sp-theme' ),
        'foot-soc' => esc_html__( 'Foot Social', 'sp-theme' ),
		'left-menu' => esc_html__( 'Left Menu', 'sp-theme' ),
		'qa-social' => esc_html__( 'Question social', 'sp-theme' ),
		'categories-list' => esc_html__( 'Shop Menu', 'sp-theme' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'franchises_navigation_menus' );

add_filter('single_template', 'my_single_template');

function my_single_template($single) {
    global $wp_query, $post;
    foreach((array)get_the_category() as $cat) {
        if(file_exists(get_template_directory() . '/single-' . $cat->slug . '.php')) {
            return get_template_directory() . '/single-' . $cat->slug . '.php';
        } elseif(file_exists('/single-' . $cat->term_id . '.php')) {
            return get_template_directory() . '/single-' . $cat->term_id . '.php';
        }
    }
    return $single;
}
function ro_resources_custom_post_type() {
    $labels = array(
        'name'                => __( 'Компании' ),
        'singular_name'       => __( 'Компания'),
        'menu_name'           => __( 'Компания'),
        'parent_item_colon'   => __( 'Parent Resource'),
        'all_items'           => __( 'Все компании'),
        'view_item'           => __( 'Просмотреть компанию'),
        'add_new_item'        => __( 'Добавить новую компанию'),
        'add_new'             => __( 'Добавить новое'),
        'edit_item'           => __( 'Редактировать компнаию'),
        'update_item'         => __( 'Обновить компнаию'),
        'search_items'        => __( 'Поиск компании'),
        'not_found'           => __( 'Компанию не найдено'),
        'not_found_in_trash'  => __( 'Not found in Trash')
    );
    $args = array(
        'label'               => __( 'company'),
        'description'         => __( 'Best Resources'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
        'public'              => true,
        'hierarchical'        => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'has_archive'         => false,
        'can_export'          => true,
        'exclude_from_search' => false,
        'yarpp_support'       => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );
    register_post_type( 'company', $args );
}
add_action( 'init', 'ro_resources_custom_post_type', 0 );

add_action( 'init', 'ro_create_resources_custom_taxonomy', 0 );


//create a custom taxonomy name it "type" for your posts
function ro_create_resources_custom_taxonomy() {

    $labels = array(
        'name' => _x( 'Категории компаний', 'taxonomy general name' ),
        'singular_name' => _x( 'Категории компаний', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Types' ),
        'all_items' => __( 'All Types' ),
        'parent_item' => __( 'Parent Type' ),
        'parent_item_colon' => __( 'Parent Type:' ),
        'edit_item' => __( 'Edit Type' ),
        'update_item' => __( 'Update Type' ),
        'add_new_item' => __( 'Add New Type' ),
        'new_item_name' => __( 'New Type Name' ),
        'menu_name' => __( 'Категории' ),
    );

    register_taxonomy('comp_categories',array('company'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'comp_categories' ),
    ));
}

function sp_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', '','4.3.1');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap-grid.css', '', '4.3.1');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap-reboot.css', '', '4.3.1', '');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/all.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/brands.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/doutone.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/fontawesome.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/light.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/regular.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/solid.css');
    wp_enqueue_style('slider-pro', get_template_directory_uri().'/css/slider-pro.css');
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_style('ui-toggle', get_template_directory_uri().'/css/ui-toggle.css', '', '5.2.4');

    wp_enqueue_script('jquery');
    wp_enqueue_script('slider-pro', get_template_directory_uri().'/js/jquery.sliderPro.min.js', array('jquery'), '5.2.4', true);

    wp_enqueue_script('toggler', get_template_directory_uri().'/js/jquery.toggler.js', array('jquery'), '5.2.4', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', '', '4.3.1', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.bundle.js', '', '4.3.1', true);
    wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array('jquery'), '1.0', true);;

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'sp_scripts' );
function wpb_change_search_url() {
	if ( is_search() && ! empty( $_GET['s'] ) ) {
		wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
		exit();
	}
}
add_action( 'template_redirect', 'wpb_change_search_url' );

function wpb_change_taxonomy_url() {
	if ( is_tax('franchise-categories') && ! empty( $_GET['tax'] ) ) {
		wp_redirect( home_url( "/franchises/" ) . urlencode( get_query_var( 'tax' ) ) );
		exit();
	}
}
add_action( 'template_redirect', 'wpb_change_taxonomy_url' );
//Include the TGM_Plugin_Activation class.
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

//Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

//Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/franchise-class.php';

//Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

//Customizer additions.
require get_template_directory() . '/inc/customizer.php';

if ( ! function_exists( 'franchises_the_posts_navigation' ) ) :
    /**
     * Documentation for function.
     */
    function franchises_the_posts_navigation() {
        the_posts_pagination(
            array(
                'mid_size'  => 2,
                'prev_text' => sprintf(
                    '%s <span class="nav-prev-text">%s</span>',
                    '<<',
                    __( 'Пред.', 'sp-theme' )
                ),
                'next_text' => sprintf(
                    '<span class="nav-next-text">%s</span> %s',
                    __( 'След.', 'sp-theme' ),
                    '>>'
                ),
            )
        );
    }
endif;

function wp_cat_numb($id) {

    $category = get_category($id);
    $count = (int)$category->count;
    $taxonomy = "category";

    $array = array(
        "child_of" => $id
    );

    $tax_terms = get_terms($taxonomy, $array);

    foreach($tax_terms as $tax_term) {

        $count += $tax_term->count;

    }

    return $count;

}
function my_terms( $post_id, $taxonomy, $echo = true, $description = true ) {

    $terms = wp_get_post_terms( $post_id, $taxonomy );

    $output = "";

    //If there are any terms associated with the $post_id
    if( count( $terms ) > 0 ) {

        $output .= "<ul>";

        foreach( $terms as $term ) {

            $output .= '<li>' . $term->name;

      if( $description ) {

        $output .= '<small>' . $term->description . '</small>';
      }

      $output .= '</li>';
    }

    $output .= '</ul>';

  }

  if( $echo ) {
    echo $output;
  } else {
    return $output;
  }
}

function franchise_application_column_headers( $columns ) {
// creating custom column header data
	$columns = array(
		'cb'=>'<input type="checkbox" />',
		'title'=>__('Franchise Name'),
		'first_name'=> __('First Name'),
		'last_name'=> __('Last Name'),
		'email'=>__('Email'),
		'website'=> __('Website'),
		'phone_number'=>__('Phone Number'),
		'company'=> __('Company'),

	);

// returning new columns
	return $columns;

}
add_filter('manage_edit-franchise_application_columns','franchise_application_column_headers');
function franchise_application_column_data( $column, $post_id ) {
	// setup our return text
	$output = '';
	switch( $column ) {
		case 'firstname':
			// get the custom name data
			$fname = get_field('firstname', $post_id );
			$output .= $fname;
			break;
		case 'lastname':
			// get the custom name data
			$lname = get_field('lastname', $post_id );
			$output .= $lname;
			break;
		case 'email':
			// get the custom email data
			$email = get_field('email', $post_id );
			$output .= $email;
			break;
		case 'website':
			// get the custom
			$website = get_field('website', $post_id );
			$output .= $website;
			break;
		case 'phone_number':
			// get the custom email data
			$phone_number = get_field('phone_number', $post_id );
			$output .= $phone_number;
			break;
		case 'company_name':
			// get the custom company name
			$company_name = get_field('company_name', $post_id );
			$output .= $company_name;
			break;

	}
	// echo the output
	echo $output;
}

add_filter('manage_franchise_posts_custom_column','franchise_application_column_data',1,2);
function franchise_custom_admin_titles( $title, $post_id ) {
	global $post;
	$output = $title;
	if( isset($post->post_type) ):
		switch( $post->post_type ) {
			case 'franchise_apps':
				$fname = get_field('franchise_name', $post_id );
				$output = $fname;
				break;
		}
	endif;
	return $output;
}
add_filter('the_title', 'franchise_custom_admin_titles', 99, 3);

function franchise_catalog_column_headers( $columns ) {
// creating custom column header data
	$columns = array(
		'cb'=>'<input type="checkbox" />',
		'title'=>__('Franchise Name'),
//		'franchise_name'=> __('Franchise Name'),
		'min_price'=> __('Price Min'),
		'max_price'=>__('To'),
		'description'=> __('Description'),
		'contacts'=>__('Contacts'),

	);

// returning new columns
	return $columns;

}
add_filter('manage_edit_franchise_catalog_columns','franchise_catalog_column_headers');
function franchise_catalog_column_data( $cat_column, $fr_post_id ) {
	// setup our return text
	$output = '';
	switch( $cat_column ) {
		case 'franchise_name':
			// get the custom name data
			$fr_name = get_field('franchise_name', $fr_post_id );
			$output .= $fr_name;
			break;
		case 'price_min':
			// get the custom name data
			$minprice = get_field('price_min', $fr_post_id );
			$output .= $minprice;
			break;
		case 'price_max':
			// get the custom email data
			$maxprice = get_field('price_max', $fr_post_id );
			$output .= $maxprice;
			break;
		case 'description':
			// get the custom
			$descr = get_field('description', $fr_post_id );
			$output .= $descr;
			break;
		case 'contacts':
			// get the custom email data
			$contacts = get_field('contacts', $fr_post_id );
			$output .= $contacts;
			break;
	}
	// echo the output
	echo $output;
}

add_filter('manage_franchise_posts_custom_column','franchise_catalog_column_data',1,2);
function franchise_catalog_admin_titles( $title, $post_id ) {
	global $post;
	$output = $title;
	if( isset($post->post_type) ):
		switch( $post->post_type ) {
			case 'franchise':
				$fr_name = get_field('franchise_name', $post_id );
				$output = $fr_name;
				break;
		}
	endif;
	return $output;
}
add_filter('the_title', 'franchise_catalog_admin_titles', 99, 2);

add_filter('acf/save_post', 'save_application_from_frontend');
function save_application_from_frontend( $post_id) {

//Check if user loggin or can publish post

	$post_data = array(
		'post_title' => 'Franchise Name',
		'post_type' => 'franchise_apps',
		'post_status' => 'publish'
	);

	// insert the post
	$post_id = wp_insert_post( $post_data);
	// Save the fields to the post
	return $post_id;

}

$option_posts_per_page = get_option( 'posts_per_page' );
add_action( 'init', 'my_modify_posts_per_page', 0);
function my_modify_posts_per_page() {
    add_filter( 'option_posts_per_page', 'my_option_posts_per_page' );
}
function my_option_posts_per_page( $value ) {
    global $option_posts_per_page;
    if ( is_tax( 'franchises-categories') ) {
        return 2;
    } else {
        return $option_posts_per_page;
    }
}
function dimox_breadcrumbs() {

    /* === ОПЦИИ === */
    $text['home']     = ''; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author']   = 'Статьи автора %s'; // текст для страницы автора
    $text['404']      = 'Ошибка 404'; // текст для страницы 404
    $text['page']     = 'Страница %s'; // текст 'Страница N'
    $text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'
    $text['tax']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

    $wrap_before    = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
    $wrap_after     = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep            = '<i class="fa fa-arrow-right" ></i>'; // разделитель между "крошками"
    $before         = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
    $after          = '</span>'; // тег после текущей "крошки"

    $show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_home_link = 0; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
    /* === КОНЕЦ ОПЦИЙ === */

    global $post;
    $home_url       = home_url('/franchise-catalog');
    $link           = '<span itemprop="itemListElement" class="br-link" itemscope itemtype="http://schema.org/ListItem">';
    $link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
    $link          .= '<meta itemprop="position" content="%3$s" />';
    $link          .= '</span>';
    $parent_id      = ( $post ) ? $post->post_parent : '';
    $home_link      = sprintf( $link, $home_url, $text['home'], 1 );

//    if ( is_home() || is_front_page() ) {
//
//        if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;
//
//    }
//    else
//        {
    if ( is_page('franchise-catalog') ) {
        echo $wrap_before . $home_link . $wrap_after;

    }
        $position = 0;

        echo $wrap_before;

        if ( $show_home_link ) {
            $position += 1;
            echo $home_link;
        }

        if ( is_category() ) {
            $parents = get_ancestors( get_query_var('cat'), 'category' );
            foreach ( array_reverse( $parents ) as $cat ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
            }
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                $cat = get_query_var('cat');
                echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_current ) {
                    if ( $position >= 1 ) echo $sep;
                    echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
                } elseif ( $show_last_sep ) echo $sep;
            }

        } elseif ( is_search() ) {
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                if ( $show_home_link ) echo $sep;
                echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_current ) {
                    if ( $position >= 1 ) echo $sep;
                    echo $before . sprintf( $text['search'], get_search_query() ) . $after;
                } elseif ( $show_last_sep ) echo $sep;
            }

        } elseif ( is_year() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . get_the_time('Y') . $after;
            elseif ( $show_home_link && $show_last_sep ) echo $sep;

        } elseif ( is_month() ) {
            if ( $show_home_link ) echo $sep;
            $position += 1;
            echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
            if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_day() ) {
            if ( $show_home_link ) echo $sep;
            $position += 1;
            echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
            $position += 1;
            echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
            if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_single() && ! is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $position += 1;
                $post_type = get_post_type_object( get_post_type() );
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
                if ( $show_current ) echo $sep . $before . get_the_title() . $after;
                elseif ( $show_last_sep ) echo $sep;
            } else {
                $cat = get_the_category(); $catID = $cat[0]->cat_ID;
                $parents = get_ancestors( $catID, 'category' );
                $parents = array_reverse( $parents );
                $parents[] = $catID;
                foreach ( $parents as $cat ) {
                    $position += 1;
                    if ( $position > 1 ) echo $sep;
                    echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
                }
                if ( get_query_var( 'cpage' ) ) {
                    $position += 1;
                    echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
                    echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
                } else {
                    if ( $show_current ) echo $sep . $before . get_the_title() . $after;
                    elseif ( $show_last_sep ) echo $sep;
                }
            }

        } elseif ( is_post_type_archive() ) {
            $post_type = get_post_type_object( get_post_type() );
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . $post_type->label . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_attachment() ) {
            $parent = get_post( $parent_id );
            $cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
            $parents = get_ancestors( $catID, 'category' );
            $parents = array_reverse( $parents );
            $parents[] = $catID;
            foreach ( $parents as $cat ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
            }
            $position += 1;
            echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
            if ( $show_current ) echo $sep . $before . get_the_title() . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_page() && ! $parent_id ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . get_the_title() . $after;
            elseif ( $show_home_link && $show_last_sep ) echo $sep;

        } elseif ( is_page() && $parent_id ) {
            $parents = get_post_ancestors( get_the_ID() );
            foreach ( array_reverse( $parents ) as $pageID ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
            }
            if ( $show_current ) echo $sep . $before . get_the_title() . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_tag() ) {
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                $tagID = get_query_var( 'tag_id' );
                echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_author() ) {
            $author = get_userdata( get_query_var( 'author' ) );
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_404() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . $text['404'] . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( has_post_format() && ! is_singular() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            echo get_post_format_string( get_post_format() );
        }

        echo $wrap_after;

    //}
} // end of dimox_breadcrumbs()

if ( ! function_exists( 'franchise_pagination' ) ) :
    function franchise_pagination( $max_num_pages = null, $load_more = false, $query = false ) {
        global $wp_query, $wp_rewrite;

        if ( ! $query ) {
            $query = $wp_query;
        }
        $max_num_pages = ( $max_num_pages ) ? $max_num_pages : $query->max_num_pages;

        // Don't print empty markup if there's only one page.
        if ( $max_num_pages < 2 ) {
            return;
        }

        $paged         = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : ( ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1 );
        $page_num_link = html_entity_decode( get_pagenum_link() );
        $query_args    = array();
        $url_parts     = explode( '?', $page_num_link );

        if ( isset( $url_parts[1] ) ) {
            wp_parse_str( $url_parts[1], $query_args );
        }

        $page_num_link = esc_url( remove_query_arg( array_keys( $query_args ), $page_num_link ) );
        $page_num_link = trailingslashit( $page_num_link ) . '%_%';

        $format  = $wp_rewrite->using_index_permalinks() && ! strpos( $page_num_link, 'index.php' ) ? 'index.php/' : '';
        $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

        $next_text = ( $load_more ) ? __( 'Load More...', 'із-еруьу' ) : __( 'Next&nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i>', 'із-еруьу' );

        // Set up paginated links.
        $links = paginate_links(
            array(
                'base'      => $page_num_link,
                'format'    => $format,
                'total'     => $max_num_pages,
                'current'   => $paged,
                'end_size'  => 1,
                'mid_size'  => 1,
                'add_args'  => array_map( 'urlencode', $query_args ),
                'prev_text' => __( '<i class="fas fa-long-arrow-alt-left"></i>&nbsp;&nbsp;Пред.', 'sp-theme' ),
                'next_text' => $next_text,
            )
        );

        if ( $links ) :
            ?>
            <div class="clearfix"></div>
            <div class="pagination-wrap<?php echo ! $load_more ? '' : ' load-more'; ?>">
                <?php if ( $load_more ) : ?>
                    <div class="bounce-loader">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                <?php endif; ?>
                <div class="pagination<?php echo ! $load_more ? '' : ' load-more'; ?>" role="navigation">
                    <?php echo preg_replace( '/^\s+|\n|\r|\s+$/m', '', $links ); ?>
                </div>
            </div>
        <?php
        endif;
    }
endif;
function tax_city_posts_per_page( $query ) {
    if( is_tax('franchises-categories') ) {
        $query->set('posts_per_page', 5); //ваше значение
    }
    return $query;
}
add_filter('show_admin_bar', '__return_true');
// Pagination Starts here
//
//function pp_pagination_nav() {
//
//    if( is_singular() )
//        return;
//
//    global $wp_query;
//
//    /** Stops execution if there's only 1 page */
//    if( $wp_query->max_num_pages <= 1 )
//        return;
//
//    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
//    $max = intval( $wp_query->max_num_pages );
//
//    /** Adds current page to the array */
//    if ( $paged >= 1 )
//        $links[] = $paged;
//
//    /** Add the pages around the current page to the array */
//    if ( $paged >= 3 ) {
//        $links[] = $paged - 1;
//        $links[] = $paged - 2;
//    }
//
//    if ( ( $paged + 2 ) <= $max ) {
//        $links[] = $paged + 2;
//        $links[] = $paged + 1;
//    }
//
//    echo '<div class=""><ul class="pagination">' . "\n";
//
//    /** Previous Post Link Function */
//    if ( get_previous_posts_link() )
//        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
//
//    /** Links to the first page, plus ellipses if necessary */
//    if ( ! in_array( 1, $links ) ) {
//        $class = 1 == $paged ? ' class="active"' : '';
//
//        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
//
//        if ( ! in_array( 2, $links ) )
//            echo '<li>…</li>';
//    }
//
//    /** Links to current page, plus 2 pages in either direction if necessary */
//    sort( $links );
//    foreach ( (array) $links as $link ) {
//        $class = $paged == $link ? ' class="active"' : '';
//        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
//    }
//
//    /** Links to last page, plus ellipses if necessary */
//    if ( ! in_array( $max, $links ) ) {
//        if ( ! in_array( $max - 1, $links ) )
//            echo '<li>…</li>' . "\n";
//
//        $class = $paged == $max ? ' class="active"' : '';
//        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
//    }
//
//    /** Next Post Link function */
//    if ( get_next_posts_link() )
//        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
//
//    echo '</ul></div>' . "\n";
//}
//add_filter('next_posts_link_attributes', 'posts_link_attributes');
//add_filter('previous_posts_link_attributes', 'posts_link_attributes');
//
//function posts_link_attributes() {
//    return 'class="btn btn-default"';
//}
add_theme_support( 'woocommerce' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
    ob_start();
    ?>
    <a class="cart-contents" href="/cart/" title="<?php _e( 'Перейти в корзину' ); ?>">
        <span class="cart-ico"> <i class="fa fa-shopping-cart"></i></span>
        <span class="cart-txt"><strong><?php echo WC()->cart->get_cart_total(); ?></strong>
             <?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> &nbsp;&nbsp; товаров
	</span>
    </a>
    <?php
    $fragments['a.cart-contents'] = ob_get_clean();
    return $fragments;
}

//Вывод кратких данных из корзины
if ( ! function_exists( 'cart_link' ) ) {
    function cart_link() {
        ?><a class="cart-contents" href="/cart/" title="<?php _e( 'Перейти в корзину' ); ?>">
        <span class="cart-ico"> <i class="fa fa-shopping-cart"></i></span>&nbsp;&nbsp;
        <span class="cart-txt">
            <strong><?php echo WC()->cart->get_cart_total(); ?></strong><br>
            <strong id="count-prod"><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></strong>&nbsp;товаров

        </span>
        </a>
        <?php
    }
}
add_shortcode('my_head_cart','add_to_cart_shortcode');
function add_to_cart_shortcode(){
    $cart = '';
    $cart += "<nav id='navigate' role='navigation'>";
//    $cart += wp_nav_menu( array(
//                    'theme_location' => 'header-menu',
//                    'menu_class'  => 'nav-cart',
//                    'depth' => 0
//                )
//                );
    $cart += '<li class="menu-item cart-punkt" >'.cart_link();
    $cart += the_widget( 'WC_Widget_Cart', 'title=' ).'</li></nav>';
    return $cart;
}
add_filter('woocommerce_product_get_rating_html', 'your_get_rating_html', 10, 2);
function your_get_rating_html($rating_html, $rating) {
    if ( $rating > 0 ) {
        $title = sprintf( __( 'Rated %s out of 5', 'woocommerce' ), $rating );
    } else {
        $title = 'Not yet rated';
        $rating = 0;
    }
    $rating_html  = '<div class="star-rating" title="' . $title . '">';
    $rating_html .= '<span style="width:' . ( ( $rating / 5 ) * 100 ) . '%"><strong class="rating">' . $rating . '</strong> ' . __( 'out of 5', 'woocommerce' ) . '</span>';
    $rating_html .= '</div>';
    $rating_html .= '</div>';
    $rating_html .= '<div class="bottom-block">';
    return $rating_html;
}
// Новый пост с фронтенда
function my_pre_save_post( $post_id ) {

    // Проверить что пост новый
    if( $post_id != 'new' ) {
        return $post_id;
    }

    // Создание нового поста
    $post = array(
        'post_type'     => 'company', // Your post type ( post, page, custom post type )
        'post_status'   => 'private', // (publish, draft, private, etc.)
        'post_title'    => wp_strip_all_tags($_POST['acf']['field_5e77b59aa1e30']), // Заголовок ACF field key
        'post_content'  => $_POST['acf']['field_5509d61f8541f'], // Содержание ACF field key
    );

    // insert the post
    $post_id = wp_insert_post( $post );

    // update $_POST['return']
    $_POST['return'] = add_query_arg( array('post_id' => $post_id), $_POST['return'] );

    return $post_id;

}
add_filter('acf/pre_save_post' , 'my_pre_save_post', 10, 1 );


/**
 * Сохранение изображения ACF field как миниатюры
 */
add_action( 'acf/save_post', 'tsm_save_image_field_to_featured_image', 10 );
function tsm_save_image_field_to_featured_image( $post_id ) {

    // Bail early if no ACF data
    if( empty($_POST['acf']) ) {
        return;
    }

    // Миниатюра ACF field key
    $image = $_POST['acf']['field_5e78ab08a39f3'];

    // Bail if image field is empty
    if ( empty($image) ) {
        return;
    }

    // Add the value which is the image ID to the _thumbnail_id meta data for the current post
    add_post_meta( $post_id, '_thumbnail_id', $image );

}
add_action('acf/save_post', 'franchises_new_company_send_email');

function franchises_new_company_send_email( $post_id ) {

    if( get_post_type($post_id) !== 'companies' && get_post_status($post_id) == 'draft' ) {
        return;
    }

    if( is_admin() ) {
        return;
    }

    $post_title = get_the_title( $post_id );
    $post_url 	= get_permalink( $post_id );
    $subject 	= "A New Company Has Been Added to Your Site";
    $message 	= "Please Review the company before publishing:\n\n";
    $message   .= $post_title . ": " . $post_url;

    $administrators 	= get_users(array(
        'role'	=> 'administrator'
    ));

    foreach ($administrators as &$administrator) {
        wp_mail( $administrator->data->user_email, $subject, $message );
    }
}

/*BuddyPress Tabs own group begin*/
/*Buddy press franchises tab begin*/
function franchises_buddypress_tab() {
    global $bp;

    bp_core_new_nav_item( array(
        'name' => __( 'Франшизы', 'sp-theme' ),
        'slug' => 'company',
        'position' => 101,
        'screen_function' => 'franchises_budypress_posts',
        'show_for_displayed_user' => true,
        'item_css_id' => 'franchises_budypress_posts'
    ) );

}

add_action( 'bp_setup_nav', 'franchises_buddypress_tab', 1000 );
function franchises_budypress_posts () {
    add_action( 'bp_template_title', 'franchises_buddypress_recent_posts_title' );
    add_action( 'bp_template_content', 'franchises_buddypress_recent_posts_content' );
    bp_core_load_template( apply_filters( 'bp_core_template_plugin', 'members/single/plugins' ) );
}
function franchises_buddypress_recent_posts_title() {
    _e( 'Франшизы', 'sp-theme' );
}
function franchises_buddypress_recent_posts_content() {
    $myposts = get_posts(  array(
        'posts_per_page' => 5,
        'author'         => bp_displayed_user_id(),
        'post_type'      => 'franchises'
    ));
    if( ! empty($myposts) ) {

        foreach($myposts as $post) {
            setup_postdata( $post );
            if (has_post_thumbnail( $post->ID ) ):
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'sidebar-smallthumbnew' );
            else :
                $image[0] = "http://placehold.it/85x60";
            endif;
            echo '<li class="sidebar mostpop post-' . $post->ID . '"><div id="postimage"><a href="' . get_permalink($post->ID) . '"><img src="' . $image[0] . '" /></a></div><div id="postinfo"><a href="' . get_permalink($post->ID) . '">' . get_the_title($post->ID) . '</a></div></li>';
        }
        echo '</ul>';
        wp_reset_postdata();

    } else { ?>
        <div class="info" id="message">
            <p><strong><?php bp_displayed_user_fullname(); ?></strong> has No posts.</p>

        </div>
    <?php }
//    $profileUserID = bp_displayed_user_id();
////
////    if( $profileUserID > 0 ) {
////        $posts = get_posts( array(
////            'author' => $profileUserID,
////            'posts_per_page' => 5,
////            'post_type' => 'company'
////        ));
////        if( is_array( $posts ) && ! empty( $posts ) ) {
////
////            echo '<ul>';
////
////            foreach( $posts as $post ){
////                setup_postdata( $post );
////                ?>
    //<!--                <li>-->
    //<!--                    <a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a>-->
    //<!--                </li>-->
    //<!--                --><?php
////            }
////
////            echo '</ul>';
////
////        }
////    }
}

/*Buddypress franchises tab end*/

/*Buddy press companies tab begin*/
function companies_buddypress_tab() {
    global $bp;

    bp_core_new_nav_item( array(
        'name' => __( 'Компании', 'sp-theme' ),
        'slug' => 'company',
        'position' => 99,
        'screen_function' => 'companies_budypress_posts',
        'show_for_displayed_user' => true,
        'item_css_id' => 'companies_budypress_posts'
    ) );

}

add_action( 'bp_setup_nav', 'companies_buddypress_tab', 50 );
function companies_budypress_posts () {
    add_action( 'bp_template_title', 'companies_buddypress_recent_posts_title' );
    add_action( 'bp_template_content', 'companies_buddypress_recent_posts_content' );
    bp_core_load_template( apply_filters( 'bp_core_template_plugin', 'members/single/plugins' ) );
}
function companies_buddypress_recent_posts_title() {
    _e( 'Франшизы', 'sp-theme' );
}
function companies_buddypress_recent_posts_content() {
    $myposts = get_posts(  array(
        'posts_per_page' => 5,
        'author'         => bp_displayed_user_id(),
        'post_type'      => 'company'
    ));
    if( ! empty($myposts) ) {

        foreach($myposts as $post) {
            setup_postdata( $post );
            if (has_post_thumbnail( $post->ID ) ):
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'sidebar-smallthumbnew' );
            else :
                $image[0] = "http://placehold.it/85x60";
            endif;
            echo '<li class="sidebar mostpop post-' . $post->ID . '"><div id="postimage"><a href="' . get_permalink($post->ID) . '"><img src="' . $image[0] . '" /></a></div><div id="postinfo"><a href="' . get_permalink($post->ID) . '">' . get_the_title($post->ID) . '</a></div></li>';
        }
        echo '</ul>';
        wp_reset_postdata();

    } else { ?>
        <div class="info" id="message">
            <p><strong><?php bp_displayed_user_fullname(); ?></strong> has No posts.</p>

        </div>
    <?php }
//    $profileUserID = bp_displayed_user_id();
////
////    if( $profileUserID > 0 ) {
////        $posts = get_posts( array(
////            'author' => $profileUserID,
////            'posts_per_page' => 5,
////            'post_type' => 'company'
////        ));
////        if( is_array( $posts ) && ! empty( $posts ) ) {
////
////            echo '<ul>';
////
////            foreach( $posts as $post ){
////                setup_postdata( $post );
////                ?>
    //<!--                <li>-->
    //<!--                    <a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a>-->
    //<!--                </li>-->
    //<!--                --><?php
////            }
////
////            echo '</ul>';
////
////        }
////    }
}

/*Buddypress companies tab end*/

/*BuddyPress Tabs own group end*/

function webriti_remove_admin_bar_links() {
    global $wp_admin_bar;
if(!is_admin()) {


//Remove WordPress Logo Menu Items
    $wp_admin_bar->remove_menu('wp-logo'); // Removes WP Logo and submenus completely, to remove individual items, use the below mentioned codes
    $wp_admin_bar->remove_menu('about'); // 'About WordPress'
    $wp_admin_bar->remove_menu('wporg'); // 'WordPress.org'
    $wp_admin_bar->remove_menu('documentation'); // 'Documentation'
    $wp_admin_bar->remove_menu('support-forums'); // 'Support Forums'
    $wp_admin_bar->remove_menu('feedback'); // 'Feedback'

//Remove Site Name Items
    $wp_admin_bar->remove_menu('site-name'); // Removes Site Name and submenus completely, To remove individual items, use the below mentioned codes
    $wp_admin_bar->remove_menu('view-site'); // 'Visit Site'
    $wp_admin_bar->remove_menu('dashboard'); // 'Dashboard'
    $wp_admin_bar->remove_menu('themes'); // 'Themes'
    $wp_admin_bar->remove_menu('widgets'); // 'Widgets'
    $wp_admin_bar->remove_menu('menus'); // 'Menus'
    $wp_admin_bar->remove_menu('ubermenu'); // 'Menus'


// Remove 'Howdy, username' Menu Items
    //$wp_admin_bar->remove_menu('my-account'); // Removes 'Howdy, username' and Menu Items
    $wp_admin_bar->remove_menu('user-actions'); // Removes Submenu Items Only
    $wp_admin_bar->remove_menu('user-info'); // 'username'
    $wp_admin_bar->remove_menu('edit-profile'); // 'Edit My Profile'
    $wp_admin_bar->remove_menu('logout'); // 'Log Out'
}
}
//add_action( 'wp_before_admin_bar_render', 'webriti_remove_admin_bar_links' );
function root_acf_format_value( $value, $post_id, $field ) {

    $value = do_shortcode($value);

    return $value;
}

add_filter('acf/format_value/type=textarea', 'root_acf_format_value', 10, 3);

