@extends("Admin.Components.layout")
@section("content")

  <div class="card shadow mb-4">
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <div class="span-title">
                        <span class="span-header">
                           写真認証リスト
                        </span>
                  </div>
                  <thead>
                  <tr>
                      <th>申請日</th>
                      <th>利用状況　</th>
                      <th>名前の音訳</th>
                      <th>名前</th>
                      <th>電話番号</th>
                      <th>最終利用日</th>
                      <th>関数</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($cus as $list)
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
                              <a href="{{route("showgrantRightAdmin",['id' => $list->id])}}" class="btn btn-success">変化する</a>
                          </th>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
    {!! $cus->links() !!}
    {!! Toastr::message() !!}
    <style>
        .span-header{
            font-size: 30px;
            font-weight: 600;
        }
        th{
            text-align: center;
        }

    </style>
@endsection
