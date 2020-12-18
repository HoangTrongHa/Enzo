@extends("Admin.Components.layout")
@section("content")
    <div class="container emp-profile">
        <table>
            <tr>
                <th>漢字名</th>
                <td>{{$customer->kanji_name}}</td>
                <th>名前の音訳</th>
                <td>{{$customer->name_transliteration}}</td>
                <th>男性</th>
                <td>{{$customer->male}}</td>
            </tr>
            <tr>
                <th>家族構成</th>
                <td>{{$customer->family_structure}}</td>
                <th>住所</th>
                <td>{{$customer->address}}</td>
                <th>固定電話番号</th>
                <td>{{$customer->landline_number}}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{$customer->phone_number}}</td>
                <th>email</th>
                <td>{{$customer->email}}</td>
                <th>就業年</th>
                <td>{{$customer->work_year}}</td>
            </tr>
            <tr>
                <th>休憩</th>
                <td>{{$customer->work_break}}</td>
                <th>プロテクター</th>
                <td>{{$customer->protector}}</td>
                <th>保護者の住所</th>
                <td>{{$customer->guardian_address}}</td>
            </tr>
            <tr>
                <th>電話番号ガード</th>
                <td>{{$customer->phone_number_guard}}</td>
                <th>口座番号</th>
                <td>{{$customer->account_number}}</td>
                <th>
                    口座名義人
                </th>
                <td>{{$customer->account_holder}}</td>
            </tr>
        </table>
    </div>
    <style>
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
{{--    <form action="{{route("PostgrantRight",[$customer->id])}}" id="basicform" method="POST">--}}
{{--        @csrf--}}
{{--        @method("POST")--}}
{{--        <div class="form-group">--}}
{{--            <label for="inputUserName">Email*</label>--}}
{{--            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$customer->email}}"--}}
{{--                   placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">--}}

{{--        </div>--}}
{{--        <div class="button-submit">--}}
{{--            <span class="text-left">--}}
{{--                <button type="submit" class="btn btn-space btn-primary update-profile">Update</button>--}}
{{--            </span>--}}
{{--            <span class="text-left">--}}
{{--                <a type="submit" class="btn btn-space btn-primary update-profile">非承認</a>--}}
{{--            </span>--}}
{{--            <span class="text-left">--}}
{{--                <button type="submit" class="btn btn-space btn-primary update-profile">ユーザーメモ ban ghi nho nguoi dung</button>--}}
{{--            </span>--}}
{{--            <span class="text-left">--}}
{{--                <button type="submit" class="btn btn-space btn-primary update-profile">Back</button>--}}
{{--            </span>--}}
{{--        </div>--}}

{{--    </form>--}}



@endsection
