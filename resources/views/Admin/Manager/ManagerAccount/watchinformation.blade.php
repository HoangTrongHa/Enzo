@extends("Admin.Components.layout")
@section("content")
    <div class="container emp-profile">
        @foreach($user->upload as $list)
            <img class="avatar" src="{{Storage::URL($list->avatar)}}">
        @endforeach
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

    <style>
        .emp-profile{
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
        }
        .emp-profile .infor-customer{
            width: 80%;
            background-color: #dedfe1;
        }
        .avatar {
            border-radius: 55%;
            margin: 0 auto;
            width: 135px;
            height: 135px;
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
