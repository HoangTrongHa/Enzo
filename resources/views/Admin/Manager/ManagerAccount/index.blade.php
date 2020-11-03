@extends("Admin.Components.layout")
@section("content")

    <div class="card shadow mb-4">
        <h1 style="text-align: center">List Account </h1>
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="get" role="search" action="{{route("search")}}">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" name="key">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>


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
                            <th>{{$list->tenphienam}}</th>
                            <th>{{$list->tenchuhan}}</th>
                            <th>{{$list->sodienthoaididong}}</th>
                            <th>{{$list->checklogin}}</th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {!! $user->links() !!}
    <style>
        th{
            text-align: center;
        }
        .four .button-wrap {
            width: 100px;
            margin: 40px auto 0;
            cursor: pointer;
        }
        .four .button-bg {
            width: 100%;
            height: 100%;
            background-color: #bb2222;
            border-radius: 40px;
            padding: 3px;
            color:#fff;
            transition:all 0.2s ease;
        }
        .four .button-switch {
            position:relative;
            left:0px;
            width: 44px;
            height: 44px;
            border:solid 13px;
            background-color:#fff;
            border-radius: 36px;
            transition:all 0.2s ease;
        }
        .four .button-active .button-switch { left:50px; }
        .four .button-in,
        .four .button-out {
            position:absolute;
            transition:all 0.2s ease;
            padding-top:15px;
            font-size:0.8em;
            text-transform:uppercase;
            font-weight:bold;
        }
        .four .button-in { margin-left:76px; }
        .four .button-out { margin-left:18px; }
        .four .button-active .button-out {  }
        .four .button-active .button-in {  }
        .four .button-active .button-bg { background-color:#22bb22; }

    </style>

@endsection
