<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">

        <div class="p-4">
            @if(auth()->guard("Customer")->check())
                <a href="{{route("application")}}">応用</a>
            @else
                <a href="{{route("login")}}">ログインする</a>
            @endif
            <a href="">FAQ</a>
        </div>
    </div>
    <nav class="navbar navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
                aria-controls="navbarToggleExternalContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>
<header class="logo">
    <a href="{{route("home")}}">

        <img src="{{asset("image/logo_header_2.png")}}" alt="">
    </a>

</header>
<script>
    $(document).ready(function () {
        $("#hamburger-1").click(function () {
            $("body").animate({down: '250px'});
        });
    });
</script>
