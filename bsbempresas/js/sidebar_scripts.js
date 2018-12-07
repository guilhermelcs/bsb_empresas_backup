
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