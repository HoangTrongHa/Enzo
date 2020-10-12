@extends("Admin.Components.layout")
@section("content")

    <h1 class="h3 mb-2 text-gray-800">List Account Manager</h1>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Avatar</th>
                        <th>Role</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $list)
                    <tr>
                        <td>{{$list -> name}}</td>
                        <th>{{$list ->email}}</th>
                        <td>{{$list -> phone}}</td>
                        <td><img src="{{asset($list ->avatar)}}"/></td>
                        <td>{{$list -> role}}</td>
                        <td>{{$list->created_at}}</td>
                        <td>{{$list->updated_at}}</td>
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
