@extends("Admin.Components.layout")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div class="span-title">
                        <span class="span-header">
                           ユーザーの詳細
                        </span>
                </div>
                <div class="container emp-profile">
                    <table>
                        <tr>
                            <th>漢字名</th>
                            <td>{{$user->kanji_name}}</td>
                            <th>名前の音訳</th>
                            <td>{{$user->name_transliteration}}</td>
                            <th>男性</th>
                            <td>{{$user->male}}</td>
                        </tr>
                        <tr>
                            <th>家族構成</th>
                            <td>{{$user->family_structure}}</td>
                            <th>住所</th>
                            <td>{{$user->address}}</td>
                            <th>固定電話番号</th>
                            <td>{{$user->landline_number}}</td>
                        </tr>
                        <tr>
                            <th>電話番号</th>
                            <td>{{$user->phone_number}}</td>
                            <th>email</th>
                            <td>{{$user->email}}</td>
                            <th>就業年</th>
                            <td>{{$user->work_year}}</td>
                        </tr>
                        <tr>
                            <th>休憩</th>
                            <td>{{$user->work_break}}</td>
                            <th>プロテクター</th>
                            <td>{{$user->protector}}</td>
                            <th>保護者の住所</th>
                            <td>{{$user->guardian_address}}</td>
                        </tr>
                        <tr>
                            <th>電話番号ガード</th>
                            <td>{{$user->phone_number_guard}}</td>
                            <th>口座番号</th>
                            <td>{{$user->account_number}}</td>
                            <th>
                                口座名義人
                            </th>
                            <td>{{$user->account_holder}}</td>
                        </tr>
                    </table>
                </div>
                <div class="button-submit">
                    <button  onclick="window.location.href='{{route("history",[$user->id])}}'" class="show-history">歴史</button>
                    <button style="color: white" onclick="window.history.back()" class="back-show-banking">バック</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .button-submit{
            display: flex;
            justify-content: flex-end;
            width: 100%;
            margin-top: 50px;
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
        .span-title  .span-header{
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 25px;
        }
        table{
            margin-top: 50px;
            width: 100%;
        }
        table th{
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
        table td{
            margin:10px;
        }
    </style>



@endsection
