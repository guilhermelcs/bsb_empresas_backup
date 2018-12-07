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
<!--<div id="header-bg">-->
<!--    <div class="container" style="height: 100%;">-->
<!--        <div class="row" style="height: 100%;">-->
<!--            <div id="magazine-wrapper" class="col-4">-->
<!--                <a href="http://leituraestrategica.com.br" target="_blank">-->
<!--                        <img id="header-magazine" src="--><?php //bloginfo('template_url')?><!--/images/header/capa.jpg" alt="magazine-img"/>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-8 d-flex align-items-center">-->
<!--                <div class="col-12">-->
<!--                    <img id="header-logo" src="--><?php //bloginfo('template_url')?><!--/images/header/logo.png"-->
<!--                         alt="logo-bsb-empresas"-->
<!--                    />-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div id="header-bg">
    <div class="container-fluid px-5" style="height: 100%;">
        <div class="row h-100">
            <div class="col-4 col-md-4">
                <div class="row h-100 align-items-center">
                    <div class="col-md-3">
                        <a href="http://leituraestrategica.com.br" target="_blank">
                            <img class="w-100" id="header-magazine" src="<?php bloginfo('template_url')?>/images/header/capa.jpg" alt="magazine-img"/>
                        </a>
                    </div>
                    <div class="col-md-8 p-0">
                        <a href="#" class="subscribe-button">Assinar</a>
                        <p class="magazine-text pt-2">Leitura Estratégica</p>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4 d-flex text-center align-items-center">
                <a href="/" target="_blank">
                    <img class="w-75" id="header-magazine" src="<?php bloginfo('template_url')?>/images/header/logo.png"/>
                </a>
            </div>
            <div class="col-4 col-md-4">
            </div>
        </div>
    </div>
</div>

<!--Sidebar Menu-->
<div id="sidebar-menu-backdrop" class="">
    <div id="sidebar-menu" class="p-4">
        <a href="#qtc-close-menu" class="float-right">
            <img style="width: 20px;" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDE1LjY0MiAxNS42NDIiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1LjY0MiAxNS42NDIiIHdpZHRoPSIyNHB4IiBoZWlnaHQ9IjI0cHgiPgogIDxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTguODgyLDcuODIxbDYuNTQxLTYuNTQxYzAuMjkzLTAuMjkzLDAuMjkzLTAuNzY4LDAtMS4wNjEgIGMtMC4yOTMtMC4yOTMtMC43NjgtMC4yOTMtMS4wNjEsMEw3LjgyMSw2Ljc2TDEuMjgsMC4yMmMtMC4yOTMtMC4yOTMtMC43NjgtMC4yOTMtMS4wNjEsMGMtMC4yOTMsMC4yOTMtMC4yOTMsMC43NjgsMCwxLjA2MSAgbDYuNTQxLDYuNTQxTDAuMjIsMTQuMzYyYy0wLjI5MywwLjI5My0wLjI5MywwLjc2OCwwLDEuMDYxYzAuMTQ3LDAuMTQ2LDAuMzM4LDAuMjIsMC41MywwLjIyczAuMzg0LTAuMDczLDAuNTMtMC4yMmw2LjU0MS02LjU0MSAgbDYuNTQxLDYuNTQxYzAuMTQ3LDAuMTQ2LDAuMzM4LDAuMjIsMC41MywwLjIyYzAuMTkyLDAsMC4zODQtMC4wNzMsMC41My0wLjIyYzAuMjkzLTAuMjkzLDAuMjkzLTAuNzY4LDAtMS4wNjFMOC44ODIsNy44MjF6IiBmaWxsPSIjRkZGRkZGIi8+Cjwvc3ZnPgo=" />
        </a>
        <ul class="nav pt-5">
            <?php foreach (get_menu_items_by_registered_slug('lateral-menu') as $item): ?>
                <div class="row w-100">
                    <div class="col-md-12 pb-2">
                        <li>
                            <a href="<?php echo $item->url ?>" target="<?php echo $item->target ?>"
                               class="<?php echo implode(' ', $item->classes) ?>">
                                <?php echo $item->title ?>
                            </a>
                        </li>
                    </div>
                </div>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div id="menu-wrapper" class="sticky-top">
    <div class="container-fluid">
        <ul id="menu-principal" class="nav justify-content-center">
<!--            <li class="menu-item justify-self-start">-->
<!--                <a href="#qtc-open-menu">-->
<!--                    <img class="" id="header--magazine" src="--><?php //bloginfo('template_url')?><!--/images/header/logo.png"/>-->
<!--                </a>-->
<!--            </li>-->
            <li class="menu-item justify-self-start">
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


