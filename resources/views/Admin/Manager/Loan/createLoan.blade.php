@extends("Admin.Components.layout")
@section("content")
    <div class="form-row">

        <div class="form-group col-md-2">
            <label for="inputnumber">希望売却額</label>
        </div>
        <div class="form-group col-md-6">
            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{number_format($cus->loancus)}}"
                   autocomplete="off" class="form-control">
        </div>
    </div>
    <form action="{{route("loan.postcreateLoan",[$cus->id])}}" method="POST">
        @csrf
        @method("POST")
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputnumber">The Amount Borrowed</label>
                @if($cus->maxtotal == 0 || $cus->maxtotal == null)
                    <input type="number" class="form-control" id="inputtotal" oninput="calculateAmount(this.value)"
                           name="maxtotal" required min="10" max="{{$cus->loancus}}">
                @else
                    <input type="number" class="form-control" id="inputtotal" oninput="calculateAmount(this.value)"
                           name="maxtotal" value="{{$cus->maxtotal}}" readonly>
                @endif

            </div>
            <div class="form-group col-md-2">
                <label for="inputCity">Bi tru</label>
                <input type="text" class="form-control" id="outputtotal" name="borrowing" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">To Pay</label>
                <input type="text" class="form-control" id="nhanlai" name="receive" readonly>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label for="inputCity">Deadtime</label>

            @if($cus->payment_term == 0 || $cus->payment_term == null )
                <input type="date" class="form-control" id="inputtotal" name="payment_term" required>
            @else
                <input type="text" class="form-control" value="{{$cus->payment_term}}" readonly>
            @endif

        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputUserName">氏名</label>
            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->kanji_name}}"
                   placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">
        </div>
        <div class="form-group col-md-2">
            <label for="inputUserName">生年月日年齢</label>
            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->birthday}}"
                   placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">
        </div>
            <div class="form-group col-md-2">
            <label for="inputUserName">生年月日年齢</label>
            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->phone_number}}"
                   placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">
        </div>


        </div>
        <div class="form-group">
            <label for="inputUserName">Email*</label>
            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->email}}"
                   placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">
        </div>
        @if($cus->static =3)
            <div class="button-submit">
            <span class="text-left">
                <button type="submit" class="btn btn-space btn-primary update-profile">Update</button>
            </span>
                <span class="text-left">
                <a style="color: white" href="{{route("loan.delete",[$cus->id])}}" class="btn btn-space btn-primary update-profile">非承認</a>
            </span>
                <span class="text-left">
                <button type="submit" class="btn btn-space btn-primary update-profile">History</button>
            </span>
                <span class="text-left">
                <button type="submit" class="btn btn-space btn-primary update-profile">Back</button>
            </span>
            </div>
        @else
            <div class="button-submit">
                <span class="text-left">
                <a href="{{route("history",[$cus->id])}}" class="btn btn-space btn-primary update-profile">History</a>
            </span>
                <span class="text-left">
                <button type="submit" class="btn btn-space btn-primary update-profile">Back</button>
            </span>
            </div>
        @endif

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
