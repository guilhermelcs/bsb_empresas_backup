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

        <div class="container p-5">
            <div class="row">
                <div class="col-12">
                    <h1> <?php echo the_title(); ?></h1>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <figure class="business-img-box">
                            <?php echo the_post_thumbnail(); ?>
                            <div class="excerpt-field"><?php the_excerpt(); ?></div>
                        </figure>
                    </div>
                </div>
                <div class="col-12 pb-5">
                    <?php echo the_content(); ?>
                </div>
            </div>

            <div class="navigation">

                <?php previous_post_link('<button class="btn btn-primary py-2">Ver também: %link</button>', '%title'); ?>
                <?php if(!get_adjacent_post(false, '', true)) {
                    echo '<a href="/#"><button class="btn btn-warning py-2">Voltar à página inicial</button></a>';
                } ?>

                <?php next_post_link('<button class="btn btn-secondary py-2">Ver também: %link</button>', '%title'); ?>
                <?php if(!get_adjacent_post(false, '', false)) {
                    echo '<a href="/#"><button class="btn btn-warning py-2">Voltar à página inicial</button></a>';
                } ?>

            </div>

        </div>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php

endwhile; ?>

<?php get_footer(); ?>
