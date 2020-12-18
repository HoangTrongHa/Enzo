@extends("Admin.Components.layout")
@section("content")
    <div class="container emp-profile">
        <table>
            <tr>
                <th>希望売却額</th>
                <td>
                    <input type="text" class="form-control" id="inputtotal"
                           name="maxtotal" value="{{$cus->receive}}" readonly>
                </td>
                <th>お戻し期日</th>
                <td>
                    <input type="date" class="form-control" id="inputtotal"
                           name="maxtotal" value="{{$cus->payment_term}}" readonly>
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

        @if($cus->static ==5)
            <div class="button-submit">
                <a type="button" class="accept-the-loan" data-toggle="modal" data-target="#agree">
                           <span class="text-left">
                               送金手続き</span>
                </a>
                <form action="{{route("post-showbanking",[$cus->id])}}" method="POST">
                    @csrf
                    @method("POST")
                    <div class="modal fade" id="agree">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">転送確認</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>かんじ名</th>
                                            <th>払込金額</th>
                                            <th>支払条件</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{$cus->kanji_name}}</td>
                                            <td>{{$cus->receive}}</td>
                                            <td>{{$cus->payment_term}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <a href=" {{route("pirntfPdf",[$cus->id])}}" class="btn btn-primary">PDFで</a>
                                <button type="submit" class="btn btn-success">確認</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <a href=" {{route("money-transfer",[$cus->id])}}" class="send-mail-loan">確認メール</a>   </div>
            <div class="button-submit">
                <a class="send-mail-refuse" href="{{route("mail-refuse",[$cus->id])}}">非承認</a>
                <button  onclick="window.location.href='{{route("history",[$cus->id])}}'" class="show-history">歴史</button>
                <a href="{{route("index-banking")}}" class="back-show-banking">バック</a>
            </div>
        @elseif($cus->static ==6)
            <div class="button-submit">
                <button  onclick="window.location.href='{{route("history",[$cus->id])}}'" class="show-history">歴史</button>
                <a href="{{route("index-banking")}}" class="back-show-banking">バック</a>
            </div>
        @endif
    </div>

    <style>

        .button-submit{
            display: flex;
            justify-content: flex-end;
            width: 100%;
            margin-top: 50px;
        }
        .button-submit .accept-the-loan{
            padding: 15px 40px;
            font-size: 20px;
            background-color: #28a745;
            border: 1px solid transparent;
        }
        .button-submit .accept-the-loan:hover{
            background-color:#1e9539 ;
        }
        .button-submit .accept-the-loan span{
            color: white;
        }
        .button-submit .send-mail-loan{
            padding: 15px 40px;
            font-size: 20px;
            background-color: #1cc88a;
            border: 1px solid transparent;
            color: white;
            text-decoration: none;
            margin-left: 25px;
        }
        .button-submit .send-mail-loan:hover{
            background-color:#17a371 ;
        }
        .button-submit .send-mail-refuse{
            padding: 15px 40px;
            font-size: 20px;
            background-color: #ffc107;
            border: 1px solid transparent;
            color: white;
            text-decoration: none;
        }
        .button-submit .send-mail-refuse:hover{
            background-color:#d1a00c ;
        }
        .button-submit .back-show-banking{
            padding: 15px 40px;
            font-size: 20px;
            background-color: #007bff;
            border: 1px solid transparent;
            color: white;
            text-decoration: none;
            margin-left: 25px;
        }
        .button-submit .back-show-banking:hover{
            background-color:#0c59ac ;
        }
        .button-submit .show-history{
            padding: 15px 40px;
            font-size: 20px;
            background-color: #17a2b8;
            border: 1px solid transparent;
            color: white;
            text-decoration: none;
            margin-left: 25px;
        }
        .button-submit .show-history:hover{
            background-color:#128293 ;
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
        .modal-content{
            color: black;
        }
    </style>

@endsection
