@extends("Admin.Components.layout")
@section("content")
    <div class="container">
        <form>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <span style="font-size: 30px;">お金を払わなければならない</span>
                    </div>

                    <div class="col-sm-8">
                        <input id="max-total" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->loancustomer}}"
                               autocomplete="off" class="form-control" style="text-align: right;font-size: 30px;height: 100%">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <span style="font-size: 30px;">コンプリート</span>
                    </div>
                    <div class="col-sm-8">
                        <input id="loan-cus" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->loanrefund}}"
                               autocomplete="off" class="form-control" style="text-align: right;font-size: 30px;height: 100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <span style="font-size: 30px;">行方不明</span>
                    </div>
                    <div class="col-sm-8">
                        <input value="{{number_format("$end")}}" type="text" readonly="true" data-parsley-trigger="change"
                               autocomplete="off" class="form-control" style="text-align: right;font-size: 30px;height: 100%">
                    </div>
                </div>
            </div>
        </form>
    <div class="container profile-banking">
        <div class="row">
            <div class="col-12">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-2">
                                <label>氏名</label>
                            </div>
                            <div class="col-md-2">
                                <p>{{$cus->tenchuhan}}</p>
                            </div>
                            <div class="col-md-2">
                                <label>生年月日年齢</label>
                            </div>
                            <div class="col-md-2">
                                <p>{{$cus->sinhnhat}}</p>
                            </div>
                            <div class="col-md-2">
                                <label>家族構成</label>
                            </div>
                            <div class="col-md-2">
                                <p>{{$cus->thanhphangiadinh}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>住所</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->diachinha}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>携帯番号</label>
                            </div>
                            <div class="col-md-2">
                                <p>{{$cus->sodienthoaididong}}</p>
                            </div>
                            <div class="col-md-2">
                                <label>自宅番号</label>
                            </div>
                            <div class="col-md-2">
                                <p>{{$cus->sodienthoaicodinh}}</p>
                            </div>
                            <div class="col-md-2">
                                <label>メールアドレス</label>
                            </div>
                            <div class="col-md-2">
                                <p>{{$cus->email}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>勤務先名</label>
                            </div>
                            <div class="col-md-2">
                                <p>{{$cus->truso}}</p>
                            </div>
                            <div class="col-md-2">
                                <label>勤務先電話番号</label>
                            </div>
                            <div class="col-md-2">
                                <p>{{$cus->sdtcty}}</p>
                            </div>
                            <div class="col-md-2">
                                <label>勤務先本社所在地</label>
                            </div>
                            <div class="col-md-2">
                                <p>{{$cus->linkweb}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="button-submit">
            <span class="text-left">
                <a type="button" class="btn btn-primary update-profile" data-toggle="modal" data-target="#払い戻し">
                    完済
                 </a>
            </span>
        <span class="text-left">
                <a type="button" class="btn btn-primary update-profile" data-toggle="modal" data-target="#delay">残金あり</a>
            </span>
        <span class="text-left">
                <button type="submit" class="btn btn-space btn-primary update-profile">利用履歴</button>
            </span>
        <span class="text-left">
                <a href="{{route("refund")}}" class="btn btn-space btn-primary update-profile">戻る</a>
            </span>
    </div>

        <form action="{{route("change-status-history",[$cus->id])}}" method="POST">
            @csrf
            @method("POST")
            <div class="modal fade" id="払い戻し" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <span>確認完了</span>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" value="2" name="status">
                            <input type="hidden" value="0" name="reset">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form action="{{route("change-status-delay",[$cus->id])}}" method="POST">
            @csrf
            @method("POST")
            <div class="modal fade" id="delay" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5>延期リストに追加</h5>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" value="3" name="static">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <style>

        .button-submit {
            width: 30%;
            float: right;
            color: white;
        }


        .button-submit .update-profile {
            width: 45%;
            margin: 2%;
            color: white;

        }

        .show-maxtotal {
            display: flex;
            align-items: flex-end;
        }

        .maxtotal-left {
            width: 30%;
            margin-right: 15%;
        }

        .maxtotal-right {
            width: 30%;
            text-align: end;
        }

        .maxtotal-right span {
            font-size: 30px;
        }
        .profile-banking{
            margin-top: 10%;
        }
    </style>
@endsection
