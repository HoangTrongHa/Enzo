@extends("Admin.Components.layout")
@section("content")
    <table>
        <tr>
            <th>有効期限</th>
            <td>
                @if($cus->payment_term ==0 || $cus->payment_term == null)
                    <input type="datetime-local" class="form-control" id="inputtotal" name="payment_term" required>
                @else
                    <input type="text" class="form-control" value="{{$cus->payment_term}}" readonly>
                @endif
            </td>

        </tr>
        <tr>
            <th>
                払込金額
            </th>
            <td>
                {{$cus->loanrefund}}
            </td>
            <th>
                払込金額
            </th>
            <td>
                {{$cus->loanrefund}}
            </td>
            <th>
                払込金額
            </th>
            <td>
                {{$end}}
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
    <div class="container">
        <div class="button-show-delay">
            <a href="#" type="button" class="accept-the-loan" data-toggle="modal" data-target="#exampleModalCenter">
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

            <a href="#" type="button" class="send-mail-refuse" data-toggle="modal" data-target="#sendMail">バランスがあります</a>
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

            <a href="#" type="button" class="import-líst-dark" data-toggle="modal" data-target="#list-dark">ブラックリスト</a>
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
            <a class="text-decoration-none" href="{{route("history",[$cus->id])}}">ローン履歴</a>
            <a class="back-show-delay" href="{{route("delay")}}">戻る</a>
        </div>
    </div>
    <style>

        .button-show-delay {
            display: flex;
            justify-content: flex-end;
            width: 100%;
            margin-top: 50px;

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

        .button-show-delay .accept-the-loan{
            background-color: #28a745;
            text-decoration: none;
        }
        .button-show-delay .accept-the-loan:hover{
            background-color:#1e9539 ;
        }
        .button-show-delay .send-mail-refuse{
            background-color: #ffc107;
            color: white;
            text-decoration: none;
        }
        .button-show-delay .send-mail-refuse:hover{
            background-color:#d1a00c ;
        }
        .button-show-delay .back-show-delay{
            background-color: #ffc107;
            color: white;
            text-decoration: none;
        }
        .button-show-delay .back-show-delay:hover{
            background-color:#d1a00c ;
        }

        .button-show-delay .import-líst-dark{
            background-color: red;
            color: white;
            text-decoration: none;
        }
        .button-show-delay .import-líst-dark:hover{
            background-color:#cb1023 ;
        }
        .maxtotal-right span {
            font-size: 30px;
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
