@extends("Admin.Components.layout")
@section("content")
    <form action="{{route("PostgrantRight",[$data->id])}}" id="basicform" method="POST" >
        @csrf
        @method("POST")
        <div class="form-group">
            <label for="inputUserName">Email*</label>
            <input id="inputipt" type="text"  readonly="true" data-parsley-trigger="change" value="{{$data->email}}" placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">

        </div>
        <div class="form-group">
            <label for="">Grant Right*</label>
            <select class="form-control" name="static">
                <option value="1" {{($data->static==1)?"selected":""}} >Close</option>
                <option value="2"  {{($data->static==2)?"selected":""}} >Active</option>
            </select>
        </div>
        <p class="text-left">
            <button type="submit" class="btn btn-space btn-primary">Update</button>
        </p>
    </form>

@endsection
