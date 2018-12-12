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

<div class="row">
    <div class="col-12 col-md-12 mb-2">
        <div>
            <h2 class="section-title pt-5 pb-2 mb-0"><span>Últimos Posts</span></h2>
        </div>
    </div>
</div>

<?php foreach(get_posts(['numberposts' => 100, 'post_type' => $queried_object->name]) as $post): ?>
    <div class="row ml-1">
        <div class="col-12 col-md-12 text-center">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="col-md-12 pr-1">
                        <figure>
                            <a href="<?php echo get_permalink($post->ID); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"
                               class="business-md">
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-5 d-flex mt-5 justify-content-left text-left">
                    <div>
                        <a href="<?php echo get_permalink($post->ID); ?>" >
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <h3 class="news_post_data"><?php echo the_date(); ?></h3>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php get_footer(); ?>