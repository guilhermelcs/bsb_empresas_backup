<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage
 * @since  1.0
 */
?>

<!--Footer Section-->
<footer class="bg-dark pt-5 pb-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 text-center">
                <img src="<?php bloginfo('template_url');?>/images/header/logo-footer.png" alt="footer-logo"
                     id="footer-logo">
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="col-12 col-md-12">
                <small class="d-block text-center">© <?php echo date('Y'); ?> - Todos os Direitos Reservados</small>
            </div>
            <div class="col-12 col-md-6 text-right">
                <a href=""><img class="footer-social-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDk2LjEyNCA5Ni4xMjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDk2LjEyNCA5Ni4xMjM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNNzIuMDg5LDAuMDJMNTkuNjI0LDBDNDUuNjIsMCwzNi41Nyw5LjI4NSwzNi41NywyMy42NTZ2MTAuOTA3SDI0LjAzN2MtMS4wODMsMC0xLjk2LDAuODc4LTEuOTYsMS45NjF2MTUuODAzICAgYzAsMS4wODMsMC44NzgsMS45NiwxLjk2LDEuOTZoMTIuNTMzdjM5Ljg3NmMwLDEuMDgzLDAuODc3LDEuOTYsMS45NiwxLjk2aDE2LjM1MmMxLjA4MywwLDEuOTYtMC44NzgsMS45Ni0xLjk2VjU0LjI4N2gxNC42NTQgICBjMS4wODMsMCwxLjk2LTAuODc3LDEuOTYtMS45NmwwLjAwNi0xNS44MDNjMC0wLjUyLTAuMjA3LTEuMDE4LTAuNTc0LTEuMzg2Yy0wLjM2Ny0wLjM2OC0wLjg2Ny0wLjU3NS0xLjM4Ny0wLjU3NUg1Ni44NDJ2LTkuMjQ2ICAgYzAtNC40NDQsMS4wNTktNi43LDYuODQ4LTYuN2w4LjM5Ny0wLjAwM2MxLjA4MiwwLDEuOTU5LTAuODc4LDEuOTU5LTEuOTZWMS45OEM3NC4wNDYsMC44OTksNzMuMTcsMC4wMjIsNzIuMDg5LDAuMDJ6IiBmaWxsPSIjOGU4ZThlIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="></a>
                <a href=""><img class="footer-social-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiIHZpZXdCb3g9IjAgMCAxNjkuMDYzIDE2OS4wNjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDE2OS4wNjMgMTY5LjA2MzsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGQ9Ik0xMjIuNDA2LDBINDYuNjU0QzIwLjkyOSwwLDAsMjAuOTMsMCw0Ni42NTV2NzUuNzUyYzAsMjUuNzI2LDIwLjkyOSw0Ni42NTUsNDYuNjU0LDQ2LjY1NWg3NS43NTIgICBjMjUuNzI3LDAsNDYuNjU2LTIwLjkzLDQ2LjY1Ni00Ni42NTVWNDYuNjU1QzE2OS4wNjMsMjAuOTMsMTQ4LjEzMywwLDEyMi40MDYsMHogTTE1NC4wNjMsMTIyLjQwNyAgIGMwLDE3LjQ1NS0xNC4yMDEsMzEuNjU1LTMxLjY1NiwzMS42NTVINDYuNjU0QzI5LjIsMTU0LjA2MywxNSwxMzkuODYyLDE1LDEyMi40MDdWNDYuNjU1QzE1LDI5LjIwMSwyOS4yLDE1LDQ2LjY1NCwxNWg3NS43NTIgICBjMTcuNDU1LDAsMzEuNjU2LDE0LjIwMSwzMS42NTYsMzEuNjU1VjEyMi40MDd6IiBmaWxsPSIjOGU4ZThlIi8+Cgk8cGF0aCBkPSJNODQuNTMxLDQwLjk3Yy0yNC4wMjEsMC00My41NjMsMTkuNTQyLTQzLjU2Myw0My41NjNjMCwyNC4wMiwxOS41NDIsNDMuNTYxLDQzLjU2Myw0My41NjFzNDMuNTYzLTE5LjU0MSw0My41NjMtNDMuNTYxICAgQzEyOC4wOTQsNjAuNTEyLDEwOC41NTIsNDAuOTcsODQuNTMxLDQwLjk3eiBNODQuNTMxLDExMy4wOTNjLTE1Ljc0OSwwLTI4LjU2My0xMi44MTItMjguNTYzLTI4LjU2MSAgIGMwLTE1Ljc1LDEyLjgxMy0yOC41NjMsMjguNTYzLTI4LjU2M3MyOC41NjMsMTIuODEzLDI4LjU2MywyOC41NjNDMTEzLjA5NCwxMDAuMjgxLDEwMC4yOCwxMTMuMDkzLDg0LjUzMSwxMTMuMDkzeiIgZmlsbD0iIzhlOGU4ZSIvPgoJPHBhdGggZD0iTTEyOS45MjEsMjguMjUxYy0yLjg5LDAtNS43MjksMS4xNy03Ljc3LDMuMjJjLTIuMDUxLDIuMDQtMy4yMyw0Ljg4LTMuMjMsNy43OGMwLDIuODkxLDEuMTgsNS43MywzLjIzLDcuNzggICBjMi4wNCwyLjA0LDQuODgsMy4yMiw3Ljc3LDMuMjJjMi45LDAsNS43My0xLjE4LDcuNzgtMy4yMmMyLjA1LTIuMDUsMy4yMi00Ljg5LDMuMjItNy43OGMwLTIuOS0xLjE3LTUuNzQtMy4yMi03Ljc4ICAgQzEzNS42NjEsMjkuNDIxLDEzMi44MjEsMjguMjUxLDEyOS45MjEsMjguMjUxeiIgZmlsbD0iIzhlOGU4ZSIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo="></a>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
