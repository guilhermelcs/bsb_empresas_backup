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
            <a href="<?php echo get_field('link_do_banner_5') ?>" target="_blank" class="banner"
               style="background: url('<?php echo get_field('banner_5')?>') no-repeat center;"></a>
        </div>
        <div class="col-6 col-md-6 p-0 banner">
            <a href="<?php echo get_field('link_do_banner_6') ?>" target="_blank" class="banner"
               style="background: url('<?php echo get_field('banner_6')?>') no-repeat center;"></a>
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
<!--<section id="videos-section" class="bg-dark">-->
<!--    <div class="container-fluid px-5 mt-3">-->
<!--        <div class="row">-->
<!--            <div class="col-12 col-md-12">-->
<!--                <div>-->
<!--                    <h2 class="section-title video-title no-span pt-5  pb-2"><span>Vídeos</span></h2>-->
<!--                </div>-->
<!--            </div>-->
<!--            --><?php
//                $featured_video_id = 0;
//                $cont = 0;
//                $count_videos_posts = wp_count_posts('videos');
//                $published_videos_posts = $count_videos_posts->publish;
//            ?>
<!--            <div class="col-8 col-md-8 d-flex align-items-center pb-4 mb-5">-->
<!--                <div class="video-box">-->
<!--                    --><?php //foreach (get_posts(['numberpost' => 1, 'post_type' => 'videos']) as $post):
//                        $cont++;
//                        $featured_video_id = $post->ID;
//                        if($cont == $published_videos_posts): ?>
<!--                            <figure>-->
<!--                                <video-->
<!--                                    class="video-js video-js-skin" id="qtcPlayer" controls width="740" height="460"-->
<!--                                    data-url="--><?php //echo get_field('qtc_video_url', $post->ID); ?><!--">-->
<!--                                </video>-->
<!--                                <figcaption class="video_title">--><?php //echo get_the_title($post->ID);?><!--</figcaption>-->
<!--                            </figure>-->
<!--                    --><?php //endif; endforeach;?>
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-4 col-md-4 text-left pb-4">-->
<!--                <div class="next-videos-box bg-secondary rounded">-->
<!--                    --><?php //foreach (get_posts(['numberpost' => 10, 'offset' => 1, 'post_type' => 'videos']) as $post): ?>
<!--                        <figure>-->
<!--                            <a href="--><?php //echo get_field('qtc_video_url', $post->ID); ?><!--" data-video-->
<!--                               data-poster="--><?php //echo get_the_post_thumbnail_url($post->ID); ?><!--">-->
<!--                                <img class="next-videos-img" src="--><?php //echo get_the_post_thumbnail_url($post->ID);?><!--"-->
<!--                                     alt="--><?php //echo get_the_title($post->ID); ?><!--">-->
<!--                                <figcaption class="next-videos-titles">--><?php //echo get_the_title($post->ID);?><!--</figcaption>-->
<!--                            </a>-->
<!--                        </figure>-->
<!--                    --><?php //endforeach;?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


<!--Videos Section-->
<section id="videos-section" class="">
    <div class="container-fluid px-5 mt-3">
        <div class="row">
            <div class="col-12 col-md-12">
                <div>
                    <h2 class="section-title video-title no-span pt-5  pb-2"><span>Vídeos</span></h2>
                </div>
            </div>
        </div>
            <div class="row d-block d-flex align-items-start pt-4">
                <?php foreach (get_posts(['numberposts' => 3, 'post_type' => 'videos']) as $post): ?>
                    <div class="col-12 col-md-4 justify-content-around business-md mb-1 d-inline-block p-0" style="height: auto;">
                        <div class="col-md-12 pr-1">
                            <div class="bg-dark play-icon d-flex align-items-center justify-content-center">
                                <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQxLjk5OSA0MS45OTkiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQxLjk5OSA0MS45OTk7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPHBhdGggZD0iTTM2LjA2OCwyMC4xNzZsLTI5LTIwQzYuNzYxLTAuMDM1LDYuMzYzLTAuMDU3LDYuMDM1LDAuMTE0QzUuNzA2LDAuMjg3LDUuNSwwLjYyNyw1LjUsMC45OTl2NDAgIGMwLDAuMzcyLDAuMjA2LDAuNzEzLDAuNTM1LDAuODg2YzAuMTQ2LDAuMDc2LDAuMzA2LDAuMTE0LDAuNDY1LDAuMTE0YzAuMTk5LDAsMC4zOTctMC4wNiwwLjU2OC0wLjE3N2wyOS0yMCAgYzAuMjcxLTAuMTg3LDAuNDMyLTAuNDk0LDAuNDMyLTAuODIzUzM2LjMzOCwyMC4zNjMsMzYuMDY4LDIwLjE3NnogTTcuNSwzOS4wOTVWMi45MDRsMjYuMjM5LDE4LjA5Nkw3LjUsMzkuMDk1eiIgZmlsbD0iI0ZGRkZGRiIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                            </div>
                            <figure>
                                <a href="<?php echo get_permalink($post->ID); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"
                                   class="business-md">
                                </a>
                            </figure>
                            <figcaption class="mb-5">
                                <a href="<?php echo get_permalink($post->ID); ?>"><div><h3  class="video-subtitle" ><?php echo get_the_title($post->ID)?></h3></div></a>
                            </figcaption>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-md-12 mb-5 d-flex justify-content-center">
                    <a href="#">Ver Mais</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Weekend Section-->
<section id="interviews-section">
    <div class="container-fluid mt-3 px-5">
        <div class="row">
            <div class="col-12 col-md-12">
                <div>
                    <h2 class="section-title pt-5 pb-2"><span>Fim de Semana</span></h2>
                </div>
            </div>
        </div>
        <div class="row d-block d-flex align-items-start">
            <?php foreach(get_posts(['numberposts' => 6, 'post_type' => 'fim_de_semana']) as $post): ?>
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

<!--Events Section-->
<section id="events-section">
    <div class="container-fluid px-5 ">
        <div class="row d-block section-business" >
            <div class="col-12 col-md-12">
                <div>
                    <h2 class="section-title no-span pt-5 pb-2"><span>Eventos</span></h2>
                </div>
            </div>
            <div class="d-flex align-items-stretch">
                <?php foreach(get_posts(['numberposts' => 1, 'post_type' => 'eventos']) as $post): ?>
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
            <?php foreach(get_posts(['numberposts' => 4, 'post_type' => 'eventos', 'offset' => 1]) as $post): ?>
                <div class="col-12 col-md-3 justify-content-around business-md mb-1 d-inline-block p-0" style="height: auto;">
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
