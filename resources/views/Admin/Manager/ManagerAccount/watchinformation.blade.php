@extends("Admin.Components.layout")
@section("content")
    <div class="container emp-profile">
        @foreach($user->upload as $list)
            <img class="avatar" src="{{Storage::URL($list->avatar)}}">
        @endforeach
    </div>
    <div class="container emp-profile">
        <div class="infor-customer"></div>
    </div>
    <style>
        .emp-profile{
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
        }
        .emp-profile .infor-customer{
            width: 80%;
            background-color: #dedfe1;
        }
        .avatar {
            border-radius: 55%;
            margin: 0 auto;
            width: 135px;
            height: 135px;
        }
    </style>
@endsection
