@extends("Customer.layout.app")
@section('css')
    <link rel="stylesheet" href="{{asset("css/sinse1.css")}}">
@endsection
@section("content")
    <section id="banner-register">
        <div class="title-register">
            <span>申し込み</span>
        </div>
    </section>
    <section id="sinse-1">
        <div class="container">
            <div class="include-sinse-1">
                @if( $cus->static == 9)
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
                        <a href="" class="text-in-button">
                             <span>
                                売却申請
                             </span>
                        </a>
                        <a href="{{route("history-customer",$cus->id)}}" class="text-in-button-1">
                             <span>
                                利用履歴
                             </span>
                        </a>
                    </div>
                    <div class="sinse-right">
                        <div class="box-sinse-right">
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
                @if($cus->static == 6 || $cus->static == 7 || $cus->static == 8)
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
                        <button type="button" class="button-sinse-left text-in-button button-customer-refund text-white"
                                data-toggle="modal" data-target="#modal-sinse-refund">
                            払い戻し
                        </button>
                        <div class="modal fade" id="modal-sinse-refund" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">送金確認</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <span>すでに転送している場合は、 "確認" それ以外の場合はを押してください "キャンセル"</span>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{route("postMoneyR",$cus->id)}}" method="POST">
                                            @csrf
                                            @method("POST")
                                            <input type="hidden" name="loanrefund" value="{{$cus->maxtotal}}">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル
                                            </button>
                                            <button type="submit" class="btn btn-success">確認</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route("history-customer",$cus->id)}}" class="text-in-button-1">
                             <span>
                                利用履歴
                             </span>

                        </a>
                    </div>
                    <div class="sinse-right">
                        <div class="box-sinse-right">
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
                                        <span>{{\Carbon\Carbon::parse($cus->payment_term)->format('y')}}
                                        </span>
                                    </div>
                                    <span>年</span>
                                    <div class="datetime">
                                        <span>{{\Carbon\Carbon::parse($cus->payment_term)->format('m')}}
                                        </span>
                                    </div>
                                    <span>月</span>
                                    <div class="datetime">
                                        <span>{{\Carbon\Carbon::parse($cus->payment_term)->format('d')}}
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
                        <a href="{{route("sinsei")}}" class="text-in-button">
                             <span>
                                売却申請
                             </span>

                        </a>
                        <a href="{{route("history-customer",$cus->id)}}" class="text-in-button-1">
                             <span>
                                利用履歴
                             </span>

                        </a>
                    </div>
                    <div class="sinse-right">
                        <div class="box-sinse-right">
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
@endsection

@section('script')

@endsection

