<script src={{ asset('assets/frontend/js/jquery.min.js') }}></script>
<script src={{ asset('assets/frontend/js/bootstrap.min.js') }}></script>

<script type="text/javascript">
$(document).ready(function() {
    $('li').removeClass('active-menu');
    var url = window.location.href.split("/");
    var path = url[3];
    if (path == '') {
        $('#main-menu-wrapper ul li:first-child').addClass('active-menu');
    } else {
        $('.' + path).addClass('active-menu');
    }
    $('#main-menu-wrapper ul').attr('id', 'main-menu');
    $('.mobile-container ul').attr('id', 'main-menu1');
});

</script>
<script type="text/javascript">
    $(".menu-btn-cross").hide("slow");
    $(".icon").click(function() {
        $(".myLinks").show("slow");
        $(".menu-btn-cross").show("slow");
        $(".menu-btn").hide();
    });

    $(".menu-btn-cross").click(function() {
        $(".myLinks").hide();
        $(".menu-btn-cross").hide();
        $(".menu-btn").show();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ptms_marquee').find('ul').css("display", "flex");
    });
</script>
<script>
    $(function() {
        //animate the ticker
        var tickersmall_announcement = function() {
            $('#saw_ticker-small_announcement li:first').animate({
                marginLeft: '-200px'
            }, 800, function() {
                jQuery(this).detach().appendTo('ul#saw_ticker-small_announcement').removeAttr(
                    'style');
            });

            //after the animation completes, set the interval again
            interval;
        };

        //set the interval for the animation
        var interval = setInterval(tickersmall_announcement, 4000);

        //on hover, pause the ticker, and restart it on mouseout
        jQuery('#saw_ticker-small_announcement li:first').hover(function() {
            clearInterval(interval);
        }, function() {
            interval = setInterval(tickersmall_announcement, 4000);
        });

        //start the interval for the first animation
        interval;
    });
</script>

<!--End of Tawk.to Script-->

<script src={{ asset('assets/frontend/js/framework.js') }}></script>
<script src={{ asset('assets/frontend/js/framework.extras.js') }}></script>

<script src="https://www.google.com/recaptcha/api.js"></script>
<script src={{ asset('assets/frontend/js/main.js') }}></script>
<script src={{ asset('assets/frontend/js/framework.extras.js') }}></script>
