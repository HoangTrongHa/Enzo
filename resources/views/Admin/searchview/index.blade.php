@extends("Admin.Components.layout")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div class="header-table">
                    <div class="span-title">
                        <span class="title-table">
                            アカウントのリスト
                        </span>
                    </div>
                    <div class="search">
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="get"
                              role="search" action="{{route("search")}}">
                            <div class="input-group">
                                {{--                                <input type="search" class="form-control" name="key" value="{{session()->forget('key')}}"/>--}}
                                <input type="text" id="search"  name="key"   value="{{$session}}">
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>申請日</th>
                        <th>利用状況　</th>
                        <th>　名前</th>
                        <th>　名前</th>
                        <th>　　電話番号</th>
                        <th>　　最終利用日</th>
                        <th>　関数</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($search as $list)
                        <tr>
                            <th>{{$list -> created_at}}</th>
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

                            <th>{{$list->name_transliteration}}</th>
                            <th>{{$list->kanji_name}}</th>
                            <th>{{$list->phone_number}}</th>
                            <th>{{$list->checklogin}}</th>
                            <th>
                                <a href="{{route("findSearch",['id' => $list->id])}}"
                                   class="btn btn-primary">詳細</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        .search-profile{
            margin-bottom: 50px;
            display: flex;
            justify-content: space-evenly;
        }
        .search-profile input{
            width: 50%;
        }
        th{
            text-align: center;
        }
        .span-header{
            font-size: 30px;
            font-weight: 600;
        }
        .header-table{
            display: flex;
            justify-content: space-between;
        }
        .table-responsive .title-table {
            font-size: 30px;
            font-weight: bold;

        }
        #search{
            text-align: right;
            margin-right: 15px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#data tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection

