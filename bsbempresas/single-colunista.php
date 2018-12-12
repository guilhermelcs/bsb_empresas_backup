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

            <div class="container-fluid p-5">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <h1 class="text-left"><?php echo the_title(); ?></h1>
                        <h3 class="excerpt-field"><?php the_excerpt(); ?></h3>
                        <h3 class="by-author">Por: <?php the_author(); ?></h3>
                        <hr>
                        <div class="text-center">
                             <img src="<?php echo the_post_thumbnail_url(); ?>">
                        </div>
                        <?php echo the_content(); ?>
                    </div>
                </div>
            </div>

            <div class="container-fluid p-0">
                <hr>
                <div class="row">
                    <div class="col-12 col-md-12 text-center">
                        <div class="row">
                            <div class="col-md-3">
                                <figure class="columnist-photo">
                                    <img src="<?php the_field('foto_do_colunista');?>">
                                </figure>
                            </div>
                            <div class="col-md-9 text-left">
                                <h3 class="author-field"><?php the_field('colunista');?></h3>
                                <p class="pl-1 pr-5"><?php the_field('curriculo_do_colunista');?></p>
                            </div>
                        </div>
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
        </div>
    </main><!-- .site-main -->
    <?php get_footer(); ?>
</div><!-- .content-area -->

<?php
    endwhile; ?>
