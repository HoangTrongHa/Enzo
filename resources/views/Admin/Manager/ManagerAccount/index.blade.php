@extends("Admin.Components.layout")
@section("content")

    <h1 class="h3 mb-2 text-gray-800">List Account Manager</h1>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>tenchuhan</th>
                        <th>tenphienam</th>
                        <th>male</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $list)
                        <tr>
                            <td>{{$list -> tenchuhan}}</td>
                            <th>{{$list ->tenphienam}}</th>
                            <th>{{$list ->male}}</th>
                            <td>
                                <a href="#" class="badge badge-success badge-pill">Check</a>
                                <a href="#" class="badge badge-primary badge-pill">Edit</a>
                                <a href="#"  class="badge badge-danger badge-pill">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
@endsection
