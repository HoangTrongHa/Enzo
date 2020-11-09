@extends("Customer.Components.layout")
@section("content")
    <section style="background-color: #01897b;height: 45%">
        <div class="notification-head">
            <h1>
                顧客への通知

            </h1>
        </div>

    </section>
    <section style="background:white">

        <div class="page-wrap d-flex flex-row align-items-center">
            <div class="container" style="background-color: #d3c500; border-radius: 10px">
                <div class="row justify-content-center" style="background-color: #d3c500">
                    <div class="col-md-12 text-center">

                        <div class="mb-4 lead"><span>私たちはあなたの情報を再確認し、すぐに応答を送信します</span></div>
                        <a style="margin: 8%;background-color: #00b7a4; color: white" href="{{route("home")}}" class="btn btn-light">ホームページで</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<style>
    .lead{
        color: #ffffff;
        margin: 100px;
   }

    .notification-head{
        margin: 7% auto;
        text-align: center;
        color: white;
    }
</style>
