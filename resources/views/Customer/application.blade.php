
<!DOCTYPE html>
<html lang="en">
<head>
    @include("Customer.Components.head")
</head>
<body>
@include("Customer.Components.header")
<section id="banner-register">
    <div class="title-register">
        <span>申し込み</span>
    </div>

</section>
<section id="body-register">
    <div class="container header-body">
        <span id="header-body">  Entry</span>
        <br>
        <span id="header-body-2">
               写真、口座登録
        </span>
    </div>
</section>
<form action="{{route("upload",[$static->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("POST")
    <section id="upload">
        <div class="container">
            <div class="margin-body-upload">
                <div class="margin-body-upload-top">
                    <span>身分証明証、撮影日記載の紙を持ち、自撮り。撮影例</span>

                    <input id="anhchandung" type="file" name="avatar" class="inputfile"
                           data-multiple-caption=" {count} files selected" multiple/>
                    <label for="anhchandung">アップロード</label>
                </div>
                <div class="margin-body-upload-top">
                    <span>身分証表アップ</span><br>
                    <input id="cmt" type="file" name="front" class="inputfile"
                           data-multiple-caption="{count} files selected" multiple/>
                    <label for="cmt">アップロード</label>
                </div>
                <div class="margin-body-upload-top">
                    <span>身分証裏アップ（あれば撮影）</span><br>
                    <input id="file-3" type="file" name="back" class="inputfile"
                           data-multiple-caption="{count} files selected" multiple/>
                    <label for="file-3">アップロード</label>
                </div>
                <div class="margin-body-upload-top">
                    <span>通帳表紙</span><br>
                    <input id="file-4" type="file" name="idnhanhvien" class="inputfile"/>
                    <label for="file-4">アップロード</label>
                </div>
                <div class="margin-body-upload-top">
                    <span>給与直近三ヶ月分の写真</span><br>
                    <input id="sotietkiem" type="file" name="sotietkiem" class="inputfile"/>
                    <label for="sotietkiem">アップロード</label>
                </div>
                <div class="margin-body-upload-top">
                    <span>給与直近三ヶ月分の写真</span><br>
                    <input id="3thangluong" type="file" name="3thangluong" class="inputfile"/>
                    <label for="3thangluong">アップロード</label>
                </div>
                <div class="margin-body-upload-top">
                    <span>給与直近三ヶ月分の写真</span><br>
                    <input id="nhieuanh" type="file" name="nhieuanh" class="inputfile"/>
                    <label for="nhieuanh">アップロード</label>
                </div>
                <input type="hidden" class="front" name="customerid" value="{{auth()->guard("Customer")->id()}}">

            </div>
            <div class="infor-banking">
                <div class="row">
                    <div class="col-4 left-infor-banking">
                        <div class="margin-left-infor-banking">
                            <span>金融機関名</span><
                        </div>
                    </div>
                    <div class="col-8 right-infor-banking">
                        <div class="margin-right-infor-banking">
                            <input class="input-full" type="text" name="name_bank">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 left-infor-banking">
                        <div class="margin-left-infor-banking">
                            <span>口座番号</span><
                        </div>
                    </div>
                    <div class="col-8 right-infor-banking">
                        <div class="margin-right-infor-banking">
                            <input class="input-radio" type="radio" name="account_type">
                            <label>普通</label>
                            <input class="input-radio" type="radio" name="account_type">
                            <label>当座</label>
                            <input class="input-radio" type="radio" name="account_type">
                            <label>定期</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 left-infor-banking">
                        <div class="margin-left-infor-banking">
                            <span>口座番号</span><
                        </div>
                    </div>
                    <div class="col-8 right-infor-banking">
                        <div class="margin-right-infor-banking">
                            <input account_number class="input-full" type="number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 left-infor-banking">
                        <div class="margin-left-infor-banking">
                            <span>口座番号</span><
                        </div>
                    </div>
                    <div class="col-8 right-infor-banking">
                        <div class="margin-right-infor-banking">
                            <input class="input-full" type="text" name="account_holder">
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-upload">
                <div class="submit-upload">
                    <button type="submit">申し込み のコピー</button>
                </div>
                <div class="back-upload">
                    <a href="#">戻る のコピー</a>
                </div>
            </div>
        </div>

    </section>
</form>
<div class="container container-button">
    <div id="button-footer">
        <div class="item-button-footer">
            <span>法人のファクタリング相談はこちら</span>
        </div>
        <div class="item-button-footer">
            <span>個人新規申し込みはこちら</span>
        </div>
        <div class="item-button-footer">
            <span>チャットで問い合わせる</span>

        </div>
    </div>
</div>
@include("Customer.Components.footer")
<script>
    $(document).ready(function () {
        $('body').on('change', '.inputfile', function () {
            let name = null;
            name = this.files[0]['name'];
            if (name != null && name.length > 10) {
                name = name.substring(0, 10) + '...';
            }
            $(this).parent().find('label').text(name);
        })
    })
</script>
</body>
</html>
