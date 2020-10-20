@extends("Admin.Components.layout")
@section("content")
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>PhoneNumber</th>
                        <th>Function</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cus as $list)
                        <tr>
                            <th>
                                {{$list ->id}}
                            </th>
                            <th>
                                {{$list ->email}}
                            </th>
                            <th>
                                {{$list->tenchuhan}}
                            </th>
                            <th>
                                {{$list->sodienthoaididong}}
                            </th>
                            <th>
                                <a href=
                                   " {{route("loan.createLoan",[$list->id])}}"

                                   class="badge badge-primary badge-pill">Create</a>
{{--                                <a href="{{route("Loan-postCreate-delete",[$list->id])}}" class="badge badge-danger badge-pill" data-toggle="modal" data-target="#exampleModal" >Delete</a>--}}
                                <a href="#" class="badge badge-warning badge-pill">Edit</a>

                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{{--    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalLabel">Warning</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                   Mày có chắc chắn muốn xóa ko--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tao Chịu</button>--}}
{{--                    <a type="button" class="btn btn-primary" href="{{route("Loan-postCreate-delete",[$list->id])}}">Xóa Luôn Đi</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
