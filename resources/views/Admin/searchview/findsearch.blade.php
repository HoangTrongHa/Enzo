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
        <div class="row">

            <div class="col-md-12">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    かんじ名</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->kanji_name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    電話名</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->name_transliteration}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    セックス</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->male}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    有効な電話番号</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->phone_number}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    携帯電話番号</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->landline_number}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    Eメール</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->email}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    本部</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->company}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    作業位置</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->num_people}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    会社は働いています</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->linkweb}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    会社の電話番号</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->company_phone}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    就業年</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->work_year}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    労働時間</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->work_time}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    労働時間</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->position}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    疑わしい時間</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->work_break}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    保証人の名前</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->protector}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    確実の住所
                                </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->guardian_address}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    確実な電話番号
                                </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->phone_number_guard}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    アカウントが作成されました

                                </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$cus->created_at}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="form-group">
        <label for="inputUserName">Email*</label>
        <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$cus->email}}"
               placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">
    </div>
    <style>
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
