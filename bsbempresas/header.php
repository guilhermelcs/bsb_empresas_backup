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
    <div class="container">
        <ul id="menu-principal" class="nav justify-content-center">
            <li class="menu-item">
                <a href="#qtc-open-menu">
                    <img class="mr-3" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDIyNi4yMTYgMjI2LjIxNiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMjI2LjIxNiAyMjYuMjE2IiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4Ij4KICA8Zz4KICAgIDxnPgogICAgICA8cGF0aCBkPSJNOC43MDEsNDMuNTAzaDIwOC44MTRjNS4yMiwwLDguNzAxLTMuNDgsOC43MDEtOC43MDFzLTMuNDgtOC43MDEtOC43MDEtOC43MDFIOC43MDFDMy40OCwyNi4xMDIsMCwyOS41ODIsMCwzNC44MDIgICAgUzMuNDgsNDMuNTAzLDguNzAxLDQzLjUwM3oiIGZpbGw9IiMwMDAwMDAiLz4KICAgICAgPHBhdGggZD0ibTIxNy41MTUsMTA0LjQwN2gtMjA4LjgxNGMtNS4yMiwwLTguNzAxLDMuNDgtOC43MDEsOC43MDFzMy40OCw4LjcwMSA4LjcwMSw4LjcwMWgyMDguODE0YzUuMjIsMCA4LjcwMS0zLjQ4IDguNzAxLTguNzAxcy0zLjQ4MS04LjcwMS04LjcwMS04LjcwMXoiIGZpbGw9IiMwMDAwMDAiLz4KICAgICAgPHBhdGggZD0ibTIxNy41MTUsMTgyLjcxM2gtMjA4LjgxNGMtNS4yMiwwLTguNzAxLDMuNDgtOC43MDEsOC43MDFzMy40OCw4LjcwMSA4LjcwMSw4LjcwMWgyMDguODE0YzUuMjIsMCA4LjcwMS0zLjQ4IDguNzAxLTguNzAxcy0zLjQ4MS04LjcwMS04LjcwMS04LjcwMXoiIGZpbGw9IiMwMDAwMDAiLz4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo=" />
                </a>
            </li>
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


