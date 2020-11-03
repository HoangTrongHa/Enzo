@extends("Customer.Components.layout")
@section("content")
    <section style="background:#01897b ">
        <div class="container">
            <h1 class="login-h1">申し込み</h1>
        </div>
    </section>
    <div>
        <div class="container" style="margin: 5% auto;">
            <div class="row justify-content-around">
                <div class="col-5 loan align-items-center">
                    <div class="align-items-center loan-app">
                        <span class="span-1">支払うべき金額</span><br>
                        @if($static ->loancustomer == null || $static ->loancustomer == 0)
                            <span class="span-2" style="font-size: 62px;">0,000,000</span>
                        @else
                            <span class="span-2" style="font-size: 62px;">{{$static ->loancustomer}}</span>
                        @endif
                    </div>
                    <div class="button-app">
                        @if($static ->loancustomer == null || $static ->loancustomer == 0 )

                            <a href="{{route("sinsei")}}" class="button-a">Get Started</a>
                        @else

                            <a type="button" class="button-a" data-toggle="modal" data-target="#myModal">
                                Tra tien de
                            </a>
                        @endif
                    </div>
                    <div class="button-app">
                        <a href="#" class="button-a">History</a>
                    </div>
                </div>
                <div class="col-5 loan">
                    <div class="row align-items-center">

                        <div class="right-loan">
                             <span>
                                  <  Thong Bao co the vay >
                              </span>
                            <div class="align-items-center loan-app">
                                <span class="span-1">{{$static->maxtotal}}</span>

                            </div>
                            <span>
                                <  Ngay Phai Tra >
                             </span>
                            <div class="align-items-center loan-app">
                                <span class="span-1">{{$static ->payment_term}}</span>
                            </div>
                            <span>
                                <  Thong tin tai khoan admin >
                             </span>
                            <div class="align-items-center loan-app">
                                <span class="span-1">Hoàng trọng Hà 036201004021</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">私たちに送金</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <h1>管理者アカウント</h1>
                            <span>Hoàng trọng Hà 036201004021</span>
                            <h2>お金を払わなければならない</h2>
                            <div>
                                <span style="font-size: 40px;">{{$static ->loancustomer}}</span> <span>円</span><br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{route("customerbanking")}}" class="btn btn-primary">精算</a>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
        </section>

        @endsection
        <style>
            .loan {
                background-color: #01897b;
                border-radius: 10px;
                text-align: center;
                color: white;

            }

            .loan-app {
                background-color: black;
                margin: 35px 65px 0 65px;
                text-align: center;
                color: white;
            }

            .loan-app span-1 {
                font-size: 20px;

            }

            .button-app {
                text-align: center;
                width: 30%;
                margin: 30px auto;
                background-color: #00b7a4;

            }

            .button-app .button-a {
                color: white;
            }

            .right-loan {
                width: 90%;
            }

        </style>
