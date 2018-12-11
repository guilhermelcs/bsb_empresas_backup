<?php
/**
 */

get_header();

// Custom Post Query
$args = array (
    'post_type' => 'noticia',
);
$the_query = new WP_Query($args);

$queried_object = get_queried_object();
?>

<div id="videos-archive" class="container-fluid px-5 mt-0">
    <div class="row">
        <div class="col-12 col-md-12">
            <div>
                <h2 class="archive-title video-title no-span pt-5  pb-2"><span>Vídeos</span></h2>
            </div>
        </div>
    </div>
    <?php foreach(get_posts(['numberposts' => 20, 'post_type' => $queried_object->name]) as $post): ?>
        <div class="row ml-1">
            <div class="col-12 col-md-12 text-center">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 d-flex mt-5 justify-content-center">
                        <div class="news_post">
                            <figure class="news_figure"><?php the_post_thumbnail(); ?></figure>
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php get_footer(); ?>
