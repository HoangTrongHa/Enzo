@extends("Customer.Components.layout")

@section("content")
    <section style="background:#01897b ">
        <div class="container">
            <h1 class="login-h1">申し込み</h1>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="loan-content">
                <div class="loan-item">
                    <div class="style-loan">


                    <div class="item-content">
                        <span>so tien duoc vay</span>
                        <h1>00,000,00</h1>
                    </div>
                    </div>
                    <div class="button-loan">
                        <a class="loan-button" href="#">Ung dung</a><br>
                        <a class="loan-button" href="#">lich su vay</a>
                    </div>

                </div>
                <div class="loan-item">
                    <span style="color: white">so tien duoc vay</span>
                    <div class="item-content">
                        <h1>00,000,00</h1>
                    </div>
                    <span style="color: white">Ngay phai tra</span>
                    <div class="dead-line">
                        <span>Ngay</span>
                        <div class="time-line">
                            <span>00</span>
                        </div>
                        <span>Thang</span>
                        <div class="time-line">
                            <span>00</span>
                        </div>
                        <span>Nam</span>
                        <div class="time-line">
                            <span>00</span>
                        </div>
                    </div>
                    <div class="bank-profile">
                        <span>Thong tin ngan hang</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<style>
 .loan-content{
     display: flex;
     justify-content: center;
     text-align: center;

 }
 .loan-content .loan-item{
     background-color: #01897b;
     justify-items: center;
     width: 40%;
     margin: 3VW;
     border: 45px solid #01897b;
     border-radius: 23px;
 }
 .loan-button{
     background-color: #00b7a4;
     color: white;
 }
 .style-loan{
     text-align: center;
 }
 .item-content{
     background-color: #313131;
     color: #ffffff;
 }
 .dead-line{
     display: flex;
     justify-content: center;
    color: white;
 }
 .dead-line span{
     padding: 3VH;
 }
 .time-line{
     width: 50px;
     height: 50px;
     background-color: black;
 }
.time-line span{
    color: #ffffff;
    font-size: 30px;
}
.bank-profile{
    background-color: #313131;
    margin-top: 30px;
    color: #ffffff;
}
</style>
