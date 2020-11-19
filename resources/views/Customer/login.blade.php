<!DOCTYPE html>
<html lang="en">
<head>
    @include("Customer.Components.head")

</head>
<body>
@include("Customer.Components.header")
<section id="banner-register">
    <div class="title-register">
        <span>申し込み</span>
    </div>
</section>
<form action="{{ route('postlogin-cus')}}" method="POST">
    @csrf
    @method("POST")
    <section id="login">
        <div class="login">

            <div class="login-customer">
                <div class="content-login">
                    <span>ログインID</span><br>
                    <input type="email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="content-login">
                    <span>ユーザーのパスワード</span><br>
                    <input type="password" name="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit">ログイン</button>

            </div>
        </div>

    </section>
    <div class="container container-button-sinse-1">
        <div id="button-footer">
            <div class="item-button-footer">
                <a href="#">チャットで問い合わせる</a>
            </div>
        </div>
    </div>
</form>

@include("Customer.Components.footer")

</body>
</html>
@include("Customer.Components.script")
<script>

</script>
