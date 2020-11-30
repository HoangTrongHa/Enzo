@extends("Customer.Components.layout")
@section("content")

    <section id="sinse-2">
        <form action="{{route("postSinsei")}}" method="POST" id="form-sinse-2">
            @csrf
            @method("POST")
            <div class="container">
                <div class="sinse-2">
                    <div class="container">
                        <div class="head-sinse-2">
                            <div class="margin-head-sinse-2">
                                <span id="head-sinse">売却可能額</span>
                            </div>
                            <span id="total-price-sinse-2">00,000,000</span>
                            <span id="yen-sinse-2">円</span>
                        </div>
                        <div class="check-box-register">
                            <input type="checkbox" required>
                            <label>金銭の貸し借りは無し</label><label id="label-sinse-2">未チェック時申請不可</label>
                        </div>
                        <div class="include">
                            <span>希望売却額</span>
                            <input type="number" value="00,000,000" name="loancus">
                            <span style="margin-left: 7px">円</span>
                        </div>
                        <div class="button-sinse-2">
                            <div class="button-submit-sinse-2">
                                <a id="submit-sinse-2" href="#">売却申請</a>
                            </div>
                            <div class="button-back-sinse-2">
                                <a href="#" onclick="window.history.back()">戻る</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <div class="container container-button-sinse-1">
        <div id="button-footer">
            <div class="item-button-footer">
                <a href="#">チャットで問い合わせる</a>

            </div>
        </div>
    </div>
    <script>
        document.getElementById("submit-sinse-2").onclick = function() {
            document.getElementById("form-sinse-2").submit();
        }
    </script>
@endsection


