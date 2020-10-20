@extends("Admin.Components.layout")
@section("content")
    <form action="{{route("loan.postcreateLoan",[$cus->id])}}" method="POST">
        @csrf
        @method("POST")
        <div class="form-group">
            <label for="inputUserName">Email*</label>
            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->email}}"
                   placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputUserName">Name*</label>
            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->tenchuhan}}"
                   placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputnumber">The Amount Borrowed</label>
                <input type="number" class="form-control" id="inputtotal" onchange="calculateAmount(this.value)"
                       name="maxtotal">
            </div>
            <div class="form-group col-md-2">
                <label for="inputCity">Bi tru</label>
                <input type="number" class="form-control" id="outputtotal" name="borrowing">
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script>
        function calculateAmount(val) {
            var tot_price = val * 0.25;
            var divobj = document.getElementById('outputtotal');
            divobj.value =number_format(tot_price) ;
            var end = val - tot_price;
            var abc = document.getElementById("nhanlai")
            abc.value = number_format(end);
        }
    </script>
@endsection
