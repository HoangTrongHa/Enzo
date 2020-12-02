@extends("Customer.Components.layout")

@section("content")
    <section id="banner-register">
        <div class="title-register">
            <span>申し込み</span>
        </div>
    </section>
    <section id="sinse-3">
        <div class="container">
            <div class="sinse-3">

                    <div class="title-sinse-3">

                        <span>〈   検査結果   〉</span>
                    </div>
                    <div class="total-sinse-3">
                        <div class="span-forward-to-money">
                            <span>買取額</span>

                        </div>
                        <div class="forward-to-money">

                            <span>{{$cus->maxtotal}}</span><span class="yen-sinse-3">円</span>
                        </div>
                    </div>
                    <div class="total-sinse-3">
                        <div class="span-forward-to-money">
                            <span>送金額</span>

                        </div>
                        <div class="forward-to-money">
                            <span>{{$cus->receive}} </span><span class="yen-sinse-3">円</span>
                        </div>
                    </div>
                    <div class="title-footer-sinse-3">
                        <span>上記審査金額でよろしいでしょうか？</span>
                    </div>
                    <div class="button-sinse-3">
                        <a id="button-submit-sinse-3">
                            <form action="{{route("postSinsei3",[$cus->id])}}" method="POST" id="form-sinse-3">
                                @csrf
                                @method("POST")
                                <input type="hidden" name="maxtotal" value="{{$cus->maxtotal}} ">
                                <input type="hidden" name="borrowing" value="{{$cus->borrowing}} ">
                                <input type="hidden" name="receive" value="{{$cus->receive}} ">
                                <input type="hidden" name="payment_term" value="{{$cus->payment_term}} ">
                                <input type="hidden" name="customerid" value="{{$cus->id}}">
                                <input type="hidden" name="loancustomer" value="{{$cus->maxtotal}}">
                                <span>
                                    売却申
                                </span>
                            </form>
                        </a>
                        <div class="button-back-sinse-3">
                            <form action="{{route("refuse-sinsei-3",[$cus->id])}}" method="POST" id="form-refuse">
                                @csrf
                                @method("POST")
                                <a id="button-refuse" href="#">戻る</a>
                            </form>
                        </div>
                    </div>
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
    <script>
        document.getElementById("button-submit-sinse-3").onclick = function (){
            document.getElementById("form-sinse-3").submit();
        }
        document.getElementById("button-refuse").onclick = function (){
            document.getElementById("form-refuse").submit();
        }
    </script>
@endsection

