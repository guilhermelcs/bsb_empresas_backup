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
                        <?php echo the_post_thumbnail(); ?>
                    </div>
                    <div class="col-12">
                        <h1> <?php echo the_title(); ?></h1>
                        <?php echo the_content(); ?>
                    </div>
                </div>
            </div>


		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php

    endwhile;
    // Previous/next post navigation.
    the_post_navigation( array(
        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
            '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
            '<span class="post-title">%title</span>',
        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
            '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
            '<span class="post-title">%title</span>',
    ) );

    get_footer(); ?>
