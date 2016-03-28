<?php
if ( !defined('ABSPATH')) exit;
/**
 * Theme's Functions and Definitions
 * @file           functions.php
 * @package        totem 
**/

add_post_type_support('page', 'excerpt');
add_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

//=================================================================== IMAGES//   
function wpse_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    if ( function_exists( 'add_theme_support') ) {
        set_post_thumbnail_size( 200, 200, true ); 
    }
    if ( function_exists( 'add_image_size' ) ) { 
        add_image_size( 'home', 360, 300, true);
        add_image_size( 'int', 675, 750, true);
        add_image_size( 'ficha', 528, 400, true);
        add_image_size( 'wide', 1064, 250, array('center', 'center'));
        add_image_size( 'horizontal-image', 1080, 300, array('center', 'center'));
    }
} 
add_action( 'after_setup_theme', 'wpse_setup_theme' );

//=================================================================== IS CHILD// 
function is_child($pageID) { 
    global $post; 
    if( is_page() && ($post->post_parent==$pageID) ) {
        return true;
    } else { 
        return false; 
    }
}

//=================================================================== CUT OFF// 
function short_title($after = '', $length) {
    $mytitle = explode(' ', get_the_title(), $length);
    if (count($mytitle)>=$length) {
        array_pop($mytitle);
        $mytitle = implode(" ",$mytitle). $after;
    } else {
        $mytitle = implode(" ",$mytitle);
    }
    return $mytitle;
}

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    } 
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    } 
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

//=================================================================== CUSTOM ADMIN LOGO// 
function custom_login_logo() {
    echo '<style type="text/css">
        body.login {background-image:url('.get_bloginfo('template_directory').'/imag/main/main_nocturnos.png) !important; background-size:100% auto !important;}
        h1 a { background-image:url('.get_bloginfo('template_directory').'/imag/logo/logo_terral_admin.png) !important; background-size:320px 67px !important; width:320px !important; height:67px !important;}
        .login #backtoblog a, .login #nav a {color:#ffffff;}
    </style>';
}

add_action('login_head', 'custom_login_logo');

//=================================================================== REMOVE ADMIN MENUS// 
function remove_menus () {
global $menu;
    $restricted = array(__('Links'),__('Comments'));
    end ($menu);
    while (prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
    }
}
add_action('admin_menu', 'remove_menus');

//=================================================================== CUSTOM FUNCTIONS//
/**
 * Get active section from Request URI
 * @return string post_name of the active section
 */
function section_from_url(){
	global $wpdb;
	$url = $_SERVER['REQUEST_URI'];
	$first_level_pages = $wpdb->get_results("SELECT ID, post_name, post_title FROM $wpdb->posts WHERE post_type = 'page' AND post_parent = 0 AND post_status = 'publish'");
	foreach ( $first_level_pages as $section ) {
		if ( stristr($url, '/'.$section->post_name.'/') ) $out = $section;
	}
	$out->post_title = apply_filters('the_title', $out->post_title);
	return $out;
}

/**
 * Get post/page/attachment ID by post_name (sanitized title)
 * @param string $name The post_name of the object
 * @return integer Object ID in $wpdb->posts
 */
function get_id_by_postname($name){
global $wpdb;
    return $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$name' AND post_status = 'publish'");
}

/**
 * Get permalink by the post_name of the post/page
 * @param string post_name of the object
 * @return string Object permalink
 */
function get_permalink_by_postname($name){
global $wpdb;
	return get_permalink($wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE (post_name = '$name' AND post_status = 'publish') AND (post_type = 'page' OR post_type = 'post')"));
}

function get_attachment_id_from_src ($link) {
    global $wpdb;
        $link = preg_replace('/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $link);
        return $wpdb->get_var("SELECT ID FROM {$wpdb->posts} WHERE guid='$link'");
}

//=================================================================== PARENT PAGES//
function home_pages($args){
global $wpdb;
    // Defaults
    $defaults = array( 'id' => $hpage->ID, 'class' => 'hpage', 'excerpt' => true, 'content' => false, 'childs' => false, 'exclude' => true );
    $r = wp_parse_args( $args, $defaults );
    extract( $r, EXTR_SKIP );

    if($exclude != 'false') $home_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE (post_type = 'page' AND post_parent = ".$id.") AND (post_status = 'publish' AND menu_order >= 0) ORDER BY menu_order ASC");
    else $home_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE (post_type = 'page' AND post_parent = ".$id.") AND post_status = 'publish' ORDER BY menu_order ASC");
    if(!empty($home_pages)){
        $i = 0; $home_pages_size = count($home_pages) - 1;
        foreach($home_pages as $hpages){
            if ( $i === 0 ) $pos = ''; elseif ( $i === $home_pages_size ) $pos = 'bloque'; else $pos = 'bloque';
            if($hpages->menu_order >= 0){
                $value = get_post_meta($hpages->ID, '_seleccione_estilo_de_titulo', true);
                echo '<div class="block col-xs-4" id="'.$hpages->post_name.'">';
                    echo get_the_post_thumbnail($hpages->ID, 'home', array('class' => 'img-responsive'));
                        if($value=='Una línea'){echo '<div class="title block-1">';}
                        if($value=='Dos líneas'){echo '<div class="title block-2">';}
                        if($value=='Tres líneas'){echo '<div class="title block-3">';}
                        echo '<h2><a href="'.get_permalink($hpages->ID).'">'.get_the_title($hpages->ID).'</a></h2>';
                    echo '</div>';
                echo '</div>';
            $i++; }
        }
    }
}

//=================================================================== PARENT PAGES//
function diurnos_pages($args){
global $wpdb;
    // Defaults
    $defaults = array( 'id' => $dpage->ID, 'class' => 'dpage', 'excerpt' => true, 'content' => false, 'childs' => false, 'exclude' => true );
    $r = wp_parse_args( $args, $defaults );
    extract( $r, EXTR_SKIP );

    if($exclude != 'false') $diurnos_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE (post_type = 'page' AND post_parent = ".$id.") AND (post_status = 'publish' AND menu_order >= 0) ORDER BY menu_order ASC");
    else $diurnos_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE (post_type = 'page' AND post_parent = ".$id.") AND post_status = 'publish' ORDER BY menu_order ASC");
    if(!empty($diurnos_pages)){
        $i = 0; $diurnos_pages_size = count($diurnos_pages) - 1;
        foreach($diurnos_pages as $dpages){
            if ( $i === 0 ) $pos = ''; elseif ( $i === $diurnos_pages_size ) $pos = 'bloque'; else $pos = 'bloque';
            if($dpages->menu_order >= 0){
                $value_d = get_post_meta($dpages->ID, '_seleccione_estilo_de_titulo', true);
                $text= apply_filters('the_excerpt', get_post($dpages->ID)->post_excerpt);
                echo '<div class="block col-xs-6" id="'.$dpages->post_name.'">';
                    echo get_the_post_thumbnail($dpages->ID, 'int', array('class' => 'img-responsive'));
                    if($value_d=='Una línea'){echo '<div class="title block-1">';}
                    if($value_d=='Dos líneas'){echo '<div class="title block-2">';}
                    if($value_d=='Tres líneas'){echo '<div class="title block-3">';}
                        echo '<h3><a href="'.get_permalink($dpages->ID).'">'.get_the_title($dpages->ID).'</a></h3>';
                    echo '</div>';
                    echo '<div class="excerpt">';
                        echo '<p class="no-float">'.$text.'</p>';
                    echo '</div>';
                echo '</div>';
            $i++; }
        }
    }
}

//=================================================================== POST TYPE AND TAXONOMY // 
add_action( 'init', 'create_post_type_tours' );
function create_post_type_tours() {
    register_post_type( 'tours',
        array(
            'labels' => array(
                'name' => __('Tours y Spa'),
                'singular_name' => __('Tour / Spa'),
                'add_new' => __('Agregar tour / programa'),
                'add_new_item' => __('Agregar nuevo tour / programa'),
                'edit_item' => __('Editar tour / programa'),
                'new_item' => __('Nuevo tour / programa'),
                'all_items' => __('Todos los tours / programas'),
                'view_item' => __('Ver tours / programas'),
                'search_items' => __('Buscar tours / programas')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'tours', 'hierarchical' => true),
            'hierarchical' => true,
            'show_ui' => true,
            'query_var' => true,
            'update_count_callback' => '_update_post_term_count',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
        )
    );
    flush_rewrite_rules();
}

add_action('init', 'create_taxonomy_tours', 0);
function create_taxonomy_tours() {
    $labels = array(
        'name'                => __( 'Tipos de Tours o Programa', 'taxonomy general name' ),
        'singular_name'       => __( 'Tipo de Tour / Programa', 'taxonomy singular name' ),
        'search_items'        => __( 'Buscar en Tours / Programas' ),
        'all_items'           => __( 'Todos los Tours / Programas' ),
        'edit_item'           => __( 'Editar Tours / Programas' ), 
        'update_item'         => __( 'Actualizar Tours / Programas' ),
        'add_new_item'        => __( 'Agregar Tours / Programas' ),
        'menu_name'           => __( 'Tipos de Tours / Programas' )
    );  
    $args = array(
        'hierarchical'        => true,
        'labels'              => $labels,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'query_var'           => true,
    );
    register_taxonomy('tipos-de-tours', array('tours'), $args);
}

//=================================================================== POST TYPE AND TAXONOMY // 
add_action( 'init', 'create_post_type_testimonios' );
function create_post_type_testimonios() {
    register_post_type( 'testimonios',
        array(
            'labels' => array(
                'name' => __('Testimonios'),
                'singular_name' => __('Testimonio'),
                'add_new' => __('Agregar testimonio'),
                'add_new_item' => __('Agregar nuevo testimonio'),
                'edit_item' => __('Editar testimonio'),
                'new_item' => __('Nuevo testimonio'),
                'all_items' => __('Todos los testimonio'),
                'view_item' => __('Ver testimonio'),
                'search_items' => __('Buscar testimonio')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonios', 'hierarchical' => true),
            'hierarchical' => true,
            'show_ui' => true,
            'query_var' => true,
            'update_count_callback' => '_update_post_term_count',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
        )
    );
    flush_rewrite_rules();
}

//=================================================================== POST TYPE AND TAXONOMY // 
add_action( 'init', 'create_post_type_carta' );
function create_post_type_carta() {
    register_post_type( 'carta',
        array(
            'labels' => array(
                'name' => __('Cartas'),
                'singular_name' => __('Carta'),
                'add_new' => __('Agregar carta'),
                'add_new_item' => __('Agregar nueva carta'),
                'edit_item' => __('Editar carta'),
                'new_item' => __('Nueva carta'),
                'all_items' => __('Todas las cartas'),
                'view_item' => __('Ver cartas'),
                'search_items' => __('Buscar cartas')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'cartas', 'hierarchical' => true),
            'hierarchical' => true,
            'show_ui' => true,
            'query_var' => true,
            'update_count_callback' => '_update_post_term_count',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
        )
    );
    flush_rewrite_rules();
}

add_action('init', 'create_taxonomy_carta', 0);
function create_taxonomy_carta() {
    $labels = array(
        'name'                => __( 'Tipos de Carta', 'taxonomy general name' ),
        'singular_name'       => __( 'Tipo de Carta', 'taxonomy singular name' ),
        'search_items'        => __( 'Buscar en Cartas' ),
        'all_items'           => __( 'Todas las Cartas' ),
        'edit_item'           => __( 'Editar Cartas' ), 
        'update_item'         => __( 'Actualizar Cartas' ),
        'add_new_item'        => __( 'Agregar Cartas' ),
        'menu_name'           => __( 'Tipos de Cartas' )
    );  
    $args = array(
        'hierarchical'        => true,
        'labels'              => $labels,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'query_var'           => true,
    );
    register_taxonomy('tipos-de-cartas', array('cartas'), $args);
}

//=================================================================== IMAGES FUNCTIONS//
function get_gallery_images(){
    global $wpdb;
    $gallery_pict = $wpdb->get_results("SELECT ID, post_title, post_content, post_excerpt FROM $wpdb->posts WHERE post_type = 'attachment' AND post_mime_type LIKE 'image%' AND post_excerpt LIKE 'galeria%' AND post_parent = '".get_the_ID()."' ORDER BY menu_order");
    if ( $gallery_pict ) {
        foreach ( $gallery_pict as $gal ) {
            echo '<div class="col-xs-3">';
                echo '<a href="'.wp_get_attachment_url($gal->ID).'" class="img-responsive" rel="prettyPhoto[gallery1]" title="'.$gal->post_title.'">';
                    echo wp_get_attachment_image($gal->ID, 'gal-image',array('class' => 'img-responsive'));
                echo '</a>';
            echo '</div>';
        } 
    }
}

//=================================================================== WORDPRESS WIDGETS// 
function totem_widgets_init() {
	register_sidebar(array(
        'name' => __('Sidebar General', 'totem'),
        'description' => __('Sidebar general sitio web', 'totem'),
        'id' => 'sidebar-general',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
        'before_widget' => '',
        'after_widget' => ''
    ));
}
add_action('widgets_init', 'totem_widgets_init');

//=================================================================== GET CUSTOM TAXONOMY TERMS //
function get_custom_terms($taxonomies, $args){
    $args = array('orderby'=>'asc','hide_empty'=>true,'parent' => 0);
    $custom_terms = get_terms(array($taxonomies), $args);
    foreach($custom_terms as $term){
        echo '<div class="filter" data-filter=".'.$term->slug.'">'.$term->name.'</div> <span class="sep">-</span>';
    }
}

//=================================================================== CONNECTIONS//
function my_connection_types() {
    p2p_register_connection_type( array(
        'name' => 'tours_to_page',
        'from' => 'tours',
        'to' => 'page',
        'cardinality' => 'many-to-many',
        'prevent_duplicates' => true,
        'reciprocal' => true
    ) );
    p2p_register_connection_type( array(
        'name' => 'testimonios_to_tours',
        'from' => 'testimonios',
        'to' => 'tours',
        'cardinality' => 'many-to-many',
        'prevent_duplicates' => true,
        'reciprocal' => true
    ) );
}
add_action( 'p2p_init', 'my_connection_types' );

//
?>