@extends("Admin.Components.layout")
@section("content")

    <h1 class="h3 mb-2 text-gray-800">Loan Account Manager</h1>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Email</th>
                        <th>Loan Amount</th>
                        <th>Still Owe</th>
                        <th>Function</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($cus as $list)
                        <tr>
                            <th>
                                {{$list -> email}}
                            </th>
                            <th>
                                @foreach( ($list->loan) as $item)
                            {{$item->maxmumamount}}

                            </th>
                            <th>
                                    {{$item->stillowe}}
                            </th>
                            <th>
                                <a href="{{route("creatLoanAccount",[$item->id])}}" class="badge badge-success badge-pill">Edit</a>
                            </th>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
