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
                            <a href="{{route("show-banking",['id' => $item->id])}}"
                               class="btn btn-success">詳細</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                探す
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">何を探していますか ？</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="get"
                                                  role="search" action="{{route("search")}}">
                                                <div class="input-group">
                                                    <input type="search" class="form-control" name="key" value="{{session()->forget('key')}}"/>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">バック</button>
                                            <button type="button" class="btn btn-primary">探す</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <a href="{{route("show-banking",['id' => $item->id])}}"
                               class="btn btn-warning">詳細</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                探す
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">何を探していますか ？</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="get"
                                                  role="search" action="{{route("search")}}">
                                                <div class="input-group">
                                                    <input type="search" class="form-control" name="key" value="{{session()->forget('key')}}"/>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">バック</button>
                                            <button type="button" class="btn btn-primary">探す</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
