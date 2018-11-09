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
                        <figure class="news-img-box">
                            <?php echo the_post_thumbnail(); ?>
                            <div class="excerpt-field"><?php the_excerpt(); ?></div>
                        </figure>
                    </div>
                </div>
                <div class="col-12">
                    <?php echo the_content(); ?>
                </div>
            </div>
        </div>


    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php

endwhile; ?>

<div class="navigation">

    <?php previous_post_link('<div class="alignleft">Ver também: %link</div>', '%title'); ?>
    <?php if(!get_adjacent_post(false, '', true)) {
        echo '<div class="alignleft"><a href="/#">Voltar à página inicial</a></div>';
    } ?>

    <?php next_post_link('<div class="alignright">Ver também: %link</div>', '%title'); ?>
    <?php if(!get_adjacent_post(false, '', false)) {
        echo '<div class="alignright"><a href="/#">Voltar à página inicial</a></div>';
    } ?>

</div>

<?php get_footer(); ?>
