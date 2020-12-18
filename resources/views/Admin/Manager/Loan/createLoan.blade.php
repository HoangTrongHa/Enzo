@extends("Admin.Components.layout")
@section("content")
    <div class="container emp-profile-1">
        @foreach($cus->upload as $list)
            <img class="avatar" src="{{Storage::URL($list->avatar)}}">
        @endforeach
    </div>
    <div class="emp-profile">
        <div class="row">
            <div class="col-sm">
                <table>
                    <tr>
                        <th>漢字名</th>
                        <td>{{$cus->kanji_name}}</td>
                        <th>名前の音訳</th>
                        <td>{{$cus->name_transliteration}}</td>
                    </tr>
                    <tr>
                        <th>男性</th>
                        <td>{{$cus->male}}</td>
                        <th>固定電話番号</th>
                        <td>{{$cus->landline_number}}</td>
                    </tr>
                    <tr>
                        <th>家族構成</th>
                        <td>{{$cus->family_structure}}</td>
                        <th>住所</th>
                        <td>{{$cus->address}}</td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>{{$cus->phone_number}}</td>
                        <th>email</th>
                        <td>{{$cus->email}}</td>

                    </tr>
                    <tr>
                        <th>就業年</th>
                        <td>{{$cus->work_year}}</td>
                        <th>保護者の住所</th>
                        <td>{{$cus->guardian_address}}</td>
                    </tr>
                    <tr>
                        <th>休憩</th>
                        <td>{{$cus->work_break}}</td>
                        <th>プロテクター</th>
                        <td>{{$cus->protector}}</td>

                    </tr>
                    <tr>
                        <th>電話番号ガード</th>
                        <td>{{$cus->phone_number_guard}}</td>
                        <th>口座番号</th>
                        <td>{{$cus->account_number}}</td>

                    </tr>
                </table>
            </div>
            <div class="col-sm">
                <form action="{{route("loan.postcreateLoan",[$cus->id])}}" method="POST">
                    @csrf
                    @method("POST")
                    <table>
                        @if($cus->static == 3)
                            <tr>
                                <th>借入額</th>
                                <td>
                                    <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change"
                                           value="{{number_format($cus->loancus)}}"
                                           autocomplete="off" class="form-control">
                                </td>
                                <th>
                                    デッドタイム
                                </th>
                                <td>
                                    <input type="date" class="form-control" id="inputtotal" name="payment_term"
                                           required>
                                </td>
                            </tr>
                            <tr>
                                <th>借入額</th>
                                <td>
                                    <input type="number" class="form-control" id="inputtotal"
                                           oninput="calculateAmount(this.value)"
                                           name="maxtotal" required min="10" max="{{$cus->loancus}}">
                                </td>
                                <th>適用される金利</th>
                                <td>
                                    <select id="percent" name="cars">
                                        <option disabled selected value> 金利 </option>
                                        <option value="0.1">10%</option>
                                        <option value="0.2">20%</option>
                                        <option value="0.3">30%</option>
                                        <option value="0.4">40%</option>
                                    </select>
                                </td>

                            </tr>
                            <tr>
                                <th>差し引かれる</th>
                                <td>
                                    <input type="text" class="form-control" id="outputtotal" name="borrowing" readonly>
                                </td>
                                <th>支払うには</th>
                                <td>
                                    <input type="text" class="form-control" id="nhanlai" name="receive" readonly></td>
                            </tr>
                        @elseif($cus->static ==4)
                            <tr>
                                <th>借入額</th>
                                <td>
                                    <input type="number" class="form-control" id="inputtotal"
                                           oninput="calculateAmount(this.value)"
                                           name="maxtotal" value="{{$cus->maxtotal}}" readonly>
                                </td>
                                <th>差し引かれる</th>
                                <td>
                                    <input type="text" class="form-control" id="inputtotal" value="{{$cus->borrowing}}"
                                           readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>支払うには</th>
                                <td>
                                    <input type="text" class="form-control" id="nhanlai" name="receive"
                                           value="{{$cus->receive}}" readonly></td>
                                <th>支払うには</th>
                                <td>
                                    <input type="date" class="form-control" id="inputtotal" name="payment_term"
                                           value="{{$cus->payment_term}}" readonly>
                                </td>
                            </tr>
                        @endif
                    </table>
                    <div class="container emp-profile">
                    </div>
                    @if($cus->static == 4)
                        <div class="button-submit">
                            <a href="{{route("history",[$cus->id])}}" class="update-profile">歴史</a>
                            <button onclick="window.history.back()" class="update-profile back-loan">
                                戻って
                            </button>
                        </div>
                    @else
                        <div class="button-submit">
                            <button type="submit" class="update-profile">受け入れる</button>
                            <a style="color: white" href="{{route("loan.delete",[$cus->id])}}"
                               class="update-profile refuse-loan">非承認</a>
                            <button onclick="window.history.back()" class="update-profile back-loan">
                                戻って
                            </button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <style>
        #percent {
            width: 50%;
            font-size: 1rem;
            margin: 0 auto;
        }

        .emp-profile-1 {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .button-submit {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            margin-top: 30px;
        }

        .button-submit .update-profile {
            padding: 15px 35px;
            background-color: #1cc88a;
            color: white;
            margin-left: 30px;
            border: 0px solid transparent;
            text-decoration: none;
        }
        .button-submit .update-profile:hover{
            background:  #17a371;
        }

        .button-submit .refuse-loan {
            padding: 15px 35px;
            background-color: red;
            color: white;
            margin-left: 30px;
            border: 0px solid transparent;
            text-decoration: none;
        }
        .button-submit .refuse-loan:hover{
            background-color: #cb1023;
        }
        .button-submit .back-loan {
            padding: 15px 35px;
            background-color: #ffc107;
            color: white;
            margin-left: 30px;
            border: 0px solid transparent;
            text-decoration: none;
        }
        .button-submit .back-loan:hover{
            background-color: #d19e06;
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
    <script>
        function calculateAmount(val) {
            $(document).ready(function () {
                $("#percent").change(function () {
                    var percent = $(this).children("option:selected").val();
                    var tot_price = val * percent;
                    $('#outputtotal').val(number_format(tot_price));
                    var end = val - tot_price;
                    var abc = document.getElementById("nhanlai")
                    abc.value = number_format(end);
                });
            });
        }
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
