<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="wrap bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
				    <?php if (have_posts()):
                        while ( have_posts() ) : the_post(); ?>
                        <div class="row mt-2 mb-5">
                            <div class="col-12">
                                <a href="<?php echo get_permalink($post->ID); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"
                                   class="business-md">
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="<?php echo get_the_permalink() ?>" class="search-result d-block mt-3">
                                    <h5 class="mb-2"><?php echo get_the_title(); ?></h5>
                                    <div class="post-content"><?php echo get_the_excerpt(); ?></div>
                                </a>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        Nenhum resultado encontrado para <strong>"<?php echo get_search_query(true) ?>"</strong >.
                    <?php endif; ?>
                </div>
                <!--div class="col-12 col-md-3">
		            <--?php get_sidebar(); ?>
                </div-->
            </div>
        </div>

    </div><!-- .wrap -->

<?php get_footer();
