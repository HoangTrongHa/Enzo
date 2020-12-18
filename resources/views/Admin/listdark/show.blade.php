@extends("Admin.Components.layout")
@section("content")

    <div class="container emp-profile">
        <table>
            <tr>
                <th>
                    デジタルマネーの欠如
                </th>
                <td>
                    <input type="number" class="form-control" id="inputtotal"
                           name="maxtotal" value="{{$cus->loancustomer}}" readonly style="text-align: end">
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
    <div class="container box-button-list-dark">
        <a class="delete-customer" href="{{route("delete-customer",$cus->id)}}">顧客データを削除する</a>
        <a class="history-list-dark" href="{{route("history",$cus->id)}}">歴史</a>
        <a class="back-list-dark" href="{{route("list-dark")}}">戻る</a>
    </div>
    <style>
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
        .button-show-delay {
            display: flex;
            flex-direction: row-reverse;
            margin-top: 2%;

        }
        .box-button-list-dark{
            margin-top:50px ;
            display: flex;
            justify-content: flex-end;

        }
        .box-button-list-dark .delete-customer{
            padding: 15px 35px;
            background-color: red;
            color: white;
            margin-left: 30px;
            border: 0px solid transparent;
            text-decoration: none;
        }
        .box-button-list-dark .delete-customer:hover{
         background-color: #cb1023;
        }
        .box-button-list-dark .back-list-dark{
            padding: 15px 35px;
            background-color: #007bff;
            color: white;
            margin-left: 30px;
            border: 0px solid transparent;
            text-decoration: none;
        }
        .box-button-list-dark .back-list-dark:hover{
            background-color: #065ab5;
        }
        .box-button-list-dark .history-list-dark{
             padding: 15px 35px;
             background-color: #ffc107;
             color: white;
             margin-left: 30px;
             border: 0px solid transparent;
             text-decoration: none;
        }
        .box-button-list-dark .history-list-dark:hover{
         background-color: #d19e06;
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

