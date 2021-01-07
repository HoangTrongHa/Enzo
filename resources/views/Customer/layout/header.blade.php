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
                    <a href="{{route("application")}}" class="button-login">
                        <img src="{{asset("image/icon_login.png")}}" alt="">
                        <span id="span-login">
                          応用
                          </span>
                    </a>

                    <a href="{{route("logout-customer")}}" class="button-login">
                        <img src="{{asset("image/icon_qa.png")}}" alt="">
                        <span id="span-login">
                        ログアウト
                          </span>
                    </a>
                @else
                    <a href="{{route("login")}}"  class="button-login">
                        <img src="{{asset("image/icon_login.png")}}" alt="">
                        <span id="span-login">
                          ログイン
                          </span>
                    </a>
                    <a href="#" class="button-login">
                        <img src="{{asset("image/icon_qa.png")}}" alt="">
                        <span id="span-login">
                         FAQ
                          </span>
                    </a>
                @endif
            </div>
        </div>
    </div>

</header>
