@extends("Admin.Components.layout")
@section("content")
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>かんじ名</th>
                    <th>状態</th>
                    <th>詳細</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customer as $list)
                    <tr>
                        <th>{{$list -> kanji_name}}</th>
                        <th>

                            @if($list ->static ==1)
                                <span class="text-danger">承認待ち</span>
                            @elseif($list ->static ==2)
                                <span class="text-primary">借りることができます</span>
                            @elseif($list->static ==3)
                                <span class="text-info">貸付金額待ち</span>
                            @elseif($list->static == 4)
                                <span class="text-primary">確認済み</span>
                            @elseif($list->static == 5)
                                <span class="text-primary">送金を待っています</span>
                            @elseif($list->static == 6)
                                <span class="text-success">送金を待っています</span>
                            @elseif($list->static == 7)
                                <span class="text-warning">支払い日が来ました</span>
                            @elseif($list->static == 8)
                                <span class="text-warning">メールを送信</span>
                            @elseif($list->static == 9)
                                <span class="text-danger">ブラックリストン</span>
                            @endif
                        </th>

                        <th>
                            <a href="{{route("showgrantRightAdmin",[$list->id])}}" class="btn btn-success">Change</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <style>
        th{
            text-align: center;
        }


    </style>
@endsection
