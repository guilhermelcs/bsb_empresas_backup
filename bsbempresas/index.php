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

<!--Latest News Section-->
<section id="latest-news section">
    <div class="container">
        <div class="row section-latest-news" id="latest-news">
            <div class="col-12">
                <h3 class="section--title pt-5 pb-2">Últimas Notícias</h3>
            </div>

            <?php foreach(get_posts(['numberposts' => 1, 'post_type' => 'post']) as $post): ?>
                <div class="col-12 col-md-6 d-flex latest-news-lg">
                    <div>
                        <figure>
                            <img class="latest-news-img-lg img-responsive"
                                 src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>">
                            <figcaption class="figcaption-lg"><?php echo get_the_title($post->ID); ?></figcaption>
                        </figure>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="col-12 col-md-6">
                <div class="row">
                    <?php foreach(get_posts(['numberposts' => 4, 'post_type' => 'post']) as $post): ?>
                        <div class="col-12 col-md-6">
                            <div>
                                <figure>
                                    <img class="img-responsive w-100" src="<?php echo get_the_post_thumbnail_url($post, 'qtc_news'); ?>" alt="<?php echo get_the_title($post->ID); ?>">
                                    <figcaption class="">
                                        <h6><?php echo get_the_title($post->ID); ?></h6>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-12">
                <hr>
                End Of Session
            </div>

            <div class="col-12 col-md-6 d-flex latest-news-lg">
                <div>
                    <figure>
                        <img class="latest-news-img-lg img-responsive"
                             src="<?php bloginfo('template_url')?>/images/latest-news/news-lg.jpg"
                             alt="latest-news-img-lg">
                        <figcaption class="figcaption-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                            rhoncus magna urna, ut laoreet neque tristique sed. Fusce tempus efficitur felis eu sodales.
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-3 latest-news-md">
                <div>
                    <figure>
                        <img class="latest-news-img-md img-responsive"
                             src="<?php bloginfo('template_url')?>/images/latest-news/news-md.jpeg"
                             alt="latest-news-img-md">
                        <figcaption class="figcaption-md">Lorem ipsum dolor sit amet, consectur adipiscing elit. se do
                            eiusmod tempo
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <figure>
                        <img class="latest-news-img-md img-responsive"
                             src="<?php bloginfo('template_url')?>/images/latest-news/news-md.jpeg"
                             alt="latest-news-img-md">
                        <figcaption class="figcaption-md">Lorem ipsum dolor sit amet, consectur adipiscing elit. se do
                            eiusmod tempo
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-12 col-md-3 justify-content-center latest-news-md">
                <div>
                    <figure>
                        <img class="latest-news-img-md img-responsive"
                             src="<?php bloginfo('template_url')?>/images/latest-news/news-md.jpeg"
                             alt="latest-news-img-md">
                        <figcaption class="figcaption-md">Lorem ipsum dolor sit amet, consectur adipiscing elit. se do
                            eiusmod tempo
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <figure>
                        <img class="latest-news-img-md img-responsive"
                             src="<?php bloginfo('template_url');?>/images/latest-news/news-md.jpeg"
                             alt="latest-news-img-md">
                        <figcaption class="figcaption-md">Lorem ipsum dolor sit amet, consectur adipiscing elit. se do
                            eiusmod tempo
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Columnists Section-->
<section id="columnists-section" class="pt-5">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section--title pb-5">Colunistas</h2>
            </div>
            <div class="col-12 col-md-4">
                <div class="text-center">
                    <figure>
                        <img class="columnist-img rounded-circle"
                             src="<?php bloginfo('template_url');?>/images/columnists/michelle.jpg"
                             alt="columnist-michelle">
                        <figcaption class="text-dark columnist-title pt-3">Fulano De Tal</figcaption>
                        <div class="columnist-description-box">
                            <p class="columnist-subtitle">Lorem Ipsum Dolum</p>
                            <p class="columnist-description px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque augue elit, aliquet id
                                egestas et, tristique non risus. Quisque at vehicula risus. Nunc maximus mi ac nulla
                                commodo, et tristique ligula
                                bibendum.
                            </p>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="text-center">
                    <figure>
                        <img class="columnist-img rounded-circle"
                             src="<?php bloginfo('template_url');?>/images/columnists/glen.jpeg" alt="columnist-glen">
                        <figcaption class="columnist-title text-dark text-dark pt-3">Fulano De Tal</figcaption>
                        <p class="columnist-subtitle">Lorem Ipsum Dolum</p>
                        <div class="columnist-description-box">
                            <p class="columnist-description px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque augue elit, aliquet id
                                egestas et, tristique non risus. Quisque at vehicula risus. Nunc maximus mi ac nulla
                                commodo, et tristique ligula
                                bibendum.
                            </p>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="text-center">
                    <figure>
                        <img class="columnist-img rounded-circle"
                             src="<?php bloginfo('template_url');?>/images/columnists/fritz.jpeg" alt="columnist-fritz">
                        <figcaption class="columnist-title text-dark text-dark pt-3">Fulano De Tal</figcaption>
                        <p class="columnist-subtitle">Lorem Ipsum Dolum</p>
                        <div class="columnist-description-box">
                            <p class="columnist-description px-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque augue elit, aliquet id
                                egestas et, tristique non risus. Quisque at vehicula risus. Nunc maximus mi ac nulla
                                commodo, et tristique ligula
                                bibendum.
                            </p>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Business Section-->
<section id="business-section">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title pb-3">Negócios</h2>
            </div>
            <div class="col-12 col-md-4">
                <div class="text-center">
                    <figure class="business-wrapper">
                        <div class="business-img-box">
                            <img class="business-img rounded"
                                 src="<?php bloginfo('template_url');?>/images/columnists/michelle.jpg"
                                 alt="business-michelle">
                        </div>
                        <figcaption class="business-title text-dark pt-3">Fulano De Tal</figcaption>
                        <p class="business-subtitle">Lorem Ipsum Dolum</p>
                        <p class="business-description px-4 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Quisque augue elit, aliquet id
                            egestas et, tristique non risus. Quisque at vehicula risus. Nunc maximus mi ac nulla
                            commodo, et tristique ligula
                            bibendum.
                        </p>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="text-center">
                    <figure class="business-wrapper">
                        <div class="business-img-box">
                            <img class="business-img rounded"
                                 src="<?php bloginfo('template_url');?>/images/columnists/glen.jpeg" alt="business-glen">
                        </div>
                        <figcaption class="business-title text-dark pt-3">Fulano De Tal</figcaption>
                        <p class="business-subtitle">Lorem Ipsum Dolum</p>
                        <p class="business-description px-4 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Quisque augue elit, aliquet id
                            egestas et, tristique non risus. Quisque at vehicula risus. Nunc maximus mi ac nulla
                            commodo, et tristique ligula
                            bibendum.
                        </p>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="business-card-wrapper text-center">
                    <figure class="business-wrapper">
                        <div class="business-img-box">
                            <img class="business-img rounded"
                                 src="<?php bloginfo('template_url');?>/images/columnists/juan.jpg" alt="business-juan">
                        </div>
                        <figcaption class="business-title text-dark pt-3">Fulano De Tal</figcaption>
                        <p class="business-subtitle">Lorem Ipsum Dolum</p>
                        <p class="business-description px-4 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Quisque augue elit, aliquet id
                            egestas et, tristique non risus. Quisque at vehicula risus. Nunc maximus mi ac nulla
                            commodo, et tristique ligula
                            bibendum.
                        </p>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Interviews Section-->
<section id="interviews-section">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title pb-3">Entrevistas</h2>
            </div>
            <div class="col-12 col-md-4">
                <div class="text-center">
                    <figure class="business-wrapper">
                        <div class="business-img-box">
                            <img class="interviews-img rounded img-thumbnail"
                                 src="<?php bloginfo('template_url');?>/images/columnists/michelle.jpg"
                                 alt="business-michelle">
                        </div>
                        <figcaption class="business-title text-dark pt-3">Fulano De Tal</figcaption>
                        <p class="business-subtitle">Lorem Ipsum Dolum</p>
                        <p class="business-description px-4 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Quisque augue elit, aliquet id
                            egestas et, tristique non risus. Quisque at vehicula risus. Nunc maximus mi ac nulla
                            commodo, et tristique ligula
                            bibendum.
                        </p>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="text-center">
                    <figure class="business-wrapper">
                        <div class="business-img-box">
                            <img class="interviews-img rounded img-thumbnail"
                                 src="<?php bloginfo('template_url');?>/images/columnists/glen.jpeg" alt="business-glen">
                        </div>
                        <figcaption class="business-title text-dark pt-3">Fulano De Tal</figcaption>
                        <p class="business-subtitle">Lorem Ipsum Dolum</p>
                        <p class="business-description px-4 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Quisque augue elit, aliquet id
                            egestas et, tristique non risus. Quisque at vehicula risus. Nunc maximus mi ac nulla
                            commodo, et tristique ligula
                            bibendum.
                        </p>
                    </figure>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="business-card-wrapper text-center">
                    <figure class="business-wrapper">
                        <div class="business-img-box">
                            <img class="interviews-img rounded img-thumbnail"
                                 src="<?php bloginfo('template_url');?>/images/columnists/juan.jpg" alt="business-juan">
                        </div>
                        <figcaption class="business-title text-dark pt-3">Fulano De Tal</figcaption>
                        <p class="business-subtitle">Lorem Ipsum Dolum</p>
                        <p class="business-description px-4 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Quisque augue elit, aliquet id
                            egestas et, tristique non risus. Quisque at vehicula risus. Nunc maximus mi ac nulla
                            commodo, et tristique ligula
                            bibendum.
                        </p>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Articles Section-->
<section id="articles-section">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title pb-3">Artigos</h2>
            </div>
            <div class="col-12 col-md-12 d-flex align-items-center pb-4">
                <div class="articles-img-box text-left">
                    <img class="articles-img rounded-circle"
                         src="<?php bloginfo('template_url');?>/images/columnists/michelle.jpg" alt="columnist-michelle">
                </div>
                <div class="articles-text-box text-left">
                    <h2 class="articles-title">Lorem Ipsum -</h2>
                    <h3 class="articles-author">Fulano de tal</h3>
                    <p class="articles-citation">"Dolore magnam akiquam quaera voluptatem"</p>
                </div>
            </div>
            <div class="col-12 col-md-12 d-flex align-items-center">
                <div class="articles-img-box text-left">
                    <img class="articles-img rounded-circle"
                         src="<?php bloginfo('template_url');?>/images/columnists/michelle.jpg" alt="columnist-michelle">
                </div>
                <div class="articles-text-box text-left">
                    <h2 class="articles-title">Lorem Ipsum -</h2>
                    <h3 class="articles-author">Fulano de tal</h3>
                    <p class="articles-citation">"Dolore magnam akiquam quaera voluptatem"</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Videos Section-->
<section id="videos-section">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title pb-3">Vídeos</h2>
            </div>
            <div class="col-8 col-md-8 d-flex align-items-center pb-4 mb-5">
                <div class="video-box">
                    <figure>
                        <video width="100%" controls>
                            <source src="<?php bloginfo('template_url');?>/videos/dde-introduction.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <figcaption class="video_title">Lorem Ipsum Dolor Sit Amet</figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-4 col-md-4 text-left pb-4">
                <div class="next-videos-box bg-dark">
                    <figure>
                        <a href="">
                            <img src="<?php bloginfo('template_url');?>/videos/thumbnails/next-video-thumbnail.jpg" class="next-videos-img">
                            <figcaption class="next-videos-titles">Morbi sit amet convallis tellus, vel porta augue. </figcaption>
                        </a>
                    </figure>
                    <figure>
                        <a href="">
                            <img src="<?php bloginfo('template_url');?>/videos/thumbnails/next-video-thumbnail.jpg" class="next-videos-img">
                            <figcaption class="next-videos-titles">Morbi sit amet convallis tellus, vel porta augue. </figcaption>
                        </a>
                    </figure>
                    <figure>
                        <a href="">
                            <img src="<?php bloginfo('template_url');?>/videos/thumbnails/next-video-thumbnail.jpg" class="next-videos-img">
                            <figcaption class="next-videos-titles">Morbi sit amet convallis tellus, vel porta augue. </figcaption>
                        </a>
                    </figure>
                    <figure>
                        <a href="">
                            <img src="<?php bloginfo('template_url');?>videos/thumbnails/next-video-thumbnail.jpg" class="next-videos-img">
                            <figcaption class="next-videos-titles">Morbi sit amet convallis tellus, vel porta augue. </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Weekend Section-->
<!--<section id="videos-section">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title pb-3">Fim de Semana</h2>
            </div>
            <div class="col-6 col-md-3 d-flex pb-4 mb-5">
                <div class="weekend-img-box">
                    <img src="wp-content/themes/bsbempresas/images/columnists/michelle.jpg">
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex pb-4 mb-5">
                <div class="weekend-img-box">
                    <img src="wp-content/themes/bsbempresas/images/columnists/michelle.jpg">
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex pb-4 mb-5">
                <div class="weekend-img-box">
                    <img src="wp-content/themes/bsbempresas/images/columnists/michelle.jpg">
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex pb-4 mb-5">
                <div class="weekend-img-box">
                    <img src="wp-content/themes/bsbempresas/images/columnists/michelle.jpg">
                </div>
            </div>
        </div>
    </div>
</section>-->

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
