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
                        <th>trang thai</th>
                        <th>Chuc Nang</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $list)
                        <tr>
                            <th>{{$list -> tenchuhan}}</th>
                            <th>{{$list ->tenphienam}}</th>
                            <th>
                                <div class="four">
                                    <div class="button-wrap">
                                        <div class="button-bg">
                                            <div class="button-out"></div>
                                            <div class="button-in"></div>
                                            <div class="button-switch"></div>
                                        </div>
                                    </div>
                                </div>

                            </th>
                            <th>
                                <a href="{{route("showuser",['id'=>$list->id])}}"
                                   class="badge badge-success badge-pill">Check</a>
                                <a href="#" class="badge badge-primary badge-pill">Edit</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        th{
            text-align: center;
        }
        .four .button-wrap {
            width: 100px;
            margin: 40px auto 0;
            cursor: pointer;
        }
        .four .button-bg {
            width: 100%;
            height: 100%;
            background-color: #bb2222;
            border-radius: 40px;
            padding: 3px;
            color:#fff;
            transition:all 0.2s ease;
        }
        .four .button-switch {
            position:relative;
            left:0px;
            width: 44px;
            height: 44px;
            border:solid 13px;
            background-color:#fff;
            border-radius: 36px;
            transition:all 0.2s ease;
        }
        .four .button-active .button-switch { left:50px; }
        .four .button-in,
        .four .button-out {
            position:absolute;
            transition:all 0.2s ease;
            padding-top:15px;
            font-size:0.8em;
            text-transform:uppercase;
            font-weight:bold;
        }
        .four .button-in { margin-left:76px; }
        .four .button-out { margin-left:18px; }
        .four .button-active .button-out {  }
        .four .button-active .button-in {  }
        .four .button-active .button-bg { background-color:#22bb22; }

    </style>
    <script>

        $('.button-wrap').on("click", function(){
            $(this).toggleClass('button-active');
        });
    </script>
@endsection
