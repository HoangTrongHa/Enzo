<header class="logo">
    <img src="{{asset("image/logo_header_2.png")}}" alt="">
    <div class="relative-hamburger">
        <a href="#about_enzo_sp">

            <div id="hamburger-1" class="hamburger_menu">
            </div>
        </a>
        <a href="#how-to-us-sp">

            <div class="hamburger_menu">
            </div>
        </a>
        <a href="#factoring-sp">

            <div class="hamburger_menu">
            </div>
        </a>
    </div>
</header>
<script>
    $(document).ready(function () {
        $("#hamburger-1").click(function () {
            $("body").animate({down: '250px'});
        });
    });
</script>
