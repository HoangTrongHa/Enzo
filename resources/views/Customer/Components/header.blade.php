<header>
    <div class="container">
        <div class="heading">
            <div class="heading-left">
                <a href="{{route("home")}}">

                    <img src="{{asset("image/ENZO_bank_logo_black@2x.png")}}">
                </a>
            </div>
            <div class="heading-right">
                @if(auth()->guard("Customer")->check())
                    <a href="{{route("application")}}">
                        <div class="button-login">
                            <img src="{{asset("image/icon_login.png")}}" alt="">
                            <span id="span-login">
                          応用
                          </span>
                        </div>
                    </a>
                @else
                    <a href="{{route("login")}}">
                        <div class="button-login">
                            <img src="{{asset("image/icon_login.png")}}" alt="">
                            <span id="span-login">
                          ログイン
                          </span>
                        </div>
                    </a>
                @endif
                    <a href="#">
                        <div class="button-login">
                            <img src="{{asset("image/icon_qa.png")}}" alt="">
                            <span id="span-login">
                         FAQ
                          </span>
                        </div>
                    </a>
            </div>
        </div>
    </div>

</header>
