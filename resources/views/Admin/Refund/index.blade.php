@extends("Admin.Components.layout")
@section("content")

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="span-title">
                        <span class="span-header">
                           支払いを待っています
                        </span>
                    </div>
                    <thead>
                    <tr>
                        <th>支払日
                        </th>
                        <th>利用状況　</th>
                        <th>名前の音訳</th>
                        <th>名前</th>
                        <th>電話番号</th>
                        <th>最終利用日</th>
                        <th>関数</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cus as $cus)
                        <tr>
                            <th>{{$cus -> payment_term}}</th>
                            <th>

                                @if($cus ->static ==1)
                                    <span class="text-danger">承認待ち</span>
                                @elseif($cus ->static ==2)
                                    <span class="text-primary">借りることができます</span>
                                @elseif($cus->static ==3)
                                    <span class="text-info">貸付金額待ち</span>
                                @elseif($cus->static == 4)
                                    <span class="text-primary">確認済み</span>
                                @elseif($cus->static == 5)
                                    <span class="text-primary">送金を待っています</span>
                                @elseif($cus->static == 6)
                                    <span class="text-success">送金を待っています</span>
                                @elseif($cus->static == 7)
                                    <span class="text-warning">支払い日が来ました</span>
                                @elseif($cus->static == 8)
                                    <span class="text-warning">メールを送信</span>
                                @elseif($cus->static == 9)
                                    <span class="text-danger">ブラックリストン</span>
                                @endif
                            </th>
                            <th>{{$cus->name_transliteration}}</th>
                            <th>{{$cus->kanji_name}}</th>
                            <th>{{$cus->phone_number}}</th>
                            <th>{{$cus->checklogin}}</th>
                            <th>
                                <a href="{{route("show-refund",['id' => $cus->id])}}"
                                   class="btn btn-success">詳細</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
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
        .span-header{
            font-size: 30px;
            font-weight: 600;
        }
        .card-body{
            margin-top: 20px;
        }
    </style>
@endsection
