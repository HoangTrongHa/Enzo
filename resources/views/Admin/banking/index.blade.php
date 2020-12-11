@extends("Admin.Components.layout")
@section("content")
    <span class="span-header">転送を待っています</span>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>申請日</th>
                    <th>利用状況　</th>
                    <th>名前</th>
                    <th>名前</th>
                    <th>電話番号</th>
                    <th>最終利用日</th>
                    <th>関数</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cus as $item)
                    <tr>
                        <th>{{$item -> created_at}}</th>
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

                        <th>{{$item->name_transliteration}}</th>
                        <th>{{$item->kanji_name}}</th>
                        <th>{{$item->phone_number}}</th>
                        <th>{{$item->checklogin}}</th>
                        <th>
                            <a href="{{route("show-banking",['id' => $item->id])}}"
                               class="btn btn-success">詳細</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    {!! $cus->links() !!}
    <h3>
        送金リスト
    </h3>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>申請日</th>
                    <th>利用状況　</th>
                    <th>名前</th>
                    <th>名前</th>
                    <th>電話番号</th>
                    <th>最終利用日</th>
                    <th>関数</th>
                </tr>
                </thead>
                <tbody>
                @foreach($check as $item)
                    <tr>
                        <th>{{$item -> created_at}}</th>
                        <th>
                            <div class="four">
                                @if($item->static ==1)
                                    <div class="button-wrap">
                                        <div class="button-bg">
                                            <div class="button-out"></div>
                                            <div class="button-in"></div>
                                            <div class="button-switch"></div>
                                        </div>
                                    </div>
                                @else ($item->static ==2)
                                    <div class="button-wrap button-active">
                                        <div class="button-bg">
                                            <div class="button-out"></div>
                                            <div class="button-in"></div>
                                            <div class="button-switch"></div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </th>
                        <th>{{$item->name_transliteration}}</th>
                        <th>{{$item->kanji_name}}</th>
                        <th>{{$item->phone_number}}</th>
                        <th>{{$item->checklogin}}</th>
                        <th>
                            <a href="{{route("show-banking",['id' => $item->id])}}"
                               class="btn btn-warning">詳細</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {!! $check->links() !!}
    <style>
        h3{
            font-weight: 600;
        }
        th {
            text-align: center;
        }
        .span-header{
            font-size: 30px;
            font-weight: 600;
        }
        .card-body{
            margin-top: 20px;
        }
    </style>
@endsection
