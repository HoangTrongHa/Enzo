@extends("Admin.Components.layout")
@section("content")
    <div class="container emp-profile">
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
                                <p>{{$customer->kanji_name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    電話名</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->name_transliteration}}</p>
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
                                    有効な電話番号</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->phone_number}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    携帯電話番号</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->landline_number}}</p>
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
                                    本部</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->company}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    作業位置</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->num_people}}</p>
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
                                    会社の電話番号</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->company_phone}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    就業年</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->work_year}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    労働時間</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->work_time}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    労働時間</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->position}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    疑わしい時間</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->work_break}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    保証人の名前</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->protector}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    確実の住所
                                </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->guardian_address}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>

                                    確実な電話番号
                                </label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$customer->phone_number_guard}}</p>
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
{{--    <form action="{{route("PostgrantRight",[$customer->id])}}" id="basicform" method="POST">--}}
{{--        @csrf--}}
{{--        @method("POST")--}}
{{--        <div class="form-group">--}}
{{--            <label for="inputUserName">Email*</label>--}}
{{--            <input id="inputipt" type="text" readonly="true" data-parsley-trigger="change" value="{{$customer->email}}"--}}
{{--                   placeholder="Enter Arrtibute values name" autocomplete="off" class="form-control">--}}

{{--        </div>--}}
{{--        <div class="button-submit">--}}
{{--            <span class="text-left">--}}
{{--                <button type="submit" class="btn btn-space btn-primary update-profile">Update</button>--}}
{{--            </span>--}}
{{--            <span class="text-left">--}}
{{--                <a type="submit" class="btn btn-space btn-primary update-profile">非承認</a>--}}
{{--            </span>--}}
{{--            <span class="text-left">--}}
{{--                <button type="submit" class="btn btn-space btn-primary update-profile">ユーザーメモ ban ghi nho nguoi dung</button>--}}
{{--            </span>--}}
{{--            <span class="text-left">--}}
{{--                <button type="submit" class="btn btn-space btn-primary update-profile">Back</button>--}}
{{--            </span>--}}
{{--        </div>--}}

{{--    </form>--}}



@endsection
