<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!--Sidebar Menu-->
    <div class="col-12 col-md-4" id="sidebar-menu">
        <span id="sidebar-out"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDIyLjg4IDIyLjg4IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAyMi44OCAyMi44ODsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8cGF0aCBkPSJNMC4zMjQsMS45MDljLTAuNDI5LTAuNDI5LTAuNDI5LTEuMTQzLDAtMS41ODdjMC40NDQtMC40MjksMS4xNDMtMC40MjksMS41ODcsMGw5LjUyMyw5LjUzOSAgbDkuNTM5LTkuNTM5YzAuNDI5LTAuNDI5LDEuMTQzLTAuNDI5LDEuNTcxLDBjMC40NDQsMC40NDQsMC40NDQsMS4xNTksMCwxLjU4N2wtOS41MjMsOS41MjRsOS41MjMsOS41MzkgIGMwLjQ0NCwwLjQyOSwwLjQ0NCwxLjE0MywwLDEuNTg3Yy0wLjQyOSwwLjQyOS0xLjE0MywwLjQyOS0xLjU3MSwwbC05LjUzOS05LjUzOWwtOS41MjMsOS41MzljLTAuNDQ0LDAuNDI5LTEuMTQzLDAuNDI5LTEuNTg3LDAgIGMtMC40MjktMC40NDQtMC40MjktMS4xNTksMC0xLjU4N2w5LjUyMy05LjUzOUwwLjMyNCwxLjkwOXoiIGZpbGw9IiNGRkZGRkYiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></span>
        <ul class="nav pt-4">
            <li class="nav-item">
                <a class="nav-link texto-menu" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
                <span class="nav-link texto-menu">Negócios
                    <img class="pl-2 dropdown-arrow" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im0xMjEuMywzNC42Yy0xLjYtMS42LTQuMi0xLjYtNS44LDBsLTUxLDUxLjEtNTEuMS01MS4xYy0xLjYtMS42LTQuMi0xLjYtNS44LDAtMS42LDEuNi0xLjYsNC4yIDAsNS44bDUzLjksNTMuOWMwLjgsMC44IDEuOCwxLjIgMi45LDEuMiAxLDAgMi4xLTAuNCAyLjktMS4ybDUzLjktNTMuOWMxLjctMS42IDEuNy00LjIgMC4xLTUuOHoiIGZpbGw9IiNGRkZGRkYiLz4KICA8L2c+Cjwvc3ZnPgo=" />
                </span>
                <div class="dropdown-content pl-3">
                    <a class="nav-link texto-submenu" href="#">Marketing</a>
                </div>
                <div class="dropdown-content pl-3">
                    <a class="nav-link texto-submenu" href="#">Meio Ambiente</a>
                </div>
                <div class="dropdown-content pl-3">
                    <a class="nav-link texto-submenu" href="#">Carreira</a>
                </div>
                <div class="dropdown-content pl-3">
                    <a class="nav-link texto-submenu" href="#">Economia</a>
                </div>
                <div class="dropdown-content pl-3">
                    <a class="nav-link texto-submenu" href="#">Financeiro</a>
                </div>
                <div class="dropdown-content pl-3">
                    <a class="nav-link texto-submenu" href="#">RH</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link texto-menu" href="#">Tecnologia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link texto-menu" href="#">Estilo de Vida</a>
            </li>
            <li class="nav-item dropdown">
                <span class="nav-link texto-menu">Colunistas
                    <img class="pl-2 dropdown-arrow" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im0xMjEuMywzNC42Yy0xLjYtMS42LTQuMi0xLjYtNS44LDBsLTUxLDUxLjEtNTEuMS01MS4xYy0xLjYtMS42LTQuMi0xLjYtNS44LDAtMS42LDEuNi0xLjYsNC4yIDAsNS44bDUzLjksNTMuOWMwLjgsMC44IDEuOCwxLjIgMi45LDEuMiAxLDAgMi4xLTAuNCAyLjktMS4ybDUzLjktNTMuOWMxLjctMS42IDEuNy00LjIgMC4xLTUuOHoiIGZpbGw9IiNGRkZGRkYiLz4KICA8L2c+Cjwvc3ZnPgo=" />
                </span>
                <div class="dropdown-content pl-3">
                    <a class="nav-link texto-submenu" href="#">Colunista 1</a>
                </div>
                <div class="dropdown-content pl-3">
                    <a class="nav-link texto-submenu" href="#">Colunista 2</a>
                </div>
                <div class="dropdown-content pl-3">
                    <a class="nav-link texto-submenu" href="#">Colunista 3</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link texto-menu" href="#">Entrevistas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link texto-menu" href="#">Especiais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link texto-menu" href="#">Artigos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link texto-menu" href="#">Fim de Semana</a>
            </li>
            <li class="nav-item">
                <a class="nav-link texto-menu" href="#">Eventos</a>
            </li>
        </ul>
    </div>


<!--Latest News Section-->
<section id="latest-news section">
    <div class="container">
        <div class="row section-latest-news" id="latest-news">
            <div class="col-12">
                <div>
                    <img class="index-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYwIDYwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA2MCA2MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8Zz4KCTxwYXRoIGQ9Ik0zMSwxNkgxN3YxNGgxNFYxNnogTTI5LDI4SDE5VjE4aDEwVjI4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTUyLDE2SDM2Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDE2YzAuNTUzLDAsMS0wLjQ0NywxLTFTNTIuNTUzLDE2LDUyLDE2eiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTUyLDIySDM2Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDE2YzAuNTUzLDAsMS0wLjQ0NywxLTFTNTIuNTUzLDIyLDUyLDIyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTUyLDI4SDM2Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDE2YzAuNTUzLDAsMS0wLjQ0NywxLTFTNTIuNTUzLDI4LDUyLDI4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTUyLDM0SDE5Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDMzYzAuNTUzLDAsMS0wLjQ0NywxLTFTNTIuNTUzLDM0LDUyLDM0eiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTM0LDQwSDE5Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDE1YzAuNTUzLDAsMS0wLjQ0NywxLTFTMzQuNTUzLDQwLDM0LDQweiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTM0LDQ2SDE5Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDE1YzAuNTUzLDAsMS0wLjQ0NywxLTFTMzQuNTUzLDQ2LDM0LDQ2eiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTM0LDUySDE5Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDE1YzAuNTUzLDAsMS0wLjQ0NywxLTFTMzQuNTUzLDUyLDM0LDUyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTM5LDU0aDE0VjQwSDM5VjU0eiBNNDEsNDJoMTB2MTBINDFWNDJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8cGF0aCBkPSJNNTksMTNjMC0wLjAxNy0wLjAwOS0wLjAzMS0wLjAxLTAuMDQ4VjBIMTF2MzBIMXYyNGMwLDMuMzA5LDIuNjkxLDYsNiw2aDQ2YzMuMzAzLDAsNS45OS0yLjY4OCw1Ljk5LTUuOTlWMTMuMDQ4ICAgQzU4Ljk5MSwxMy4wMzEsNTksMTMuMDE3LDU5LDEzeiBNNTYuOTksMnYxMEgxM1YySDU2Ljk5eiBNMyw1NFYzMmg4djIyYzAsMi4yMDYtMS43OTQsNC00LDRTMyw1Ni4yMDYsMyw1NHogTTUzLDU4SDExLjQ2OSAgIGMwLjAxNi0wLjAxOCwwLjAyNy0wLjAzOSwwLjA0Mi0wLjA1N2MwLjIwNC0wLjIzMywwLjM5LTAuNDgyLDAuNTU2LTAuNzQ1YzAuMDI3LTAuMDQyLDAuMDUyLTAuMDg0LDAuMDc4LTAuMTI4ICAgYzAuMTYyLTAuMjcsMC4zMDUtMC41NTIsMC40MjMtMC44NDhjMC4wMTYtMC4wNDEsMC4wMy0wLjA4MiwwLjA0NS0wLjEyM2MwLjExNS0wLjMwNiwwLjIwOS0wLjYyMiwwLjI3My0wLjk0OSAgIGMwLjAwNi0wLjAzLDAuMDA4LTAuMDYxLDAuMDE0LTAuMDlDMTIuOTYyLDU0LjcxNiwxMyw1NC4zNjIsMTMsNTRWMzBWMTRoNDMuOTl2NDAuMDFDNTYuOTksNTYuMjEsNTUuMiw1OCw1Myw1OHoiIGZpbGw9IiMwMDAwMDAiLz4KCTxwYXRoIGQ9Ik00Nyw0SDIzdjZoMjRWNHogTTQ1LDhIMjVWNmgyMFY4eiIgZmlsbD0iIzAwMDAwMCIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                    <h2 class="section-title pt-5 pb-2">Últimas Notícias</h2>
                </div>
            </div>
            <?php foreach(get_posts(['numberposts' => 1, 'post_type' => 'noticia']) as $post): ?>
                <div class="col-12 col-md-6 latest-news-lg">
                    <a href="<?php echo get_permalink($post) ?>">
                        <figure>
                            <img class="latest-news-img-lg img-responsive rounded"
                                 src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>">
                            <figcaption class="figcaption-lg"><?php echo get_the_excerpt($post->ID); ?></figcaption>
                        </figure>
                    </a>
                </div>
            <?php endforeach; ?>

            <div class="col-12 col-md-6">
                <div class="row">
                    <?php foreach(get_posts(['numberposts' => 4, 'post_type' => 'noticia']) as $post): ?>
                        <div class="col-12 col-md-6">
                            <a href="<?php echo get_permalink($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>">
                                <figure>
                                    <img class="img-responsive w-100 rounded" src="<?php echo get_the_post_thumbnail_url($post, 'qtc_news'); ?>" alt="<?php echo get_the_title($post->ID); ?>">
                                    <figcaption class="figcaption-md">
                                        <h6><?php echo get_the_excerpt($post->ID); ?></h6>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-12 pt-5">
            <img class="section-divider" src="<?php bloginfo('template_url')?>/images/header/section-divider.png" alt="">
        </div>
    </div>
</div>

<!--Columnists Section-->
<section id="columnists-section" class="pt-2">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <div class="col-12 col-md-12">
                    <img class="index-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4Mi45IDQ4Mi45IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0ODIuOSA0ODIuOTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yMzkuNywyNjAuMmMwLjUsMCwxLDAsMS42LDBjMC4yLDAsMC40LDAsMC42LDBjMC4zLDAsMC43LDAsMSwwYzI5LjMtMC41LDUzLTEwLjgsNzAuNS0zMC41ICAgIGMzOC41LTQzLjQsMzIuMS0xMTcuOCwzMS40LTEyNC45Yy0yLjUtNTMuMy0yNy43LTc4LjgtNDguNS05MC43QzI4MC44LDUuMiwyNjIuNywwLjQsMjQyLjUsMGgtMC43Yy0wLjEsMC0wLjMsMC0wLjQsMGgtMC42ICAgIGMtMTEuMSwwLTMyLjksMS44LTUzLjgsMTMuN2MtMjEsMTEuOS00Ni42LDM3LjQtNDkuMSw5MS4xYy0wLjcsNy4xLTcuMSw4MS41LDMxLjQsMTI0LjlDMTg2LjcsMjQ5LjQsMjEwLjQsMjU5LjcsMjM5LjcsMjYwLjJ6ICAgICBNMTY0LjYsMTA3LjNjMC0wLjMsMC4xLTAuNiwwLjEtMC44YzMuMy03MS43LDU0LjItNzkuNCw3Ni03OS40aDAuNGMwLjIsMCwwLjUsMCwwLjgsMGMyNywwLjYsNzIuOSwxMS42LDc2LDc5LjQgICAgYzAsMC4zLDAsMC42LDAuMSwwLjhjMC4xLDAuNyw3LjEsNjguNy0yNC43LDEwNC41Yy0xMi42LDE0LjItMjkuNCwyMS4yLTUxLjUsMjEuNGMtMC4yLDAtMC4zLDAtMC41LDBsMCwwYy0wLjIsMC0wLjMsMC0wLjUsMCAgICBjLTIyLTAuMi0zOC45LTcuMi01MS40LTIxLjRDMTU3LjcsMTc2LjIsMTY0LjUsMTA3LjksMTY0LjYsMTA3LjN6IiBmaWxsPSIjMDAwMDAwIi8+CgkJPHBhdGggZD0iTTQ0Ni44LDM4My42YzAtMC4xLDAtMC4yLDAtMC4zYzAtMC44LTAuMS0xLjYtMC4xLTIuNWMtMC42LTE5LjgtMS45LTY2LjEtNDUuMy04MC45Yy0wLjMtMC4xLTAuNy0wLjItMS0wLjMgICAgYy00NS4xLTExLjUtODIuNi0zNy41LTgzLTM3LjhjLTYuMS00LjMtMTQuNS0yLjgtMTguOCwzLjNjLTQuMyw2LjEtMi44LDE0LjUsMy4zLDE4LjhjMS43LDEuMiw0MS41LDI4LjksOTEuMyw0MS43ICAgIGMyMy4zLDguMywyNS45LDMzLjIsMjYuNiw1NmMwLDAuOSwwLDEuNywwLjEsMi41YzAuMSw5LTAuNSwyMi45LTIuMSwzMC45Yy0xNi4yLDkuMi03OS43LDQxLTE3Ni4zLDQxICAgIGMtOTYuMiwwLTE2MC4xLTMxLjktMTc2LjQtNDEuMWMtMS42LTgtMi4zLTIxLjktMi4xLTMwLjljMC0wLjgsMC4xLTEuNiwwLjEtMi41YzAuNy0yMi44LDMuMy00Ny43LDI2LjYtNTYgICAgYzQ5LjgtMTIuOCw4OS42LTQwLjYsOTEuMy00MS43YzYuMS00LjMsNy42LTEyLjcsMy4zLTE4LjhjLTQuMy02LjEtMTIuNy03LjYtMTguOC0zLjNjLTAuNCwwLjMtMzcuNywyNi4zLTgzLDM3LjggICAgYy0wLjQsMC4xLTAuNywwLjItMSwwLjNjLTQzLjQsMTQuOS00NC43LDYxLjItNDUuMyw4MC45YzAsMC45LDAsMS43LTAuMSwyLjVjMCwwLjEsMCwwLjIsMCwwLjNjLTAuMSw1LjItMC4yLDMxLjksNS4xLDQ1LjMgICAgYzEsMi42LDIuOCw0LjgsNS4yLDYuM2MzLDIsNzQuOSw0Ny44LDE5NS4yLDQ3LjhzMTkyLjItNDUuOSwxOTUuMi00Ny44YzIuMy0xLjUsNC4yLTMuNyw1LjItNi4zICAgIEM0NDcsNDE1LjUsNDQ2LjksMzg4LjgsNDQ2LjgsMzgzLjZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                    <h2 class="section-title pt-5 pb-4">Colunistas</h2>
                </div>
            </div>
            <?php foreach (get_posts(['numberposts' => 4, 'post_type' => 'colunista']) as $post): ?>
                <div class="col-12 col-md-3">
                    <div class="text-center">
                        <a href="<?php echo get_permalink($post->ID);?>">
                            <figure>
                                <img class="columnist-img rounded-circle"
                                     src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                     alt="<?php echo get_the_title($post->ID); ?>">
                                <figcaption class="text-dark columnist-title pt-3"><?php echo get_the_title($post->ID); ?></figcaption>
                                <div class="columnist-description-box">
                                    <p class="columnist-subtitle"><?php echo get_the_excerpt($post->ID); ?></p>
                                    <p class="columnist-description px-2"><?php echo get_post_field('post_content', $post->ID);?></p>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<!--Business Section-->
<section id="business-section">
    <img class="section-divider" src="<?php bloginfo('template_url')?>/images/header/whiteandgray_background.png" alt="">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <img class="index-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ4OC4zOTksNDkyaC0yMS45MzNWMTczLjUzNmMwLTE0LjgyMy0xMi4wNi0yNi44ODItMjYuODgyLTI2Ljg4MkgzOTAuNTZjLTE0LjgyMywwLTI2Ljg4MiwxMi4wNi0yNi44ODIsMjYuODgyVjQ5MiAgICBoLTU1LjY5MlYzMTcuODI1YzAtMTQuODIzLTEyLjA1OS0yNi44ODItMjYuODgyLTI2Ljg4MkgyMzIuMDhjLTE0LjgyMywwLTI2Ljg4MiwxMi4wNi0yNi44ODIsMjYuODgyVjQ5MmgtNTUuNjkydi05MC4yMDQgICAgYzAtMTQuODIzLTEyLjA2LTI2Ljg4Mi0yNi44ODItMjYuODgySDczLjU5OWMtMTQuODIzLDAtMjYuODgyLDEyLjA2LTI2Ljg4MiwyNi44ODJWNDkySDIzLjYwMWMtNS41MjMsMC0xMCw0LjQ3Ny0xMCwxMCAgICBzNC40NzcsMTAsMTAsMTBoNDY0Ljc5OGM1LjUyMywwLDEwLTQuNDc3LDEwLTEwUzQ5My45MjIsNDkyLDQ4OC4zOTksNDkyeiBNMTI5LjUwNCw0OTJINjYuNzE2di05MC4yMDQgICAgYzAtMy43OTUsMy4wODctNi44ODIsNi44ODItNi44ODJoNDkuMDI0YzMuNzk1LDAsNi44ODIsMy4wODcsNi44ODIsNi44ODJWNDkyeiBNMjg3Ljk4NSw0OTJoLTYyLjc4OFYzMTcuODI1ICAgIGMwLTMuNzk1LDMuMDg3LTYuODgyLDYuODgyLTYuODgyaDQ5LjAyNGMzLjc5NCwwLDYuODgyLDMuMDg3LDYuODgyLDYuODgyVjQ5MnogTTQ0Ni40NjYsNDkyaC02Mi43ODhWMTczLjUzNiAgICBjMC0zLjc5NSwzLjA4Ny02Ljg4Miw2Ljg4Mi02Ljg4Mmg0OS4wMjRjMy43OTUsMCw2Ljg4MiwzLjA4Nyw2Ljg4Miw2Ljg4MlY0OTJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDY2LjQ0MiwxMC41MTZjMC4xNC0yLjcyOS0wLjgyLTUuNTA0LTIuOTA0LTcuNTg4Yy0yLjA4NC0yLjA4NC00Ljg1OS0zLjA0NS03LjU4OC0yLjkwNCAgICBDNDU1Ljc4OSwwLjAxNyw0NTUuNjMsMCw0NTUuNDY2LDBoLTYwLjVjLTUuNTIzLDAtMTAsNC40NzctMTAsMTBzNC40NzcsMTAsMTAsMTBoMzcuMzU3bC05OC44NTcsOTguODU4bC0zNy4yOC0zNy4yOCAgICBjLTEuODc1LTEuODc1LTQuNDE5LTIuOTI5LTcuMDcxLTIuOTI5Yy0yLjY1MiwwLTUuMTk2LDEuMDU0LTcuMDcxLDIuOTI5bC0xNzkuNzY5LDE3OS43N2MtMy45MDUsMy45MDUtMy45MDUsMTAuMjM3LDAsMTQuMTQzICAgIGMxLjk1MywxLjk1MSw0LjUxMiwyLjkyNyw3LjA3MSwyLjkyN3M1LjExOS0wLjk3Niw3LjA3MS0yLjkyOUwyODkuMTE1LDEwMi43OWwzNy4yOCwzNy4yOGMzLjkwNSwzLjkwNSwxMC4yMzcsMy45MDUsMTQuMTQzLDAgICAgTDQ0Ni40NjYsMzQuMTQzdjMzLjgxYzAsNS41MjMsNC40NzcsMTAsMTAsMTBzMTAtNC40NzcsMTAtMTBWMTFDNDY2LjQ2NiwxMC44MzcsNDY2LjQ0OSwxMC42NzgsNDY2LjQ0MiwxMC41MTZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8Y2lyY2xlIGN4PSI3NS42NCIgY3k9IjMwMy4zMSIgcj0iMTAiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                <h2 class="section-title pt-3 pb-4">Negócios</h2>
            </div>
            <?php foreach (get_posts(['numberposts' => 4, 'post_type' => 'negocios']) as $post): ?>
                <div class="col-12 col-md-3">
                    <div class="text-center">
                        <a href="<?php echo get_permalink($post->ID);?>">
                            <figure class="business-wrapper">
                                <div class="business-img-box">
                                    <img class="business-img rounded"
                                        src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                         alt="<?php echo get_the_title($post->ID); ?>">
                                </div>
                                <figcaption class="business-title text-dark pt-3"><?php echo get_the_title($post->ID); ?></figcaption>
                                <p class="business-subtitle pb-4"><?php echo get_the_excerpt($post->ID); ?></p>
                                </p>
                            </figure>
                        </a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<!--Interviews Section-->
<section id="interviews-section">
    <img class="section-divider" src="<?php bloginfo('template_url')?>/images/header/whiteandgray_background_v2.png" alt="">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 col-md-12">
                <img class="index-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNjIuNzQsNDk0LjkzYy0xLjg2LTEuODYxLTQuNDQtMi45My03LjA3LTIuOTNjLTIuNjQsMC01LjIxLDEuMDY5LTcuMDcsMi45M2MtMS44NywxLjg2LTIuOTMsNC40NC0yLjkzLDcuMDcgICAgczEuMDYsNS4yMSwyLjkzLDcuMDY5YzEuODYsMS44Niw0LjQzMSwyLjkzMSw3LjA3LDIuOTMxYzIuNjMsMCw1LjIxLTEuMDcsNy4wNy0yLjkzMWMxLjg1OS0xLjg1OSwyLjkzLTQuNDM5LDIuOTMtNy4wNjkgICAgUzY0LjYsNDk2Ljc5LDYyLjc0LDQ5NC45M3oiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0zNzMuMDY5LDQyNC4yNmMtMS44NTktMS44NjEtNC40MzktMi45My03LjA2OS0yLjkzcy01LjIxLDEuMDY5LTcuMDcsMi45M2MtMS44NiwxLjg2MS0yLjkzLDQuNDQtMi45Myw3LjA3ICAgIGMwLDIuNjQsMS4wNjksNS4yMSwyLjkzLDcuMDY5YzEuODYsMS44Niw0LjQ0LDIuOTMxLDcuMDcsMi45MzFzNS4yMS0xLjA3LDcuMDY5LTIuOTMxYzEuODYtMS44NTksMi45MzEtNC40MywyLjkzMS03LjA2OSAgICBDMzc2LDQyOC43LDM3NC45Myw0MjYuMTIsMzczLjA2OSw0MjQuMjZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDc5Ljc0NywxNjEuNjJDNDg3LjMxNCwxNTQuMDIsNDkyLDE0My41NDcsNDkyLDEzMnYtOGMwLTIzLjE1OS0xOC44NDEtNDItNDItNDJzLTQyLDE4Ljg0MS00Miw0MnY4ICAgIGMwLDExLjU0OSw0LjY4NywyMi4wMjIsMTIuMjU2LDI5LjYyM2MtMTYuNDEzLDkuMDE0LTI4LjMzMywyNS4yMzQtMzEuNDUsNDQuMzc3SDM0M2MtMTYuNTQyLDAtMzAsMTMuNDU4LTMwLDMwICAgIGMwLDMuNTA2LDAuNjEsNi44NywxLjcyLDEwSDE5Ny4yOGMxLjExLTMuMTMsMS43Mi02LjQ5NCwxLjcyLTEwYzAtMTYuNTQyLTEzLjQ1OC0zMC0zMC0zMGgtNDUuODA2ICAgIGMtMy4xMTctMTkuMTQzLTE1LjAzNy0zNS4zNjQtMzEuNDUtNDQuMzc3Qzk5LjMxMywxNTQuMDIyLDEwNCwxNDMuNTQ5LDEwNCwxMzJ2LThjMC0yMy4xNTktMTguODQxLTQyLTQyLTQycy00MiwxOC44NDEtNDIsNDJ2OCAgICBjMCwxMS41NDcsNC42ODYsMjIuMDIsMTIuMjUzLDI5LjYyQzEzLjA0OSwxNzIuMTY3LDAsMTkyLjU4NiwwLDIxNnYxMDB2MTIuMTY3QzAsMzU5LjUwNSwyNS40OTUsMzg1LDU2LjgzMywzODVIMTM2djk1LjUgICAgYzAsNC4wNTgsMC43OCw3LjkzNSwyLjE4MywxMS41SDk4LjY2N2MtNS41MjIsMC0xMCw0LjQ3OC0xMCwxMGMwLDUuNTIyLDQuNDc4LDEwLDEwLDEwaDM1Ny42NjZjNS41MjIsMCwxMC00LjQ3OCwxMC0xMCAgICBjMC01LjUyMi00LjQ3OC0xMC0xMC0xMGgtODIuNTE2YzEuNDAzLTMuNTY1LDIuMTgzLTcuNDQyLDIuMTgzLTExLjVWNDY5YzAtNS41MjItNC40NzgtMTAtMTAtMTBjLTUuNTIyLDAtMTAsNC40NzgtMTAsMTB2MTEuNSAgICBjMCw2LjM0MS01LjE1OSwxMS41LTExLjUsMTEuNXMtMTEuNS01LjE1OS0xMS41LTExLjVWMzU0LjI1YzAtMTUuNTc3LDEyLjY3My0yOC4yNSwyOC4yNS0yOC4yNUgzOThoOGg4NnYyLjE2NyAgICBjMCwyMC4zMS0xNi41MjMsMzYuODMzLTM2LjgzMywzNi44MzNIMzY2Yy01LjUyMiwwLTEwLDQuNDc4LTEwLDEwdjE2YzAsNS41MjIsNC40NzgsMTAsMTAsMTBjNS41MjIsMCwxMC00LjQ3OCwxMC0xMHYtNmg3OS4xNjcgICAgQzQ4Ni41MDUsMzg1LDUxMiwzNTkuNTA1LDUxMiwzMjguMTY3VjMxNlYyMTZDNTEyLDE5Mi41ODYsNDk4Ljk1MSwxNzIuMTY3LDQ3OS43NDcsMTYxLjYyeiBNNDI4LDEyNGMwLTEyLjEzMSw5Ljg2OS0yMiwyMi0yMiAgICBjMTIuMTMxLDAsMjIsOS44NjksMjIsMjJ2OGMwLDEyLjEzMS05Ljg2OSwyMi0yMiwyMmMtMTIuMTMxLDAtMjItOS44NjktMjItMjJWMTI0eiBNNDAsMTI0YzAtMTIuMTMxLDkuODY5LTIyLDIyLTIyICAgIHMyMiw5Ljg2OSwyMiwyMnY4YzAsMTIuMTMxLTkuODY5LDIyLTIyLDIycy0yMi05Ljg2OS0yMi0yMlYxMjR6IE0yMCwyMTZjMC0yMy4xNTksMTguODQxLTQyLDQyLTQyczQyLDE4Ljg0MSw0Miw0MiAgICBjMCw1LjUyMiw0LjQ3OCwxMCwxMCwxMGg1NWM1LjUxNCwwLDEwLDQuNDg2LDEwLDEwYzAsNS41MTQtNC40ODYsMTAtMTAsMTBoLTU4LjIzNWMtMTUuOSwwLTMwLjQ0MS04LjcwNy0zNy45NS0yMi43MjMgICAgYy0yLjYwNy00Ljg2OC04LjY2OS02LjcwMS0xMy41MzctNC4wOTJjLTQuODY4LDIuNjA3LTYuNyw4LjY2OC00LjA5MiwxMy41MzdjMTAuMDExLDE4LjY4NywyOC41NTksMzAuOTMsNDkuMzczLDMyLjk3NCAgICBDMTA0LjE5NywyNjYuNzMsMTA0LDI2Ny44NDMsMTA0LDI2OXYzN0gyMFYyMTZ6IE0xNDMuMzgyLDMwNkgxMjR2LTM3YzAtMS4wNDUtMC4xNi0yLjA1My0wLjQ1OC0zaDE5Ljg0ICAgIGMtMy40MTUsNS44ODgtNS4zODIsMTIuNzE3LTUuMzgyLDIwQzEzOCwyOTMuMjgzLDEzOS45NjYsMzAwLjExMiwxNDMuMzgyLDMwNnogTTE3OSw0ODAuNWMwLDYuMzQxLTUuMTU5LDExLjUtMTEuNSwxMS41ICAgIHMtMTEuNS01LjE1OS0xMS41LTExLjVWMzc1YzAtNS41MjItNC40NzgtMTAtMTAtMTBINTYuODMzQzM2LjUyMywzNjUsMjAsMzQ4LjQ3NywyMCwzMjguMTY3VjMyNmg4Nmg4aDM2Ljc1ICAgIGMxNS41NzcsMCwyOC4yNSwxMi42NzMsMjguMjUsMjguMjVWNDgwLjV6IE0yMjYsNDkyaC0yOS4xODNjMS40MDQtMy41NjUsMi4xODMtNy40NDIsMi4xODMtMTEuNVYzNTQuMjUgICAgYzAtMTAuNTQ0LTMuNDA5LTIwLjMwMi05LjE3MS0yOC4yNUgyMjZWNDkyeiBNMjY2LDQ5MmgtMjBWMzI2aDIwVjQ5MnogTTMxNS4xODMsNDkySDI4NlYzMjZoMzYuMTcxICAgIGMtNS43NjEsNy45NDgtOS4xNzEsMTcuNzA2LTkuMTcxLDI4LjI1VjQ4MC41QzMxMyw0ODQuNTU4LDMxMy43OCw0ODguNDM1LDMxNS4xODMsNDkyeiBNMzM0LDMwNkgxNzhjLTExLjAyOCwwLTIwLTguOTcyLTIwLTIwICAgIHM4Ljk3Mi0yMCwyMC0yMGgxNTZjMTEuMDI4LDAsMjAsOC45NzIsMjAsMjBTMzQ1LjAyOCwzMDYsMzM0LDMwNnogTTM4OCwyNjl2MzdoLTE5LjM4MmMzLjQxNS01Ljg4OCw1LjM4Mi0xMi43MTcsNS4zODItMjAgICAgYzAtNy4yODMtMS45NjYtMTQuMTEyLTUuMzgyLTIwaDE5Ljg0QzM4OC4xNiwyNjYuOTQ3LDM4OCwyNjcuOTU1LDM4OCwyNjl6IE00OTIsMzA2aC04NHYtMzdjMC0xLjE1Ny0wLjE5Ny0yLjI3LTAuNTU5LTMuMzA0ICAgIGMyMC44MTQtMi4wNDQsMzkuMzYyLTE0LjI4Nyw0OS4zNzMtMzIuOTc0YzIuNjA4LTQuODY5LDAuNzc2LTEwLjkzLTQuMDkyLTEzLjUzN2MtNC44Ny0yLjYwOC0xMC45MjktMC43NzQtMTMuNTM3LDQuMDkyICAgIGMtNy41MDksMTQuMDE2LTIyLjA1LDIyLjcyMy0zNy45NSwyMi43MjNIMzQzYy01LjUxNCwwLTEwLTQuNDg2LTEwLTEwYzAtNS41MTQsNC40ODYtMTAsMTAtMTBoNTVjNS41MjIsMCwxMC00LjQ3OCwxMC0xMCAgICBjMC0yMy4xNTksMTguODQxLTQyLDQyLTQyczQyLDE4Ljg0MSw0Miw0MlYzMDZ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzI4LDBIMTg0Yy0xNi41NDIsMC0zMCwxMy40NTgtMzAsMzB2OThjMCwxNi41NDIsMTMuNDU4LDMwLDMwLDMwaDM0Ljg1N2wzMC4wNzEsMzAuMDcxICAgIEMyNTAuODgyLDE5MC4wMjMsMjUzLjQ0LDE5MSwyNTYsMTkxczUuMTE4LTAuOTc3LDcuMDcxLTIuOTI5TDI5My4xNDMsMTU4SDMyOGMxNi41NDIsMCwzMC0xMy40NTgsMzAtMzBWMzAgICAgQzM1OCwxMy40NTgsMzQ0LjU0MiwwLDMyOCwweiBNMzM4LDEyOGMwLDUuNTE0LTQuNDg2LDEwLTEwLDEwaC0zOWMtMi42NTIsMC01LjE5NSwxLjA1NC03LjA3MSwyLjkyOUwyNTYsMTY2Ljg1N2wtMjUuOTI5LTI1LjkyOSAgICBDMjI4LjE5NSwxMzkuMDU0LDIyNS42NTIsMTM4LDIyMywxMzhoLTM5Yy01LjUxNCwwLTEwLTQuNDg2LTEwLTEwVjMwYzAtNS41MTQsNC40ODYtMTAsMTAtMTBoMTQ0YzUuNTE0LDAsMTAsNC40ODYsMTAsMTBWMTI4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTIxNi4wNjksNjguMWMtMS44NTktMS44Ny00LjQzOS0yLjkzLTcuMDY5LTIuOTNzLTUuMjEsMS4wNi03LjA3LDIuOTNjLTEuODYsMS44Ni0yLjkzLDQuNDQtMi45Myw3LjA3ICAgIHMxLjA2OSw1LjIxLDIuOTMsNy4wN2MxLjg2LDEuODYsNC40NCwyLjkzLDcuMDcsMi45M3M1LjIxLTEuMDcsNy4wNjktMi45M2MxLjg2LTEuODYsMi45MzEtNC40NCwyLjkzMS03LjA3ICAgIFMyMTcuOTMsNjkuOTYsMjE2LjA2OSw2OC4xeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI2My4wNjksNjguMWMtMS44NTktMS44NTktNC40MzktMi45My03LjA2OS0yLjkzcy01LjIxLDEuMDctNy4wNywyLjkzYy0xLjg2LDEuODYtMi45Myw0LjQ0LTIuOTMsNy4wNyAgICBzMS4wNjksNS4yMSwyLjkzLDcuMDdjMS44NiwxLjg2LDQuNDQsMi45Myw3LjA3LDIuOTNzNS4yMS0xLjA3LDcuMDY5LTIuOTNjMS44Ni0xLjg2LDIuOTMxLTQuNDQsMi45MzEtNy4wNyAgICBTMjY0LjkzLDY5Ljk2LDI2My4wNjksNjguMXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0zMTAuMDY5LDY4LjFjLTEuODU5LTEuODctNC40MzktMi45My03LjA2OS0yLjkzcy01LjIxLDEuMDYtNy4wNywyLjkzYy0xLjg2LDEuODYtMi45Myw0LjQ0LTIuOTMsNy4wNyAgICBzMS4wNjksNS4yMSwyLjkzLDcuMDdjMS44NiwxLjg2LDQuNDQsMi45Myw3LjA3LDIuOTNzNS4yMS0xLjA3LDcuMDY5LTIuOTNjMS44Ni0xLjg2LDIuOTMxLTQuNDQsMi45MzEtNy4wNyAgICBTMzExLjkzLDY5Ljk2LDMxMC4wNjksNjguMXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                <h2 class="section-title pt-2 pb-2">Entrevistas</h2>
            </div>
            <?php foreach (get_posts(['numberposts' => 4, 'post_type' => 'entrevista']) as $post): ?>
                <div class="col-12 col-md-3">
                    <div class="text-center">
                        <a href="<?php echo get_permalink($post->ID);?>">
                            <figure class="business-wrapper">
                                <div class="business-img-box">
                                    <img class="interviews-img rounded img-thumbnail"
                                         src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                         alt="<?php echo get_the_title($post->ID); ?>">
                                </div>
                                <figcaption class="business-title text-dark pt-3"><?php echo get_the_title($post->ID); ?></figcaption>
                                <p class="business-subtitle pb-4"><?php echo get_the_excerpt($post->ID); ?></p>
                            </figure>
                        </a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>


<!--Articles Section-->
<section id="articles-section">
    <img class="section-divider" src="<?php bloginfo('template_url')?>/images/header/whiteandgray_background_v3.png" alt="">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <img class="index-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4OS43IDQ4OS43IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0ODkuNyA0ODkuNzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik01Mi43LDEzNC43NWMyOS4xLDAsNTIuNy0yMy43LDUyLjctNTIuN3MtMjMuNi01Mi44LTUyLjctNTIuOFMwLDUyLjk1LDAsODEuOTVTMjMuNywxMzQuNzUsNTIuNywxMzQuNzV6IE01Mi43LDUzLjc1ICAgIGMxNS42LDAsMjguMiwxMi43LDI4LjIsMjguMnMtMTIuNywyOC4yLTI4LjIsMjguMnMtMjguMi0xMi43LTI4LjItMjguMlMzNy4yLDUzLjc1LDUyLjcsNTMuNzV6IiBmaWxsPSIjMDAwMDAwIi8+CgkJPHBhdGggZD0iTTUyLjcsMjk3LjU1YzI5LjEsMCw1Mi43LTIzLjcsNTIuNy01Mi43cy0yMy42LTUyLjctNTIuNy01Mi43UzAsMjE1Ljc1LDAsMjQ0Ljg1UzIzLjcsMjk3LjU1LDUyLjcsMjk3LjU1eiBNNTIuNywyMTYuNjUgICAgYzE1LjYsMCwyOC4yLDEyLjcsMjguMiwyOC4ycy0xMi43LDI4LjItMjguMiwyOC4ycy0yOC4yLTEyLjYtMjguMi0yOC4yUzM3LjIsMjE2LjY1LDUyLjcsMjE2LjY1eiIgZmlsbD0iIzAwMDAwMCIvPgoJCTxwYXRoIGQ9Ik01Mi43LDQ2MC40NWMyOS4xLDAsNTIuNy0yMy43LDUyLjctNTIuN2MwLTI5LjEtMjMuNy01Mi43LTUyLjctNTIuN1MwLDM3OC43NSwwLDQwNy43NUMwLDQzNi43NSwyMy43LDQ2MC40NSw1Mi43LDQ2MC40NSAgICB6IE01Mi43LDM3OS40NWMxNS42LDAsMjguMiwxMi43LDI4LjIsMjguMmMwLDE1LjYtMTIuNywyOC4yLTI4LjIsMjguMnMtMjguMi0xMi43LTI4LjItMjguMkMyNC41LDM5Mi4xNSwzNy4yLDM3OS40NSw1Mi43LDM3OS40NSAgICB6IiBmaWxsPSIjMDAwMDAwIi8+CgkJPHBhdGggZD0iTTE3NS45LDk0LjI1aDMwMS41YzYuOCwwLDEyLjMtNS41LDEyLjMtMTIuM3MtNS41LTEyLjMtMTIuMy0xMi4zSDE3NS45Yy02LjgsMC0xMi4zLDUuNS0xMi4zLDEyLjMgICAgUzE2OS4xLDk0LjI1LDE3NS45LDk0LjI1eiIgZmlsbD0iIzAwMDAwMCIvPgoJCTxwYXRoIGQ9Ik0xNzUuOSwyNTcuMTVoMzAxLjVjNi44LDAsMTIuMy01LjUsMTIuMy0xMi4zcy01LjUtMTIuMy0xMi4zLTEyLjNIMTc1LjljLTYuOCwwLTEyLjMsNS41LTEyLjMsMTIuMyAgICBTMTY5LjEsMjU3LjE1LDE3NS45LDI1Ny4xNXoiIGZpbGw9IiMwMDAwMDAiLz4KCQk8cGF0aCBkPSJNMTc1LjksNDE5Ljk1aDMwMS41YzYuOCwwLDEyLjMtNS41LDEyLjMtMTIuM3MtNS41LTEyLjMtMTIuMy0xMi4zSDE3NS45Yy02LjgsMC0xMi4zLDUuNS0xMi4zLDEyLjMgICAgUzE2OS4xLDQxOS45NSwxNzUuOSw0MTkuOTV6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                <h2 class="section-title pt-5 pb-4">Artigos</h2>
            </div>
            <?php foreach (get_posts(['numberposts' => 3, 'post_type' => 'artigos']) as $post): ?>
                <div class="col-12 col-md-12 d-flex align-items-center justify-content-center pb-4">
                        <div class="articles-img-box text-left">
                            <img class="articles-img rounded-circle"
                                 src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                 alt="<?php echo get_the_title($post->ID); ?>">
                        </div>
                        <a href="<?php echo get_permalink($post->ID)?>">
                            <div class="articles-text-box text-left">
                                <h2 class="articles-title"><?php echo get_the_title($post->ID); ?> -</h2>
                                <h3 class="articles-author"><?php the_field('article_author', $post->ID);?></h3>
                                <p class="articles-citation"><?php echo get_the_excerpt($post->ID); ?></p>
                            </div>
                        </a>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<!--Videos Section-->
<section id="videos-section" class="bg-dark">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <img class="index-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDE5MS4yNTUgMTkxLjI1NSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTkxLjI1NSAxOTEuMjU1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxwYXRoIGQ9Ik0xNjIuOTI5LDY2LjYxMmMtMi44MTQtMS43NTQtNi41MTQtMC44OTYtOC4yNjcsMS45MTdzLTAuODk1LDYuNTEzLDEuOTE3LDguMjY2YzYuNTQ0LDQuMDgxLDEwLjQ1LDExLjEyMSwxMC40NSwxOC44MzMgIHMtMy45MDYsMTQuNzUyLTEwLjQ1LDE4LjgzM2wtOTguNDE3LDYxLjM2NWMtNi45NDMsNC4zMjktMTUuMzU5LDQuNTQyLTIyLjUxMiwwLjU3M2MtNy4xNTQtMy45Ny0xMS40MjUtMTEuMjI1LTExLjQyNS0xOS40MDYgIFYzNC4yNjJjMC04LjE4MSw0LjI3MS0xNS40MzYsMTEuNDI1LTE5LjQwNmM3LjE1My0zLjk2OSwxNS41NjktMy43NTYsMjIuNTEyLDAuNTczbDU3LjI5MiwzNS43MjMgIGMyLjgxMywxLjc1Miw2LjUxMywwLjg5NSw4LjI2Ny0xLjkxN2MxLjc1My0yLjgxMiwwLjg5NS02LjUxMy0xLjkxNy04LjI2Nkw2NC41MTIsNS4yNDdjLTEwLjY5Ni02LjY2OS0yMy42NjEtNy0zNC42ODUtMC44ODMgIEMxOC44MDYsMTAuNDgsMTIuMjI2LDIxLjY1NywxMi4yMjYsMzQuMjYydjEyMi43M2MwLDEyLjYwNSw2LjU4LDIzLjc4MiwxNy42MDIsMjkuODk4YzUuMjUsMi45MTMsMTAuOTM5LDQuMzY0LDE2LjYxNiw0LjM2NCAgYzYuMjQxLDAsMTIuNDY3LTEuNzU0LDE4LjA2OC01LjI0N2w5OC40MTctNjEuMzY1YzEwLjA4Mi02LjI4NywxNi4xMDEtMTcuMTMzLDE2LjEwMS0yOS4wMTVTMTczLjAxMSw3Mi44OTksMTYyLjkyOSw2Ni42MTJ6IiBmaWxsPSIjRkZGRkZGIi8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                <h2 class="section-title text-light pb-3">Vídeos</h2>
            </div>
            <?php
                $featured_video_id = 0;
                $cont = 0;
                $count_videos_posts = wp_count_posts('videos');
                $published_videos_posts = $count_videos_posts->publish;
            ?>
            <div class="col-8 col-md-8 d-flex align-items-center pb-4 mb-5">
                <div class="video-box">
                    <?php foreach (get_posts(['numberpost' => 1, 'post_type' => 'videos']) as $post):
                        $cont++;
                        $featured_video_id = $post->ID;
                        if($cont == $published_videos_posts): ?>
                            <figure>
                                <video
                                    class="video-js video-js-skin" id="qtcPlayer" controls width="740" height="460"
                                    data-url="<?php echo get_field('qtc_video_url', $post->ID); ?>">
                                </video>
                                <figcaption class="video_title"><?php echo get_the_title($post->ID);?></figcaption>
                            </figure>
                    <?php endif; endforeach;?>
                </div>
            </div>
            <div class="col-4 col-md-4 text-left pb-4">
                <div class="next-videos-box bg-secondary rounded">
                    <?php foreach (get_posts(['numberpost' => 10, 'offset' => 1, 'post_type' => 'videos']) as $post): ?>
                        <figure>
                            <a href="<?php echo get_field('qtc_video_url', $post->ID); ?>" data-video
                               data-poster="<?php echo get_the_post_thumbnail_url($post->ID); ?>">
                                <img class="next-videos-img" src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                     alt="<?php echo get_the_title($post->ID); ?>">
                                <figcaption class="next-videos-titles"><?php echo get_the_title($post->ID);?></figcaption>
                            </a>
                        </figure>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>
            <script type="text/javascript">
                window.onload = function () {
                    videojs("qtcPlayer", {
                        controls: true,
                        techOrder: ["youtube", "html5"],
                        youtube: { "customVars": { "showinfo": 0, "iv_load_policy" : 3 }},
                        sources: [
                            { "type": "video/youtube", "src": $('#qtcPlayer').data("url") }
                        ]
                    }, function() {
                        var mPlayer = this
                        $("a[data-video]").on("click", function (e) {
                            e.preventDefault();
                            mPlayer.poster( $(this).data("poster"))
                            mPlayer.src({ type: "video/youtube", src: $(this).attr("href") });
                            mPlayer.play();
                        });
                    });
                }
            </script>


<!--Weekend Section-->
<section id="weekend-section">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <img class="index-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMwMi40IDMwMi40IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDIuNCAzMDIuNDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yMDQuOCw5Ny42QzE5MS4yLDg0LDE3Miw3NS4yLDE1MS4yLDc1LjJzLTQwLDguNC01My42LDIyLjRjLTEzLjYsMTMuNi0yMi40LDMyLjgtMjIuNCw1My42czguOCw0MCwyMi40LDUzLjYgICAgYzEzLjYsMTMuNiwzMi44LDIyLjQsNTMuNiwyMi40czQwLTguNCw1My42LTIyLjRjMTMuNi0xMy42LDIyLjQtMzIuOCwyMi40LTUzLjZTMjE4LjgsMTExLjIsMjA0LjgsOTcuNnogTTE5MC40LDE5MC40ICAgIGMtMTAsMTAtMjQsMTYtMzkuMiwxNnMtMjkuMi02LTM5LjItMTZzLTE2LTI0LTE2LTM5LjJzNi0yOS4yLDE2LTM5LjJzMjQtMTYsMzkuMi0xNnMyOS4yLDYsMzkuMiwxNnMxNiwyNCwxNiwzOS4yICAgIFMyMDAuNCwxODAuNCwxOTAuNCwxOTAuNHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yOTIsMTQwLjhoLTMwLjhjLTUuNiwwLTEwLjQsNC44LTEwLjQsMTAuNGMwLDUuNiw0LjgsMTAuNCwxMC40LDEwLjRIMjkyYzUuNiwwLDEwLjQtNC44LDEwLjQtMTAuNCAgICBDMzAyLjQsMTQ1LjYsMjk3LjYsMTQwLjgsMjkyLDE0MC44eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTE1MS4yLDI1MC44Yy01LjYsMC0xMC40LDQuOC0xMC40LDEwLjRWMjkyYzAsNS42LDQuOCwxMC40LDEwLjQsMTAuNGM1LjYsMCwxMC40LTQuOCwxMC40LTEwLjR2LTMwLjggICAgQzE2MS42LDI1NS42LDE1Ni44LDI1MC44LDE1MS4yLDI1MC44eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1OCwyNDMuNmwtMjItMjJjLTMuNi00LTEwLjQtNC0xNC40LDBzLTQsMTAuNCwwLDE0LjRsMjIsMjJjNCw0LDEwLjQsNCwxNC40LDBTMjYyLDI0Ny42LDI1OCwyNDMuNnoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNTEuMiwwYy01LjYsMC0xMC40LDQuOC0xMC40LDEwLjR2MzAuOGMwLDUuNiw0LjgsMTAuNCwxMC40LDEwLjRjNS42LDAsMTAuNC00LjgsMTAuNC0xMC40VjEwLjQgICAgQzE2MS42LDQuOCwxNTYuOCwwLDE1MS4yLDB6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjU4LjQsNDQuNGMtNC00LTEwLjQtNC0xNC40LDBsLTIyLDIyYy00LDQtNCwxMC40LDAsMTQuNGMzLjYsNCwxMC40LDQsMTQuNCwwbDIyLTIyQzI2Mi40LDU0LjgsMjYyLjQsNDguNCwyNTguNCw0NC40eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQxLjIsMTQwLjhIMTAuNGMtNS42LDAtMTAuNCw0LjgtMTAuNCwxMC40czQuNCwxMC40LDEwLjQsMTAuNGgzMC44YzUuNiwwLDEwLjQtNC44LDEwLjQtMTAuNCAgICBDNTEuNiwxNDUuNiw0Ni44LDE0MC44LDQxLjIsMTQwLjh6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNODAuNCwyMjEuNmMtMy42LTQtMTAuNC00LTE0LjQsMGwtMjIsMjJjLTQsNC00LDEwLjQsMCwxNC40czEwLjQsNCwxNC40LDBsMjItMjJDODQuNCwyMzIsODQuNCwyMjUuNiw4MC40LDIyMS42eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTgwLjQsNjYuNGwtMjItMjJjLTQtNC0xMC40LTQtMTQuNCwwcy00LDEwLjQsMCwxNC40bDIyLDIyYzQsNCwxMC40LDQsMTQuNCwwUzg0LjQsNzAuNCw4MC40LDY2LjR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                <h2 class="section-title pb-3">Fim de Semana</h2>
            </div>
            <?php foreach (get_posts(['numberpost' => 4, 'post_type' => 'fim_de_semana']) as $post): ?>
                <div class="col-6 col-md-3 pb-4 mb-5">
                    <figure class="weekend-img-box">
                        <a href="<?php echo get_permalink($post->ID)?>">
                            <img class="weekend-img" src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                 alt="<?php echo get_the_title($post->ID); ?>">
                        </a>
                        <figcaption class="weekend-figcaption">
                            <a href="<?php echo get_permalink($post->ID)?>"><?php echo get_the_excerpt($post->ID); ?></a>
                        </figcaption>
                    </figure>
                </div>
            <?php endforeach?>
        </div>
    </div>
</section>


<!--Weekend Section-->
<section id="weekend-section">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <img class="index-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMwMi40IDMwMi40IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDIuNCAzMDIuNDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yMDQuOCw5Ny42QzE5MS4yLDg0LDE3Miw3NS4yLDE1MS4yLDc1LjJzLTQwLDguNC01My42LDIyLjRjLTEzLjYsMTMuNi0yMi40LDMyLjgtMjIuNCw1My42czguOCw0MCwyMi40LDUzLjYgICAgYzEzLjYsMTMuNiwzMi44LDIyLjQsNTMuNiwyMi40czQwLTguNCw1My42LTIyLjRjMTMuNi0xMy42LDIyLjQtMzIuOCwyMi40LTUzLjZTMjE4LjgsMTExLjIsMjA0LjgsOTcuNnogTTE5MC40LDE5MC40ICAgIGMtMTAsMTAtMjQsMTYtMzkuMiwxNnMtMjkuMi02LTM5LjItMTZzLTE2LTI0LTE2LTM5LjJzNi0yOS4yLDE2LTM5LjJzMjQtMTYsMzkuMi0xNnMyOS4yLDYsMzkuMiwxNnMxNiwyNCwxNiwzOS4yICAgIFMyMDAuNCwxODAuNCwxOTAuNCwxOTAuNHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yOTIsMTQwLjhoLTMwLjhjLTUuNiwwLTEwLjQsNC44LTEwLjQsMTAuNGMwLDUuNiw0LjgsMTAuNCwxMC40LDEwLjRIMjkyYzUuNiwwLDEwLjQtNC44LDEwLjQtMTAuNCAgICBDMzAyLjQsMTQ1LjYsMjk3LjYsMTQwLjgsMjkyLDE0MC44eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTE1MS4yLDI1MC44Yy01LjYsMC0xMC40LDQuOC0xMC40LDEwLjRWMjkyYzAsNS42LDQuOCwxMC40LDEwLjQsMTAuNGM1LjYsMCwxMC40LTQuOCwxMC40LTEwLjR2LTMwLjggICAgQzE2MS42LDI1NS42LDE1Ni44LDI1MC44LDE1MS4yLDI1MC44eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1OCwyNDMuNmwtMjItMjJjLTMuNi00LTEwLjQtNC0xNC40LDBzLTQsMTAuNCwwLDE0LjRsMjIsMjJjNCw0LDEwLjQsNCwxNC40LDBTMjYyLDI0Ny42LDI1OCwyNDMuNnoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNTEuMiwwYy01LjYsMC0xMC40LDQuOC0xMC40LDEwLjR2MzAuOGMwLDUuNiw0LjgsMTAuNCwxMC40LDEwLjRjNS42LDAsMTAuNC00LjgsMTAuNC0xMC40VjEwLjQgICAgQzE2MS42LDQuOCwxNTYuOCwwLDE1MS4yLDB6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjU4LjQsNDQuNGMtNC00LTEwLjQtNC0xNC40LDBsLTIyLDIyYy00LDQtNCwxMC40LDAsMTQuNGMzLjYsNCwxMC40LDQsMTQuNCwwbDIyLTIyQzI2Mi40LDU0LjgsMjYyLjQsNDguNCwyNTguNCw0NC40eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQxLjIsMTQwLjhIMTAuNGMtNS42LDAtMTAuNCw0LjgtMTAuNCwxMC40czQuNCwxMC40LDEwLjQsMTAuNGgzMC44YzUuNiwwLDEwLjQtNC44LDEwLjQtMTAuNCAgICBDNTEuNiwxNDUuNiw0Ni44LDE0MC44LDQxLjIsMTQwLjh6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNODAuNCwyMjEuNmMtMy42LTQtMTAuNC00LTE0LjQsMGwtMjIsMjJjLTQsNC00LDEwLjQsMCwxNC40czEwLjQsNCwxNC40LDBsMjItMjJDODQuNCwyMzIsODQuNCwyMjUuNiw4MC40LDIyMS42eiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTgwLjQsNjYuNGwtMjItMjJjLTQtNC0xMC40LTQtMTQuNCwwcy00LDEwLjQsMCwxNC40bDIyLDIyYzQsNCwxMC40LDQsMTQuNCwwUzg0LjQsNzAuNCw4MC40LDY2LjR6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                <h2 class="section-title pb-3">Fim de Semana</h2>
            </div>
            <div class="col-12 col-md-12">
                <div id="carousel" class="carousel">
                    <div class="carousel-inner">
                        <?php foreach (get_posts(['numberpost' => 12, 'post_type' => 'fim_de_semana']) as $post): ?>
                            <div class="carousel-item">
                                <figure class="weekend-img-box">
                                    <a href="<?php echo get_permalink($post->ID)?>">
                                        <img class="weekend-img" src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                             alt="<?php echo get_the_title($post->ID); ?>">
                                    </a>
                                    <figcaption class="weekend-figcaption">
                                        <a href="<?php echo get_permalink($post->ID)?>"><?php echo get_the_excerpt($post->ID); ?></a>
                                    </figcaption>
                                </figure>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
</section>

<!--Events Section-->
<section id="events-section" class="pb-5">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <img class="index-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjMycHgiIHZpZXdCb3g9Ii0xNyAwIDUxMiA1MTIuMDAwMDgiIHdpZHRoPSIzMnB4Ij48cGF0aCBkPSJtMTEyLjgwODU5NCAxNzMuNTUwNzgxaC01Mi4wNjY0MDZjLTQuNzkyOTY5IDAtOC42NzU3ODIgMy44ODI4MTMtOC42NzU3ODIgOC42NzU3ODF2NTIuMDY2NDA3YzAgNC43OTI5NjkgMy44ODI4MTMgOC42NzU3ODEgOC42NzU3ODIgOC42NzU3ODFoNTIuMDY2NDA2YzQuNzkyOTY4IDAgOC42NzU3ODEtMy44ODI4MTIgOC42NzU3ODEtOC42NzU3ODF2LTUyLjA2NjQwN2MwLTQuNzkyOTY4LTMuODgyODEzLTguNjc1NzgxLTguNjc1NzgxLTguNjc1Nzgxem0tOC42Nzk2ODggNTIuMDYyNWgtMzQuNzA3MDMxdi0zNC43MDcwMzFoMzQuNzA3MDMxem0wIDAiIGZpbGw9IiMwMDAwMDAiLz48cGF0aCBkPSJtMTk5LjU4MjAzMSAxNzMuNTUwNzgxaC01Mi4wNjY0MDZjLTQuNzg5MDYzIDAtOC42NzU3ODEgMy44ODI4MTMtOC42NzU3ODEgOC42NzU3ODF2NTIuMDY2NDA3YzAgNC43OTI5NjkgMy44ODY3MTggOC42NzU3ODEgOC42NzU3ODEgOC42NzU3ODFoNTIuMDY2NDA2YzQuNzkyOTY5IDAgOC42Nzk2ODgtMy44ODI4MTIgOC42Nzk2ODgtOC42NzU3ODF2LTUyLjA2NjQwN2MwLTQuNzkyOTY4LTMuODg2NzE5LTguNjc1NzgxLTguNjc5Njg4LTguNjc1Nzgxem0tOC42NzU3ODEgNTIuMDYyNWgtMzQuNzEwOTM4di0zNC43MDcwMzFoMzQuNzEwOTM4em0wIDAiIGZpbGw9IiMwMDAwMDAiLz48cGF0aCBkPSJtMjg2LjM1OTM3NSAxNzMuNTUwNzgxaC01Mi4wNjY0MDZjLTQuNzkyOTY5IDAtOC42Nzk2ODggMy44ODI4MTMtOC42Nzk2ODggOC42NzU3ODF2NTIuMDY2NDA3YzAgNC43OTI5NjkgMy44ODY3MTkgOC42NzU3ODEgOC42Nzk2ODggOC42NzU3ODFoNTIuMDYyNWM0Ljc5Mjk2OSAwIDguNjc5Njg3LTMuODgyODEyIDguNjc5Njg3LTguNjc1Nzgxdi01Mi4wNjY0MDdjMC00Ljc5Mjk2OC0zLjg4NjcxOC04LjY3NTc4MS04LjY3NTc4MS04LjY3NTc4MXptLTguNjc5Njg3IDUyLjA2MjVoLTM0LjcxMDkzOHYtMzQuNzA3MDMxaDM0LjcxMDkzOHptMCAwIiBmaWxsPSIjMDAwMDAwIi8+PHBhdGggZD0ibTMyMS4wNjY0MDYgMjQyLjk2ODc1aDUyLjA2NjQwNmM0Ljc5Mjk2OSAwIDguNjc1NzgyLTMuODgyODEyIDguNjc1NzgyLTguNjc1Nzgxdi01Mi4wNjY0MDdjMC00Ljc5Mjk2OC0zLjg4MjgxMy04LjY3NTc4MS04LjY3NTc4Mi04LjY3NTc4MWgtNTIuMDY2NDA2Yy00Ljc5Mjk2OCAwLTguNjc1NzgxIDMuODgyODEzLTguNjc1NzgxIDguNjc1NzgxdjUyLjA2NjQwN2MwIDQuNzkyOTY5IDMuODgyODEzIDguNjc1NzgxIDguNjc1NzgxIDguNjc1Nzgxem04LjY3OTY4OC01Mi4wNjI1aDM0LjcwNzAzMXYzNC43MDcwMzFoLTM0LjcwNzAzMXptMCAwIiBmaWxsPSIjMDAwMDAwIi8+PHBhdGggZD0ibTExMi44MDg1OTQgMjYwLjMyNDIxOWgtNTIuMDY2NDA2Yy00Ljc5Mjk2OSAwLTguNjc1NzgyIDMuODg2NzE5LTguNjc1NzgyIDguNjc5Njg3djUyLjA2MjVjMCA0Ljc5Mjk2OSAzLjg4MjgxMyA4LjY3OTY4OCA4LjY3NTc4MiA4LjY3OTY4OGg1Mi4wNjY0MDZjNC43OTI5NjggMCA4LjY3NTc4MS0zLjg4NjcxOSA4LjY3NTc4MS04LjY3OTY4OHYtNTIuMDYyNWMwLTQuNzkyOTY4LTMuODgyODEzLTguNjc5Njg3LTguNjc1NzgxLTguNjc5Njg3em0tOC42Nzk2ODggNTIuMDY2NDA2aC0zNC43MDcwMzF2LTM0LjcxMDkzN2gzNC43MDcwMzF6bTAgMCIgZmlsbD0iIzAwMDAwMCIvPjxwYXRoIGQ9Im0xOTkuNTgyMDMxIDI2MC4zMjQyMTloLTUyLjA2NjQwNmMtNC43ODkwNjMgMC04LjY3NTc4MSAzLjg4NjcxOS04LjY3NTc4MSA4LjY3OTY4N3Y1Mi4wNjI1YzAgNC43OTI5NjkgMy44ODY3MTggOC42Nzk2ODggOC42NzU3ODEgOC42Nzk2ODhoNTIuMDY2NDA2YzQuNzkyOTY5IDAgOC42Nzk2ODgtMy44ODY3MTkgOC42Nzk2ODgtOC42Nzk2ODh2LTUyLjA2MjVjMC00Ljc5Mjk2OC0zLjg4NjcxOS04LjY3OTY4Ny04LjY3OTY4OC04LjY3OTY4N3ptLTguNjc1NzgxIDUyLjA2NjQwNmgtMzQuNzEwOTM4di0zNC43MTA5MzdoMzQuNzEwOTM4em0wIDAiIGZpbGw9IiMwMDAwMDAiLz48cGF0aCBkPSJtMjg2LjM1OTM3NSAyNjAuMzI0MjE5aC01Mi4wNjY0MDZjLTQuNzkyOTY5IDAtOC42Nzk2ODggMy44ODY3MTktOC42Nzk2ODggOC42Nzk2ODd2NTIuMDYyNWMwIDQuNzkyOTY5IDMuODg2NzE5IDguNjc5Njg4IDguNjc5Njg4IDguNjc5Njg4aDUyLjA2MjVjNC43OTI5NjkgMCA4LjY3OTY4Ny0zLjg4NjcxOSA4LjY3OTY4Ny04LjY3OTY4OHYtNTIuMDYyNWMwLTQuNzkyOTY4LTMuODg2NzE4LTguNjc5Njg3LTguNjc1NzgxLTguNjc5Njg3em0tOC42Nzk2ODcgNTIuMDY2NDA2aC0zNC43MTA5Mzh2LTM0LjcxMDkzN2gzNC43MTA5Mzh6bTAgMCIgZmlsbD0iIzAwMDAwMCIvPjxwYXRoIGQ9Im0zMjEuMDY2NDA2IDMyOS43NDYwOTRoNTIuMDY2NDA2YzQuNzkyOTY5IDAgOC42NzU3ODItMy44ODY3MTkgOC42NzU3ODItOC42Nzk2ODh2LTUyLjA2MjVjMC00Ljc5Mjk2OC0zLjg4MjgxMy04LjY3OTY4Ny04LjY3NTc4Mi04LjY3OTY4N2gtNTIuMDY2NDA2Yy00Ljc5Mjk2OCAwLTguNjc1NzgxIDMuODg2NzE5LTguNjc1NzgxIDguNjc5Njg3djUyLjA2MjVjMCA0Ljc5Mjk2OSAzLjg4MjgxMyA4LjY3OTY4OCA4LjY3NTc4MSA4LjY3OTY4OHptOC42Nzk2ODgtNTIuMDY2NDA2aDM0LjcwNzAzMXYzNC43MTA5MzdoLTM0LjcwNzAzMXptMCAwIiBmaWxsPSIjMDAwMDAwIi8+PHBhdGggZD0ibTExMi44MDg1OTQgMzQ3LjEwMTU2MmgtNTIuMDY2NDA2Yy00Ljc5Mjk2OSAwLTguNjc1NzgyIDMuODgyODEzLTguNjc1NzgyIDguNjc1NzgydjUyLjA2NjQwNmMwIDQuNzkyOTY5IDMuODgyODEzIDguNjc1NzgxIDguNjc1NzgyIDguNjc1NzgxaDUyLjA2NjQwNmM0Ljc5Mjk2OCAwIDguNjc1NzgxLTMuODgyODEyIDguNjc1NzgxLTguNjc1Nzgxdi01Mi4wNjY0MDZjMC00Ljc5Mjk2OS0zLjg4MjgxMy04LjY3NTc4Mi04LjY3NTc4MS04LjY3NTc4MnptLTguNjc5Njg4IDUyLjA2MjVoLTM0LjcwNzAzMXYtMzQuNzEwOTM3aDM0LjcwNzAzMXptMCAwIiBmaWxsPSIjMDAwMDAwIi8+PHBhdGggZD0ibTE5OS41ODIwMzEgMzQ3LjEwMTU2MmgtNTIuMDY2NDA2Yy00Ljc4OTA2MyAwLTguNjc1NzgxIDMuODgyODEzLTguNjc1NzgxIDguNjc1NzgydjUyLjA2NjQwNmMwIDQuNzkyOTY5IDMuODg2NzE4IDguNjc1NzgxIDguNjc1NzgxIDguNjc1NzgxaDUyLjA2NjQwNmM0Ljc5Mjk2OSAwIDguNjc5Njg4LTMuODgyODEyIDguNjc5Njg4LTguNjc1Nzgxdi01Mi4wNjY0MDZjMC00Ljc5Mjk2OS0zLjg4NjcxOS04LjY3NTc4Mi04LjY3OTY4OC04LjY3NTc4MnptLTguNjc1NzgxIDUyLjA2MjVoLTM0LjcxMDkzOHYtMzQuNzEwOTM3aDM0LjcxMDkzOHptMCAwIiBmaWxsPSIjMDAwMDAwIi8+PHBhdGggZD0ibTI4Ni4zNTkzNzUgMzQ3LjEwMTU2MmgtNTIuMDY2NDA2Yy00Ljc5Mjk2OSAwLTguNjc5Njg4IDMuODgyODEzLTguNjc5Njg4IDguNjc1NzgydjUyLjA2NjQwNmMwIDQuNzkyOTY5IDMuODg2NzE5IDguNjc1NzgxIDguNjc5Njg4IDguNjc1NzgxaDUyLjA2MjVjNC43OTI5NjkgMCA4LjY3OTY4Ny0zLjg4MjgxMiA4LjY3OTY4Ny04LjY3NTc4MXYtNTIuMDY2NDA2YzAtNC43OTI5NjktMy44ODY3MTgtOC42NzU3ODItOC42NzU3ODEtOC42NzU3ODJ6bS04LjY3OTY4NyA1Mi4wNjI1aC0zNC43MTA5Mzh2LTM0LjcxMDkzN2gzNC43MTA5Mzh6bTAgMCIgZmlsbD0iIzAwMDAwMCIvPjxwYXRoIGQ9Im00MzMuODc1IDM1MC4xNjQwNjJ2LTMwNi43NzczNDNjMC00Ljc5Mjk2OS0zLjg4NjcxOS04LjY3NTc4MS04LjY3OTY4OC04LjY3NTc4MWgtNDMuMzg2NzE4di04LjY3OTY4OGMwLTE0LjM3NS0xMS42NTIzNDQtMjYuMDMxMjUtMjYuMDMxMjUtMjYuMDMxMjVzLTI2LjAzMTI1IDExLjY1NjI1LTI2LjAzMTI1IDI2LjAzMTI1djguNjc5Njg4aC0xNy4zNTU0Njl2LTguNjc5Njg4YzAtMTQuMzc1LTExLjY1NjI1LTI2LjAzMTI1LTI2LjAzMTI1LTI2LjAzMTI1LTE0LjM3ODkwNiAwLTI2LjAzNTE1NiAxMS42NTYyNS0yNi4wMzUxNTYgMjYuMDMxMjV2OC42Nzk2ODhoLTE3LjM1NTQ2OXYtOC42Nzk2ODhjMC0xNC4zNzUtMTEuNjUyMzQ0LTI2LjAzMTI1LTI2LjAzMTI1LTI2LjAzMTI1cy0yNi4wMzEyNSAxMS42NTYyNS0yNi4wMzEyNSAyNi4wMzEyNXY4LjY3OTY4OGgtMTcuMzU1NDY5di04LjY3OTY4OGMwLTE0LjM3NS0xMS42NTYyNS0yNi4wMzEyNS0yNi4wMzUxNTYtMjYuMDMxMjUtMTQuMzc1IDAtMjYuMDMxMjUgMTEuNjU2MjUtMjYuMDMxMjUgMjYuMDMxMjV2OC42Nzk2ODhoLTE3LjM1NTQ2OXYtOC42Nzk2ODhjMC0xNC4zNzUtMTEuNjUyMzQ0LTI2LjAzMTI1LTI2LjAzMTI1LTI2LjAzMTI1cy0yNi4wMzEyNSAxMS42NTYyNS0yNi4wMzEyNSAyNi4wMzEyNXY4LjY3OTY4OGgtNDMuMzkwNjI1Yy00Ljc4OTA2MiAwLTguNjc1NzgxIDMuODgyODEyLTguNjc1NzgxIDguNjc1NzgxdjQxNi41MTk1MzFjMCA0Ljc5Mjk2OSAzLjg4NjcxOSA4LjY3OTY4OCA4LjY3NTc4MSA4LjY3OTY4OGgzMDYuNzc3MzQ0YzIzLjkxNzk2OSA0MS40ODQzNzQgNzYuOTM3NSA1NS43MjY1NjIgMTE4LjQyMTg3NSAzMS44MTI1IDQxLjQ4NDM3NS0yMy45MTc5NjkgNTUuNzI2NTYyLTc2LjkzNzUgMzEuODEyNS0xMTguNDIxODc2LTcuNjIxMDk0LTEzLjIxODc1LTE4LjU5Mzc1LTI0LjE5MTQwNi0zMS44MTI1LTMxLjgxMjV6bS04Ni43NzM0MzgtMzI0LjEzMjgxMmMwLTQuNzkyOTY5IDMuODgyODEzLTguNjc1NzgxIDguNjc1NzgyLTguNjc1NzgxIDQuNzkyOTY4IDAgOC42NzU3ODEgMy44ODI4MTIgOC42NzU3ODEgOC42NzU3ODF2MzQuNzEwOTM4YzAgNC43OTI5NjgtMy44ODI4MTMgOC42Nzk2ODctOC42NzU3ODEgOC42Nzk2ODctNC43OTI5NjkgMC04LjY3NTc4Mi0zLjg4NjcxOS04LjY3NTc4Mi04LjY3OTY4N3ptLTY5LjQyMTg3NCAwYzAtNC43OTI5NjkgMy44ODY3MTgtOC42NzU3ODEgOC42Nzk2ODctOC42NzU3ODEgNC43ODkwNjMgMCA4LjY3NTc4MSAzLjg4MjgxMiA4LjY3NTc4MSA4LjY3NTc4MXYzNC43MTA5MzhjMCA0Ljc5Mjk2OC0zLjg4NjcxOCA4LjY3OTY4Ny04LjY3NTc4MSA4LjY3OTY4Ny00Ljc5Mjk2OSAwLTguNjc5Njg3LTMuODg2NzE5LTguNjc5Njg3LTguNjc5Njg3em0tNjkuNDE3OTY5IDBjMC00Ljc5Mjk2OSAzLjg4MjgxMi04LjY3NTc4MSA4LjY3NTc4MS04LjY3NTc4MXM4LjY3NTc4MSAzLjg4MjgxMiA4LjY3NTc4MSA4LjY3NTc4MXYzNC43MTA5MzhjMCA0Ljc5Mjk2OC0zLjg4MjgxMiA4LjY3OTY4Ny04LjY3NTc4MSA4LjY3OTY4N3MtOC42NzU3ODEtMy44ODY3MTktOC42NzU3ODEtOC42Nzk2ODd6bS02OS40MjE4NzUgMGMwLTQuNzkyOTY5IDMuODg2NzE4LTguNjc1NzgxIDguNjc1NzgxLTguNjc1NzgxIDQuNzkyOTY5IDAgOC42Nzk2ODcgMy44ODI4MTIgOC42Nzk2ODcgOC42NzU3ODF2MzQuNzEwOTM4YzAgNC43OTI5NjgtMy44ODY3MTggOC42Nzk2ODctOC42Nzk2ODcgOC42Nzk2ODctNC43ODkwNjMgMC04LjY3NTc4MS0zLjg4NjcxOS04LjY3NTc4MS04LjY3OTY4N3ptLTY5LjQxNzk2OSAwYzAtNC43OTI5NjkgMy44ODI4MTMtOC42NzU3ODEgOC42NzU3ODEtOC42NzU3ODEgNC43OTI5NjkgMCA4LjY3NTc4MiAzLjg4MjgxMiA4LjY3NTc4MiA4LjY3NTc4MXYzNC43MTA5MzhjMCA0Ljc5Mjk2OC0zLjg4MjgxMyA4LjY3OTY4Ny04LjY3NTc4MiA4LjY3OTY4Ny00Ljc5Mjk2OCAwLTguNjc1NzgxLTMuODg2NzE5LTguNjc1NzgxLTguNjc5Njg3em0tNTIuMDY2NDA2IDI2LjAzNTE1NmgzNC43MTA5Mzd2OC42NzU3ODJjMCAxNC4zNzg5MDYgMTEuNjUyMzQ0IDI2LjAzMTI1IDI2LjAzMTI1IDI2LjAzMTI1czI2LjAzMTI1LTExLjY1MjM0NCAyNi4wMzEyNS0yNi4wMzEyNXYtOC42NzU3ODJoMTcuMzU1NDY5djguNjc1NzgyYzAgMTQuMzc4OTA2IDExLjY1NjI1IDI2LjAzMTI1IDI2LjAzMTI1IDI2LjAzMTI1IDE0LjM3ODkwNiAwIDI2LjAzNTE1Ni0xMS42NTIzNDQgMjYuMDM1MTU2LTI2LjAzMTI1di04LjY3NTc4MmgxNy4zNTU0Njl2OC42NzU3ODJjMCAxNC4zNzg5MDYgMTEuNjUyMzQ0IDI2LjAzMTI1IDI2LjAzMTI1IDI2LjAzMTI1czI2LjAzMTI1LTExLjY1MjM0NCAyNi4wMzEyNS0yNi4wMzEyNXYtOC42NzU3ODJoMTcuMzU1NDY5djguNjc1NzgyYzAgMTQuMzc4OTA2IDExLjY1NjI1IDI2LjAzMTI1IDI2LjAzNTE1NiAyNi4wMzEyNSAxNC4zNzUgMCAyNi4wMzEyNS0xMS42NTIzNDQgMjYuMDMxMjUtMjYuMDMxMjV2LTguNjc1NzgyaDE3LjM1NTQ2OXY4LjY3NTc4MmMwIDE0LjM3ODkwNiAxMS42NTYyNSAyNi4wMzEyNSAyNi4wMzEyNSAyNi4wMzEyNSAxNC4zNzg5MDYgMCAyNi4wMzUxNTYtMTEuNjUyMzQ0IDI2LjAzNTE1Ni0yNi4wMzEyNXYtOC42NzU3ODJoMzQuNzA3MDMxdjY5LjQxNzk2OWgtMzk5LjE2NDA2MnptMCAzOTkuMTY0MDYzdi0zMTIuMzkwNjI1aDM5OS4xNjQwNjJ2MjAzLjU4MjAzMWMtNDUuNzE4NzUtMTQuMzc1LTk0LjQzMzU5MyAxMS4wMzUxNTYtMTA4LjgwODU5MyA1Ni43NTM5MDYtNS4zMjQyMTkgMTYuOTQxNDA3LTUuMzI0MjE5IDM1LjExMzI4MSAwIDUyLjA1NDY4OHptMzczLjEzMjgxMiA0My4zODY3MTljLTM4LjMzOTg0MyAwLTY5LjQyMTg3NS0zMS4wNzgxMjYtNjkuNDIxODc1LTY5LjQxNzk2OSAwLTM4LjMzOTg0NCAzMS4wODIwMzItNjkuNDIxODc1IDY5LjQyMTg3NS02OS40MjE4NzUgMzguMzM5ODQ0IDAgNjkuNDE3OTY5IDMxLjA4MjAzMSA2OS40MTc5NjkgNjkuNDIxODc1LS4wNDI5NjkgMzguMzIwMzEyLTMxLjA5NzY1NiA2OS4zNzUtNjkuNDE3OTY5IDY5LjQxNzk2OXptMCAwIiBmaWxsPSIjMDAwMDAwIi8+PHBhdGggZD0ibTQxOS43NzM0MzggMzkyLjM4NjcxOS0zNy4zMTI1IDI5Ljg2NzE4Ny0yMC41MzkwNjMtMjAuNTQ2ODc1Yy0zLjM5MDYyNS0zLjM4NjcxOS04Ljg4NjcxOS0zLjM4NjcxOS0xMi4yNzM0MzcuMDAzOTA3LTMuMzkwNjI2IDMuMzkwNjI0LTMuMzg2NzE5IDguODg2NzE4LjAwMzkwNiAxMi4yNzM0MzdsMjYuMDMxMjUgMjYuMDM1MTU2YzMuMTI1IDMuMTI4OTA3IDguMTA1NDY4IDMuNDAyMzQ0IDExLjU1ODU5NC42NDA2MjVsNDMuMzg2NzE4LTM0LjcxMDkzN2MzLjc0NjA5NC0yLjk5MjE4OCA0LjM1NTQ2OS04LjQ1NzAzMSAxLjM1OTM3NS0xMi4yMDMxMjUtMi45OTYwOTMtMy43NDYwOTQtOC40NjA5MzctNC4zNTU0NjktMTIuMjA3MDMxLTEuMzU5Mzc1em0wIDAiIGZpbGw9IiMwMDAwMDAiLz48L3N2Zz4K" />
                <h2 class="section-title pb-3">Eventos</h2>
            </div>
            <?php
                $featured_event_id = 0;
                $cont = 0;
                $count_events_posts = wp_count_posts('eventos');
                $published_events_posts = $count_events_posts->publish;
            ?>
            <?php foreach (get_posts(['numberpost' => 1, 'post_type' => 'eventos']) as $post):
                $cont++;
                $featured_video_id = $post->ID;
            ?>
                <?php if($cont == $published_events_posts) :?>
                    <div class="col-6 col-md-8 pb-4 mb-5">
                         <div class="featured-events-img-box">
                             <figure class="">
                                 <a href="<?php echo get_permalink($post->ID)?>">
                                     <img class="events-img" src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                          alt="<?php echo get_the_title($post->ID); ?>">
                                 </a>
                             </figure>
                         </div>
                    </div>
                    <div class="col-6 col-md-4 pb-4 mb-5">
                        <a href="<?php echo get_permalink($post->ID)?>">
                            <h2 class="events-title"><?php echo get_the_title($post->ID)?></h2>
                            <p class="events-description"><?php echo get_the_excerpt($post->ID)?></p>
                        </a>
                    </div>
            <?php endif; endforeach;?>
            <?php foreach (get_posts(['numberposts' => 4, 'post_type' => 'eventos']) as $post): ?>
                <div class="col-6 col-md-3">
                    <div class="events-box">
                            <figure>
                                <a href="<?php echo get_permalink($post->ID)?>">
                                    <img class="events-img" src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                         alt="<?php echo get_the_title($post->ID); ?>">
                                </a>
                                <a href="<?php echo get_permalink($post->ID)?>">
                                    <figcaption><h2 class="sub-events-title"><?php echo get_the_title($post->ID)?></h2></figcaption>
                                </a>
                            </figure>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</section>

<!--Footer Section-->
<footer class="bg-dark pt-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <img src="<?php bloginfo('template_url');?>/images/footer/logo_light.png" alt="footer-logo"
                     id="footer-logo">
            </div>
            <div class="col-12 col-md-3">
                <div class="footer-links">
                    <small>Nossos Links</small>
                    <a href="">Assine Já</a>
                    <a href="">Termos e Condições</a>
                    <a href="">Política de Privacidade</a>
                    <a href=""></a>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="footer-links">
                    <small>Revistas</small>
                    <a href="">Veja</a>
                    <a href="">Abril</a>
                    <a href="">Mundo Estranho</a>
                    <a href="">Correio Brasiliense</a>
                </div>

            </div>
            <div class="col-12 col-md-3 d-flex align-items-center">
                <a href="" id="footer-sign-link">Assine Já</a>
                <img id="footer-magazine" class="align-self-end"
                     src="<?php bloginfo('template_url');?>/images/header/magazine-img.jpg" alt="magazine-img"/>
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="col-12 col-md-6">
                <small class="d-block text-left">© <?php echo date('Y'); ?> - Todos os Direitos Reservados</small>
            </div>
            <div class="col-12 col-md-6 text-right">
                <a href=""><img class="footer-social-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDk2LjEyNCA5Ni4xMjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDk2LjEyNCA5Ni4xMjM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNNzIuMDg5LDAuMDJMNTkuNjI0LDBDNDUuNjIsMCwzNi41Nyw5LjI4NSwzNi41NywyMy42NTZ2MTAuOTA3SDI0LjAzN2MtMS4wODMsMC0xLjk2LDAuODc4LTEuOTYsMS45NjF2MTUuODAzICAgYzAsMS4wODMsMC44NzgsMS45NiwxLjk2LDEuOTZoMTIuNTMzdjM5Ljg3NmMwLDEuMDgzLDAuODc3LDEuOTYsMS45NiwxLjk2aDE2LjM1MmMxLjA4MywwLDEuOTYtMC44NzgsMS45Ni0xLjk2VjU0LjI4N2gxNC42NTQgICBjMS4wODMsMCwxLjk2LTAuODc3LDEuOTYtMS45NmwwLjAwNi0xNS44MDNjMC0wLjUyLTAuMjA3LTEuMDE4LTAuNTc0LTEuMzg2Yy0wLjM2Ny0wLjM2OC0wLjg2Ny0wLjU3NS0xLjM4Ny0wLjU3NUg1Ni44NDJ2LTkuMjQ2ICAgYzAtNC40NDQsMS4wNTktNi43LDYuODQ4LTYuN2w4LjM5Ny0wLjAwM2MxLjA4MiwwLDEuOTU5LTAuODc4LDEuOTU5LTEuOTZWMS45OEM3NC4wNDYsMC44OTksNzMuMTcsMC4wMjIsNzIuMDg5LDAuMDJ6IiBmaWxsPSIjOGU4ZThlIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="></a>
                <a href=""><img class="footer-social-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiIHZpZXdCb3g9IjAgMCAxNjkuMDYzIDE2OS4wNjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDE2OS4wNjMgMTY5LjA2MzsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGQ9Ik0xMjIuNDA2LDBINDYuNjU0QzIwLjkyOSwwLDAsMjAuOTMsMCw0Ni42NTV2NzUuNzUyYzAsMjUuNzI2LDIwLjkyOSw0Ni42NTUsNDYuNjU0LDQ2LjY1NWg3NS43NTIgICBjMjUuNzI3LDAsNDYuNjU2LTIwLjkzLDQ2LjY1Ni00Ni42NTVWNDYuNjU1QzE2OS4wNjMsMjAuOTMsMTQ4LjEzMywwLDEyMi40MDYsMHogTTE1NC4wNjMsMTIyLjQwNyAgIGMwLDE3LjQ1NS0xNC4yMDEsMzEuNjU1LTMxLjY1NiwzMS42NTVINDYuNjU0QzI5LjIsMTU0LjA2MywxNSwxMzkuODYyLDE1LDEyMi40MDdWNDYuNjU1QzE1LDI5LjIwMSwyOS4yLDE1LDQ2LjY1NCwxNWg3NS43NTIgICBjMTcuNDU1LDAsMzEuNjU2LDE0LjIwMSwzMS42NTYsMzEuNjU1VjEyMi40MDd6IiBmaWxsPSIjOGU4ZThlIi8+Cgk8cGF0aCBkPSJNODQuNTMxLDQwLjk3Yy0yNC4wMjEsMC00My41NjMsMTkuNTQyLTQzLjU2Myw0My41NjNjMCwyNC4wMiwxOS41NDIsNDMuNTYxLDQzLjU2Myw0My41NjFzNDMuNTYzLTE5LjU0MSw0My41NjMtNDMuNTYxICAgQzEyOC4wOTQsNjAuNTEyLDEwOC41NTIsNDAuOTcsODQuNTMxLDQwLjk3eiBNODQuNTMxLDExMy4wOTNjLTE1Ljc0OSwwLTI4LjU2My0xMi44MTItMjguNTYzLTI4LjU2MSAgIGMwLTE1Ljc1LDEyLjgxMy0yOC41NjMsMjguNTYzLTI4LjU2M3MyOC41NjMsMTIuODEzLDI4LjU2MywyOC41NjNDMTEzLjA5NCwxMDAuMjgxLDEwMC4yOCwxMTMuMDkzLDg0LjUzMSwxMTMuMDkzeiIgZmlsbD0iIzhlOGU4ZSIvPgoJPHBhdGggZD0iTTEyOS45MjEsMjguMjUxYy0yLjg5LDAtNS43MjksMS4xNy03Ljc3LDMuMjJjLTIuMDUxLDIuMDQtMy4yMyw0Ljg4LTMuMjMsNy43OGMwLDIuODkxLDEuMTgsNS43MywzLjIzLDcuNzggICBjMi4wNCwyLjA0LDQuODgsMy4yMiw3Ljc3LDMuMjJjMi45LDAsNS43My0xLjE4LDcuNzgtMy4yMmMyLjA1LTIuMDUsMy4yMi00Ljg5LDMuMjItNy43OGMwLTIuOS0xLjE3LTUuNzQtMy4yMi03Ljc4ICAgQzEzNS42NjEsMjkuNDIxLDEzMi44MjEsMjguMjUxLDEyOS45MjEsMjguMjUxeiIgZmlsbD0iIzhlOGU4ZSIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo="></a>
            </div>
        </div>
    </div>

</footer>


<?php get_footer(); ?>
