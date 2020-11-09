@extends("Admin.Components.layout")
@section("content")
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>コード注文</th>
            <th scope="col">ローン</th>
            <th scope="col">もらった分量
            </th>
            <th scope="col">だから日</th>
            <th scope="col">返金状況
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($his as $list)
        <tr>
            <th scope="row">{{$list->id}}</th>
            <td>{{$list->maxtotal}}</td>
            <td>{{$list->receive}}</td>
            <td>{{$list->payment_term}}</td>
            @if($list->status == 1)
                <td>まだ支払われていません</td>
            @else
                <td>完済
                </td>
            @endif


        </tr>
        @endforeach
        </tbody>
    </table>

    </table>
@endsection
