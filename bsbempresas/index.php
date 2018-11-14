<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!--Latest News Section-->
<section id="latest-news section">
    <div class="container">
        <div class="row section-latest-news" id="latest-news">
            <div class="col-12">
                <div>
                    <img class="index-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYwIDYwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA2MCA2MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8Zz4KCTxwYXRoIGQ9Ik0zMSwxNkgxN3YxNGgxNFYxNnogTTI5LDI4SDE5VjE4aDEwVjI4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTUyLDE2SDM2Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDE2YzAuNTUzLDAsMS0wLjQ0NywxLTFTNTIuNTUzLDE2LDUyLDE2eiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTUyLDIySDM2Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDE2YzAuNTUzLDAsMS0wLjQ0NywxLTFTNTIuNTUzLDIyLDUyLDIyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTUyLDI4SDM2Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDE2YzAuNTUzLDAsMS0wLjQ0NywxLTFTNTIuNTUzLDI4LDUyLDI4eiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTUyLDM0SDE5Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDMzYzAuNTUzLDAsMS0wLjQ0NywxLTFTNTIuNTUzLDM0LDUyLDM0eiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTM0LDQwSDE5Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDE1YzAuNTUzLDAsMS0wLjQ0NywxLTFTMzQuNTUzLDQwLDM0LDQweiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTM0LDQ2SDE5Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDE1YzAuNTUzLDAsMS0wLjQ0NywxLTFTMzQuNTUzLDQ2LDM0LDQ2eiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTM0LDUySDE5Yy0wLjU1MywwLTEsMC40NDctMSwxczAuNDQ3LDEsMSwxaDE1YzAuNTUzLDAsMS0wLjQ0NywxLTFTMzQuNTUzLDUyLDM0LDUyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTM5LDU0aDE0VjQwSDM5VjU0eiBNNDEsNDJoMTB2MTBINDFWNDJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8cGF0aCBkPSJNNTksMTNjMC0wLjAxNy0wLjAwOS0wLjAzMS0wLjAxLTAuMDQ4VjBIMTF2MzBIMXYyNGMwLDMuMzA5LDIuNjkxLDYsNiw2aDQ2YzMuMzAzLDAsNS45OS0yLjY4OCw1Ljk5LTUuOTlWMTMuMDQ4ICAgQzU4Ljk5MSwxMy4wMzEsNTksMTMuMDE3LDU5LDEzeiBNNTYuOTksMnYxMEgxM1YySDU2Ljk5eiBNMyw1NFYzMmg4djIyYzAsMi4yMDYtMS43OTQsNC00LDRTMyw1Ni4yMDYsMyw1NHogTTUzLDU4SDExLjQ2OSAgIGMwLjAxNi0wLjAxOCwwLjAyNy0wLjAzOSwwLjA0Mi0wLjA1N2MwLjIwNC0wLjIzMywwLjM5LTAuNDgyLDAuNTU2LTAuNzQ1YzAuMDI3LTAuMDQyLDAuMDUyLTAuMDg0LDAuMDc4LTAuMTI4ICAgYzAuMTYyLTAuMjcsMC4zMDUtMC41NTIsMC40MjMtMC44NDhjMC4wMTYtMC4wNDEsMC4wMy0wLjA4MiwwLjA0NS0wLjEyM2MwLjExNS0wLjMwNiwwLjIwOS0wLjYyMiwwLjI3My0wLjk0OSAgIGMwLjAwNi0wLjAzLDAuMDA4LTAuMDYxLDAuMDE0LTAuMDlDMTIuOTYyLDU0LjcxNiwxMyw1NC4zNjIsMTMsNTRWMzBWMTRoNDMuOTl2NDAuMDFDNTYuOTksNTYuMjEsNTUuMiw1OCw1Myw1OHoiIGZpbGw9IiMwMDAwMDAiLz4KCTxwYXRoIGQ9Ik00Nyw0SDIzdjZoMjRWNHogTTQ1LDhIMjVWNmgyMFY4eiIgZmlsbD0iIzAwMDAwMCIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                    <h2 class="section-title pt-5 pb-2">Últimas Notícias</h2>
                </div>
            </div>
            <?php foreach(get_posts(['numberposts' => 1, 'post_type' => 'noticia']) as $post): ?>
                <div class="col-12 col-md-6 latest-news-lg">
                    <a href="<?php echo get_permalink($post) ?>">
                        <figure>
                            <img class="latest-news-img-lg img-responsive rounded"
                                 src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>">
                            <figcaption class="figcaption-lg"><?php echo get_the_excerpt($post->ID); ?></figcaption>
                        </figure>
                    </a>
                </div>
            <?php endforeach; ?>

            <div class="col-12 col-md-6">
                <div class="row">
                    <?php foreach(get_posts(['numberposts' => 4, 'post_type' => 'noticia']) as $post): ?>
                        <div class="col-12 col-md-6">
                            <a href="<?php echo get_permalink($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>">
                                <figure>
                                    <img class="img-responsive w-100 rounded" src="<?php echo get_the_post_thumbnail_url($post, 'qtc_news'); ?>" alt="<?php echo get_the_title($post->ID); ?>">
                                    <figcaption class="figcaption-md">
                                        <h6><?php echo get_the_excerpt($post->ID); ?></h6>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Interviews Section-->
<section id="interviews-section">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 col-md-12">
                <img class="index-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTcuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ0NS4xNjcgNDQ1LjE2NyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDQ1LjE2NyA0NDUuMTY3OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPHBhdGggZD0iTTMwOS4yNTMsMTk3LjUxM2M2LjMxNiwyLjM1OCwxMy4xMjYsMy43MzUsMjAuNTYxLDMuNzM1YzI1Ljc0OSwwLDU0LjI2Ny0xNi41MjQsODkuNzQ2LTUyLjAwMyAgIGMxNi41MTItMTYuNTEyLDI1LjYwNi0zOC40NjcsMjUuNjA2LTYxLjgxOWMwLTIzLjM1My05LjA5NS00NS4zMDctMjUuNjA2LTYxLjgxOUM0MDMuMDQ3LDkuMDk1LDM4MS4wOTIsMC4wMDEsMzU3Ljc0MSwwLjAwMSAgIHMtNDUuMzA3LDkuMDk0LTYxLjgxOSwyNS42MDZjLTM0LjcwNiwzNC43MDctNTEuMjIzLDYyLjY2LTUxLjk3Nyw4Ny45NjljLTAuMjQyLDguMTIzLDEuMTY3LDE1LjUxLDMuNzE1LDIyLjMzTDIzMi4zODcsMTUyLjIgICBsLTQ3Ljk2NC00Ny45NjRjLTEuNDA3LTEuNDA3LTMuMzE0LTIuMTk3LTUuMzA0LTIuMTk3cy0zLjg5NiwwLjc5LTUuMzA0LDIuMTk3TDU0LjIxOSwyMjMuODMyICAgYy0xLjQwNiwxLjQwNi0yLjE5NiwzLjMxNC0yLjE5Niw1LjMwM3MwLjc5LDMuODk3LDIuMTk2LDUuMzAzbDUyLjE3MSw1Mi4xNzFMOC42MzQsMzkwLjg5NSAgIGMtMTEuNzksMTIuNTc2LTExLjQ2NSwzMi43MjQsMC43MjUsNDQuOTEzYzYuMjI5LDYuMjI5LDE0LjUzNCw5LjM1OSwyMi44NDcsOS4zNThjNy45NTUsMCwxNS45MTctMi44NjgsMjIuMDY2LTguNjMzICAgbDEwNC4yODUtOTcuNzU3bDUyLjE3MSw1Mi4xNzFjMS40MDcsMS40MDcsMy4zMTQsMi4xOTcsNS4zMDQsMi4xOTdzMy44OTYtMC43OSw1LjMwNC0yLjE5N2wxMTkuNTk2LTExOS41OTYgICBjMi45MjktMi45MjksMi45MjktNy42NzgsMC0xMC42MDZsLTM2LjkxLTM2LjkxYy0wLjAwMS0wLjAwMS0wLjAwMS0wLjAwMi0wLjAwMi0wLjAwM3MtMC4wMDItMC4wMDEtMC4wMDMtMC4wMDJsLTExLjA1LTExLjA1ICAgTDMwOS4yNTMsMTk3LjUxM3ogTTI1OC45MzksMTE0LjAyM2MwLjYyNC0yMC45NTksMTYuMTktNDYuNDExLDQ3LjU5LTc3LjgxYzEzLjY3OS0xMy42NzksMzEuODY2LTIxLjIxMyw1MS4yMTItMjEuMjEzICAgczM3LjUzMyw3LjUzNCw1MS4yMTIsMjEuMjEzYzEzLjY4LDEzLjY3OSwyMS4yMTQsMzEuODY3LDIxLjIxNCw1MS4yMTJjMCwxOS4zNDUtNy41MzQsMzcuNTMzLTIxLjIxNCw1MS4yMTIgICBjLTMyLjAzNiwzMi4wMzctNTcuOTIzLDQ3LjYxLTc5LjEzOSw0Ny42MWMtMTguMzU3LDAtMzIuOTA1LTEyLjAxOC00NS44OTItMjUuMDA0Yy04Ljk1NS04Ljk1NC0xNi4xMjUtMTcuNDEzLTIwLjQ1NC0yNi40NTMgICBjLTAuMTM2LTAuMzU2LTAuMjkyLTAuNzA1LTAuNDg0LTEuMDQxQzI2MC4xOTIsMTI3LjU3NSwyNTguNzI4LDEyMS4xMTQsMjU4LjkzOSwxMTQuMDIzeiBNMjU0LjkzNCwxNTAuMDggICBjNS4xNjUsNy45MDQsMTEuNjU0LDE1LjA0MywxOC4zODEsMjEuNzcxYzYuNzE5LDYuNzE5LDEzLjg1NCwxMy4yMTYsMjEuNzY3LDE4LjM4N2wtMTIuNzI3LDExLjkzbC0zOS4zNTYtMzkuMzU2TDI1NC45MzQsMTUwLjA4eiAgICBNNDQuMDE0LDQyNS41ODljLTYuNzM1LDYuMzE0LTE3LjUyMiw2LjEzNy0yNC4wNDktMC4zODhjLTYuNTI2LTYuNTI2LTYuNy0xNy4zMTQtMC4zODgtMjQuMDQ3bDk3LjQyNS0xMDMuOTMybDMwLjk0MywzMC45NDMgICBMNDQuMDE0LDQyNS41ODl6IE0yMTYuMDMyLDM3NS4wMzdsLTI2LjMwNi0yNi4zMDZsMjIuOTgxLTIyLjk4MWMyLjkyOS0yLjkyOSwyLjkyOS03LjY3OCwwLTEwLjYwNiAgIGMtMi45My0yLjkyOS03LjY3OC0yLjkyOS0xMC42MDcsMGwtMjIuOTgxLDIyLjk4MWwtMTA4Ljk5LTEwOC45OWwxMDguOTktMTA4Ljk5bDEwOC45ODksMTA4Ljk5bC02NC43OTUsNjQuNzk1ICAgYy0yLjkyOSwyLjkyOS0yLjkyOSw3LjY3OCwwLDEwLjYwNmMxLjQ2NSwxLjQ2NCwzLjM4NSwyLjE5Nyw1LjMwNCwyLjE5N3MzLjgzOS0wLjczMiw1LjMwNC0yLjE5N2w2NC43OTUtNjQuNzk1bDI2LjMwNiwyNi4zMDYgICBMMjE2LjAzMiwzNzUuMDM3eiIgZmlsbD0iIzAwMDAwMCIvPgoJPHBhdGggZD0iTTI5MS40MjMsMTA3LjU2NWMyLjEzMywwLDQuMTQtMC44Myw1LjY1Ny0yLjM0M2MzLjExOS0zLjEyLDMuMTE5LTguMTk1LTAuMDA3LTExLjMyMWMtMS41MTEtMS41MDYtMy41MTgtMi4zMzYtNS42NS0yLjMzNiAgIHMtNC4xNCwwLjgzLTUuNjU3LDIuMzQzYy0zLjExOSwzLjExOS0zLjExOSw4LjE5NCwwLjAwNywxMS4zMjFDMjg3LjI4NCwxMDYuNzM2LDI4OS4yOTEsMTA3LjU2NSwyOTEuNDIzLDEwNy41NjV6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8cGF0aCBkPSJNMjkxLjQ5NCwxMTkuNjJjLTQuMDY0LDEuNjg5LTYuMDA0LDYuMzc0LTQuMzIxLDEwLjQ0NmMxLjI0MiwzLjAwMSw0LjE0NCw0Ljk0MSw3LjM5Myw0Ljk0MSAgIGMxLjA1NCwwLDIuMDgzLTAuMjA1LDMuMDY5LTAuNjEzYzQuMDY0LTEuNjg5LDYuMDA0LTYuMzc0LDQuMzIxLTEwLjQ0NmMtMS4yNDItMy4wMDEtNC4xNDQtNC45NDEtNy4zOTMtNC45NDEgICBDMjkzLjUwOSwxMTkuMDA3LDI5Mi40OCwxMTkuMjEyLDI5MS40OTQsMTE5LjYyeiIgZmlsbD0iIzAwMDAwMCIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                <h2 class="section-title pt-5 pb-2">Entrevistas</h2>
            </div>
            <?php foreach (get_posts(['numberposts' => 3, 'post_type' => 'entrevista']) as $post): ?>
                <div class="col-12 col-md-4">
                    <div class="text-center">
                        <a href="<?php echo get_permalink($post->ID);?>">
                            <figure class="business-wrapper">
                                <div class="business-img-box">
                                    <img class="interviews-img rounded img-thumbnail"
                                         src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                         alt="<?php echo get_the_title($post->ID); ?>">
                                </div>
                                <figcaption class="business-title text-dark pt-3"><?php echo get_the_title($post->ID); ?></figcaption>
                                <p class="business-subtitle"><?php echo get_the_excerpt($post->ID); ?></p>
                                <p class="business-description px-4 pb-4"><?php echo get_post_field('post_content', $post->ID);?></p>
                            </figure>
                        </a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>


<!--Columnists Section-->
<section id="columnists-section" class="pt-5">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <div class="col-12 col-md-12">
                    <img class="index-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKySURBVGhD7dlLqIxhHMfx4y6EhQUlsSBKlkgkiigLt5TYIaUouaxPyi0iSggLNi5JynXhVqKUUiKXctm5rrCR6/db56+nac45M+N935nF+6tPTc88l/903nnfZ57TVqZMmTJlyBhswFFc6uBr20aj5TMVt/CnGzcxBS2XXtiH36hWeDX23QvHtkT64goqC32E3Vjfwde2Vfa7jD5oeg4jLewBvMQ6yzQ8RDrmEJqaBUgLOoV+6C72OY107Hw0JV7bTxCF3IaXWa2x7x3E+MfoicIzC1HED4xDvZkAx8Y8M1F4DiAKuGBDg7mImGe/DUXnHqKAVTY0mDWIee7aUHReIQqYbUODcWzM45yF5yOigMk2NBif8DGPcxaeF4gCltjQYJYi5nlmQ9E5jyjAL36jOYiY55wNRWctooB3GIB6MxDvEfOsRuEZhm+IIrah3uxAjP+KoWhKdiEK+YmFqDX2/YUYvxNNyyC8RBTjU3ozeqOz+N5W+MFjnDeORi7NTDMRnxFF6Sk2wvf8HsjXm+CdKe37CW5VWiKT8BZpgbV4Az9gy2QUzqJasV05A8c2PV7v3q2+o1qhtXBsO7r6XuWaEbiPysK+wAebG8m58NKRr31O+J59Kse5CR2OQuPlkN6t5ENxHWr9hWhfx6RzPMdIFJIhSPdZOglvxfXGMY5N5/LDDEau6QF/RMWiHun43PjfbEF6lOQ+LtcsQyym7cgq6XZF7opzSX+kz4qr8C+UVTx4uI6Y/zXqOcyoOSsRi7gVGYusMx7pYcRyZB6Pe2KBIzbklGOIdW7YkGW8U6U71enIKzMQ67ixdO3MMg8x+QfkeZDmwV+6CZ2DzOK2Oyb20DnvXEOsl8Xt/V/2ICY+bkPOOYFYz7Uzywr4HyctsiHnLEas59plypQpU6ZMme7T1vYXSVYmv4mqKLMAAAAASUVORK5CYII=">
                    <h2 class="section-title pt-5 pb-4">Colunistas</h2>
                </div>
            </div>
            <?php foreach (get_posts(['numberposts' => 3, 'post_type' => 'colunista']) as $post): ?>
                <div class="col-12 col-md-4">
                    <div class="text-center">
                        <a href="<?php echo get_permalink($post->ID);?>">
                            <figure>
                                <img class="columnist-img rounded-circle"
                                     src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                     alt="<?php echo get_the_title($post->ID); ?>">
                                <figcaption class="text-dark columnist-title pt-3"><?php echo get_the_title($post->ID); ?></figcaption>
                                <div class="columnist-description-box">
                                    <p class="columnist-subtitle"><?php echo get_the_excerpt($post->ID); ?></p>
                                    <p class="columnist-description px-2"><?php echo get_post_field('post_content', $post->ID);?></p>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<!--Business Section-->
<section id="business-section">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title pb-3">Negócios</h2>
            </div>
            <?php foreach (get_posts(['numberposts' => 3, 'post_type' => 'negocios']) as $post): ?>
                <div class="col-12 col-md-4">
                    <div class="text-center">
                        <a href="<?php echo get_permalink($post->ID);?>">
                            <figure class="business-wrapper">
                                <div class="business-img-box">
                                    <img class="business-img rounded"
                                        src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                         alt="<?php echo get_the_title($post->ID); ?>">
                                </div>
                                <figcaption class="business-title text-dark pt-3"><?php echo get_the_title($post->ID); ?></figcaption>
                                <p class="business-subtitle"><?php echo get_the_excerpt($post->ID); ?></p>
                                <p class="business-description px-4 pb-4"><?php echo get_post_field('post_content', $post->ID);?>
                                </p>
                            </figure>
                        </a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<!--Articles Section-->
<section id="articles-section">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title pb-3">Artigos</h2>
            </div>
            <?php foreach (get_posts(['numberposts' => 3, 'post_type' => 'artigos']) as $post): ?>
                <div class="col-12 col-md-12 d-flex align-items-center justify-content-center pb-4">
                        <div class="articles-img-box text-left">
                            <img class="articles-img rounded-circle"
                                 src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                 alt="<?php echo get_the_title($post->ID); ?>">
                        </div>
                        <a href="<?php echo get_permalink($post->ID)?>">
                            <div class="articles-text-box text-left">
                                <h2 class="articles-title"><?php echo get_the_title($post->ID); ?> -</h2>
                                <h3 class="articles-author"><?php the_field('article_author', $post->ID);?></h3>
                                <p class="articles-citation"><?php echo get_the_excerpt($post->ID); ?></p>
                            </div>
                        </a>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<!--Videos Section-->
<section id="videos-section" class="bg-dark">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-light pb-3">Vídeos</h2>
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
</section>
            <script type="text/javascript">
                window.onload = function () {
                    videojs("qtcPlayer", {
                        controls: true,
                        techOrder: ["youtube", "html5"],
                        youtube: { "customVars": { "showinfo": 0, "iv_load_policy" : 3 }},
                        sources: [
                            { "type": "video/youtube", "src": $('#qtcPlayer').data("url") }
                        ]
                    }, function() {
                        var mPlayer = this
                        $("a[data-video]").on("click", function (e) {
                            e.preventDefault();
                            mPlayer.poster( $(this).data("poster"))
                            mPlayer.src({ type: "video/youtube", src: $(this).attr("href") });
                            mPlayer.play();
                        });
                    });
                }
            </script>

<!--Weekend Section-->
<section id="weekend-section">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title pb-3">Fim de Semana</h2>
            </div>
            <?php foreach (get_posts(['numberpost' => 4, 'post_type' => 'fim_de_semana']) as $post): ?>
                <div class="col-6 col-md-3 pb-4 mb-5">
                    <figure class="weekend-img-box px-4">
                        <a href="<?php echo get_permalink($post->ID)?>">
                            <img class="weekend-img" src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                 alt="<?php echo get_the_title($post->ID); ?>">
                        </a>
                        <figcaption class="weekend-figcaption">
                            <a href="<?php echo get_permalink($post->ID)?>"><?php echo get_the_excerpt($post->ID); ?></a>
                        </figcaption>
                    </figure>
                </div>
            <?php endforeach?>
        </div>
    </div>
</section>

<!--Events Section-->
<section id="events-section" class="pb-5">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title pb-3">Eventos</h2>
            </div>
            <?php
                $featured_event_id = 0;
                $cont = 0;
                $count_events_posts = wp_count_posts('eventos');
                $published_events_posts = $count_events_posts->publish;
            ?>
            <?php foreach (get_posts(['numberpost' => 1, 'post_type' => 'eventos']) as $post):
                $cont++;
                $featured_video_id = $post->ID;
            ?>
                <?php if($cont == $published_events_posts) :?>
                    <div class="col-6 col-md-8 pb-4 mb-5">
                         <div class="featured-events-img-box">
                             <figure class="">
                                 <a href="<?php echo get_permalink($post->ID)?>">
                                     <img class="events-img" src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                          alt="<?php echo get_the_title($post->ID); ?>">
                                 </a>
                             </figure>
                         </div>
                    </div>
                    <div class="col-6 col-md-4 pb-4 mb-5">
                        <a href="<?php echo get_permalink($post->ID)?>">
                            <h2 class="events-title"><?php echo get_the_title($post->ID)?></h2>
                            <p class="events-description"><?php echo get_the_excerpt($post->ID)?></p>
                        </a>
                    </div>
            <?php endif; endforeach;?>
            <?php foreach (get_posts(['numberposts' => 4, 'post_type' => 'eventos']) as $post): ?>
                <div class="col-6 col-md-3">
                    <div class="events-box">
                            <figure>
                                <a href="<?php echo get_permalink($post->ID)?>">
                                    <img class="events-img" src="<?php echo get_the_post_thumbnail_url($post->ID);?>"
                                         alt="<?php echo get_the_title($post->ID); ?>">
                                </a>
                                <a href="<?php echo get_permalink($post->ID)?>">
                                    <figcaption><h2 class="sub-events-title"><?php echo get_the_title($post->ID)?></h2></figcaption>
                                </a>
                            </figure>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</section>

<!--Footer Section-->
<footer class="bg-dark pt-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <img src="<?php bloginfo('template_url');?>/images/footer/logo_light.png" alt="footer-logo"
                     id="footer-logo">
            </div>
            <div class="col-12 col-md-3">
                <div class="footer-links">
                    <small>Nossos Links</small>
                    <a href="">Assine Já</a>
                    <a href="">Termos e Condições</a>
                    <a href="">Política de Privacidade</a>
                    <a href=""></a>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="footer-links">
                    <small>Revistas</small>
                    <a href="">Veja</a>
                    <a href="">Abril</a>
                    <a href="">Mundo Estranho</a>
                    <a href="">Correio Brasiliense</a>
                </div>

            </div>
            <div class="col-12 col-md-3 d-flex align-items-center">
                <a href="" id="footer-sign-link">Assine Já</a>
                <img id="footer-magazine" class="align-self-end"
                     src="<?php bloginfo('template_url');?>/images/header/magazine-img.jpg" alt="magazine-img"/>
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="col-12 col-md-6">
                <small class="d-block text-left">© <?php echo date('Y'); ?> - Todos os Direitos Reservados</small>
            </div>
            <div class="col-12 col-md-6 text-right">
                <a href=""><img class="footer-social-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDk2LjEyNCA5Ni4xMjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDk2LjEyNCA5Ni4xMjM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNNzIuMDg5LDAuMDJMNTkuNjI0LDBDNDUuNjIsMCwzNi41Nyw5LjI4NSwzNi41NywyMy42NTZ2MTAuOTA3SDI0LjAzN2MtMS4wODMsMC0xLjk2LDAuODc4LTEuOTYsMS45NjF2MTUuODAzICAgYzAsMS4wODMsMC44NzgsMS45NiwxLjk2LDEuOTZoMTIuNTMzdjM5Ljg3NmMwLDEuMDgzLDAuODc3LDEuOTYsMS45NiwxLjk2aDE2LjM1MmMxLjA4MywwLDEuOTYtMC44NzgsMS45Ni0xLjk2VjU0LjI4N2gxNC42NTQgICBjMS4wODMsMCwxLjk2LTAuODc3LDEuOTYtMS45NmwwLjAwNi0xNS44MDNjMC0wLjUyLTAuMjA3LTEuMDE4LTAuNTc0LTEuMzg2Yy0wLjM2Ny0wLjM2OC0wLjg2Ny0wLjU3NS0xLjM4Ny0wLjU3NUg1Ni44NDJ2LTkuMjQ2ICAgYzAtNC40NDQsMS4wNTktNi43LDYuODQ4LTYuN2w4LjM5Ny0wLjAwM2MxLjA4MiwwLDEuOTU5LTAuODc4LDEuOTU5LTEuOTZWMS45OEM3NC4wNDYsMC44OTksNzMuMTcsMC4wMjIsNzIuMDg5LDAuMDJ6IiBmaWxsPSIjOGU4ZThlIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="></a>
                <a href=""><img class="footer-social-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiIHZpZXdCb3g9IjAgMCAxNjkuMDYzIDE2OS4wNjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDE2OS4wNjMgMTY5LjA2MzsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGQ9Ik0xMjIuNDA2LDBINDYuNjU0QzIwLjkyOSwwLDAsMjAuOTMsMCw0Ni42NTV2NzUuNzUyYzAsMjUuNzI2LDIwLjkyOSw0Ni42NTUsNDYuNjU0LDQ2LjY1NWg3NS43NTIgICBjMjUuNzI3LDAsNDYuNjU2LTIwLjkzLDQ2LjY1Ni00Ni42NTVWNDYuNjU1QzE2OS4wNjMsMjAuOTMsMTQ4LjEzMywwLDEyMi40MDYsMHogTTE1NC4wNjMsMTIyLjQwNyAgIGMwLDE3LjQ1NS0xNC4yMDEsMzEuNjU1LTMxLjY1NiwzMS42NTVINDYuNjU0QzI5LjIsMTU0LjA2MywxNSwxMzkuODYyLDE1LDEyMi40MDdWNDYuNjU1QzE1LDI5LjIwMSwyOS4yLDE1LDQ2LjY1NCwxNWg3NS43NTIgICBjMTcuNDU1LDAsMzEuNjU2LDE0LjIwMSwzMS42NTYsMzEuNjU1VjEyMi40MDd6IiBmaWxsPSIjOGU4ZThlIi8+Cgk8cGF0aCBkPSJNODQuNTMxLDQwLjk3Yy0yNC4wMjEsMC00My41NjMsMTkuNTQyLTQzLjU2Myw0My41NjNjMCwyNC4wMiwxOS41NDIsNDMuNTYxLDQzLjU2Myw0My41NjFzNDMuNTYzLTE5LjU0MSw0My41NjMtNDMuNTYxICAgQzEyOC4wOTQsNjAuNTEyLDEwOC41NTIsNDAuOTcsODQuNTMxLDQwLjk3eiBNODQuNTMxLDExMy4wOTNjLTE1Ljc0OSwwLTI4LjU2My0xMi44MTItMjguNTYzLTI4LjU2MSAgIGMwLTE1Ljc1LDEyLjgxMy0yOC41NjMsMjguNTYzLTI4LjU2M3MyOC41NjMsMTIuODEzLDI4LjU2MywyOC41NjNDMTEzLjA5NCwxMDAuMjgxLDEwMC4yOCwxMTMuMDkzLDg0LjUzMSwxMTMuMDkzeiIgZmlsbD0iIzhlOGU4ZSIvPgoJPHBhdGggZD0iTTEyOS45MjEsMjguMjUxYy0yLjg5LDAtNS43MjksMS4xNy03Ljc3LDMuMjJjLTIuMDUxLDIuMDQtMy4yMyw0Ljg4LTMuMjMsNy43OGMwLDIuODkxLDEuMTgsNS43MywzLjIzLDcuNzggICBjMi4wNCwyLjA0LDQuODgsMy4yMiw3Ljc3LDMuMjJjMi45LDAsNS43My0xLjE4LDcuNzgtMy4yMmMyLjA1LTIuMDUsMy4yMi00Ljg5LDMuMjItNy43OGMwLTIuOS0xLjE3LTUuNzQtMy4yMi03Ljc4ICAgQzEzNS42NjEsMjkuNDIxLDEzMi44MjEsMjguMjUxLDEyOS45MjEsMjguMjUxeiIgZmlsbD0iIzhlOGU4ZSIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo="></a>
            </div>
        </div>
    </div>

</footer>


<?php get_footer(); ?>
