@extends("Customer.Components.layout")

@section("content")
    <section style="background:#01897b ">
        <div class="container">
            <h1 class="login-h1">申し込み</h1>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div class="col-md-6 show-result">
                        <form action="{{route("postSinsei3")}}" method="POST">
                            @csrf
                            @method("POST")
                            <div class="container">

                                <div class="confirm-cus">
                                    <span>
                                        結果
                                    </span>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4 sinsei-left">
                                            <span>借りたい金額</span>
                                        </div>
                                        <div class="col-6 amount">
                                            <span>{{$cus->maxtotal}} </span>
                                            <input type="hidden" name="maxtotal" value="{{$cus->maxtotal}} ">
                                            <input type="hidden" name="borrowing" value="{{$cus->borrowing}} ">
                                            <input type="hidden" name="receive" value="{{$cus->receive}} ">
                                            <input type="hidden" name="payment_term" value="{{$cus->payment_term}} ">
                                            <input type="hidden" name="customerid" value="{{$cus->id}}">
                                        </div>

                                        <div class="col-1  sinsei-left ">
                                            <span>円</span>
                                        </div>
                                    </div>

                                    <div class="row bottom">
                                        <div class="col-4 sinsei-left">
                                            <span>受け取ったお金</span>
                                        </div>
                                        <div class="col-6 amount">
                                            <span>{{$cus->receive}} </span>
                                        </div>
                                        <div class="col-1  sinsei-left ">
                                            <span>円</span>
                                        </div>
                                    </div>

                                    <div class="type-button">
                                        <button type="submit" class="btn btn-warning submit-cus">チャップナン
                                        </button>
                                        <a type="button" class="btn btn-info dissubmit">Info</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .show-result {
            background-color: #01897b;
            color: white;
            border-radius: 10px;

        }

        .confirm-cus {
            margin: 5% auto;
            text-align: center;
        }

        .amount {
            background-color: #313131;
            padding: 4%;
        }

        .sinsei-left {
            text-align: center;
            padding: 4%;
        }

        .bottom {
            margin-top: 10%;
        }
        .type-button{
            margin-top: 10%;
            margin-bottom: 10%;
        }
        .submit-cus{
            width: 69%;
            background-color: #e57b00;
        }
        .dissubmit{
            width: 30%;
            background-color: #00b7a4;
        }
    </style>
@endsection

