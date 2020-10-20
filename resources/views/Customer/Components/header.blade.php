<header>

    <div class="header">
        <img style="margin-left: 5VW" src="{{asset("image/logo_header_2.png")}}"/>
        <div class="header-right">
              @if (Auth::guard("Customer")->check()){
                <a href="{{route("application")}}" class="button button1">Ung Dung</a>
                }@else{
            <a href="{{"/loginCustomer"}}" class="button button1">ログイン</a>
            }
            <a class="button button2">FAQ</a>
            @endif
        </div>
    </div>
</header>
