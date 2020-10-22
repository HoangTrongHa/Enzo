@extends("Admin.Components.layout")
@section("content")
    <div class="form-row">

        <div class="form-group col-md-2">
            <label for="inputnumber">希望売却額</label>
        </div>
        <div class="form-group col-md-6">
            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->loancus}}"
                   autocomplete="off" class="form-control">
        </div>
    </div>
    <form action="{{route("loan.postcreateLoan",[$cus->id])}}" method="POST">
        @csrf
        @method("POST")
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputnumber">The Amount Borrowed</label>
                <input type="number" class="form-control" id="inputtotal" oninput="calculateAmount(this.value)"
                       name="maxtotal">
            </div>
            <div class="form-group col-md-2">
                <label for="inputCity">Bi tru</label>
                <input type="text" class="form-control" id="outputtotal" name="borrowing" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">To Pay</label>
                <input type="text" class="form-control" id="nhanlai" name="receive">
            </div>
        </div>
        <div class="form-group col-md-12">
            <label for="inputCity">Deadtime</label>
            <input type="datetime-local" class="form-control" id="inputtotal" name="payment_term">
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputUserName">氏名</label>
            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->tenchuhan}}"
                   placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">
        </div>
        <div class="form-group col-md-2">
            <label for="inputUserName">生年月日年齢</label>
            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->sinhnhat}}"
                   placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">
        </div>
            <div class="form-group col-md-2">
            <label for="inputUserName">生年月日年齢</label>
            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->sodienthoaididong}}"
                   placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">
        </div>


        </div>
        <div class="form-group">
            <label for="inputUserName">Email*</label>
            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->email}}"
                   placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">
        </div>

        <div class="button-submit">
            <span class="text-left">
                <button type="submit" class="btn btn-space btn-primary update-profile">Update</button>
            </span>
            <span class="text-left">
                <a type="submit" class="btn btn-space btn-primary update-profile">非承認</a>
            </span>
            <span class="text-left">
                <button type="submit" class="btn btn-space btn-primary update-profile">History</button>
            </span>
            <span class="text-left">
                <button type="submit" class="btn btn-space btn-primary update-profile">Back</button>
            </span>
        </div>
    </form>
    <style>

        .button-submit{
            width: 30%;
            float: right;
        }
        .button-submit .update-profile{
            width: 45%;
            margin: 2%;
            color: white;

        }
    </style>
    <script>
        function calculateAmount(val) {
            var tot_price = val * 0.25;
            $('#outputtotal').val(number_format(tot_price));
            var end = val - tot_price;
            var abc = document.getElementById("nhanlai")
            abc.value = number_format(end);
        }
    </script>
@endsection
