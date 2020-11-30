@extends("Admin.Components.layout")
@section("content")
    <span>

    </span>
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
                        <input value="{{number_format("$end")}}" name="end" type="text" readonly="true" data-parsley-trigger="change"
                               autocomplete="off" class="form-control" style="text-align: right;font-size: 30px;height: 100%">
                    </div>
                </div>
            </div>
        </form>
@include("Admin.Components.profile")
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
                            <input type="date" class="form-control" id="inputtotal" name="payment_term" value="{{$cus->payment_term}}" required>
                            <input type="hidden" name="loancustomer" value="{{$end}}" >
                            <input type="hidden" name="static"  value="6">

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
