@extends("Admin.Components.layout")
@section("content")
    <div class="form-row">
        <div class="form-group col-md-4">
            <span style="font-size: 40px;">希望売却額</span>
        </div>
        <div class="form-group col-md-4" style="float: right">
            <span style="font-size: 40px;">{{$cus->loancus}}</span> <span>円</span>
        </div>
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


    <style>

        .button-submit {
            width: 30%;
            float: right;
        }

        .button-submit .update-profile {
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
