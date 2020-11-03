@extends("Customer.Components.layout")

@section("content")
    <section style="background:#01897b ">
        <div class="container">
            <h1 class="login-h1">申し込み</h1>
        </div>
    </section>
    <section style="margin-bottom: 50px">
        <div class="container" style="border-bottom: 2px solid #01897b;">
            <h1 style="color: black" class="login-h1">Entry</h1>
            <h4></h4>
        </div>
    </section>

    <form action="{{route("upload",[$static->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("post")
        <div class="container">
            <div class="form-group">
                <label for="anhchandung">身分証明書、撮影日記載の紙を持ち、自撮り。撮影例 anh chan dung</label><br>
                <input type="file" class="front" name="avatar">
            </div>
            <div class="form-group">
                <label for="cmt">身分証表アップ Chung Minh thu</label><br>
                <input type="file" class="front" name="front">
            </div>
            <div class="form-group">
                <label for="cmt">身分証表アップ Chung Minh sau</label><br>
                <input type="file" class="front" name="back">
            </div>
            <div class="form-group">
                <label for="idnhanhvien">身分証裏アップ（あれば撮影） Sao luu id neu co</label><br>
                <input type="file" class="front" name="idnhanhvien">
            </div>
            <div class="form-group">
                <label for="sotietkiem">通帳表紙 Bia so tiet kiem</label><br>
                <input type="file" class="front" name="sotietkiem">
            </div>
            <div class="form-group">
                <label for="3thangluong">給与直近三ヶ月分の写真 3 thang luong cuoi</label><br>
                <input type="file" class="front" name="3thangluong">
            </div>
            <div class="form-group">
                <label for="nhieuanh">給与直近三ヶ月分の写真 </label><br>
                <input type="file" class="front" name="nhieuanh">
            </div>


            <input type="hidden" class="front" name="customerid" value="{{auth()->guard("Customer")->id()}}">

        </div>
        <div class="container entry">
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    金融機関名
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="text" name="name_bank" class="uploadbank" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    口座の種類
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="radio" id="male" name="account_type" value="正常">
                            <label for="正常">正常</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="radio" id="female" name="account_type" value="電流">
                            <label for="male">電流</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="radio" id="other" name="account_type" value="定期的に">
                            <label for="male">定期的に</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    口座番号
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="number" name="account_number" class="uploadbank" required>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    アカウント名
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="text" name="account_holder" class="uploadbank" required>

                </div>
            </div>
            <div class="button-entry-type">
                <div class="button-entry-type-1">
                    <button type="submit" class="button-entry">Submit</button>
                </div>
                <div class="button-entry-type-1">
                    <button type="reset" class="button-entry">Reset</button>

                </div>
            </div>
        </div>

    </form>
@endsection
<style>
    .front {
        background: #efdf00;
        width: 50%;
    }
    .entry{
        margin-top: 15%;
    }
    .button-entry-type{
        display: flex;
        justify-content: center;
    }
    .button-entry-type-1{
        margin: 10%;
    }
    .button-entry{
        background: #efdf00;
        width:15VW;
        height: 10VH;
        border: 10px;
        color: #ffffff;
    }
    .uploadbank{
        margin: 20px auto; width: 100%; background-color: #eeeeee; border: 1px solid #eeeeee;
    }
</style>
