@extends("Customer.Components.layout")

@section("content")
    <section style="background:#01897b ">
        <div class="container">
            <h1 class="login-h1">申し込み</h1>
        </div>
    </section>
    <section>
        <div class="container" style="margin: 5% auto;">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <form action="{{route("postSinsei")}}" method="POST">
                            @csrf
                            @method("POST")
                            <div class="container">
                                <div class="align-items-center loan-app">
                                    <span class="span-1">so tien van con no</span><br>
                                    <span class="span-2" style="font-size: 62px;">00,000,00</span>
                                </div>
                                <input type="checkbox" id="vehicle" name="vehicle1" value="Bike" required>
                                <label for="vehicle1"> 未払いの負債はありません。 チェックせずにお金を借りること.</label>

                                <label for="vehicle1">希望する金額</label>
                                <input type="number" id="vehicle1" name="loancus" value="Bike">
                                <label for="loancus">円</label>
                                <div class="type-button">
                                    <button type="submit" class=""
                                            style="width: 65%;background-color: #00b7a4;color: white">登録
                                    </button>
                                    {{--                                    <button onclick="goBack()" class=""--}}
                                    {{--                                            style="width: 30%;background-color: #00b7a4;color: white">Back--}}
                                    {{--                                    </button>--}}
                                </div>

                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .loan-app {
            background-color: black;
            border-radius: 10px;
            text-align: center;
            color: white;
        }

        .loan-app span-1 {
            font-size: 20px;

        }

        #vehicle1 {
            background-color: black;
            color: white;
            width: 60%;
        }

        .type-button {
            margin-top: 5%;
            margin-bottom: 5%;
        }
    </style>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection

