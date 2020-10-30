{{--@extends("Admin.Components.layout")--}}
{{--@section("content")--}}
{{--    <div class="container">--}}
{{--        <div class="show-maxtotal">--}}
{{--            <div class="maxtotal-left">--}}
{{--                <span style="font-size: 40px;">希望売却額</span>--}}
{{--            </div>--}}
{{--            <div class="maxtotal-right" style="float: right">--}}
{{--                <input type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->receive}}"--}}
{{--                       autocomplete="off" class="form-control" style="text-align: right;font-size: 30px;height: 100%">--}}
{{--            </div>--}}
{{--            <span style="margin-left: 2%">円</span>--}}
{{--        </div>--}}

{{--        <div class="show-maxtotal">--}}
{{--            <div class="maxtotal-left">--}}
{{--                <span style="font-size: 40px;">お戻し期日　</span>--}}
{{--            </div>--}}
{{--            <div class="maxtotal-right">--}}
{{--                <span> {{$cus->payment_term}}--}}
{{--                </span>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container profile-banking">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="tab-content profile-tab" id="myTabContent">--}}
{{--                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-2">--}}
{{--                                <label>氏名</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <p>{{$cus->tenchuhan}}</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <label>生年月日年齢</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <p>{{$cus->sinhnhat}}</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <label>家族構成</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <p>{{$cus->thanhphangiadinh}}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <label>住所</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <p>{{$cus->diachinha}}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-2">--}}
{{--                                <label>携帯番号</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <p>{{$cus->sodienthoaididong}}</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <label>自宅番号</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <p>{{$cus->sodienthoaicodinh}}</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <label>メールアドレス</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <p>{{$cus->email}}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-2">--}}
{{--                                <label>勤務先名</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <p>{{$cus->truso}}</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <label>勤務先電話番号</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <p>{{$cus->sdtcty}}</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <label>勤務先本社所在地</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <p>{{$cus->linkweb}}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <div class="button-submit">--}}
{{--            <span class="text-left">--}}
{{--                <a href="{{route("post-showbanking",[$cus->id])}}" class="btn btn-space btn-primary update-profile">送金手続き</a>--}}
{{--            </span>--}}
{{--        <span class="text-left">--}}
{{--                <a type="submit" class="btn btn-space btn-primary update-profile">非承認</a>--}}
{{--            </span>--}}
{{--        <span class="text-left">--}}
{{--                <button type="submit" class="btn btn-space btn-primary update-profile">History</button>--}}
{{--            </span>--}}
{{--        <span class="text-left">--}}
{{--                <button type="submit" class="btn btn-space btn-primary update-profile">Back</button>--}}
{{--            </span>--}}
{{--    </div>--}}


{{--    <style>--}}

{{--        .button-submit {--}}
{{--            width: 30%;--}}
{{--            float: right;--}}
{{--            color: white;--}}
{{--        }--}}


{{--        .button-submit .update-profile {--}}
{{--            width: 45%;--}}
{{--            margin: 2%;--}}
{{--            color: white;--}}

{{--        }--}}

{{--        .show-maxtotal {--}}
{{--            display: flex;--}}
{{--            align-items: flex-end;--}}
{{--        }--}}

{{--        .maxtotal-left {--}}
{{--            width: 30%;--}}
{{--            margin-right: 15%;--}}
{{--        }--}}

{{--        .maxtotal-right {--}}
{{--            width: 30%;--}}
{{--            text-align: end;--}}
{{--        }--}}

{{--        .maxtotal-right span {--}}
{{--            font-size: 30px;--}}
{{--        }--}}
{{--        .profile-banking{--}}
{{--            margin-top: 10%;--}}
{{--        }--}}
{{--    </style>--}}

{{--@endsection--}}
