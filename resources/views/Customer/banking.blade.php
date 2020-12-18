@extends("Customer.Components.layout")
@section("content")
    <form action="{{route("customer-post-banking",[$cus->id])}}" method="POST">
        @csrf
        @method("POST")
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>支払期限</h3>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr class="table-active">
                            <th scope="col">Eメール</th>
                            <th scope="col">かんじ名
                            </th>
                            <th scope="col">お誕生日
                            </th>
                            <th scope="col">電話番号
                            </th>
                            <th scope="col">ブラックメール</th>
                            <th scope="col">金額を再入力してください
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$cus->email}}</td>
                            <td>{{$cus->tenchuhan}}</td>
                            <td>{{$cus->sinhnhat}}</td>
                            <td>{{$cus->sodienthoaididong}}</td>
                            <td>
                                <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{number_format($cus->loancustomer)}}" autocomplete="off" class="form-control">
                            </td>
                            <td>
                                <input id="inputipt" type="number" data-parsley-trigger="change" name="loanrefund" class="form-control" required>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>

            </div>
            <button class="btn-primary" style="    border-radius: 15px;
    width: 20VW;
    height: 10VH" type="submit">上記金額の振込確認
            </button>
        </div>

    </form>

@endsection
