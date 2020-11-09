<div class="container profile-banking">
    <div class="row">
        <div class="col-12">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-md-2">
                            <label>氏名</label>
                        </div>
                        <div class="col-md-2">
                            <p>{{$cus->kanji_name}}</p>
                        </div>
                        <div class="col-md-2">
                            <label>生年月日年齢</label>
                        </div>
                        <div class="col-md-2">
                            <p>{{$cus->birthday}}</p>
                        </div>
                        <div class="col-md-2">
                            <label>家族構成</label>
                        </div>
                        <div class="col-md-2">
                            <p>{{$cus->family_structure}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>住所</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$cus->address}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label>携帯番号</label>
                        </div>
                        <div class="col-md-2">
                            <p>{{$cus->phone_number}}</p>
                        </div>
                        <div class="col-md-2">
                            <label>自宅番号</label>
                        </div>
                        <div class="col-md-2">
                            <p>{{$cus->landline_number}}</p>
                        </div>
                        <div class="col-md-2">
                            <label>メールアドレス</label>
                        </div>
                        <div class="col-md-2">
                            <p>{{$cus->email}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label>勤務先名</label>
                        </div>
                        <div class="col-md-2">
                            <p>{{$cus->company}}</p>
                        </div>
                        <div class="col-md-2">
                            <label>勤務先電話番号</label>
                        </div>
                        <div class="col-md-2">
                            <p>{{$cus->company_phone}}</p>
                        </div>
                        <div class="col-md-2">
                            <label>勤務先本社所在地</label>
                        </div>
                        <div class="col-md-2">
                            <p>{{$cus->linkweb}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
