<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<?php wp_reset_query(); ?>
<!-- Banner -->
<!--<div class="container-fluid px-5">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-12 col-md-10 p-1 latest-news-banner">
                    <a href="<?php /*echo get_field("link_do_banner_entrevistas") */?>" target="_blank" class="latest-news-banner"
                       style="background: url('<?php /*echo get_field('banner_entrevistas')*/?>') no-repeat center;"></a>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</div>-->

<div id="primary" class="content-area d-none d-md-block">
    <main id="main" class="site-main" role="main">

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>


        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <h1 class="text-left"><?php echo the_title(); ?></h1>
                    <h3 class="excerpt-field"><?php the_excerpt(); ?></h3>
                    <hr>
                    <div class="text-center">
                        <img src="<?php echo the_post_thumbnail_url(); ?>">
                    </div>
                    <?php echo the_content(); ?>
                </div>
            </div>
        </div>

        <section id="recommended-section" class="mb-5">
            <div class="container-fluid px-5">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div>
                            <h2 class="section-title pt-5 pb-2"><span>Recomendado</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row d-block d-flex align-items-start">
                    <?php foreach(get_posts(['numberposts' => 4, 'post_type' => 'eventos']) as $post): ?>
                        <div class="col-12 col-md-3 justify-content-around business-md mb-1 d-inline-block p-0" style="height: auto;">
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
    </main>
</div>
<?php endwhile; ?>

<div id="primary" class="content-area d-block d-md-none">
    <main id="main" class="site-main" role="main">

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>


        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <h1 class="text-left" style="font-size: 26px;"><?php echo the_title(); ?></h1>
                    <h3 class="excerpt-field" style="font-size: 10px !important;"><?php the_excerpt(); ?></h3>
                    <hr>
                    <div class="text-center">
                        <img src="<?php echo the_post_thumbnail_url(); ?>">
                    </div>
                    <div style="font-size: 18px;"  class="mt-0 pt-0 ml-2"><?php echo the_content(); ?></div>
                </div>
            </div>
        </div>

        <section id="recommended-section" class="mb-5 d-block d-md-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div>
                            <h2 class="section-title text-center pt-5 pb-2"><span>Recomendado</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row d-block">
                    <?php foreach(get_posts(['numberposts' => 4, 'post_type' => 'eventos']) as $post): ?>
                        <div class="col-12 col-md-3 justify-content-around business-md mb-1 d-inline-block p-0" style="height: auto;">
                            <div class="col-md-12">
                                <figure class="mb-0 pt-0">
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
    </main>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
