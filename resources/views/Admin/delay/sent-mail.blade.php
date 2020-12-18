@extends("Admin.Components.layout")
@section("content")
    <div class="emp-profile">
        <table>
            <tr>
                <th>
                    お金を払わなければならない
                </th>
                <td>
                    <input id="max-total" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->loancustomer}}"
                           autocomplete="off" class="form-control" style="text-align: right;font-size: 30px;height: 100%">
                </td>
                <th>
                    コンプリート
                </th>
                <td>
                    <input id="loan-cus" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->loanrefund}}"
                           autocomplete="off" class="form-control" style="text-align: right;font-size: 30px;height: 100%">
                </td>
                <th>
                    行方不明

                </th>
                <td>
                    <input value="{{number_format("$end")}}" name="end" type="text" readonly="true" data-parsley-trigger="change"
                           autocomplete="off" class="form-control" style="text-align: right;font-size: 30px;height: 100%">
                </td>
            </tr>
            <tr>
                <th>漢字名</th>
                <td>{{$cus->kanji_name}}</td>
                <th>名前の音訳</th>
                <td>{{$cus->name_transliteration}}</td>
                <th>男性</th>
                <td>{{$cus->male}}</td>
            </tr>
            <tr>
                <th>家族構成</th>
                <td>{{$cus->family_structure}}</td>
                <th>住所</th>
                <td>{{$cus->address}}</td>
                <th>固定電話番号</th>
                <td>{{$cus->number_of_residents}}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{$cus->phone_number}}</td>
                <th>email</th>
                <td>{{$cus->email}}</td>
                <th>就業年</th>
                <td>{{$cus->head_office_address}}</td>
            </tr>
            <tr>
                <th>休憩</th>
                <td>{{$cus->work_break}}</td>
                <th>プロテクター</th>
                <td>{{$cus->protector}}</td>
                <th>保護者の住所</th>
                <td>{{$cus->guardian_address}}</td>
            </tr>
            <tr>
                <th>電話番号ガード</th>
                <td>{{$cus->phone_number_guard}}</td>
                <th>口座番号</th>
                <td>{{$cus->account_type}}</td>
                <th>
                    口座名義人
                </th>
                <td>{{$cus->account_holder}}</td>
            </tr>
        </table>
    </div>
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
            background: red;
            height: 45px;
            width: 15%;
            text-align: center;
            margin: auto 23px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
        }
        .button-show-delay a:hover{
            background-color: #dc3545;
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
        .button-submit {
            width: 30%;
            float: right;
        }

        .button-submit .update-profile {
            width: 45%;
            margin: 2%;
            color: white;

        }

        .emp-profile {
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
            margin: 75px auto;
        }

        .emp-profile .infor-customer {
            width: 80%;
            background-color: #dedfe1;
        }

        .avatar {
            border-radius: 55%;
            margin: 0 auto;
            width: 135px;
            height: 135px;
        }

        table {
            margin-top: 50px;
            width: 100%;
        }

        table th {
            background: #007bff;
            color: #b9dcf3;
        }

        table td, table th {
            border: 1px solid #ddd;
            padding: 20px;
        }

        table th:hover {
            color: #ffffff;
        }

        table td:hover {
            background-color: #ddd;
        }

        table td {
            margin: 10px;
        }
    </style>

@endsection
