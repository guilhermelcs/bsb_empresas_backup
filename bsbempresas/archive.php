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

<?php foreach(get_posts(['numberposts' => 20, 'post_type' => $queried_object->name]) as $post): ?>
    <div class="row ml-1">
        <div class="col-12 col-md-12 text-center">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 d-flex mt-5 justify-content-center">
                    <div class="news_post">
                        <h2><?php the_title(); ?></h2>
                        <h3 class="news_post_data"><?php echo the_date(); ?></h3>
                        <figure class="news_figure"><?php the_post_thumbnail(); ?></figure>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


   <!-- <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 latest-news-title"><h1>Últimas Notícias</h1></div>
            <?php /*while( $the_query->have_posts() ) : $the_query->the_post(); */?>
                <div class="col-12 col-md-12">
                    <div class="news_post">
                        <h2><?php /*the_title(); */?></h2>
                        <h3 class="news_post_data"><?php /*echo the_date(); */?></h3>
                        <figure class="news_figure"><?php /*the_post_thumbnail(); */?></figure>
                    </div>
                </div>
            <?php /*endwhile;*/?>
        </div>
    </div>
-->
<?php get_footer(); ?>