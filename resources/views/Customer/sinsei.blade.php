@extends("Customer.layout.app")
@section('css')
    <link rel="stylesheet" href="{{asset("css/sinse-2.css")}}">
@endsection
@section("content")
    <section id="banner-register">
        <div class="title-register">
            <span>申し込み</span>
        </div>
    </section>
    <section id="sinse-2">
        <form action="{{route("postSinsei")}}" method="POST" id="form-sinse-2">
            @csrf
            @method("POST")
            <div class="container" id="container">
                @error('checkbox')
                <div class="error-check-box-sinse">
                    <span>{{ $message }}</span>
                </div>
                @enderror
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
                            <input type="checkbox" name="checkbox" id="check-box">
                            <label>金銭の貸し借りは無し</label><label id="label-sinse-2">未チェック時申請不可</label>
                        </div>
                        <div class="include">
                            <span>希望売却額</span>
                            <input type="text" placeholder="00,000,000" name="loancus" id="register-loan" min="1"
                                   max="99999999">
                            <span style="margin-left: 7px">円</span>
                        </div>
                        <div class="button-sinse-2">
                            <a style="color: white;text-decoration: none" id="submit-sinse-2"
                               class="button-submit-sinse-2" href="#">売却申請</a>
                            <a class="button-back-sinse-2" href="#" style="color: white;text-decoration: none" onclick="window.history.back()">戻る</a>

                        </div>
                    </div>
                </div>
                @error('loancus')
                <div class="error-register-loan">

                    <span>{{ $message }}</span>
                </div>
                @enderror
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

@endsection
@section('script')
    <script>
        document.getElementById("submit-sinse-2").onclick = function () {
            document.getElementById("form-sinse-2").submit();
        }
        $(document).ready(function () {
            $(".error-check-box-sinse").show("slow")
            $("#check-box").click(function () {
                $(".error-check-box-sinse").hide(500)
            })
        })
        $(document).ready(function () {
            $("#register-loan").change(function () {
                $(".error-register-loan").hide(500)
            })
        })
        jQuery('#register-loan').keyup(function () {
            this.value = this.value.replace(/[^0-9\.]/g, '');
        });
        // var number = document.getElementById('register-loan');
        //
        // // Listen for input event on numInput.
        // number.onkeydown = function(e) {
        //     if(!((e.keyCode > 95 && e.keyCode < 106) || (e.keyCode > 47 && e.keyCode < 58) || e.keyCode === 8)) {
        //         return false;
        //     }
        // }
    </script>
@endsection
