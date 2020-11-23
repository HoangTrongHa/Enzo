<header>
    <div class="container">
        <div class="heading">
            <div class="heading-left">
                <a href="{{route("home")}}">

                    <img src="{{asset("image/ENZO_bank_logo_black@2x.png")}}">
                </a>
            </div>
            <div class="heading-right">
                <div class="button-login">
                @if(auth()->guard("Customer")->check())
                        <img src="{{asset("image/icon_login.png")}}" alt="">
                        <a href="{{route("application")}}">応用</a>
                    @else
                        <img src="{{asset("image/icon_login.png")}}" alt="">
                        <a href="{{route("login")}}">ログイン</a>
                    @endif
                </div>
                <div class="button-login">
                    <img src="{{asset("image/icon_qa.png")}}" alt="">
                    <a href="#">FAQ</a>
                </div>

            </div>
        </div>
    </div>

</header>
