@extends("Admin.Components.layout")
@section("content")
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputnumber">デジタルマネーの欠如</label>
            <input type="number" class="form-control" id="inputtotal"
                   name="maxtotal" value="{{$cus->loancustomer}}" readonly>
        </div>
        <div class="form-group col-md-4">
            <label for="inputnumber">払込金額
            </label>
            <input type="number" class="form-control" id="inputtotal"
                   name="maxtotal" value="{{$cus->loanrefund}}" readonly>
        </div>
        <div class="form-group col-md-4">
            <label for="inputnumber">余剰</label>
            <input type="number" class="form-control" id="inputtotal"
                   value="{{$end}}" readonly>
        </div>

        <div class="form-group col-md-12">
            <label for="inputCity">Deadtime</label>

            @if($cus->payment_term ==0 || $cus->payment_term == null)
                <input type="datetime-local" class="form-control" id="inputtotal" name="payment_term" required>
            @else
                <input type="text" class="form-control" value="{{$cus->payment_term}}" readonly>
            @endif

        </div>
    </div>
    @include("Admin.Components.profile")
    <div class="container">
        <div class="button-show-delay">
            <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                精算
            </a>

            <form action="{{route("change-status-history",[$cus->id])}}" method="POST">
                @csrf
                @method("POST")
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="history"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
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

            <a href="#" type="button" class="btn-warning" data-toggle="modal" data-target="#sendMail">バランスがあります</a>
            <form action="{{route("send-Mail",[$cus->id])}}" method="POST">
                @csrf
                @method("POST")
                <div class="modal fade" id="sendMail" tabindex="-1" role="dialog" aria-labelledby="sendMail"
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
    <div class="container">
        <div class="button-show-delay">
            <a href="{{route("history",[$cus->id])}}">ローン履歴</a>
            <a href="{{route("delay")}}">戻る</a>

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
