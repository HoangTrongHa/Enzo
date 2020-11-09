@extends("Admin.Components.layout")
@section("content")
    <div class="row">
        <div class="col-sm-2">
          <span>デジタルマネーの欠如</span>
        </div>
        <div class="col-sm-3">
            <input type="number" class="form-control" id="inputtotal"
                   name="maxtotal" value="{{$cus->loancustomer}}" readonly style="text-align: end">
        </div>
        <div class="col-sm-3">
            <span style="font-size: 25px">円
</span>
        </div>
    </div>
@include("Admin.Components.profile")
    <div class="container">
        <div class="button-show-delay">
            <a href="{{route("list-dark")}}">戻る</a>
            <a href="#">ユーザーメモ</a>
            <a href="{{route("history",$cus->id)}}">lich su</a>
        </div>
    </div>



    <style>

        .button-show-delay {
            display: flex;
            flex-direction: row-reverse;
            margin-top: 2%;

        }

        .button-show-delay a {
            padding: 9px;
            background: #007bff;
            height: 45px;
            width: 15%;
            text-align: center;
            margin: auto 23px;
            border-radius: 5px;
            color: white;

        }

        .show-maxtotal {
            display: flex;
            align-items: flex-end;
        }

        .maxtotal-left {
            width: 30%;
            margin-right: 15%;
        }

        .maxtotal-right {
            width: 30%;
            text-align: end;
        }

        .maxtotal-right span {
            font-size: 30px;
        }

        .profile-banking {
            margin-top: 10%;
        }

    </style>

@endsection

