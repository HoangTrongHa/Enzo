@extends("Admin.Components.layout")
@section("content")
    <div class="container emp-profile">
        <div id="img-profile">
            @foreach($customer->upload as $list)

                <img id="myImg" src="{{ Storage::URL($list->avatar)}}" alt="Avatar" style="width:100%;max-width:15%">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">

                </div>
                <img id="myImg2" src="{{ Storage::URL($list->luong)}}" alt="Amonu" style="width:100%;max-width:15%">
                <img src="{{ Storage::URL($list->Back) }}" class="img-thumbnail"/>
                <img src="{{ Storage::URL($list->Front) }}" class="img-thumbnail"/>
                <img src="{{ Storage::URL($list->idnhanhvien) }}" class="img-thumbnail"/>
                <img src="{{ Storage::URL($list->manypicture) }}" class="img-thumbnail"/>
                <img src="{{ Storage::URL($list->Biasotietkiem) }}" class="img-thumbnail"/>
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
                                <p>{{$customer->tenchuhan}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    電話名</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->tenphienam}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    セックス</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->male}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    携帯電話番号</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->sodienthoaicodinh}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    作業位置</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->songuoilam}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    有効な電話番号</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->sodienthoaididong}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    Eメール</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->email}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    会社は働いています</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->linkweb}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    本部</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->truso}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    会社の電話番号</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->sdtcty}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    社内の人数</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->songuoilam}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    社内の人数</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->songuoilam}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    就業年</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->namcongtac}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    労働時間</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->thoigianlamviec}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    疑わしい時間</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->thoigiannghi}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    保証人の名前</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->nguoibaolanh}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    確実の住所
                                </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->diachinguoibaolanh}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    確実な電話番号
                                </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->sdtnguoibaolanh}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    アカウントが作成されました

                                </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->created_at}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <form action="{{route("PostgrantRight",[$customer->id])}}" id="basicform" method="POST">
        @csrf
        @method("POST")
        <div class="form-group">
            <label for="inputUserName">Email*</label>
            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$customer->email}}"
                   placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">

        </div>
        <div class="form-group">
            <label for="">Grant Right*</label>
            <select class="form-control" name="static">
                <option value="1" {{($customer->static==1)?"selected":""}} >Close</option>
                <option value="2" {{($customer->static==2)?"selected":""}} >Active</option>
            </select>
        </div>
        <div class="button-submit">
            <span class="text-left">
                <button type="submit" class="btn btn-space btn-primary update-profile">Update</button>
            </span>
            <span class="text-left">
                <a type="submit" class="btn btn-space btn-primary update-profile">非承認</a>
            </span>
            <span class="text-left">
                <button type="submit" class="btn btn-space btn-primary update-profile">ユーザーメモ ban ghi nho nguoi dung</button>
            </span>
            <span class="text-left">
                <button type="submit" class="btn btn-space btn-primary update-profile">Back</button>
            </span>
        </div>

    </form>
    <style>
        .img-thumbnail{
            width:100%;
            max-width:15%
        }
        .button-submit{
            width: 30%;
            float: right;
        }
        .button-submit .update-profile{
            width: 45%;
            margin: 2%;
            color: white;

        }
        #img-profile {
            display: flex;
            justify-content: flex-start;
        }

        .img-thumbnail {
            width: 15%;
            height: 30%;
        }

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }
    </style>

    <script>
        var modal = document.getElementById("myModal");
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>

@endsection
