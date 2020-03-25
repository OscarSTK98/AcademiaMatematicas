$(document).ready(function () {
    // alert(screen.width)
    // alert(screen.height)
    if(screen.width>768)
    {
        $('#sidebar').toggleClass('active');
        var sidebarActive=false
        var isMobileDevice=false
    }
    else{
        var isMobileDevice=true
        var sidebarActive=false
    }

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');

        sidebarActive=!sidebarActive

        console.log(isMobileDevice)
        console.log(sidebarActive)
        if(!isMobileDevice && sidebarActive)
        {
            $('#content').css('width','75%')
        } else if(!isMobileDevice && !sidebarActive){
            $('#content').css('width','92%')
        }

        if(isMobileDevice && sidebarActive)
        {
            $('#content').css('width','77%')
        } else if(isMobileDevice && !sidebarActive){
            $('#content').css('width','100%')
        }

    });

    let currentYear=new Date().getFullYear()
    $('.currentYear').html(currentYear)

    $('.owl-carousel').owlCarousel({
        center:true,
        stagePadding:0,
        mergeFit:false,
        loop:true,
        margin:10,
        nav:true,
        autoWidth:true,
        autoplay:true,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:1
            }
            // },
            // 600:{
            //     items:3
            // },
            // 1000:{
            //     items:5
            // }
        }
    })
});