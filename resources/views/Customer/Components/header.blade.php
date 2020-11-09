<header>

    <div class="header">

       <a href="{{route("home")}}"><img style="margin-left: 5VW" src="{{asset("image/logo_header_2.png")}}"/></a>
        <div class="header-right">
              @if (Auth::guard("Customer")->check() == true)
                <a href="{{route("application")}}" class="button button1">Ung Dung</a>
                <a class="button button2">FAQ</a>
                @else
            <a href="{{"/loginCustomer"}}" class="button button1">ログイン</a>

            <a class="button button2">FAQ</a>
            @endif
        </div>
    </div>
</header>
