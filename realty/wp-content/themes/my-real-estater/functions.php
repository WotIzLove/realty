<?php add_action( 'init', 'register_post_types' );
 
function register_post_types(){
	register_post_type('realty', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Недвижимость', 
			'singular_name'      => 'Недвижимость', 
			'add_new'            => 'Добавить', 
			'add_new_item'       => 'Добавление', 
			'edit_item'          => 'Редактирование', 
			'new_item'           => 'Новая недвижимость', 
			'view_item'          => 'Смотреть недвижимость', 
			'search_items'       => 'Искать недвижимость', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Недвижимость', 
		),
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, 
		// 'show_in_admin_bar'   => null, 
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail' ],
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	register_post_type('cities', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Города', 
			'singular_name'      => 'Город', 
			'add_new'            => 'Добавить', 
			'add_new_item'       => 'Добавление', 
			'edit_item'          => 'Редактирование', 
			'new_item'           => 'Новый город',
			'view_item'          => 'Смотреть города', 
			'search_items'       => 'Искать города', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Города', 
		),
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy( 'taxonomy', [ 'realty' ], [ 
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Тип недвижимости',
			'singular_name'     => 'Тип недвижимости',
			'search_items'      => 'Найти тип недвижимости',
			'all_items'         => 'Все типы недвижимости',
			'view_item '        => 'Показать тип недвижимости',
			'parent_item'       => 'Родительский тип недвижимости',
			'parent_item_colon' => 'Родительский тип недвижимости:',
			'edit_item'         => 'Редактировать тип недвижимости',
			'update_item'       => 'Обновить тип недвижимости',
			'add_new_item'      => 'Добавить тип недвижимости',
			'new_item_name'     => 'Новый тип недвижимости',
			'menu_name'         => 'Тип недвижимости',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => true,

		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
}

// Сначала мы создаем функцию
function list_terms_custom_taxonomy( $atts ) {

    // Внутри функции мы извлекаем параметр произвольной таксономии нашего шорткода
    
        extract( shortcode_atts( array(
            'custom_taxonomy' => '',
        ), $atts ) );
    
    //параметры для функции wp_list_categories
    $args = array(
    'taxonomy' => $custom_taxonomy,
    'title_li' => '<h2 class="widget-title">Тип недвижимости</h2>'
    );
    
    // Оборачиваем ее в маркированный список
    echo '<ul>';
    echo wp_list_categories($args);
    echo '</ul>';
    }
    
    // Добавляем шорткод, который исполняет нашу функцию
    add_shortcode( 'ct_terms', 'list_terms_custom_taxonomy' );
    
    //Разрешаем выполнение шорткодов в текстовых виджетах
    
    add_filter('widget_text', 'do_shortcode');