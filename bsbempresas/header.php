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
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
<!--    <link rel="stylesheet" type="text/css" href="--><?php //bloginfo('template_url')?><!--/css/theme.css">-->
<!--    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>-->

    <link href="https://vjs.zencdn.net/7.3.0/video-js.css" rel="stylesheet">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="d-none d-md-block" id="header-bg">
    <div class="container-fluid px-5" style="height: 100%;">
        <div class="row h-100">
            <div class="col-4 col-md-4">
                <div class="row h-100 align-items-center">
                    <div class="col-md-3">
                        <a href="https://leituraestrategica.com.br" target="_blank">
                            <img class="w-100" id="header-magazine" src="<?php bloginfo('template_url')?>/images/header/capa.jpg" alt="magazine-img"/>
                        </a>
                    </div>
                    <div class="col-md-8 p-0">
                        <a href="https://leituraestrategica.com.br" target="_blank" class="subscribe-button">Acessar</a>
                        <p class="magazine-text pt-2">Leitura Estratégica</p>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-4 d-flex text-center align-items-center">
                <a href="/">
                    <img class="w-75" id="header-magazine" src="<?php bloginfo('template_url')?>/images/header/logo.png"/>
                </a>
            </div>
            <div class="col-4 col-md-4 d-flex justify-content-end align-items-center">
                <a href="#" target="_blank">
                    <img class="social-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMTAgMzEwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMTAgMzEwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnIGlkPSJYTUxJRF84MzRfIj4KCTxwYXRoIGlkPSJYTUxJRF84MzVfIiBkPSJNODEuNzAzLDE2NS4xMDZoMzMuOTgxVjMwNWMwLDIuNzYyLDIuMjM4LDUsNSw1aDU3LjYxNmMyLjc2MiwwLDUtMi4yMzgsNS01VjE2NS43NjVoMzkuMDY0ICAgYzIuNTQsMCw0LjY3Ny0xLjkwNiw0Ljk2Ny00LjQyOWw1LjkzMy01MS41MDJjMC4xNjMtMS40MTctMC4yODYtMi44MzYtMS4yMzQtMy44OTljLTAuOTQ5LTEuMDY0LTIuMzA3LTEuNjczLTMuNzMyLTEuNjczaC00NC45OTYgICBWNzEuOTc4YzAtOS43MzIsNS4yNC0xNC42NjcsMTUuNTc2LTE0LjY2N2MxLjQ3MywwLDI5LjQyLDAsMjkuNDIsMGMyLjc2MiwwLDUtMi4yMzksNS01VjUuMDM3YzAtMi43NjItMi4yMzgtNS01LTVoLTQwLjU0NSAgIEMxODcuNDY3LDAuMDIzLDE4Ni44MzIsMCwxODUuODk2LDBjLTcuMDM1LDAtMzEuNDg4LDEuMzgxLTUwLjgwNCwxOS4xNTFjLTIxLjQwMiwxOS42OTItMTguNDI3LDQzLjI3LTE3LjcxNiw0Ny4zNTh2MzcuNzUySDgxLjcwMyAgIGMtMi43NjIsMC01LDIuMjM4LTUsNXY1MC44NDRDNzYuNzAzLDE2Mi44NjcsNzguOTQxLDE2NS4xMDYsODEuNzAzLDE2NS4xMDZ6IiBmaWxsPSIjMDAwMDAwIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                </a>
                <a href="#" target="_blank">
                    <img class="social-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYxMiA2MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDYxMiA2MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNjEyLDExNi4yNThjLTIyLjUyNSw5Ljk4MS00Ni42OTQsMTYuNzUtNzIuMDg4LDE5Ljc3MmMyNS45MjktMTUuNTI3LDQ1Ljc3Ny00MC4xNTUsNTUuMTg0LTY5LjQxMSAgICBjLTI0LjMyMiwxNC4zNzktNTEuMTY5LDI0LjgyLTc5Ljc3NSwzMC40OGMtMjIuOTA3LTI0LjQzNy01NS40OS0zOS42NTgtOTEuNjMtMzkuNjU4Yy02OS4zMzQsMC0xMjUuNTUxLDU2LjIxNy0xMjUuNTUxLDEyNS41MTMgICAgYzAsOS44MjgsMS4xMDksMTkuNDI3LDMuMjUxLDI4LjYwNkMxOTcuMDY1LDIwNi4zMiwxMDQuNTU2LDE1Ni4zMzcsNDIuNjQxLDgwLjM4NmMtMTAuODIzLDE4LjUxLTE2Ljk4LDQwLjA3OC0xNi45OCw2My4xMDEgICAgYzAsNDMuNTU5LDIyLjE4MSw4MS45OTMsNTUuODM1LDEwNC40NzljLTIwLjU3NS0wLjY4OC0zOS45MjYtNi4zNDgtNTYuODY3LTE1Ljc1NnYxLjU2OGMwLDYwLjgwNiw0My4yOTEsMTExLjU1NCwxMDAuNjkzLDEyMy4xMDQgICAgYy0xMC41MTcsMi44My0yMS42MDcsNC4zOTgtMzMuMDgsNC4zOThjLTguMTA3LDAtMTUuOTQ3LTAuODAzLTIzLjYzNC0yLjMzM2MxNS45ODUsNDkuOTA3LDYyLjMzNiw4Ni4xOTksMTE3LjI1Myw4Ny4xOTQgICAgYy00Mi45NDcsMzMuNjU0LTk3LjA5OSw1My42NTUtMTU1LjkxNiw1My42NTVjLTEwLjEzNCwwLTIwLjExNi0wLjYxMi0yOS45NDQtMS43MjFjNTUuNTY3LDM1LjY4MSwxMjEuNTM2LDU2LjQ4NSwxOTIuNDM4LDU2LjQ4NSAgICBjMjMwLjk0OCwwLDM1Ny4xODgtMTkxLjI5MSwzNTcuMTg4LTM1Ny4xODhsLTAuNDIxLTE2LjI1M0M1NzMuODcyLDE2My41MjYsNTk1LjIxMSwxNDEuNDIyLDYxMiwxMTYuMjU4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                </a>
                <a href="https://www.instagram.com/brasiliaempresas/" target="_blank">
                    <img class="social-icon" src="data:image/svg+xml;base64,
PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgY2xhc3M9IiI+PGc+PHBhdGggc3R5bGU9ImZpbGw6IzA1MDQwNCIgZD0iTTExNC43NTksNTEyaDYxLjEwM2wtOTYuNDE0LTYxLjc5M0wwLjE5OCw0MDMuODk4QzMuNjU5LDQ2NC4wOSw1My43MTYsNTEyLDExNC43NTksNTEyeiIgZGF0YS1vcmlnaW5hbD0iI0ZERTQ5NCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzBBMDkwOSI+PC9wYXRoPjxwYXRoIHN0eWxlPSJmaWxsOiMwMjAyMDIiIGQ9Ik0zMzUuNDQ4LDQ3Ni42OWwtNjkuMDA2LTE3LjY1NUgxMTQuNzU5Yy0zNC4wNzIsMC02MS43OTMtMjcuNzIxLTYxLjc5My02MS43OTN2LTMzLjg3NiAgbC0yNi40ODMtMjguNDJMMCwzMzkuNjI4djU3LjYxM2MwLDIuMjM2LDAuMDcyLDQuNDU0LDAuMTk4LDYuNjU3TDE3NS44NjIsNTEyaDIwOC43NjdMMzM1LjQ0OCw0NzYuNjl6IiBkYXRhLW9yaWdpbmFsPSIjRkVBMTUwIiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzAzMDMwMyI+PC9wYXRoPjxwYXRoIHN0eWxlPSJmaWxsOiMwNzA3MDciIGQ9Ik00NDEuNjU1LDQ0MC4xNGMtMTEuMjQ0LDExLjYzNy0yNi45OTMsMTguODk0LTQ0LjQxNCwxOC44OTRIMjY2LjQ0MkwzODQuNjI5LDUxMmgxMi42MTIgIGM0MS4yMDIsMCw3Ny4zOTYtMjEuODI5LDk3LjY0LTU0LjUyN2wtMjcuMDIyLTE2LjA5NEw0NDEuNjU1LDQ0MC4xNHoiIGRhdGEtb3JpZ2luYWw9IiNGRjVENEEiIGNsYXNzPSIiIGRhdGEtb2xkX2NvbG9yPSIjMTMxMTExIj48L3BhdGg+PHBhdGggc3R5bGU9ImZpbGw6IzA2MDYwNiIgZD0iTTQ1OS4wMzQsMzI2LjAxNHY3MS4yMjhjMCwxNi42NTItNi42MzMsMzEuNzc1LTE3LjM3OSw0Mi44OTlsNTMuMjI3LDE3LjMzMyAgQzUwNS43MjgsNDM5Ljk1NCw1MTIsNDE5LjMxOCw1MTIsMzk3LjI0MXYtNjIuODA1bC0yNy4zOTYtMTUuMzkxTDQ1OS4wMzQsMzI2LjAxNHoiIGRhdGEtb3JpZ2luYWw9IiNFNDUyNjEiIGNsYXNzPSIiIGRhdGEtb2xkX2NvbG9yPSIjMEYwRTBFIj48L3BhdGg+PHBvbHlnb24gc3R5bGU9ImZpbGw6IzBBMEEwQSIgcG9pbnRzPSI1MTIsMTQ5LjE5IDQ4My43OTcsMTQyLjQ3NCA0NTkuMDM0LDE1Ny4zIDQ1OS4wMzQsMzI2LjAxNCA1MTIsMzM0LjQzNiAiIGRhdGEtb3JpZ2luYWw9IiNGRjREOTUiIGNsYXNzPSIiIGRhdGEtb2xkX2NvbG9yPSIjMTAwRjBGIj48L3BvbHlnb24+PHBhdGggc3R5bGU9ImZpbGw6IzAzMDMwMyIgZD0iTTUxMiwxMTQuNzU5YzAtNTcuNjMzLTQyLjcwOC0xMDUuNDczLTk4LjEzNi0xMTMuNTVMMzQ0LjQzLDMwLjEwMWwtMzUuMTgzLDIyLjg2NWg4Ny45OTQgIGMzNC4wNzIsMCw2MS43OTMsMjcuNzIxLDYxLjc5Myw2MS43OTNWMTU3LjNMNTEyLDE0OS4xOVYxMTQuNzU5eiIgZGF0YS1vcmlnaW5hbD0iI0NCMzE5QyIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMwNzA2MDciPjwvcGF0aD48cGF0aCBzdHlsZT0iZmlsbDojMEMwQzBDIiBkPSJNMzE3LjczMiwwbC02NS42ODIsMjQuNjM2bC01MS44MDUsMjguMzNoMTA5LjAwMkw0MTMuODY0LDEuMjA4QzQwOC40MzUsMC40MTcsNDAyLjg4NywwLDM5Ny4yNDEsMCAgSDMxNy43MzJ6IiBkYXRhLW9yaWdpbmFsPSIjOEEzMjkzIiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzEzMTIxMiI+PC9wYXRoPjxwYXRoIHN0eWxlPSJmaWxsOiMwNzA3MDciIGQ9Ik0yNTYsNDA2LjA2OWMxOC4zNTgsMCwzNS45NTQtMy4zMiw1Mi4yMjYtOS4zOGwtODYuMDItMzkuMDQ3bC05MS4xNzgtMTguNjU3ICBDMTU3Ljk0NiwzNzkuMzksMjAzLjkxMyw0MDYuMDY5LDI1Niw0MDYuMDY5eiIgZGF0YS1vcmlnaW5hbD0iI0ZGNUQ0QSIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMxMzExMTEiPjwvcGF0aD48cGF0aCBzdHlsZT0iZmlsbDojMDYwNjA2IiBkPSJNMzI5LjE1MywzMDUuMzU4Yy0xNS44ODMsMjMuNDY1LTQyLjc0OCwzOC45MTgtNzMuMTUzLDM4LjkxOGMtNDAuMjczLDAtNzQuMzA4LTI3LjExOC04NC44NjctNjQuMDQ2ICBsLTIzLjY4Mi0xNC44MDFsLTQwLjg0Nyw0LjUzOGMyLjM1MywyNS4zNDUsMTEuMDE0LDQ4Ljg4NywyNC40MjUsNjkuMDE3bDE3Ny4xOTgsNTcuNzA1YzM4LjMwMy0xNC4yNjQsNjkuMjM3LTQzLjc1Nyw4NS40NTgtODEuMDY4ICBsLTMxLjc1My0xNi4wODVMMzI5LjE1MywzMDUuMzU4eiIgZGF0YS1vcmlnaW5hbD0iI0U0NTI2MSIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMwRjBFMEUiPjwvcGF0aD48Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiMwQTBBMEEiIGQ9Ik0xNjcuNzI0LDI1NmMwLTIxLjg3OCw4LjAxOC00MS45MDcsMjEuMjQ3LTU3LjM0NmwtMzcuNjU4LTUuMjY4bC0zOC4yNSwxNi44OTIgICBjLTQuNjI1LDE0LjQyMi03LjEzMiwyOS43ODQtNy4xMzIsNDUuNzIyYzAsNC43MTIsMC4yNDQsOS4zNjUsMC42NzEsMTMuOTY2bDY0LjUzLDEwLjI2MiAgIEMxNjguOTI5LDI3Mi41MjQsMTY3LjcyNCwyNjQuNDAzLDE2Ny43MjQsMjU2eiIgZGF0YS1vcmlnaW5hbD0iI0ZGNEQ5NSIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMxMDBGMEYiPjwvcGF0aD4KCTxwYXRoIHN0eWxlPSJmaWxsOiMwQTBBMEEiIGQ9Ik00MDYuMDY5LDI1NmMwLTMyLjEzOC0xMC4xNTktNjEuOTQ2LTI3LjQyOC04Ni4zOWwtMzcuMzk3LTUuMzA4bC0zOC40MTgsMTYuOTE3ICAgYzI0Ljg3MywxNS42MzEsNDEuNDUsNDMuMjk4LDQxLjQ1LDc0Ljc4MWMwLDE4LjI3LTUuNTgsMzUuMjYxLTE1LjEyMyw0OS4zNThsNjQuNTMxLDEwLjI2MiAgIEM0MDEuNjM0LDI5Ny4zMzQsNDA2LjA2OSwyNzcuMTgsNDA2LjA2OSwyNTZ6IiBkYXRhLW9yaWdpbmFsPSIjRkY0RDk1IiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzEwMEYwRiI+PC9wYXRoPgo8L2c+PGc+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMDMwMzAzIiBkPSJNMjU2LDE2Ny43MjRjMTcuMTk0LDAsMzMuMjQyLDQuOTU5LDQ2LjgyNiwxMy40OTVsNzUuODE1LTExLjYwOSAgIGMtMjcuMTk2LTM4LjQ5My03Mi4wMy02My42NzktMTIyLjY0MS02My42NzljLTY2LjgxLDAtMTIzLjU1NCw0My44ODktMTQyLjkzNywxMDQuMzQ1bDc1LjkwOC0xMS42MjQgICBDMjA1LjE3MywxNzkuNzQyLDIyOS4yMDMsMTY3LjcyNCwyNTYsMTY3LjcyNHoiIGRhdGEtb3JpZ2luYWw9IiNDQjMxOUMiIGNsYXNzPSIiIGRhdGEtb2xkX2NvbG9yPSIjMDcwNjA3Ij48L3BhdGg+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMDMwMzAzIiBkPSJNMzk3LjI0MSwxNTAuMDY5YzE5LjQ3LDAsMzUuMzEtMTUuODQsMzUuMzEtMzUuMzFzLTE1Ljg0LTM1LjMxLTM1LjMxLTM1LjMxICAgYy0xOS40NywwLTM1LjMxLDE1Ljg0LTM1LjMxLDM1LjMxUzM3Ny43NzEsMTUwLjA2OSwzOTcuMjQxLDE1MC4wNjl6IiBkYXRhLW9yaWdpbmFsPSIjQ0IzMTlDIiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzA3MDYwNyI+PC9wYXRoPgo8L2c+PHBvbHlnb24gc3R5bGU9ImZpbGw6IzA3MDcwNyIgcG9pbnRzPSI1Mi45NjYsMzEzLjU2NCAyNy40NywzMDAuODQ3IDAsMjk2LjMxNiAwLDMzOS42MjkgNTIuOTY2LDM2My4zNjYgIiBkYXRhLW9yaWdpbmFsPSIjRkY1RDRBIiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzEzMTExMSI+PC9wb2x5Z29uPjxwb2x5Z29uIHN0eWxlPSJmaWxsOiMwNjA2MDYiIHBvaW50cz0iMCwyNTMuMDE0IDAsMjk2LjMxNiA1Mi45NjYsMzEzLjU2NCA1Mi45NjYsMjYxLjQzNyAyNS40NDYsMjUxLjU0MyAiIGRhdGEtb3JpZ2luYWw9IiNFNDUyNjEiIGNsYXNzPSIiIGRhdGEtb2xkX2NvbG9yPSIjMEYwRTBFIj48L3BvbHlnb24+PHBvbHlnb24gc3R5bGU9ImZpbGw6IzBBMEEwQSIgcG9pbnRzPSI1Mi45NjYsMjE5LjQ3OSAyNS43NDksMjE5LjIzMyAwLDIyNy41OSAwLDI1My4wMTQgNTIuOTY2LDI2MS40MzcgIiBkYXRhLW9yaWdpbmFsPSIjRkY0RDk1IiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzEwMEYwRiI+PC9wb2x5Z29uPjxwb2x5Z29uIHN0eWxlPSJmaWxsOiMwMzAzMDMiIHBvaW50cz0iNTIuOTY2LDE3OS43NTcgMjQuOTExLDE4Mi42MDMgMCwyMDUuOTYyIDAsMjI3LjU5IDUyLjk2NiwyMTkuNDc5ICIgZGF0YS1vcmlnaW5hbD0iI0NCMzE5QyIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMwNzA2MDciPjwvcG9seWdvbj48cG9seWdvbiBzdHlsZT0iZmlsbDojMEMwQzBDIiBwb2ludHM9IjAsMjA1Ljk2MiA1Mi45NjYsMTc5Ljc1NyA1Mi45NjYsMTE5LjM2MiAyMS45LDEyMi4zMzMgMCwxNDMuMjQxICIgZGF0YS1vcmlnaW5hbD0iIzhBMzI5MyIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMxMzEyMTIiPjwvcG9seWdvbj48cGF0aCBzdHlsZT0iZmlsbDojMDUwNTA1IiBkPSJNMjA1LjA1OSwwTDg0LjIwNiw0Ni40ODFMMS4zODcsOTYuOTI4QzAuNDc3LDEwMi43NDEsMCwxMDguNjk1LDAsMTE0Ljc1OXYyOC40ODJsNTIuOTY2LTIzLjg3OCAgdi00LjYwNWMwLTM0LjA3MiwyNy43MjEtNjEuNzkzLDYxLjc5My02MS43OTNoODUuNDg3TDMxNy43MzIsMEgyMDUuMDU5eiIgZGF0YS1vcmlnaW5hbD0iIzUyMzQ5NCIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMwNzA3MDciPjwvcGF0aD48cGF0aCBzdHlsZT0iZmlsbDojMDIwMjAyIiBkPSJNMTE0Ljc1OSwwQzU3LjU0NSwwLDkuOTc4LDQyLjA4OCwxLjM4Nyw5Ni45MjhMMjA1LjA1OSwwSDExNC43NTl6IiBkYXRhLW9yaWdpbmFsPSIjMkQyRDg3IiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzA1MDQwNCI+PC9wYXRoPjwvZz4gPC9zdmc+" />
                </a>
                <a href="https://www.linkedin.com/in/leresende/" target="_blank">
                    <img class="social-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDQzOC41MzYgNDM4LjUzNSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDM4LjUzNiA0MzguNTM1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHJlY3QgeD0iNS40MjQiIHk9IjE0NS44OTUiIHdpZHRoPSI5NC4yMTYiIGhlaWdodD0iMjgyLjkzMiIgZmlsbD0iIzAwMDAwMCIvPgoJCTxwYXRoIGQ9Ik00MDguODQyLDE3MS43MzljLTE5Ljc5MS0yMS42MDQtNDUuOTY3LTMyLjQwOC03OC41MTItMzIuNDA4Yy0xMS45OTEsMC0yMi44OTEsMS40NzUtMzIuNjk1LDQuNDI3ICAgIGMtOS44MDEsMi45NS0xOC4wNzksNy4wODktMjQuODM4LDEyLjQxOWMtNi43NTUsNS4zMy0xMi4xMzUsMTAuMjc4LTE2LjEyOSwxNC44NDRjLTMuNzk4LDQuMzM3LTcuNTEyLDkuMzg5LTExLjEzNiwxNS4xMDQgICAgdi00MC4yMzJoLTkzLjkzNWwwLjI4OCwxMy43MDZjMC4xOTMsOS4xMzksMC4yODgsMzcuMzA3LDAuMjg4LDg0LjUwOGMwLDQ3LjIwNS0wLjE5LDEwOC43NzctMC41NzIsMTg0LjcyMmg5My45MzFWMjcwLjk0MiAgICBjMC05LjcwNSwxLjA0MS0xNy40MTIsMy4xMzktMjMuMTI3YzQtOS43MTIsMTAuMDM3LTE3Ljg0MywxOC4xMzEtMjQuNDA3YzguMDkzLTYuNTcyLDE4LjEzLTkuODU1LDMwLjEyNS05Ljg1NSAgICBjMTYuMzY0LDAsMjguNDA3LDUuNjYyLDM2LjExNywxNi45ODdjNy43MDcsMTEuMzI0LDExLjU2MSwyNi45OCwxMS41NjEsNDYuOTY2VjQyOC44Mmg5My45MzFWMjY2LjY2NCAgICBDNDM4LjUyOSwyMjQuOTc2LDQyOC42MzksMTkzLjMzNiw0MDguODQyLDE3MS43Mzl6IiBmaWxsPSIjMDAwMDAwIi8+CgkJPHBhdGggZD0iTTUzLjEwMyw5LjcwOGMtMTUuNzk2LDAtMjguNTk1LDQuNjE5LTM4LjQsMTMuODQ4QzQuODk5LDMyLjc4NywwLDQ0LjQ0MSwwLDU4LjUyOWMwLDEzLjg5MSw0Ljc1OCwyNS41MDUsMTQuMjc1LDM0LjgyOSAgICBjOS41MTQsOS4zMjUsMjIuMDc4LDEzLjk5LDM3LjY4NSwxMy45OWgwLjU3MWMxNS45OSwwLDI4Ljg4Ny00LjY2MSwzOC42ODgtMTMuOTljOS44MDEtOS4zMjQsMTQuNjA2LTIwLjkzNCwxNC40MTctMzQuODI5ICAgIGMtMC4xOS0xNC4wODctNS4wNDctMjUuNzQyLTE0LjU2MS0zNC45NzNDODEuNTYyLDE0LjMyMyw2OC45LDkuNzA4LDUzLjEwMyw5LjcwOHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                </a>
            </div>
        </div>
    </div>
</div>

<!--Sidebar Menu-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div id="sidebar-menu-backdrop" class="">
                <div id="sidebar-menu" class="p-4">
                    <a href="#qtc-close-menu" class="float-right">
                        <img style="width: 15px;" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDIyLjg4IDIyLjg4IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAyMi44OCAyMi44ODsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8cGF0aCBkPSJNMC4zMjQsMS45MDljLTAuNDI5LTAuNDI5LTAuNDI5LTEuMTQzLDAtMS41ODdjMC40NDQtMC40MjksMS4xNDMtMC40MjksMS41ODcsMGw5LjUyMyw5LjUzOSAgbDkuNTM5LTkuNTM5YzAuNDI5LTAuNDI5LDEuMTQzLTAuNDI5LDEuNTcxLDBjMC40NDQsMC40NDQsMC40NDQsMS4xNTksMCwxLjU4N2wtOS41MjMsOS41MjRsOS41MjMsOS41MzkgIGMwLjQ0NCwwLjQyOSwwLjQ0NCwxLjE0MywwLDEuNTg3Yy0wLjQyOSwwLjQyOS0xLjE0MywwLjQyOS0xLjU3MSwwbC05LjUzOS05LjUzOWwtOS41MjMsOS41MzljLTAuNDQ0LDAuNDI5LTEuMTQzLDAuNDI5LTEuNTg3LDAgIGMtMC40MjktMC40NDQtMC40MjktMS4xNTksMC0xLjU4N2w5LjUyMy05LjUzOUwwLjMyNCwxLjkwOXoiIGZpbGw9IiMwMDAwMDAiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                    </a>
                    <ul class="nav pt-5">
                        <?php foreach (get_menu_items_by_registered_slug('lateral-menu') as $item): ?>
                            <div class="row w-100">
                                <div class="col-6 col-md-12 pb-2">
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
        </div>
    </div>
</div>


<div id="menu-wrapper" class="d-none d-md-block sticky-top">
    <div class="container-fluid">
        <ul id="menu-principal" class="nav justify-content-center">
            <li id="logo-menu-wrapper" class="menu-item logo-menu-wrapper-hide justify-self-start">
                <a href="/">
                    <img class="logo-menu" src="<?php bloginfo('template_url')?>/images/header/logo.png"/>
                </a>
            </li>
            <li class="menu-item justify-self-start">
                <a href="#qtc-open-menu">
                    <img class="mr-3" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDIyNi4yMTYgMjI2LjIxNiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMjI2LjIxNiAyMjYuMjE2IiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4Ij4KICA8Zz4KICAgIDxnPgogICAgICA8cGF0aCBkPSJNOC43MDEsNDMuNTAzaDIwOC44MTRjNS4yMiwwLDguNzAxLTMuNDgsOC43MDEtOC43MDFzLTMuNDgtOC43MDEtOC43MDEtOC43MDFIOC43MDFDMy40OCwyNi4xMDIsMCwyOS41ODIsMCwzNC44MDIgICAgUzMuNDgsNDMuNTAzLDguNzAxLDQzLjUwM3oiIGZpbGw9IiMwMDAwMDAiLz4KICAgICAgPHBhdGggZD0ibTIxNy41MTUsMTA0LjQwN2gtMjA4LjgxNGMtNS4yMiwwLTguNzAxLDMuNDgtOC43MDEsOC43MDFzMy40OCw4LjcwMSA4LjcwMSw4LjcwMWgyMDguODE0YzUuMjIsMCA4LjcwMS0zLjQ4IDguNzAxLTguNzAxcy0zLjQ4MS04LjcwMS04LjcwMS04LjcwMXoiIGZpbGw9IiMwMDAwMDAiLz4KICAgICAgPHBhdGggZD0ibTIxNy41MTUsMTgyLjcxM2gtMjA4LjgxNGMtNS4yMiwwLTguNzAxLDMuNDgtOC43MDEsOC43MDFzMy40OCw4LjcwMSA4LjcwMSw4LjcwMWgyMDguODE0YzUuMjIsMCA4LjcwMS0zLjQ4IDguNzAxLTguNzAxcy0zLjQ4MS04LjcwMS04LjcwMS04LjcwMXoiIGZpbGw9IiMwMDAwMDAiLz4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo=" />
                </a>
            </li>
            <?php foreach (get_menu_items_by_registered_slug('header-menu') as $item): ?>
                <li class="menu-item d-none d-md-block">
                    <a href="<?php echo $item->url ?>" target="<?php echo $item->target ?>"
                        class="<?php echo implode(' ', $item->classes) ?>">
                        <?php echo $item->title ?>
                    </a>
                </li>
            <?php endforeach; ?>
            <li id="search-icon-wrapper" class="menu-item justify-self-end">
                <a id="search-icon-link" href="#">
                    <img id="search-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4My4wODMgNDgzLjA4MyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDgzLjA4MyA0ODMuMDgzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTMzMi43NCwzMTUuMzVjMzAuODgzLTMzLjQzMyw1MC4xNS03OC4yLDUwLjE1LTEyNy41QzM4Mi44OSw4NC40MzMsMjk4Ljc0LDAsMTk1LjA0LDBTNy4xOSw4NC40MzMsNy4xOSwxODcuODUgICAgUzkxLjM0LDM3NS43LDE5NS4wNCwzNzUuN2M0Mi4yMTcsMCw4MS4wMzMtMTMuODgzLDExMi40ODMtMzcuNGwxMzkuNjgzLDEzOS42ODNjMy40LDMuNCw3LjY1LDUuMSwxMS45LDUuMXM4Ljc4My0xLjcsMTEuOS01LjEgICAgYzYuNTE3LTYuNTE3LDYuNTE3LTE3LjI4MywwLTI0LjA4M0wzMzIuNzQsMzE1LjM1eiBNNDEuMTksMTg3Ljg1QzQxLjE5LDEwMy4xMzMsMTEwLjA0LDM0LDE5NS4wNCwzNCAgICBjODQuNzE3LDAsMTUzLjg1LDY4Ljg1LDE1My44NSwxNTMuODVTMjgwLjA0LDM0MS43LDE5NS4wNCwzNDEuN1M0MS4xOSwyNzIuNTY3LDQxLjE5LDE4Ny44NXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                </a>
            </li>
        </ul>
    </div>
</div>

<div id="menu-wrapper" class="d-block d-md-none sticky-top">
    <div class="container-fluid">
        <ul id="menu-principal" class="nav justify-content-center">
            <li class="mobile-menu-icon">
                <a href="#qtc-open-menu">
                    <img class="mr-3" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDIyNi4yMTYgMjI2LjIxNiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMjI2LjIxNiAyMjYuMjE2IiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4Ij4KICA8Zz4KICAgIDxnPgogICAgICA8cGF0aCBkPSJNOC43MDEsNDMuNTAzaDIwOC44MTRjNS4yMiwwLDguNzAxLTMuNDgsOC43MDEtOC43MDFzLTMuNDgtOC43MDEtOC43MDEtOC43MDFIOC43MDFDMy40OCwyNi4xMDIsMCwyOS41ODIsMCwzNC44MDIgICAgUzMuNDgsNDMuNTAzLDguNzAxLDQzLjUwM3oiIGZpbGw9IiMwMDAwMDAiLz4KICAgICAgPHBhdGggZD0ibTIxNy41MTUsMTA0LjQwN2gtMjA4LjgxNGMtNS4yMiwwLTguNzAxLDMuNDgtOC43MDEsOC43MDFzMy40OCw4LjcwMSA4LjcwMSw4LjcwMWgyMDguODE0YzUuMjIsMCA4LjcwMS0zLjQ4IDguNzAxLTguNzAxcy0zLjQ4MS04LjcwMS04LjcwMS04LjcwMXoiIGZpbGw9IiMwMDAwMDAiLz4KICAgICAgPHBhdGggZD0ibTIxNy41MTUsMTgyLjcxM2gtMjA4LjgxNGMtNS4yMiwwLTguNzAxLDMuNDgtOC43MDEsOC43MDFzMy40OCw4LjcwMSA4LjcwMSw4LjcwMWgyMDguODE0YzUuMjIsMCA4LjcwMS0zLjQ4IDguNzAxLTguNzAxcy0zLjQ4MS04LjcwMS04LjcwMS04LjcwMXoiIGZpbGw9IiMwMDAwMDAiLz4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo=" />
                </a>
            </li>
            <li class="mobile-logo">
                <a href="/">
                    <img class="logo-menu" src="<?php bloginfo('template_url')?>/images/header/logo.png"/>
                </a>
            </li>
            <li class="mobile-search-icon">
                <a id="search-icon-link-mobile" href="#">
                    <img id="search-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4My4wODMgNDgzLjA4MyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDgzLjA4MyA0ODMuMDgzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTMzMi43NCwzMTUuMzVjMzAuODgzLTMzLjQzMyw1MC4xNS03OC4yLDUwLjE1LTEyNy41QzM4Mi44OSw4NC40MzMsMjk4Ljc0LDAsMTk1LjA0LDBTNy4xOSw4NC40MzMsNy4xOSwxODcuODUgICAgUzkxLjM0LDM3NS43LDE5NS4wNCwzNzUuN2M0Mi4yMTcsMCw4MS4wMzMtMTMuODgzLDExMi40ODMtMzcuNGwxMzkuNjgzLDEzOS42ODNjMy40LDMuNCw3LjY1LDUuMSwxMS45LDUuMXM4Ljc4My0xLjcsMTEuOS01LjEgICAgYzYuNTE3LTYuNTE3LDYuNTE3LTE3LjI4MywwLTI0LjA4M0wzMzIuNzQsMzE1LjM1eiBNNDEuMTksMTg3Ljg1QzQxLjE5LDEwMy4xMzMsMTEwLjA0LDM0LDE5NS4wNCwzNCAgICBjODQuNzE3LDAsMTUzLjg1LDY4Ljg1LDE1My44NSwxNTMuODVTMjgwLjA0LDM0MS43LDE5NS4wNCwzNDEuN1M0MS4xOSwyNzIuNTY3LDQxLjE5LDE4Ny44NXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                </a>
            </li>
        </ul>
    </div>
</div>

<section id="searchbar-section">
    <div id="searchbar-wrapper">
        <?php get_search_form(); ?>
    </div>
</section>



