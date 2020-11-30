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
                @if($cus->static == 7 || $cus->static == 9 ||$cus->static == 8)
                    <div class="sinse-left">
                        <div class="profile-sinse-1">
                            <div class="margin-span-sinse-1">
                                <span>ログインID</span>
                                <div id="margin-total">
                                    <span id="total-price"> 00,000,000</span>
                                    <span>円</span>
                                </div>
                            </div>
                        </div>
                        <div class="button-sinse-left">
                            <a href="" class="text-in-button">売却申請</a>
                        </div>
                        <div class="back-sinse-1">
                            <a href="{{route("history-customer",$cus->id)}}" class="text-in-button">利用履歴</a>
                        </div>
                    </div>
                    <div class="sinse-right">
                        <div class="container">
                            <div class="profile-sinse-right">
                                <div class="heading-sinse-right">
                                    <span>〈 お戻し金額 〉</span>
                                </div>
                                <div class="price-sinse-right">
                                    <span id="total-price-right">00,000,000</span>
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
                @endif
                @if($cus->static == 6)

                    <div class="sinse-left">
                        <div class="profile-sinse-1">
                            <div class="margin-span-sinse-1">
                                <span>ログインID</span>
                                <div id="margin-total">
                                    <span id="total-price">{{number_format($cus->maxtotal)}}</span>
                                    <span>円</span>
                                </div>
                            </div>
                        </div>

                        <button id="one" class="button-sinse-left text-in-button button-customer-refund text-white">
                            払い戻し
                        </button>
                        <div id="modal-container">
                            <div class="modal-background">
                                <div class="modal">
                                    <img src="{{asset("image/logo_header_2.png")}}">
                                    <div class="container confirm">
                                        <form action="{{route("postMoneyR",$cus->id)}}" method="POST">
                                            <h1>送金確認</h1>
                                            <div class="span-modal">
                                                <span>すでに転送している場合は、 "確認" それ以外の場合はを押してください "キャンセル"</span>
                                            </div>
                                            <input type="hidden" name="loanrefund" value="{{$cus->maxtotal}}">
                                            @csrf
                                            @method("POST")
                                            <div class="button-modal">
                                                <button type="submit">
                                                    <span>確認</span>
                                                </button>
                                                <a href='{{route("loan")}}'>
                                                    <span>キャンセル</span>
                                                </a>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="back-sinse-1">
                            <a onclick="{{route("history-customer",$cus->id)}}" class="text-in-button">利用履歴</a>
                        </div>
                    </div>
                    <div class="sinse-right">
                        <div class="container">
                            <div class="profile-sinse-right">
                                <div class="heading-sinse-right">
                                    <span>〈 お戻し金額 〉</span>
                                </div>
                                <div class="price-sinse-right">

                                    <span id="total-price-right">{{number_format($cus->maxtotal)}}</span>
                                    <span id="yen-sinse-right">円</span>
                                </div>
                                <div class="body-head-sinse-right">
                                    <span>〈 お戻し金額 〉</span>
                                </div>
                                <div class="body-day">
                                    <span>令和</span>
                                    <div class="datetime">
                                        <span>{{\Carbon\Carbon::parse($cus->payment_term)->format('d')}}
                                        </span>
                                    </div>
                                    <span>年</span>
                                    <div class="datetime">
                                        <span>{{\Carbon\Carbon::parse($cus->payment_term)->format('m')}}
                                        </span>
                                    </div>
                                    <span>月</span>
                                    <div class="datetime">
                                         <span>{{\Carbon\Carbon::parse($cus->payment_term)->format('y')}}
                                        </span>
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
                @endif
                @if($cus->static == 2)
                    <div class="sinse-left">
                        <div class="profile-sinse-1">
                            <div class="margin-span-sinse-1">
                                <span>ログインID</span>
                                <div id="margin-total">
                                    <span id="total-price"> 00,000,000</span>
                                    <span>円</span>
                                </div>

                            </div>
                        </div>
                        <div class="button-sinse-left">
                            <a href="{{route("sinsei")}}" class="text-in-button">売却申請</a>
                        </div>
                        <div class="back-sinse-1">
                            <a href="{{route("history-customer",$cus->id)}}" class="text-in-button">利用履歴</a>
                        </div>
                    </div>
                    <div class="sinse-right">
                        <div class="container">
                            <div class="profile-sinse-right">
                                <div class="heading-sinse-right">
                                    <span>〈 お戻し金額 〉</span>
                                </div>
                                <div class="price-sinse-right">
                                    <span id="total-price-right">00,000,000</span>
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
                @endif

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
        $('.button-customer-refund').click(function () {
            var buttonId = $(this).attr('id');
            $('#modal-container').removeAttr('class').addClass(buttonId);
            $('body').addClass('modal-active');
        })
    </script>
@endsection

