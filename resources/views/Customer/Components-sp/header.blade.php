<header class="logo">
    <img src="{{asset("image/logo_header_2.png")}}" alt="">
    <div class="relative-hamburger">
        <div id="hamburger-1" class="hamburger_menu">

        </div>
        <div class="hamburger_menu">
        </div>
        <div class="hamburger_menu">
        </div>
    </div>
</header>
<script>
    $(document).ready(function(){
        $("#hamburger-1").click(function(){
            $("body").animate({down: '250px'});
        });
    });
</script>
