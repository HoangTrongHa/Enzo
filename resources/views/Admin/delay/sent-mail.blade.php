@extends("Admin.Components.layout")
@section("content")
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
    @include("Admin.Components.profile")
    <div class="container">
        <div class="button-show-delay">
            <a href="#" type="button" class="btn-danger" data-toggle="modal" data-target="#list-dark">ブラックリスト</a>

            <form action="{{route("import-list",[$cus->id])}}" method="POST">
                @csrf
                @method("POST")
                <div class="modal fade" id="list-dark" tabindex="-1" role="dialog" aria-labelledby="list-dark"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>
                                    警告
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                本気ですか
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                <button type="submit" class="btn btn-primary">変更内容を保存</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <style>

        .button-show-delay {
            display: flex;
            flex-direction: row-reverse;
            margin-top: 2%;

        }

        .button-show-delay a {
            padding: 9px;
            background: #007bff;
            height: 45px;
            width: 15%;
            text-align: center;
            margin: auto 23px;
            border-radius: 5px;
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

        .profile-banking {
            margin-top: 10%;
        }
    </style>

@endsection
