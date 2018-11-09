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
            <?php foreach(get_posts(['numberposts' => 1, 'post_type' => 'noticia']) as $post): ?>
                <div class="col-12 col-md-6 latest-news-lg">
                    <a href="<?php echo get_permalink($post) ?>">
                        <figure>
                            <img class="latest-news-img-lg img-responsive"
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
                                    <img class="img-responsive w-100" src="<?php echo get_the_post_thumbnail_url($post, 'qtc_news'); ?>" alt="<?php echo get_the_title($post->ID); ?>">
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
    </div>
</section>

<!--Columnists Section-->
<section id="columnists-section" class="pt-5">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section--title pb-5">Colunistas</h2>
            </div>
            <?php foreach (get_posts(['numberposts' => 3, 'post_type' => 'colunista']) as $post): ?>
                <div class="col-12 col-md-4">
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

<!--Business Section-->
<section id="business-section">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title pb-3">Negócios</h2>
            </div>
            <?php foreach (get_posts(['numberposts' => 3, 'post_type' => 'negocios']) as $post): ?>
                <div class="col-12 col-md-4">
                    <div class="text-center">
                        <a href="<?php echo get_permalink($post->ID);?>">
                            <figure class="business-wrapper">
                                <div class="business-img-box">
                                    <img class="business-img rounded"
                                        src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                         alt="<?php echo get_the_title($post->ID); ?>">
                                </div>
                                <figcaption class="business-title text-dark pt-3"><?php echo get_the_title($post->ID); ?></figcaption>
                                <p class="business-subtitle"><?php echo get_the_excerpt($post->ID); ?></p>
                                <p class="business-description px-4 pb-4"><?php echo get_post_field('post_content', $post->ID);?>
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
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title pb-3">Entrevistas</h2>
            </div>
            <?php foreach (get_posts(['numberposts' => 3, 'post_type' => 'entrevista']) as $post): ?>
                <div class="col-12 col-md-4">
                    <div class="text-center">
                        <a href="<?php echo get_permalink($post->ID);?>">
                            <figure class="business-wrapper">
                                <div class="business-img-box">
                                    <img class="interviews-img rounded img-thumbnail"
                                         src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                         alt="<?php echo get_the_title($post->ID); ?>">
                                </div>
                                <figcaption class="business-title text-dark pt-3"><?php echo get_the_title($post->ID); ?></figcaption>
                                <p class="business-subtitle"><?php echo get_the_excerpt($post->ID); ?></p>
                                <p class="business-description px-4 pb-4"><?php echo get_post_field('post_content', $post->ID);?></p>
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
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title pb-3">Artigos</h2>
            </div>
            <?php foreach (get_posts(['numberposts' => 3, 'post_type' => 'artigos']) as $post): ?>
                <div class="col-12 col-md-12 d-flex align-items-center pb-4">
                        <div class="articles-img-box text-left">
                            <img class="articles-img rounded-circle"
                                 src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                 alt="<?php echo get_the_title($post->ID); ?>">
                        </div>
                        <a href="<?php echo get_permalink($post->ID)?>">
                            <div class="articles-text-box text-left">
                                <h2 class="articles-title"><?php echo get_the_title($post->ID); ?> -</h2>
                                <h3 class="articles-author"><?php echo get_post_field('post_content', $post->ID);?></h3>
                                <p class="articles-citation"><?php echo get_the_excerpt($post->ID); ?></p>
                            </div>
                        </a>
                </div>
            <?php endforeach;?>
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
                <div class="next-videos-box bg-dark">
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

<!--Events Section-->
<section id="events-section">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
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
