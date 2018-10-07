<?php

function basismit_enqueue_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/node_modules/materialize-css/dist/css/materialize.min.css', array(), '1.1', 'all');
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/node_modules/materialize-css/dist/js/materialize.min.js', array(), '1.1', 'all');
}

add_action('wp_enqueue_scripts', 'basismit_enqueue_scripts');
function create_sidebar(){
    $args = array(
        'name'          => sprintf( __( 'Sidebar_primary' ) ),
        'id'            => "sidebar_primary",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    );
    register_sidebar( $args );
}
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
add_action( 'init', 'register_my_menus' );

add_action('widgets_init', 'create_sidebar');

function a_hooked_function() {
    echo 'Hey';
}
add_action( 'an_action_name', 'a_hooked_function');

do_action( 'an_action_name');

function an_init_hook() {
    echo'Wp is geinitiealiseerd';
}
add_action( 'init', 'an_init_hook');

function scratch_filter_title($title) {
    return '<span class="awesome-title">' . $title . '</span>';
}
// add_filter( 'the_title', 'scratch_filter_title');

//<?php echo body_class();/?/> toevoegen aan body tag

function scratch_filter_body_class($classes) {
    return array_merge( $classes, array('awesomeness'));
}
add_filter( 'body_class', 'scratch_filter_body_class');


function create_recipe_taxs() {
	register_taxonomy(
		'allergy',
		'recipe',
		array(
			'label' => __( 'Allergy' ),
			'rewrite' => array( 'slug' => 'allergy' ),
			'hierarchical' => true,
		)
    );
    register_taxonomy(
		'difficulty',
		'recipe',
		array(
			'label' => __( 'Difficulty' ),
			'rewrite' => array( 'slug' => 'difficulty' ),
			'hierarchical' => true,
		)
    );
    register_taxonomy(
		'custom-category',
		'recipe',
		array(
			'label' => __( 'Category' ),
			'rewrite' => array( 'slug' => 'custom-category' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'create_recipe_taxs' );

function create_event_taxs() {
	register_taxonomy(
		'province',
		'event',
		array(
			'label' => __( 'Province' ),
			'rewrite' => array( 'slug' => 'province' ),
			'hierarchical' => true,
		)
    );
    register_taxonomy(
		'setting',
		'event',
		array(
			'label' => __( 'Setting' ),
			'rewrite' => array( 'slug' => 'setting' ),
			'hierarchical' => true,
		)
    );
    register_taxonomy(
		'tag',
		'event',
		array(
			'label' => __( 'Tag' ),
			'rewrite' => array( 'slug' => 'tag' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'create_event_taxs' );


function scratch_register_movies()
{
    $labels = array(
        'name' => __('Movies', 'scratch'),
        'singular_name' => __('Movie', 'scratch'),
        'add_new' => __('Add New Movie', 'scratch'),
        'all_items' => __('All Movies', 'scratch'),
        'add_new_item' => __('Add New Movie', 'scratch'),
        'edit_item' => __('Edit Movie', 'scratch'),
        'new_item' => __('New Movie', 'scratch'),
        'view_item' => __('View Movie', 'scratch'),
        'search_item' => __('Search Movie', 'scratch'),
        'not_found' => __('Movie not found', 'scratch'),
        'not_found_in_trash' => __('Movie not found in trash', 'scratch'),
        'parent_item_colon' => __('Parent movie', 'scratch'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true, 
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'videos'),
        'capability_type' => 'post', 
        'hierarchical' => false, 
        'supports' => array(
            'title',
            'editor', 
            'excerpt', 
            'thumbnail', 
            'revisions',
        ),
        'taxonomies' => array(
            'custom-category', 'post_tag',
        ),
        'menu_position' => 5,
        'exclude_from_search' => false,
            

    );

    register_post_type( 'movie', $args );
}

add_action( 'init', 'scratch_register_movies');

function scratch_register_fruits()
{
    $labels = array(
        'name' => __('Fruits', 'scratch'),
        'singular_name' => __('Fruit', 'scratch'),
        'add_new' => __('Add New Fruit', 'scratch'),
        'all_items' => __('All Fruits', 'scratch'),
        'add_new_item' => __('Add New Fruit', 'scratch'),
        'edit_item' => __('Edit Fruit', 'scratch'),
        'new_item' => __('New Fruit', 'scratch'),
        'view_item' => __('View Fruit', 'scratch'),
        'search_item' => __('Search Fruit', 'scratch'),
        'not_found' => __('Fruit not found', 'scratch'),
        'not_found_in_trash' => __('Fruit not found in trash', 'scratch'),
        'parent_item_colon' => __('Parent Fruit', 'scratch'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true, 
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'fruits'),
        'capability_type' => 'post', 
        'hierarchical' => false, 
        'supports' => array(
            'title',
            'editor', 
            'excerpt', 
            'thumbnail', 
            'revisions',
        ),
        'taxonomies' => array(
            'custom-category', 'post_tag',
        ),
        'menu_position' => 5,
        'exclude_from_search' => false,
            

    );

    register_post_type( 'fruit', $args );
}

add_action( 'init', 'scratch_register_fruits');


function scratch_register_recipes()
{
    $labels = array(
        'name' => __('Recipes', 'scratch'),
        'singular_name' => __('Recipe', 'scratch'),
        'add_new' => __('Add New Recipe', 'scratch'),
        'all_items' => __('All Recipes', 'scratch'),
        'add_new_item' => __('Add New Recipe', 'scratch'),
        'edit_item' => __('Edit Recipe', 'scratch'),
        'new_item' => __('New Recipe', 'scratch'),
        'view_item' => __('View Recipe', 'scratch'),
        'search_item' => __('Search Recipe', 'scratch'),
        'not_found' => __('Recipe not found', 'scratch'),
        'not_found_in_trash' => __('Recipe not found in trash', 'scratch'),
        'parent_item_colon' => __('Parent Recipe', 'scratch'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true, 
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'recipes'),
        'capability_type' => 'post', 
        'hierarchical' => false, 
        'supports' => array(
            'title',
            'editor', 
            'excerpt', 
            'thumbnail', 
            'revisions',
            'custom-field'
        ),
        'taxonomies' => array(
            'recipe_allergy', 'recipe_difficulty', 'recipe_category'
        ),
        'menu_position' => 5,
        'exclude_from_search' => false,
        'register_meta_box_cb' => 'scratch_add_recipe_metaboxes',

            

    );

    register_post_type( 'recipe', $args );
}

function scratch_register_events()
{
    $labels = array(
        'name' => __('Events', 'scratch'),
        'singular_name' => __('Event', 'scratch'),
        'add_new' => __('Add New Event', 'scratch'),
        'all_items' => __('All Events', 'scratch'),
        'add_new_item' => __('Add New Event', 'scratch'),
        'edit_item' => __('Edit Event', 'scratch'),
        'new_item' => __('New Event', 'scratch'),
        'view_item' => __('View Event', 'scratch'),
        'search_item' => __('Search Event', 'scratch'),
        'not_found' => __('Event not found', 'scratch'),
        'not_found_in_trash' => __('Event not found in trash', 'scratch'),
        'parent_item_colon' => __('Parent Event', 'scratch'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true, 
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'events'),
        'capability_type' => 'post', 
        'hierarchical' => false, 
        'supports' => array(
            'title',
            'editor', 
            'excerpt', 
            'thumbnail', 
            'revisions',
        ),
        'taxonomies' => array(
            'event_province', 'event_tags', 'event_setting',
        ),
        'menu_position' => 5,
        'exclude_from_search' => false,
            

    );

    register_post_type( 'event', $args );
}

//TODO: nog 1 extra post type

add_action( 'init', 'scratch_register_recipes');
add_action( 'init', 'scratch_register_events');

function scratch_add_recipe_metaboxes() {
    $screens = array('recipe');

    foreach($screens as $screen) {
        add_meta_box( 'recipe_box', __('Our custom Recipe Fields'), 'scratch_recipe_box_callback', $screen);
    }
}
function scratch_recipe_box_callback($post) {
    wp_nonce_field('recipe_save_meta_box_data', 'recipe_meta_box_nonce' );

    $subtitle = get_post_meta( $post->ID, '_recipe_subtitle', true );
    echo '<label for="recipe_subtitle">' . __('subtitle', 'scratch') . '</label>';
    echo '<br><input style="100%; margin: 0;" type="text" id="recipe_subtitle" name="recipe_subtitle size="255" value="'.$subtitle.'">';

    $ingredients = get_post_meta( $post->ID, '_recipe_ingredients', true );
    echo '<br><label for="recipe_ingredients">' . __('ingredients', 'scratch') . '</label>';
    echo '<br><textarea style="100%; margin: 0;" id="recipe_ingredients" name="recipe_ingredients size="255">'.$ingredients.'</textarea>';
}

add_action( 'add_meta_boxes', 'scratch_add_recipe_metaboxes' );

function scratch_save_recipe_data($postid) {
    if (! isset( $_POST['recipe_meta_box_nonce'])){return;}
    if(! wp_verify_nonce( $_POST['recipe_meta_box_nonce'], 'recipe_save_meta_box_data' )){return;}
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){return;}

    if(! current_user_can( 'edit_post', $post_id )){return;}
    if(! isset($_POST['recipe_subtitle'])){return;}
    if(! isset($_POST['recipe_ingredients'])){return;}

    $subtitle = sanitize_text_field($_POST['recipe_subtitle']);
    update_post_meta($postid, '_recipe_subtitle', $subtitle);

    $ingredients = sanitize_text_field($_POST['recipe_ingredients']);
    update_post_meta($postid, '_recipe_ingredients', $ingredients);
}

add_action( 'save_post', 'scratch_save_recipe_data')
?>