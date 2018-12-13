<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/11/18
 * Time: 11:01
 */

function wpb_add_google_fonts() {
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700,800', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,700,800', false );
    wp_enqueue_style( 'wpb-google-fonts', 'https://use.typekit.net/zmz2hey.css', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
// Stylesheets and Scripts
function bsb_empresas_scripts() {

    // Styles
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.1' );
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/theme.css' );
    wp_enqueue_style( 'slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1' );

    // Scripts
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), '1.14.3', true );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), '4.1.1', true );
    wp_enqueue_script( 'videojs', 'https://vjs.zencdn.net/7.3.0/video.min.js', array(), '7.3.0', true );
    wp_enqueue_script( 'youtube',  get_template_directory_uri(). '/js/youtube.min.js', array(), '1.0', true );
    wp_enqueue_script( 'sidebar',  get_template_directory_uri() . '/js/sidebar_scripts.js', array(), '1.0', true );
    wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );
}

function modify_jquery() {
    if ( !is_admin() ) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.1.1');
        wp_enqueue_script('jquery');
    }
}

add_action('init', 'modify_jquery');
add_action( 'wp_enqueue_scripts', 'bsb_empresas_scripts' );

//Funcao que varre o menu e lista seus itens
function get_menu_items_by_registered_slug($menu_slug, $args = []) {

    $menu_items = array();

    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_slug ] ) ) {
        $menu = get_term( $locations[ $menu_slug ] );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
    }

    return apply_filters( 'wp_get_nav_menu_items', $menu_items, $menu, $args );
    // return $menu_items;

}

function menu_set_dropdown( $sorted_menu_items, $args ) {
    $last_top = 0;
    foreach ( $sorted_menu_items as $key => $obj ) {
        // it is a top lv item?
        if ( 0 == $obj->menu_item_parent ) {
            // set the key of the parent
            $last_top = $key;
        } else {
            $sorted_menu_items[$last_top]->classes['dropdown'] = 'dropdown';
        }
    }
    return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );


function qtc_setup_theme() {

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form']);

    add_image_size('qtc_news', 420, 300, true);
}

add_action( 'after_setup_theme', 'qtc_setup_theme' );

function qtc_scripts() {
    // wp_enqueue_style('NAME', 'LOCATION|URL', ['DEPEDENCIES'], 'Version Ex.: 1.0.4');
    // wp_enqueue_script('NAME', 'LOCATION|URL', ['DEPEDENCIES'], 'Version Ex.: 1.0.4');
}

add_action('wp_enqueue_scripts', 'qtc_scripts');

function register_qtc_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'lateral-menu' => __( 'Lateral Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_qtc_menus' );

register_sidebar(array(
    'name'=> 'Rodapé 1',
    'id' => 'footer_1',
));

//Criando custom post type para Noticias

add_action( 'init', 'create_news_post_type' );
function create_news_post_type() {
    $label = array(
        'name' => 'Notícias',
        'singular_name' => 'Notícia',
        'author' => 'Autor',
        'name'               => 'Notícias',
        'singular_name'      => 'Notícias',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar nova Notícia',
        'edit_item'          => 'Editar Notícia',
        'new_item'           => 'Nova Notícia',
        'all_items'          => 'Todas as Notícias',
        'view_item'          => 'Visualizar Notícia',
        'search_items'       => 'Buscar Notícia',
        'not_found'          => 'Nenhuma Notícia encontrada',
        'not_found_in_trash' => 'Nenhuma Notícia encontrada na lixeira',
        'menu_name'          => 'Notícias'
    );
    register_post_type( 'noticia',
        array(
            'labels' => $label,
                array(
                'name' => 'Notícias',
                'singular_name' => 'Notícia'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
            'taxonomies'  => array( 'category' )
        )
    );
}

//Criando custom post type para Entrevistas

add_action( 'init', 'create_entrevistas_post_type' );
function create_entrevistas_post_type() {
    $label = array(
        'name' => 'Entrevistas',
        'singular_name' => 'Entrevista',
        'author' => 'Autor',
        'name'               => 'Entrevistas',
        'singular_name'      => 'Entrevista',
        'add_new'            => 'Adicionar nova',
        'add_new_item'       => 'Adicionar nova Entrevista',
        'edit_item'          => 'Editar Entrevista',
        'new_item'           => 'Nova Entrevista',
        'all_items'          => 'Todas as Entrevistas',
        'view_item'          => 'Visualizar Entrevista',
        'search_items'       => 'Buscar Entrevista',
        'not_found'          => 'Nenhuma Entrevista encontrada',
        'not_found_in_trash' => 'Nenhuma Entrevista encontrada na lixeira',
        'menu_name'          => 'Entrevistas'
    );
    register_post_type( 'entrevista',
        array(
            'labels' => $label,
            array(
                'name' => 'Entrevistas',
                'singular_name' => 'Entrevista'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'categories' ),
            'taxonomies'  => array( 'category' )
        )
    );

}

//Criando custom post type para Colunistas

add_action( 'init', 'create_columnists_post_type' );
function create_columnists_post_type() {
    $label = array(
        'name' => 'Colunistas',
        'singular_name' => 'Colunista',
        'author' => 'Autor',
        'name'               => 'Colunistas',
        'singular_name'      => 'Colunista',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar novo Colunista',
        'edit_item'          => 'Editar Colunista',
        'new_item'           => 'Novo Colunista',
        'all_items'          => 'Todos os Colunistas',
        'view_item'          => 'Visualizar Colunista',
        'search_items'       => 'Buscar Colunista',
        'not_found'          => 'Nenhum Colunista encontrado',
        'not_found_in_trash' => 'Nenhum Colunista encontrado na lixeira',
        'menu_name'          => 'Colunistas'
    );
    register_post_type( 'colunista',
        array(
            'labels' => $label,
            array(
                'name' => 'Colunistas',
                'singular_name' => 'Colunista'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
            'taxonomies'  => array( 'category' )
        )
    );
}

//Criando custom post type para Negócios

add_action( 'init', 'create_business_post_type' );
function create_business_post_type() {
    $label = array(
        'name' => 'Negócios',
        'singular_name' => 'Negócio',
        'author' => 'Autor',
        'name'               => 'Negócios',
        'singular_name'      => 'Negócio',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar novo Negócio',
        'edit_item'          => 'Editar Negócio',
        'new_item'           => 'Novo Negócio',
        'all_items'          => 'Todos os Negócios',
        'view_item'          => 'Visualizar Negócio',
        'search_items'       => 'Buscar Negócio',
        'not_found'          => 'Nenhum Negócio encontrado',
        'not_found_in_trash' => 'Nenhum Negócio encontrado na lixeira',
        'menu_name'          => 'Negócios'
    );
    register_post_type( 'negocios',
        array(
            'labels' => $label,
            array(
                'name' => 'Negócios',
                'singular_name' => 'Negócio'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
            'taxonomies'  => array( 'category' )
        )
    );
}

//Criando custom post type para Artigos

add_action( 'init', 'create_articles_post_type' );
function create_articles_post_type() {
    $label = array(
        'name' => 'Artigos',
        'singular_name' => 'Artigo',
        'author' => 'Autor',
        'name'               => 'Artigos',
        'singular_name'      => 'Artigo',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar novo Artigo',
        'edit_item'          => 'Editar Artigo',
        'new_item'           => 'Novo Artigo',
        'all_items'          => 'Todos os Artigos',
        'view_item'          => 'Visualizar Artigo',
        'search_items'       => 'Buscar Artigo',
        'not_found'          => 'Nenhum Artigo encontrado',
        'not_found_in_trash' => 'Nenhum Artigo encontrado na lixeira',
        'menu_name'          => 'Artigos'
    );
    register_post_type( 'artigos',
        array(
            'labels' => $label,
            array(
                'name' => 'Artigos',
                'singular_name' => 'Artigo'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'categories' ),
            'taxonomies'  => array( 'category' )
        )
    );

}

//Criando custom post type para Vídeos

add_action( 'init', 'create_videos_post_type' );
function create_videos_post_type() {
    $label = array(
        'name' => 'Vídeos',
        'singular_name' => 'Vídeo',
        'author' => 'Autor',
        'name'               => 'Vídeos',
        'singular_name'      => 'Vídeo',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar novo Vídeo',
        'edit_item'          => 'Editar Vídeo',
        'new_item'           => 'Novo Vídeo',
        'all_items'          => 'Todos os Vídeos',
        'view_item'          => 'Visualizar Vídeo',
        'search_items'       => 'Buscar Vídeo',
        'not_found'          => 'Nenhum Vídeo encontrado',
        'not_found_in_trash' => 'Nenhum Vídeo encontrado na lixeira',
        'menu_name'          => 'Vídeos'
    );
    register_post_type( 'videos',
        array(
            'labels' => $label,
            array(
                'name' => 'Vídeos',
                'singular_name' => 'Vídeo'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'categories' ),
            'taxonomies'  => array( 'category' )
        )
    );

}


//Criando custom post type para Fim de Semana

add_action( 'init', 'create_fim_de_semana_post_type' );
function create_fim_de_semana_post_type() {
    $label = array(
        'name' => 'Fim-de-semana',
        'singular_name' => 'Fim-de-semana',
        'author' => 'Autor',
        'name'               => 'Fim-de-semana',
        'singular_name'      => 'Fim-de-semana',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar novo Fim-de-semana',
        'edit_item'          => 'Editar Fim-de-semana',
        'new_item'           => 'Novo Fim-de-semana',
        'all_items'          => 'Todos os Fins-de-semana',
        'view_item'          => 'Visualizar Fim-de-semana',
        'search_items'       => 'Buscar Fim-de-semana',
        'not_found'          => 'Nenhum Fim-de-semana encontrado',
        'not_found_in_trash' => 'Nenhum Fim-de-semana encontrado na lixeira',
        'menu_name'          => 'Fim-de-semana'
    );
    register_post_type( 'fim_de_semana',
        array(
            'labels' => $label,
            array(
                'name' => 'Fim-de-semana',
                'singular_name' => 'Fim-de-semana'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'categories' ),
            'taxonomies'  => array( 'category' )
        )
    );

}

//Criando custom type para Eventos

add_action( 'init', 'create_events_post_type' );
function create_events_post_type() {
    $label = array(
        'name' => 'Eventos',
        'singular_name' => 'Eventos',
        'author' => 'Autor',
        'name'   => 'Eventos',
        'singular_name'      => 'Evento',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar novo Evento',
        'edit_item'          => 'Editar Evento',
        'new_item'           => 'Novo Evento',
        'all_items'          => 'Todos os Eventos',
        'view_item'          => 'Visualizar Evento',
        'search_items'       => 'Buscar Eventos',
        'not_found'          => 'Nenhum evento encontrado',
        'not_found_in_trash' => 'Nenhum evento encontrado na lixeira',
        'menu_name'          => 'Eventos'
    );
    register_post_type( 'eventos',
        array(
            'labels' => $label,
            array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Events' ),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'taxonomies'  => array( 'category' )
        )
    );
}




?>