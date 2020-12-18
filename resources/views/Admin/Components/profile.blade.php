<div class="container emp-profile">

    <table>
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

<style>

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
