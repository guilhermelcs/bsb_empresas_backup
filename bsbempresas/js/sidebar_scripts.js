
    $("a[href='#qtc-open-menu']").on('click', function(e) {
        e.preventDefault()
        console.log('working')
        let menu = document.getElementById("sidebar-menu");
        console.log(menu)
        if (menu) {
            $(menu).toggleClass('show')
        }
    })

    $("a[href='#qtc-close-menu']").on('click', function () {
        document.getElementById("sidebar-menu").classList.toggle('show')
        return false
    })