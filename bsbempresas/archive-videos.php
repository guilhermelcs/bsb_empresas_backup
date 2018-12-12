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

<!--Videos Modal-->
<div class="modal fade" id="videos-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="
        z-index: 999;
        position: absolute;
        top: 50px;
        right: 50px; ">
        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Ik03LjYsMTIxLjRjMC44LDAuOCwxLjgsMS4yLDIuOSwxLjJzMi4xLTAuNCwyLjktMS4ybDUxLjEtNTEuMWw1MS4xLDUxLjFjMC44LDAuOCwxLjgsMS4yLDIuOSwxLjJjMSwwLDIuMS0wLjQsMi45LTEuMiAgIGMxLjYtMS42LDEuNi00LjIsMC01LjhMNzAuMyw2NC41bDUxLjEtNTEuMWMxLjYtMS42LDEuNi00LjIsMC01LjhzLTQuMi0xLjYtNS44LDBMNjQuNSw1OC43TDEzLjQsNy42QzExLjgsNiw5LjIsNiw3LjYsNy42ICAgcy0xLjYsNC4yLDAsNS44bDUxLjEsNTEuMUw3LjYsMTE1LjZDNiwxMTcuMiw2LDExOS44LDcuNiwxMjEuNHoiIGZpbGw9IiNGRkZGRkYiLz4KICA8L2c+Cjwvc3ZnPgo=">
    </button>
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="vsc-controller vsc-hidden" data-vscid="ttbtviiwa"></div>
            <video id="manifesto-video" class="video video-js vjs-16-9 vsc-initialized" preload="auto" width="100%" data-editable="" data-video="https://www.youtube.com/watch?v=OAqXvWtgM2Y" data-vscid="ttbtviiwa"></video>
        </div>
    </div>
</div>

<div id="videos-archive" class="container-fluid px-5 mt-0">
    <div class="row">
        <div class="col-12 col-md-12">
            <div>
                <h2 class="archive-title video-title no-span pt-5  pb-2"><span>Vídeos</span></h2>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <?php foreach(get_posts(['numberposts' => 100, 'post_type' => $queried_object->name]) as $post): ?>
            <div class="col-12 col-md-4 mt-3 text-left">
                <div class="news_post">
                    <figure>
                        <a href="#videos-modal" data-toggle="modal" data-url="<?php the_field('qtc_video_url', $post->ID)?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');"
                           class="business-md">
                        </a>
                    </figure>
                    </a>
                    <a href="#videos-modal" data-toggle="modal" data-url="<?php the_field('qtc_video_url', $post->ID)?>" >
                        <h2 class="mb-5 video-description"><?php the_title(); ?></h2>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php get_footer(); ?>
