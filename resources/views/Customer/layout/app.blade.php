<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/enzo.css")}}">
    @yield('css')
</head>
<body>
<section class="screen-desktop">
@include('Customer.layout.header')
@yield('content')
@include('Customer.layout.footer')
</section>
<section class="smart-phone">
    @include("Customer.Components-sp.header")
    @yield("content")
    @include("Customer.Components-sp.footer")
</section>
<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v9.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/zh_HK/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="102536525038100"
     theme_color="#fa3c4c"
     logged_in_greeting="「こんにちは！どうすればお手伝いできますか？」"
     logged_out_greeting="「こんにちは！どうすればお手伝いできますか？」">
</div>
</body>
</html>
