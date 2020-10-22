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
                    <div  class="col-md-6 show-result">
                        <form action="{{route("postSinsei")}}" method="POST">
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
                                        <div class="col-5">
                                            <span>So tien vay</span>
                                        </div>
                                        <div class="col-6 amount">
                                            <span>00,000,000</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="type-button">
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                </div>

                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
<style>
    .show-result{
        background-color: #01897b;
        color: white;
        border-radius: 10px;

    }
    .confirm-cus{
        margin: 5% auto;
        text-align: center;
    }
    .amount{
        background-color: black;

    }
</style>
@endsection

