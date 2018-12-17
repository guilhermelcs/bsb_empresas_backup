    window.HELP_IMPROVE_VIDEOJS = false;

    $(document).ready(function () {

        let mPlayer = $('#manifesto-video');

        if (mPlayer) {
            videojs('manifesto-video', {
                controls: true,
                techOrder: ["youtube", "html5"],
                youtube: { "customVars": { "showinfo": 0, "iv_load_policy" : 3 }},
                sources: [
                    { "type": "video/youtube", "src": $(mPlayer).data('video') }
                ]
            }, function() {
                var player = this;

                $('a[data-url]').on('click', function (e) {
                    e.preventDefault();
                    player.src({ type: 'video/youtube', src: $(this).data('url') });
                    player.play()
                });

                $('#videos-modal').on('show.bs.modal', function () {
                    player.play()
                });

                $('#videos-modal').on('hide.bs.modal', function () {
                    player.pause()
                });
            });
        }

    });

    $("a[href='#qtc-open-menu']").on('click', function(e) {
        e.preventDefault()
        let menu = document.getElementById("sidebar-menu");
        if (menu) {
            $(menu).toggleClass('show')
            document.getElementById("sidebar-menu-backdrop").classList.toggle('sidebar-menu-wrapper');
        }
    })

    $("a[href='#qtc-close-menu']").on('click', function () {
        document.getElementById("sidebar-menu").classList.toggle('show')
        document.getElementById("sidebar-menu-backdrop").classList.remove('sidebar-menu-wrapper');
        return false
    })



    $(document).mouseup(function(e)
    {
        var container = $("#sidebar-menu");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            $(container).removeClass('show');
            document.getElementById("sidebar-menu-backdrop").classList.remove('sidebar-menu-wrapper');
        }
    });

    //Checking if navbar is on top of the screen
    var distance = $('#menu-wrapper').offset().top,
        $window = $(window);

    $window.scroll(function() {
        if ( $window.scrollTop() >= distance && !$('#logo-menu-wrapper').hasClass('.logo-menu-wrapper-show')) {
            $('#logo-menu-wrapper').addClass('logo-menu-wrapper-show');
        }
        else {
            $('#logo-menu-wrapper').removeClass('logo-menu-wrapper-show');
        }

    });

    //Toggle Searchbar Visibilty
    $("#search-icon-link").on('click', function () {
        document.getElementById("searchbar-section").classList.toggle('visible');
        return false;
    });

    //Toggle Searchbar Visibilty
    $("#search-icon-link-mobile").on('click', function () {
        document.getElementById("searchbar-section-mobile").classList.toggle('visible');
        return false;
    });