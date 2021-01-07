@extends("Admin.Components.layout")
@section("content")
    <div class="container emp-profile">
        <div id="img-profile">
            @foreach($customer->upload as $list)
                <div class="container">
                    <div class="gallery">
                        <img src="{{Storage::URL($list->avatar)}}" alt="" data-toggle="modal" data-bigimage="{{Storage::URL($list->avatar)}}" data-target="#myModal" class="img-fluid img-modal">
                        <img src="{{Storage::URL($list->luong)}}" alt="" data-toggle="modal" data-bigimage="{{Storage::URL($list->luong)}}"  data-target="#myModal" class="img-fluid img-modal">
                        <img src="{{Storage::URL($list->Back)}}" alt="" data-toggle="modal" data-bigimage="{{Storage::URL($list->Back)}}"  data-target="#myModal" class="img-fluid img-modal">
                        <img src="{{Storage::URL($list->Front)}}" alt="" data-toggle="modal" data-bigimage="{{Storage::URL($list->Front)}}"  data-target="#myModal" class="img-fluid img-modal">
                        <img src="{{Storage::URL($list->Biasotietkiem)}}" alt="" data-toggle="modal" data-bigimage="{{Storage::URL($list->Biasotietkiem)}}"  data-target="#myModal" class="img-fluid img-modal">
                        <img src="{{Storage::URL($list->manypicture)}}" alt="" data-toggle="modal" data-bigimage="{{Storage::URL($list->manypicture)}}"  data-target="#myModal" class="img-fluid img-modal">
                    </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <img src="" alt="" id="image" class="img-fluid" data-zoom-image="img-modal">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container emp-profile">
        <table>
            <tr>
                <th>漢字名</th>
                <td>{{$customer->kanji_name}}</td>
                <th>名前の音訳</th>
                <td>{{$customer->name_transliteration}}</td>
                <th>男性</th>
                <td>{{$customer->male}}</td>
            </tr>
            <tr>
                <th>家族構成</th>
                <td>{{$customer->family_structure}}</td>
                <th>住所</th>
                <td>{{$customer->address}}</td>
                <th>固定電話番号</th>
                <td>{{$customer->landline_number}}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{$customer->phone_number}}</td>
                <th>email</th>
                <td>{{$customer->email}}</td>
                <th>就業年</th>
                <td>{{$customer->work_year}}</td>
            </tr>
            <tr>
                <th>休憩</th>
                <td>{{$customer->work_break}}</td>
                <th>プロテクター</th>
                <td>{{$customer->protector}}</td>
                <th>保護者の住所</th>
                <td>{{$customer->guardian_address}}</td>
            </tr>
            <tr>
                <th>電話番号ガード</th>
                <td>{{$customer->phone_number_guard}}</td>
                <th>口座番号</th>
                <td>{{$customer->account_number}}</td>
                <th>
                    口座名義人
                </th>
                <td>{{$customer->account_holder}}</td>
            </tr>
        </table>
    </div>
    <form action="{{route("PostgrantRight",[$customer->id])}}" id="basicform" method="POST">
        @csrf
        @method("POST")
        <div class="container">
            <div class="button-submit">
                <button type="submit" class="update-profile">受け入れる</button>
                <a href="{{route("mail-refuse",$customer->id)}}" class="update-profile refuse-upload">非承認</a>
                <button onclick="goBack()" class="update-profile-1">戻って</button>
            </div>
        </div>
    </form>
    <style>
        table{
            margin-top: 50px;
            width: 100%;
        }
        table th{
            background: #007bff;
            color: #b9dcf3;
        }
        table td, table th {
            border: 1px solid #ddd;
            padding: 20px;
        }
        table th:hover {
            color: #ffffff;
        }
        table td:hover {
            background-color: #ddd;
        }
        table td{
            margin:10px;
        }
        select option[value="1"] {
          color:red;
        }
        select option[value="2"] {
           color:#28a745;
        }
        .img-modal{
            width:100%;
            max-width:15%
        }
        .button-submit{
            width: 100%;
          display: flex;
            justify-content: flex-end;
        }
        .button-submit .update-profile{
            margin: 30px 0 30px 30px;
            padding: 15px 40px;
            font-size: 20px;
            color: white;
            background-color: #28a745;
            border: 1px solid transparent;

        }
        .button-submit .update-profile:hover{background-color: #1f8236}
        .button-submit .update-profile-1{
            margin: 30px 0 30px 30px;
            padding: 15px 40px;
            font-size: 20px;
            color: white;
            background-color: #007bff;
            border: 1px solid transparent;

        }
        .button-submit .update-profile-1:hover{
            background-color: #007BC1;
        }
        .button-submit .refuse-upload{
            background-color: red;
            padding: 15px 40px;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
            color: white;
            text-decoration: none;
        }
        .button-submit .refuse-upload:hover{
            background-color: #e20606;
        }
        #img-profile {
            display: flex;
            justify-content: flex-start;
        }
        .modal-dialog {
            max-width: 800px;
            margin: 30px auto;
        }
        .modal-body {
            position:relative;
            padding:0px;
            min-height:400px;
            background:#ccc;
        }
        #image {
            min-height:200px;
        }
    </style>
    <script>
        $(document).ready(function() {
            var $imageSrc;
            $('.gallery img').click(function() {
                $imageSrc = $(this).data('bigimage');
            });
            console.log($imageSrc);
            $('#myModal').on('shown.bs.modal', function (e) {
                $("#image").attr('src', $imageSrc  );
            })
            $('#myModal').on('hide.bs.modal', function (e) {
                $("#image").attr('src','');
            })
        });
        function goBack(){
            window.history.back();
        }
    </script>

@endsection
