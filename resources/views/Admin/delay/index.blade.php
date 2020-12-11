@extends("Admin.Components.layout")
@section("content")
    <span class="span-header">遅延リスト</span>
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

                            @if($item ->static ==1)
                                <span class="text-danger">承認待ち</span>
                            @elseif($item ->static ==2)
                                <span class="text-primary">借りることができます</span>
                            @elseif($item->static ==3)
                                <span class="text-info">貸付金額待ち</span>
                            @elseif($item->static == 4)
                                <span class="text-primary">確認済み</span>
                            @elseif($item->static == 5)
                                <span class="text-primary">送金を待っています</span>
                            @elseif($item->static == 6)
                                <span class="text-success">送金を待っています</span>
                            @elseif($item->static == 7)
                                <span class="text-warning">支払い日が来ました</span>
                            @elseif($item->static == 8)
                                <span class="text-warning">メールを送信</span>
                            @elseif($item->static == 9)
                                <span class="text-danger">ブラックリストン</span>
                            @endif
                        </th>
                        <th>{{$item->name_transliteration}}</th>
                        <th>{{$item->kanji_name}}</th>
                        <th>{{$item->phone_number}}</th>
                        <th>{{$item->checklogin}}</th>
                        <th>
                            <a href="{{route("show-delay",['id' => $item->id])}}"
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
        確認メールを送信しました    </h3>
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
                @foreach($sent as $item)
                    <tr>
                        <th>{{$item -> created_at}}</th>
                        <th>
                            <div class="four">
                                    <div class="button-wrap button-active">
                                        <div class="button-bg">
                                            <div class="button-out"></div>
                                            <div class="button-in"></div>
                                            <div class="button-switch"></div>
                                        </div>
                                    </div>
                            </div>
                        </th>
                        <th>{{$item->name_transliteration}}</th>
                        <th>{{$item->kanji_name}}</th>
                        <th>{{$item->phone_number}}</th>
                        <th>{{$item->checklogin}}</th>
                        <th>
                            <a href="{{route("showSentMail",['id' => $item->id])}}"
                               class="btn btn-danger">ブラックリスト
                            </a>

                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {!! $sent->links() !!}
    <style>
        h3{
            font-weight: 600;
        }
        th {
            text-align: center;
        }

        .four .button-wrap {
            width: 100px;
            margin: 0 auto;
            cursor: pointer;
        }

        .four .button-bg {
            width: 100%;
            height: 100%;
            background-color: #bb2222;
            border-radius: 40px;
            padding: 3px;
            color: #fff;
            transition: all 0.2s ease;
        }

        .four .button-switch {
            position: relative;
            left: 0px;
            width: 44px;
            height: 44px;
            border: solid 13px;
            background-color: #fff;
            border-radius: 36px;
            transition: all 0.2s ease;
        }

        .four .button-active .button-switch {
            left: 50px;
        }

        .four .button-in,
        .four .button-out {
            position: absolute;
            transition: all 0.2s ease;
            padding-top: 15px;
            font-size: 0.8em;
            text-transform: uppercase;
            font-weight: bold;
        }

        .four .button-in {
            margin-left: 76px;
        }

        .four .button-out {
            margin-left: 18px;
        }

        .four .button-active .button-out {
        }

        .four .button-active .button-in {
        }

        .four .button-active .button-bg {
            background-color: #22bb22;
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
