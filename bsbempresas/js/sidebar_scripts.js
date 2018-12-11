
    $("a[href='#qtc-open-menu']").on('click', function(e) {
        e.preventDefault()
        console.log('working')
        let menu = document.getElementById("sidebar-menu");
        console.log(menu)
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
            console.log('OnTop');
            $('#logo-menu-wrapper').addClass('logo-menu-wrapper-show');
        }
        else {
            $('#logo-menu-wrapper').removeClass('logo-menu-wrapper-show');
        }

    });

    //Toggle Searchbar Visibilty
    $("#search-icon-link").on('click', function () {
            document.getElementById("searchbar-section").classList.toggle('visible');
        return false
    });