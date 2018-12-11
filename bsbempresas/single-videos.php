<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>

            <?php wp_reset_query(); ?>
            <!-- Banner -->
            <!--<div class="container-fluid px-5">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-12 col-md-12 p-1' banner">
                                <a href="<?php /*the_field('link_do_banner_noticia') */?>" target="_blank" class="banner"
                                   style="background: url('<?php /*echo get_field('banner_noticia')*/?>') no-repeat center;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

        <div class="container-fluid px-5 mt-3">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div>
                        <h2 class="section-title archive-video-title no-span pt-5  pb-2"><span>Vídeos</span></h2>
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
    </main><!-- .site-main -->
    <?php get_footer(); ?>
</div><!-- .content-area -->

<?php
    endwhile; ?>