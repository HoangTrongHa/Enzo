@extends("Customer.Components.layout")
@section("content")
    <section style="background:#01897b">
        <div class="page-wrap d-flex flex-row align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">

                        <div class="mb-4 lead"><span style="font-size: 4VW;">私たちはあなたの情報を再確認し、すぐに応答を送信します</span></div>
                        <a href="{{route("home")}}" class="btn btn-light">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<style>
    .lead{
        color: #ffffff;
   }
</style>
