@extends("Admin.Components.layout")
@section("content")
    <div class="container profile-tranfer">
        <table>
            <tr>
                <th>お金を払わなければならない</th>
                <td>
                    <input id="max-total" type="text" readonly="true" data-parsley-trigger="change"
                           value="{{$cus->loancustomer}}"
                           autocomplete="off" class="form-control"
                           style="text-align: right;font-size: 30px;height: 100%">
                </td>
            <tr>

                <th>コンプリート</th>
                <td>
                    <input id="loan-cus" type="text" readonly="true" data-parsley-trigger="change"
                           value="{{$cus->loanrefund}}"
                           autocomplete="off" class="form-control"
                           style="text-align: right;font-size: 30px;height: 100%">
                </td>
            </tr>
            <tr>

                <th>
                    行方不明
                </th>
                <td>
                    <input value="{{number_format($end)}}" name="end" type="text" readonly="true"
                           data-parsley-trigger="change"
                           autocomplete="off" class="form-control"
                           style="text-align: right;font-size: 30px;height: 100%">
                </td>
            </tr>
        </table>
    </div>

    @include("Admin.Components.profile")
    <div class="container">
        <div class="button-submit">
            <a type="button" class="accept-the-loan" data-toggle="modal" data-target="#払い戻し">
                <span class="text-left">完済</span>
            </a>
            <button onclick="window.location.href='{{route("history",[$cus->id])}}'" class="show-history">歴史</button>
            <a href="{{route("refund")}}" class="back-show-banking">戻る</a>
        </div>
    </div>
    <form action="{{route("change-status-history",[$cus->id])}}" method="POST">
        @csrf
        @method("POST")
        <div class="modal fade" id="払い戻し" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span>確認完了</span>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="2" name="status">
                        <input type="hidden" value="0" name="reset">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <style>
        .button-submit {
            display: flex;
            justify-content: flex-end;
            width: 100%;
            margin-top: 50px;
            margin-bottom: 100px;
        }

        .button-submit .accept-the-loan {
            padding: 15px 40px;
            font-size: 20px;
            background-color: #28a745;
            border: 1px solid transparent;
        }

        .button-submit .accept-the-loan:hover {
            background-color: #1e9539;
        }

        .button-submit .accept-the-loan span {
            color: white;
        }

        .button-submit .back-show-banking {
            padding: 15px 40px;
            font-size: 20px;
            background-color: #007bff;
            border: 1px solid transparent;
            color: white;
            text-decoration: none;
            margin-left: 25px;
        }

        .button-submit .back-show-banking:hover {
            background-color: #0c59ac;
        }

        .button-submit .show-history {
            padding: 15px 40px;
            font-size: 20px;
            background-color: #17a2b8;
            border: 1px solid transparent;
            color: white;
            text-decoration: none;
            margin-left: 25px;
        }

        .button-submit .show-history:hover {
            background-color: #128293;
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
