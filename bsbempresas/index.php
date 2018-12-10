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

<!-- Banner -->
<div class="container-fluid px-5">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-6 col-md-10 p-1 latest-news-banner">
                    <a href="<?php echo get_field('link_do_banner_1') ?>" target="_blank" class="latest-news-banner"
                       style="background: url('<?php echo get_field('banner_1')?>') no-repeat center;"></a>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</div>

<?php
    //Latest News Query
    $mainPost = get_posts(array(
    'numberposts'	=> 1,
    'post_type'		=> 'any',
    'order'	        => 'ASC',
    'orderby'	    => 'meta_value',
    'meta_query'	=> array (
        array(
            'key'	 	=> 'destaque_principal',
            'value'	  	=> true,
            'compare' 	=> 'LIKE'
        )
    ),
    ));

    //Latest News Query
    $secondaryPost = get_posts(array(
        'posts_per_page'	=> 3,
        'post_type'		=> 'any',
        'orderby'	    => 'meta_value',
        'order'	        => 'ASC',
        'meta_query'	=> array (
            array(
                'key'	 	=> 'destaque_secundario',
                'value'	  	=> true,
                'compare' 	=> 'LIKE'
            )
        ),
    ));
    $test = get_field('destaque_secundario');
?>
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
                    <?php foreach($mainPost as $post): ?>
                        <div class="col-12 col-md-6 latest-news-lg p-0">
                            <a href="<?php echo get_permalink($post->ID); ?>"><div class="mt-auto title-backdrop"><h2><?php echo get_the_title($post->ID)?></h2></div></a>
                                <a href="<?php echo get_permalink($post->ID); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"
                                    class="latest-news-lg">
                                </a>
                            </div>
                    <?php endforeach; ?>

                    <div class="col-12 col-md-6">
                        <?php foreach($secondaryPost as $post): ?>
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
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-6 col-md-10 p-1 banner">
                    <a href="<?php echo get_field('link_do_banner_5') ?>" target="_blank" class="banner"
                       style="background: url('<?php echo get_field('banner_5')?>') no-repeat center;"></a>
                </div>
                <div class="col-md-1"></div>
            </div>
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
                    <a href="#" class="videos-button">Ver Mais</a>
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
