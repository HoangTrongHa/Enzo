@extends("Admin.Components.layout")
@section("content")

    <span class="span-header">送金登録一覧</span>
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>申請日</th>
                        <th>利用状況　</th>
                        <th>　名前</th>
                        <th>　名前</th>
                        <th>　　電話番号</th>
                        <th>　　最終利用日</th>
                        <th>関数</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $list)
                        <tr>
                            <th>{{$list -> created_at}}</th>
                            <th>
                                <div class="four">
                                    @if($list ->static ==1)
                                        <div class="button-wrap">
                                            <div class="button-bg">
                                                <div class="button-out"></div>
                                                <div class="button-in"></div>
                                                <div class="button-switch"></div>
                                            </div>
                                        </div>
                                    @else ($list ->static ==2)
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
                            <th>{{$list->name_transliteration}}</th>
                            <th>{{$list->kanji_name}}</th>
                            <th>{{$list->phone_number}}</th>
                            <th>{{$list->checklogin}}</th>
                            <th>
                                <a href="{{route("loan.createLoan",[$list->id])}}"
                                   class="btn btn-success">変化する</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {!! $user->links() !!}
    <span class="span-header">ローン受理</span>
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>申請日</th>
                        <th>利用状況　</th>
                        <th>　名前</th>
                        <th>　名前</th>
                        <th>　　電話番号</th>
                        <th>　　最終利用日</th>
                        <th>関数</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $list)
                        <tr>
                            <th>{{$list -> created_at}}</th>
                            <th>
                                <div class="four">
                                    @if($list ->static ==1)
                                        <div class="button-wrap">
                                            <div class="button-bg">
                                                <div class="button-out"></div>
                                                <div class="button-in"></div>
                                                <div class="button-switch"></div>
                                            </div>
                                        </div>
                                    @else ($list ->static ==2)
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
                            <th>{{$list->name_transliteration}}</th>
                            <th>{{$list->kanji_name}}</th>
                            <th>{{$list->phone_number}}</th>
                            <th>{{$list->checklogin}}</th>
                            <th>

                                    <a href="{{route("loan.createLoan",[$list->id])}}" class="btn btn-warning">小切手</a>

                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {!! $user->links() !!}
    <style>
        .span-header{
            font-size: 30px;
            font-weight: 600;
        }
        .card{
            margin-top: 20px;
        }
        th {
            text-align: center;
        }

        .four .button-wrap {
            width: 100px;
            cursor: pointer;
            margin: 0 auto;
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

    </style>

@endsection
