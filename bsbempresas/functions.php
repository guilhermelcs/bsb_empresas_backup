<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/11/18
 * Time: 11:01
 */

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
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_qtc_menus' );

//Criando custom type para Eventos

add_action( 'init', 'create_events_post_type' );
function create_events_post_type() {
    $label = array(
        'name' => 'Eventos',
        'singular_name' => 'Eventos',
        'author' => 'Autor',
        'name'               => 'Eventos',
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
    register_post_type( 'events',
        array(
            'labels' => $label,
                array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Events' ),
            ),
            'public' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'taxonomies'  => array( 'category' )
        )
    );
}

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
    register_post_type( 'artigo',
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




?>