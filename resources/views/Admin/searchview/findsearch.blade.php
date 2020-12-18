@extends("Admin.Components.layout")
@section("content")
    <div class="container emp-profile">
        <div id="img-profile">
            @foreach($upload as $list)
                <div class="container">
                    <div class="gallery">
                        <img src="{{Storage::URL($list->avatar)}}" alt="" data-toggle="modal"
                             data-bigimage="{{Storage::URL($list->avatar)}}" data-target="#myModal"
                             class="img-fluid img-modal">
                        <img src="{{Storage::URL($list->luong)}}" alt="" data-toggle="modal"
                             data-bigimage="{{Storage::URL($list->luong)}}" data-target="#myModal"
                             class="img-fluid img-modal">
                        <img src="{{Storage::URL($list->Back)}}" alt="" data-toggle="modal"
                             data-bigimage="{{Storage::URL($list->Back)}}" data-target="#myModal"
                             class="img-fluid img-modal">
                        <img src="{{Storage::URL($list->Front)}}" alt="" data-toggle="modal"
                             data-bigimage="{{Storage::URL($list->Front)}}" data-target="#myModal"
                             class="img-fluid img-modal">
                        <img src="{{Storage::URL($list->Biasotietkiem)}}" alt="" data-toggle="modal"
                             data-bigimage="{{Storage::URL($list->Biasotietkiem)}}" data-target="#myModal"
                             class="img-fluid img-modal">
                        <img src="{{Storage::URL($list->manypicture)}}" alt="" data-toggle="modal"
                             data-bigimage="{{Storage::URL($list->manypicture)}}" data-target="#myModal"
                             class="img-fluid img-modal">
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
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
                <td>{{$cus->kanji_name}}</td>
                <th>名前の音訳</th>
                <td>{{$cus->name_transliteration}}</td>
                <th>男性</th>
                <td>{{$cus->male}}</td>
            </tr>
            <tr>
                <th>家族構成</th>
                <td>{{$cus->family_structure}}</td>
                <th>住所</th>
                <td>{{$cus->address}}</td>
                <th>固定電話番号</th>
                <td>{{$cus->landline_number}}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{$cus->phone_number}}</td>
                <th>email</th>
                <td>{{$cus->email}}</td>
                <th>就業年</th>
                <td>{{$cus->work_year}}</td>
            </tr>
            <tr>
                <th>休憩</th>
                <td>{{$cus->work_break}}</td>
                <th>プロテクター</th>
                <td>{{$cus->protector}}</td>
                <th>保護者の住所</th>
                <td>{{$cus->guardian_address}}</td>
            </tr>
            <tr>
                <th>電話番号ガード</th>
                <td>{{$cus->phone_number_guard}}</td>
                <th>口座番号</th>
                <td>{{$cus->account_number}}</td>
                <th>
                    口座名義人
                </th>
                <td>{{$cus->account_holder}}</td>
            </tr>
        </table>
    </div>

    <style>
        .box-button-list-dark {
            justify-content: flex-end;
            margin-top: 50px;
            display: flex;
        }

        .box-button-list-dark .back-list-dark {
            padding: 15px 35px;
            background-color: #007bff;
            color: white;
            margin-left: 30px;
            border: 0px solid transparent;
            text-decoration: none;
        }

        .box-button-list-dark .back-list-dark:hover {
            background-color: #065ab5;
        }

        .box-button-list-dark .history-list-dark {
            padding: 15px 35px;
            background-color: #ffc107;
            color: white;
            margin-left: 30px;
            border: 0px solid transparent;
            text-decoration: none;
        }

        .box-button-list-dark .history-list-dark:hover {
            background-color: #d19e06;
        }

        table {
            margin-top: 50px;
            width: 100%;
        }

        table th {
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

        table td {
            margin: 10px;
        }

        .img-modal {
            width: 100%;
            max-width: 15%
        }

        .button-submit {
            width: 30%;
            float: right;
        }

        .button-submit .update-profile {
            width: 45%;
            margin: 2%;
            color: white;

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
            position: relative;
            padding: 0px;
            min-height: 400px;
            background: #ccc;
        }


        .close {
            position: absolute;
            right: -30px;
            top: 0;
            z-index: 999;
            font-size: 2rem;
            font-weight: normal;
            color: #fff;
            opacity: 1;
        }

        #image {
            min-height: 200px;
        }
    </style>
    <div class="container box-button-list-dark">
        <a class="history-list-dark" href="{{route("history",$cus->id)}}">歴史</a>
        <a class="back-list-dark" href="{{route("search")}}">戻る</a>
    </div>
    <script>
        $(document).ready(function () {
            var $imageSrc;
            $('.gallery img').click(function () {
                $imageSrc = $(this).data('bigimage');
            });
            console.log($imageSrc);
            $('#myModal').on('shown.bs.modal', function (e) {
                $("#image").attr('src', $imageSrc);
            })
            $('#myModal').on('hide.bs.modal', function (e) {
                $("#image").attr('src', '');
            })
        });

        function goBack() {
            window.history.back();
        }
    </script>
@endsection
