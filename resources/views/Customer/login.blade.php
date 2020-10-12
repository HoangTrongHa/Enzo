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
                        <form id="login-form" class="form" action="{{route("login")}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username" class="type-text">Username:</label><br>
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
                                <label for="password" class="type-text">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="type-text"><span>Remember me</span> <span><input
                                            id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="{{route("registercustomer")}}" class="type-text">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include("Customer.Components.footer")
</body>
</html>
