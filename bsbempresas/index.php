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
<div id="sidebar-menu" class="p-4">
    <a href="#qtc-close-menu" class="float-right">
        <img style="width: 20px;" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDE1LjY0MiAxNS42NDIiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1LjY0MiAxNS42NDIiIHdpZHRoPSIyNHB4IiBoZWlnaHQ9IjI0cHgiPgogIDxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgZD0iTTguODgyLDcuODIxbDYuNTQxLTYuNTQxYzAuMjkzLTAuMjkzLDAuMjkzLTAuNzY4LDAtMS4wNjEgIGMtMC4yOTMtMC4yOTMtMC43NjgtMC4yOTMtMS4wNjEsMEw3LjgyMSw2Ljc2TDEuMjgsMC4yMmMtMC4yOTMtMC4yOTMtMC43NjgtMC4yOTMtMS4wNjEsMGMtMC4yOTMsMC4yOTMtMC4yOTMsMC43NjgsMCwxLjA2MSAgbDYuNTQxLDYuNTQxTDAuMjIsMTQuMzYyYy0wLjI5MywwLjI5My0wLjI5MywwLjc2OCwwLDEuMDYxYzAuMTQ3LDAuMTQ2LDAuMzM4LDAuMjIsMC41MywwLjIyczAuMzg0LTAuMDczLDAuNTMtMC4yMmw2LjU0MS02LjU0MSAgbDYuNTQxLDYuNTQxYzAuMTQ3LDAuMTQ2LDAuMzM4LDAuMjIsMC41MywwLjIyYzAuMTkyLDAsMC4zODQtMC4wNzMsMC41My0wLjIyYzAuMjkzLTAuMjkzLDAuMjkzLTAuNzY4LDAtMS4wNjFMOC44ODIsNy44MjF6IiBmaWxsPSIjRkZGRkZGIi8+Cjwvc3ZnPgo=" />
    </a>
    <ul class="nav">
        <?php foreach (get_menu_items_by_registered_slug('lateral-menu') as $item): ?>
            <li class="menu-item">
                <a href="<?php echo $item->url ?>" target="<?php echo $item->target ?>"
                   class="<?php echo implode(' ', $item->classes) ?>">
                    <?php echo $item->title ?>
                </a>
            </li>
        <?php endforeach; ?>

<!--            <li class="nav-item">-->
<!--                <a class="nav-link texto-menu" href="#">Home</a>-->
<!--            </li>-->
<!--            <li class="nav-item dropdown">-->
<!--                <span class="nav-link texto-menu">Negócios-->
<!--                    <img class="pl-2 dropdown-arrow" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im0xMjEuMywzNC42Yy0xLjYtMS42LTQuMi0xLjYtNS44LDBsLTUxLDUxLjEtNTEuMS01MS4xYy0xLjYtMS42LTQuMi0xLjYtNS44LDAtMS42LDEuNi0xLjYsNC4yIDAsNS44bDUzLjksNTMuOWMwLjgsMC44IDEuOCwxLjIgMi45LDEuMiAxLDAgMi4xLTAuNCAyLjktMS4ybDUzLjktNTMuOWMxLjctMS42IDEuNy00LjIgMC4xLTUuOHoiIGZpbGw9IiNGRkZGRkYiLz4KICA8L2c+Cjwvc3ZnPgo=" />-->
<!--                </span>-->
<!--                <div class="dropdown-content pl-3">-->
<!--                    <a class="nav-link texto-submenu" href="#">Marketing</a>-->
<!--                </div>-->
<!--                <div class="dropdown-content pl-3">-->
<!--                    <a class="nav-link texto-submenu" href="#">Meio Ambiente</a>-->
<!--                </div>-->
<!--                <div class="dropdown-content pl-3">-->
<!--                    <a class="nav-link texto-submenu" href="#">Carreira</a>-->
<!--                </div>-->
<!--                <div class="dropdown-content pl-3">-->
<!--                    <a class="nav-link texto-submenu" href="#">Economia</a>-->
<!--                </div>-->
<!--                <div class="dropdown-content pl-3">-->
<!--                    <a class="nav-link texto-submenu" href="#">Financeiro</a>-->
<!--                </div>-->
<!--                <div class="dropdown-content pl-3">-->
<!--                    <a class="nav-link texto-submenu" href="#">RH</a>-->
<!--                </div>-->
<!--            </li>-->
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

<!-- Banner -->
<div class="container-fluid px-5">
    <div class="row mt-5">
        <div class="col-6 col-md-6 p-0 banner">
            <a href="<?php echo get_field('link_do_banner_1') ?>" target="_blank" class="banner"
               style="background: url('<?php echo get_field('banner_1')?>') no-repeat center;"></a>
        </div>
        <div class="col-6 col-md-6 p-0 banner">
            <a href="<?php echo get_field('link_do_banner_2') ?>" target="_blank" class="banner"
               style="background: url('<?php echo get_field('banner_2')?>') no-repeat center;"></a>
        </div>
    </div>
</div>

<!--Latest News Section-->
<section id="latest-news-section">
    <div class="container-fluid px-5">
        <div class="row d-block section-latest-news">
            <div class="col-12 col-md-12">
                <div>
                    <h2 class="section-title no-span pt-5 pb-2"><span>Destaques</span></h2>
                </div>
            </div>
                <div class="d-flex align-items-stretch">
                    <?php foreach(get_posts(['numberposts' => 1, 'post_type' => 'noticia']) as $post): ?>
                        <div class="col-12 col-md-6 latest-news-lg p-0">
                            <a href="<?php echo get_permalink($post->ID); ?>"><div class="mt-auto title-backdrop"><h2><?php echo get_the_title($post->ID)?></h2></div></a>
                                <a href="<?php echo get_permalink($post->ID); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"
                                    class="latest-news-lg">
                                </a>
                            </div>
                    <?php endforeach; ?>

                    <div class="col-12 col-md-6">
                        <?php foreach(get_posts(['numberposts' => 2, 'post_type' => 'noticia', 'offset' => 1]) as $post): ?>
                            <div class="row ml-1">
                                <div class="col-12 col-md-12 latest-news-md mb-1 p-0">
                                    <a href="<?php echo get_permalink($post->ID); ?>"><div class="mt-auto title-backdrop"><h2><?php echo get_the_title($post->ID)?></h2></div></a>
                                        <a href="<?php echo get_permalink($post->ID); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"
                                           class="latest-news-md">
                                        </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
        </div>
    </div>
</section>

<?php wp_reset_query(); ?>

<!-- Banner -->
<div class="container-fluid px-5">
    <div class="row mt-5">
        <div class="col-6 col-md-6 p-0 banner">
            <a href="<?php echo get_field('link_do_banner_3') ?>" target="_blank" class="banner"
               style="background: url('<?php echo get_field('banner_3')?>') no-repeat center;"></a>
        </div>
        <div class="col-6 col-md-6 p-0 banner">
            <a href="<?php echo get_field('link_do_banner_4') ?>" target="_blank" class="banner"
               style="background: url('<?php echo get_field('banner_4')?>') no-repeat center;"></a>
        </div>
    </div>
</div>

<!--Columnists Section-->
<section id="columnists-section" class="pt-2">
    <div class="container-fluid px-5 mt-3">
        <div class="row">
            <div class="col-12 col-md-12">
                <div>
                    <h2 class="section-title no-span pt-5 pb-2"><span>Colunistas</span></h2>
                </div>
            </div>
            <ul class="w-100 justify-self-center m-0 p-0">
                <div class="columnist-wrapper">
                    <?php foreach (get_posts(['numberposts' => 5, 'post_type' => 'colunista']) as $post): ?>
                        <li class="col">
                            <a href="<?php echo get_permalink($post->ID);?>">
                                <figure>
                                    <img class="columnist-img"
                                         src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                         alt="<?php echo get_the_title($post->ID); ?>">
                                    <figcaption class="text-dark columnist-title pt-3"><?php echo get_the_title($post->ID); ?></figcaption>
                                </figure>
                            </a>
                        <l1>
                    <?php endforeach;?>
                </div>
            </ul>
        </div>
    </div>
</section>


<?php wp_reset_query(); ?>

<!--Giant Banner -->
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-6 col-md-12 p-0 giant-banner">
            <a href="link.html" class="giant-banner"
               style="background: url('<?php echo get_field('banner_gigante')?>') no-repeat center;"></a>
        </div>
    </div>
</div>

<!--Business Section-->
<section id="business-section">
    <div class="container-fluid px-5 ">
        <div class="row d-block section-business" >
            <div class="col-12 col-md-12">
                <div>
                    <h2 class="giant-section-title no-span pb-4"><span>Negócios</span></h2>
                </div>
            </div>
            <div class="d-flex align-items-stretch">
                <?php foreach(get_posts(['numberposts' => 1, 'post_type' => 'negocios']) as $post): ?>
                    <div class="col-12 col-md-6 mb-4 business-lg p-0">
                        <a href="<?php echo get_permalink($post->ID); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"
                           class="business-lg">
                        </a>
                    </div>
                    <div class="col-12 col-md-5 business-title">
                        <a href="<?php echo get_permalink($post->ID); ?>"><h2><?php echo get_the_title($post->ID)?></h2></a>
                        <a href="<?php echo get_permalink($post->ID); ?>"><h3><?php echo get_the_excerpt($post->ID)?></h3></a>
                    </div>
                <?php endforeach; ?>
            </div>
        <hr class="" style="border-top: 1px dotted gray; margin-top: 0; padding-top: 0;">
        </div>
        <div class="row d-block d-flex align-items-start">
                <?php foreach(get_posts(['numberposts' => 6, 'post_type' => 'negocios', 'offset' => 1]) as $post): ?>
                    <div class="col-12 col-md-2 justify-content-around business-md mb-1 d-inline-block p-0" style="height: auto;">
                        <div class="col-md-12 pr-1">
                            <figure>
                                <a href="<?php echo get_permalink($post->ID); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"
                                   class="business-md">
                                </a>
                            </figure>
                            <figcaption>
                                <a href="<?php echo get_permalink($post->ID); ?>"><div><h3><?php echo get_the_title($post->ID)?></h3></div></a>
                            </figcaption>
                        </div>
                    </div>
                <?php endforeach; ?>
        </div>
    </div>
</section>

<?php wp_reset_query(); ?>

<!-- Banner -->
<div class="container-fluid px-5">
    <div class="row mt-5">
        <div class="col-6 col-md-6 p-0 banner">
            <a href="<?php echo get_field('link_do_banner_1') ?>" target="_blank" class="banner"
               style="background: url('<?php echo get_field('banner_1')?>') no-repeat center;"></a>
        </div>
        <div class="col-6 col-md-6 p-0 banner">
            <a href="<?php echo get_field('link_do_banner_2') ?>" target="_blank" class="banner"
               style="background: url('<?php echo get_field('banner_2')?>') no-repeat center;"></a>
        </div>
    </div>
</div>

<!--Interviews Section-->
<section id="interviews-section">
    <div class="container-fluid mt-3 px-5">
        <div class="row">
            <div class="col-12 col-md-12">
                <div>
                    <h2 class="section-title pt-5 pb-2"><span>Entrevistas</span></h2>
                </div>
            </div>
        </div>
        <div class="row d-block d-flex align-items-start">
            <?php foreach(get_posts(['numberposts' => 6, 'post_type' => 'entrevista']) as $post): ?>
                <div class="col-12 col-md-2 justify-content-around business-md mb-1 d-inline-block p-0" style="height: auto;">
                    <div class="col-md-12 pr-1">
                        <figure>
                            <a href="<?php echo get_permalink($post->ID); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"
                               class="business-md">
                            </a>
                        </figure>
                        <figcaption>
                            <a href="<?php echo get_permalink($post->ID); ?>"><div><h3><?php echo get_the_title($post->ID)?></h3></div></a>
                        </figcaption>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php wp_reset_query(); ?>

<!--Big Banner -->
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-6 col-md-12 p-0 big-banner">
            <a href="link.html" class="big-banner"
               style="background: url('<?php echo get_field('banner_grande')?>') no-repeat center;"></a>
        </div>
    </div>
</div>

<!--Articles Section-->
<section id="business-section">
    <div class="container-fluid px-5 ">
        <div class="row d-block section-business" >
            <div class="col-12 col-md-12">
                <div>
                    <h2 class="giant-section-title no-span pb-4"><span>Artigos</span></h2>
                </div>
            </div>
            <div class="d-flex align-items-stretch">
                <?php foreach(get_posts(['numberposts' => 1, 'post_type' => 'artigos']) as $post): ?>
                    <div class="col-12 col-md-6 mb-4 business-lg p-0">
                        <a href="<?php echo get_permalink($post->ID); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"
                           class="business-lg">
                        </a>
                    </div>
                    <div class="col-12 col-md-5 business-title">
                        <a href="<?php echo get_permalink($post->ID); ?>"><h2><?php echo get_the_title($post->ID)?></h2></a>
                        <a href="<?php echo get_permalink($post->ID); ?>"><h3><?php echo get_the_excerpt($post->ID)?></h3></a>
                    </div>
                <?php endforeach; ?>
            </div>
            <hr class="" style="border-top: 1px dotted gray; margin-top: 0; padding-top: 0;">
        </div>
        <div class="row d-block d-flex align-items-start">
            <?php foreach(get_posts(['numberposts' => 6, 'post_type' => 'artigos', 'offset' => 1]) as $post): ?>
                <div class="col-12 col-md-2 justify-content-around business-md mb-1 d-inline-block p-0" style="height: auto;">
                    <div class="col-md-12 pr-1">
                        <figure>
                            <a href="<?php echo get_permalink($post->ID); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"
                               class="business-md">
                            </a>
                        </figure>
                        <figcaption class="mb-5">
                            <a href="<?php echo get_permalink($post->ID); ?>"><div><h3><?php echo get_the_title($post->ID)?></h3></div></a>
                        </figcaption>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!--Videos Section-->
<section id="videos-section" class="bg-dark">
    <div class="container-fluid px-5 mt-3">
        <div class="row">
            <div class="col-12 col-md-12">
                <div>
                    <h2 class="section-title video-title no-span pt-5  pb-2"><span>Vídeos</span></h2>
                </div>
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

<!--Weekend Section-->
<section id="weekend-section">
    <div class="container-fluid px-5 mt-3">
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
    <div class="container-fluid px-5 mt-3">
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
</section>

<!--Events Section-->
<section id="events-section" class="pb-5">
    <div class="container-fluid px-5 mt-3">
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
