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

                <form action="{{route("postSinsei3",[$cus->id])}}" method="POST" id="form-sinse-3">
                    @csrf
                    @method("POST")
                    <div class="title-sinse-3">

                        <span>〈   検査結果   〉</span>
                    </div>
                    <div class="total-sinse-3">
                        <div class="span-forward-to-money">
                            <span>買取額</span>

                        </div>
                        <div class="forward-to-money">
                            <input type="hidden" name="maxtotal" value="{{$cus->maxtotal}} ">
                            <input type="hidden" name="borrowing" value="{{$cus->borrowing}} ">
                            <input type="hidden" name="receive" value="{{$cus->receive}} ">
                            <input type="hidden" name="payment_term" value="{{$cus->payment_term}} ">
                            <input type="hidden" name="customerid" value="{{$cus->id}}">
                            <input type="hidden" name="loancustomer" value="{{$cus->maxtotal}}">
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
                        <div class="button-submit-sinse-3">
                            <a href="#" id="button-submit-sinse-3">
                                売却申</a>
                        </div>
                        <div class="button-back-sinse-3">
                            <a href="#">戻る</a>
                        </div>
                    </div>
                </form>
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
    </script>
@endsection

