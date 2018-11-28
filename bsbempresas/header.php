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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/theme.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <?php wp_head(); ?>

    <link href="https://vjs.zencdn.net/7.3.0/video-js.css" rel="stylesheet">


</head>

<body <?php body_class(); ?>>
<div id="header-bg">
    <div class="container" style="height: 100%;">
        <div class="row" style="height: 100%;">
            <div class="col-8 d-flex align-items-center">
                <div class="text-right pr-5">
                    <img id="header-logo" src="<?php bloginfo('template_url')?>/images/header/logo.png"
                         alt="logo-bsb-empresas"
                    />
                </div>
            </div>
            <div id="magazine-wrapper" class="col-4">
                <a href="http://leituraestrategica.com.br" target="_blank">
                    <img id="header-magazine" src="<?php bloginfo('template_url')?>/images/header/capa.jpg" alt="magazine-img"/>
                </a>
            </div>
        </div>
    </div>
</div>


<div id="menu-wrapper">
    <span id="sidebar-in" class="pt-1"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDM0NC4zMzkgMzQ0LjMzOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzQ0LjMzOSAzNDQuMzM5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPGc+CgkJCTxyZWN0IHk9IjQ2LjA2IiB3aWR0aD0iMzQ0LjMzOSIgaGVpZ2h0PSIyOS41MiIgZmlsbD0iIzAwMDAwMCIvPgoJCTwvZz4KCQk8Zz4KCQkJPHJlY3QgeT0iMTU2LjUwNiIgd2lkdGg9IjM0NC4zMzkiIGhlaWdodD0iMjkuNTIiIGZpbGw9IiMwMDAwMDAiLz4KCQk8L2c+CgkJPGc+CgkJCTxyZWN0IHk9IjI2OC43NDgiIHdpZHRoPSIzNDQuMzM5IiBoZWlnaHQ9IjI5LjUzMSIgZmlsbD0iIzAwMDAwMCIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" /></span>
    <div class="container">
        <ul id="menu-principal" class="nav justify-content-center">
            <?php foreach (get_menu_items_by_registered_slug('header-menu') as $item): ?>
                <li class="menu-item">
                    <a href="<?php echo $item->url ?>" target="<?php echo $item->target ?>"
                        class="<?php echo implode(' ', $item->classes) ?>">
                        <?php echo $item->title ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>


