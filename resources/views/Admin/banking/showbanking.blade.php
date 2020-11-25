@extends("Admin.Components.layout")
@section("content")
    <div class="container">
        <div class="show-maxtotal">
            <div class="maxtotal-left">
                <span style="font-size: 40px;">希望売却額</span>
            </div>
            <div class="maxtotal-right" style="float: right">
                <input type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->receive}}"
                       autocomplete="off" class="form-control" style="text-align: right;font-size: 30px;height: 100%">
            </div>
            <span style="margin-left: 2%">円</span>
        </div>

        <div class="show-maxtotal">
            <div class="maxtotal-left">
                <span style="font-size: 40px;">お戻し期日　</span>
            </div>
            <div class="maxtotal-right">
                <span> {{$cus->payment_term}}
                </span>
            </div>

        </div>
    </div>
    @include("Admin.Components.profile")
    <div class="button-submit">

                <a type="button" class="btn btn-primary update-profile" data-toggle="modal" data-target="#agree">
                           <span class="text-left">
                               送金手続き</span>
                </a>
        <form action="{{route("post-showbanking",[$cus->id])}}" method="POST">
            @csrf
            @method("POST")
        <div class="modal fade" id="agree">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">転送確認</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>かんじ名</th>
                                <th>払込金額</th>
                                <th>支払条件</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$cus->kanji_name}}</td>
                                <td>{{$cus->receive}}</td>
                                <td>{{$cus->payment_term}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">やめる</button>
                        <button type="submit" class="btn btn-primary">確認</button>
                    </div>
                </div>
            </div>
        </div>
        </form>


        <span class="text-left">
                <a href=" {{route("money-transfer",[$cus->id])}}"
                   class="btn btn-space btn-primary update-profile">確認メール</a>
            </span>
        <span class="text-left">
                <a href="{{route("mail-refuse",[$cus->id])}}" class="btn btn-space btn-primary update-profile">非承認</a>
            </span>

        <span class="text-left">
                <button  onclick="window.location.href='{{route("history",[$cus->id])}}'" class="btn btn-space btn-primary update-profile">歴史</button>
            </span>
        <span class="text-left">
                <a href="{{route("index-banking")}}" class="btn btn-space btn-primary update-profile">Back</a>
            </span>
    </div>


    <style>

        .button-submit {
            width: 30%;
            float: right;
            color: white;
        }


        .button-submit .update-profile {
            width: 45%;
            margin: 2%;
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
        .modal-content{
            color: black;
        }
    </style>

@endsection
