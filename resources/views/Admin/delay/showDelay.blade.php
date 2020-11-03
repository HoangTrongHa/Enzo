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
    <div class="container">
        <div class="button-show-delay">


            <a href="#">tra het</a>
            <a href="#">co so du</a>
            <a href="{{route("status-to-list",[$cus->id])}}">danh sach den</a>

        </div>
    </div>
    <div class="container">
        <div class="button-show-delay">

            <a href="#">lich su</a>
            <a href="#">ユーザーメモ</a>
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
