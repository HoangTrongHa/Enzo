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
            <span class="text-left">

                <a href="{{route("post-showbanking",[$cus->id])}}"
                   class="btn btn-space btn-primary update-profile">送金手続き</a>
            </span>
        <span class="text-left">
                <a href=" {{route("money-transfer",[$cus->id])}}" class="btn btn-space btn-primary update-profile">確認メール</a>
            </span>
        <span class="text-left">
                <a href="{{route("mail-refuse",[$cus->id])}}" class="btn btn-space btn-primary update-profile">非承認</a>
            </span>

        <span class="text-left">
                <button type="submit" class="btn btn-space btn-primary update-profile">History</button>
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
    </style>

@endsection
