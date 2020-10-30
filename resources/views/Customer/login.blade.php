<!doctype html>
<html lang="en">
<head>
    @include("Customer.Components.head")
</head>
<body>

@include("Customer.Components.header")
<section style="background:#01897b ">
    <div class="container">

        <h1 class="login-h1">ログイン</h1>
    </div>
</section>
<section>
    <div class="container">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route("postlogin-cus")}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username" class="type-text">ログインID:</label><br>
                                <input type="text" name="username" id="username"
                                       class="form-control @error("email") is-invalid @enderror"
                                       value="{{old("email")}}" required autocomplete="email" autofocus>
                                @error("email")
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="type-text">ログインパスワード:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group" style="text-align: center">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="ログイン"
                                       style="margin-bottom:30px; width: 60%;margin-top: 50px;background-color: #00b7a4">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="register-customer">
                <div class="register-button" >
                    <a href="{{route("registercustomer")}}" class="type-text">Register here</a>

                </div>
        </div>
    </div>
</section>
<style>
    #login-column{
        border-radius: 15px;
    }
    .register-customer{
        display: flex;
        justify-content: flex-end;

    }
    .register-button{
        background-color: #a2a2a2;
        width: 30%;
        text-align: center;
        padding: 20px;
    }
</style>
@include("Customer.Components.footer")
</body>
</html>
