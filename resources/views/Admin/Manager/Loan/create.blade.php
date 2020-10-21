@extends("Admin.Components.layout")
@section("content")
    <form action="{{route("Loan-postCreate")}}"  method="POST" >
        @csrf
        @method("POST")
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputCity">Min</label>
                <input type="number" class="form-control"name="min">
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">Max</label>
                <input type="number" class="form-control"name="max">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Deadline</label>
            <input type="date" class="form-control" name="deadline">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
