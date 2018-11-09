<?php
/**
 * @package WordPress
 * @subpackage BSB Empresas 2019
 * @since BSB Empresas 2019
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); echo ' | '; bloginfo('description');?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/theme.css">

    <div id="header-bg">
        <div class="container" style="height: 150px;">
            <div class="row" style="height: 100%;">
                <div class="col-8 d-flex align-items-center justify-content-end pr-5">
                    <img id="header-logo" src="<?php bloginfo('template_url')?>/images/header/logo.png"
                         alt="logo-bsb-empresas"/>
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <h4 id="magazine-text" class="align-self-center pt-5">Assine já</h4>
                    <img id="header-magazine" class="align-self-end"
                         src="<?php bloginfo('template_url')?>/images/header/magazine-img.jpg" alt="magazine-img"/>
                </div>
            </div>
        </div>
    </div>


    <?php wp_head(); ?>

    <link href="https://vjs.zencdn.net/7.3.0/video-js.css" rel="stylesheet">


</head>

<body <?php body_class(); ?>>
    <div class="bg-dark">
        <?php wp_nav_menu(['theme_location' => 'header-menu', 'container_class' => 'container', 'menu_class' => 'nav justify-content-center'])?>
    </div>


