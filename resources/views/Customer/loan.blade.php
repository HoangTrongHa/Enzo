@extends("Customer.Components.layout")
@section("content")
    <section id="banner-register">
        <div class="title-register">
            <span>申し込み</span>
        </div>
    </section>
    <section id="sinse-1">
        <div class="container">
            <div class="include-sinse-1">
                <div class="sinse-left">
                    <div class="profile-sinse-1">
                        <div class="margin-span-sinse-1">
                            <span>ログインID</span>
                            <div id="margin-total">
                                @if($cus->static == 6)
                                    <span id="total-price">{{number_format($cus->maxtotal)}}</span>
                                @else
                                    <span id="total-price"> 00,000,000</span>
                                @endif
                                <span>円</span>
                            </div>

                        </div>
                    </div>

                    @if($cus->static == 6)
                        {{--                            <a id="one" class="text-in-button button-customer-refund">払い戻し</a>--}}
                        <button id="one" class="button-sinse-left text-in-button button-customer-refund text-white">
                            払い戻し
                        </button>
                        <div id="modal-container">
                            <div class="modal-background">
                                <div class="modal">
                                    <img src="{{asset("image/logo_header_2.png")}}">
                                    <div class="confirm">
                                        <h1>送金確認</h1>
                                        <p>すでに転送している場合は、 "確認" それ以外の場合はを押してください "キャンセル"</p>
                                        <form action="{{route("postMoneyR",[$cus->id])}}" method="POST">
                                            @csrf
                                            @method("POST")
                                            <button class="back-button">キャンセル</button>
                                            <button type="submit" autofocus>確認</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            @else
                                <div class="button-sinse-left">
                                    <a href="{{route("sinsei")}}" class="text-in-button">売却申請</a>
                                </div>
                            @endif

                        </div>
                        <div class="back-sinse-1">
                            <a href="#" class="text-in-button">利用履歴</a>
                        </div>
                </div>

                <div class="sinse-right">
                    <div class="container">
                        <div class="profile-sinse-right">
                            <div class="heading-sinse-right">
                                <span>〈 お戻し金額 〉</span>
                            </div>
                            <div class="price-sinse-right">
                                @if($cus->static == 6)
                                    <span id="total-price-right">{{number_format($cus->maxtotal)}}</span>
                                @else
                                    <span id="total-price-right"> 00,000,000</span>
                                @endif
                                <span id="yen-sinse-right">円</span>
                            </div>
                            <div class="body-head-sinse-right">
                                <span>〈 お戻し金額 〉</span>
                            </div>
                            <div class="body-day">
                                <span>令和</span>
                                <div class="datetime">
                                    <span>00</span>
                                </div>
                                <span>年</span>
                                <div class="datetime">
                                    <span>00</span>
                                </div>
                                <span>月</span>
                                <div class="datetime">
                                    <span>00</span>
                                </div>
                                <span>日</span>
                            </div>
                            <div class="body-head-sinse-right">
                                <span>〈 お戻し講座詳細 〉</span>
                            </div>
                            <div class="profile-banh-enzo">
                                <span>ViecomBank</span><br>
                                <span>Chi Nhanh Ky Dong</span><br>
                                <span>036201004021</span>
                            </div>
                        </div>
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
        debugger
        $('.button-customer-refund').click(function () {
            var buttonId = $(this).attr('id');
            $('#modal-container').removeAttr('class').addClass(buttonId);
            $('body').addClass('modal-active');
        })

        $('#modal-container').click(function () {
            $(this).addClass('out');
            $('body').removeClass('modal-active');
        });
    </script>
@endsection

