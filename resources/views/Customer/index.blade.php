<!doctype html>
<html lang="en">
<head>
    @include("Customer.Components.head")
</head>
<body>
@include("Customer.Components.header")
<section id="banner">
    <div class="container">
        <div class="banner-content">
            <div class="banner-left">
                <span id="heading-banner">給料即日払い<small>の</small></span>
                <div class="banner-content-left">
                    <div class="circle-banner-left">
                        <span>業界<br>最安値の<br>手数料</span>
                    </div>
                    <img src="{{asset("image/ENZO_bank_logo_white@2x.png")}}">
                    <div class="circle-banner-left">
                        <span>業界<br>最安値の<br>手数料</span>
                    </div>
                </div>
                <div class="footer-banner-left">
                    <span>必要な時に給料が受け取れて、安心して暮らせる！<br>借金しないで現金を調達できる、給料ファクタリング！</span>
                </div>
            </div>
            <div class="banner-right">
                <img id="topbb" src="{{asset("image/enzo_topbb_pc@2x.png")}}" alt="">
            </div>
        </div>
    </div>
</section>
<section id="about_enzo">
    <div class="container">
        <div class="heading-about">
            <img src="{{asset("image/ENZO_bank_logo_black@2x.png")}}">
            <span>の給料即日払いサービス（ファクタリング）とは</span>
        </div>
        <div class="header-about">
            <span id="header-about-top">次の給料を買い取り即日現金化</span><br>
            <span id="header-about-end">借金しないで現金を調達できる画期的なサービスです</span>
        </div>
        <img src="{{asset("image/scheme_diagram_pc-svg.png")}}">
        <div class="footer-about">
            <span>
                サービスの詳細
                <i  class="fa">&#xf144;</i>
            </span>


        </div>
    </div>
</section>
<section id="future">
    <div class="container">
        <div class="heading-future">
            <img src="{{asset("image/ENZO_bank_logo_black@2x.png")}}">
            <span>の特徴</span>
        </div>
        <div class="content-future">
            <div class="item-future">
            <span class="item-future-heading">
                ご利用者様の手数料が 業界最安値
            </span>
                <hr>
                <img src="{{asset("image/feature1_img.png")}}">
                <div class="footer-future">
                    <span class="more-future">MORE <i class="fa fa-play"></i>

                    </span>
                </div>
            </div>
            <div class="item-future">
            <span class="item-future-heading">
                独自の審査方法で 審査が最短で15分
            </span>
                <hr>
                <img src="{{asset("image/feature2_img.png")}}">
                <div class="footer-future">
                    <span class="more-future">MORE <i  class="fa">&#xf144;</i></span>
                </div>
            </div>

        </div>
        <div class="content-future">
            <div class="item-future">
            <span class="item-future-heading">
                        ENZOへの入金期限が 翌給料日から3営業日
            </span>
                <hr>
                <img src="{{asset("image/feature3_img.png")}}">
                <div class="footer-future">
                    <span class="more-future">MORE<i  class="fa">&#xf144;</i></span>
                </div>
            </div>
            <div class="item-future">
            <span class="item-future-heading">
                ENZOが給料を買い取り 借金しないで現金化
            </span>
                <hr>
                <img src="{{asset("image/feature4_img.png")}}">
                <div class="footer-future">
                    <span class="more-future">MORE<i  class="fa">&#xf144;</i></span>
                </div>
            </div>

        </div>

    </div>
</section>
<section id="how-to-us">
    <div class="container">
        <div class="button-heading-how-to-us">
            <span>こんな時に！</span>
        </div>
        <div class="heading-how-to-us">
            <img src="{{asset("image/ENZO_bank_logo_black@2x.png")}}">
            <span>の使い方</span>
        </div>
        <div class="comment-people">
            <div class="comment-item">
                <span>
                    給料日前で<br> 財布が寂しい
                </span>
            </div>
            <div class="comment-item">
                <span>
                    急用で<br> どうしても<br> お金が必要
                </span>
            </div>
            <div class="comment-item">
                <span>
                    会社、友人<br>家族には<br>相談できない
                </span>
            </div>
            <div class="comment-item">
                <span>
                    カード枠が<br>いっぱい
                </span>
            </div>
            <div class="comment-item">
                <span>
                    金融ブラック<br>だから不安
                </span>
            </div>
        </div>
        <img src="{{asset("image/human_illustration_pc.svg")}}">
        <div class="footer-comment">
            <div class="item-comment-footer">
            <span>
                給料日目前
            </span>
            </div>
            <div class="item-comment-green">
            <span>
                今月は<br> 前半でお金を<br> 使いすぎた
            </span>
            </div>
            <div class="item-comment-footer">
            <span>
                大事な友達の<br> 結婚式で<br> お金が必要
            </span>
            </div>
            <div class="item-comment-green">
            <span>
                来月の<br> 給料を<br> ファクタリング
            </span>
            </div>
            <div class="item-comment-footer">
            <span>
                来月の<br> 給料日に<br> 返済
            </span>
            </div>
        </div>
    </div>
</section>
<section id="factoring">
    <div class="container">
        <div class="heading-factoring">
            <img src="{{asset("image/ENZO_bank_logo_black@2x.png")}}">
            <span>（ファクタリング）の使い方</span>
        </div>
        <div class="head-factoring">
            <span>かんたん</span> <span id="number-4">４ </span><span>ステップ</span>
        </div>
        <div class="box-factoring">
            <div class="item-factoring">
                <img src="{{asset("image/no_01.png")}}" class="numer-factoring">
                <img src="{{asset("image/factoring_step1_illustration.png")}}" class="img-factoring">
                <span>新規申し込みにて<br> ユーザー情報登録 <br>写真・口座登録</span>
            </div>
            <div class="item-factoring">
                <img src="{{asset("image/no_02.png")}}" class="numer-factoring">
                <img src="{{asset("image/factoring_step2_illustration.png")}}" class="img-factoring">
                <span>給料債権<br> 売却申し込み </span>
            </div>
            <div class="item-factoring">
                <img src="{{asset("image/no_03.png")}}" class="numer-factoring">
                <img src="{{asset("image/factoring_step3_illustration.png")}}" class="img-factoring">
                <span>入金確認<br> （申請後最速15分）</span>
            </div>
            <div class="item-factoring">
                <img src="{{asset("image/no_04.png")}}" class="numer-factoring">
                <img src="{{asset("image/factoring_step4_illustration.png")}}" class="img-factoring">
                <span>給料債権買い戻し<br> 指定口座へご入金を お願いします </span>
            </div>
        </div>
        <div class="button-footer-factoring">
            <div class="item-button-footer-factoring">

                <span>法人新規申し込みはこちら</span>
                <img src="{{asset("image/play.png")}}" alt="">
            </div>
            <div class="item-button-footer-factoring">
                <span>個人新規申し込みはこちら</span>
                <img src="{{asset("image/play.png")}}" alt="">
            </div>
        </div>
        <div class="information">
            <span id="infor">Information</span><br>
            <span id="infor-2">新着情報</span>
            <div class="content-information">
                <div class="d-flex item-information">
                    <div class="left-information">
                        <span>
                            YYYY.MM.DD

                        </span>
                    </div>
                    <div class="right-information">
                        <span>Trước hết, các phiếu bầu phải được chứng nhận ở mỗi bang và điều này sẽ diễn ra trong vài tuần tới.

Hiến pháp Mỹ quy định, nhiệm kỳ tổng thống mới bắt đầu từ trưa ngày 20/1, diễn ra trong lễ nhậm chức được tiến hành ở thủ đô Washington DC. Tân Tổng thống và tân Phó Tổng thống có buổi tuyên thệ do Chánh án Tòa án Tối cao chủ trì.

Vậy nếu chính thức thắng cử, ông Joe Biden và bà Kamala Harris sẽ nhậm chức vào ngày 20/1/2021</span>

                    </div>
                </div>
                <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        Đây là giai đoạn từ khi bầu cử xong đến lúc bắt đầu nhiệm kỳ tổng thống mới ngày 20/1.

                        Tổng thống sắp tới tập hợp một nhóm được gọi là nhóm chuyển giao, bao gồm những người chuẩn bị nắm quyền ngay sau khi nhậm chức.

                        Nhóm của ông Biden hiện đã thiết lập một trang web cho quá trình tiếp quản. Họ sẽ chọn những người sẽ phục vụ trong Nội các, bàn bạc các ưu tiên chính sách và chuẩn bị cầm quyền. Các thành viên trong nhóm sẽ đến các cơ quan liên bang để nhận báo cáo tóm tắt về những thứ như thời hạn chót, ngân sách và nhân sự. Họ sẽ thu thập tất cả thông tin đó cho đội ngũ nhân sự sắp đảm trách công việc. Một số người của chính quyền trước có thể vẫn tiếp tục phục vụ.

                        Năm 2016, Tổng thống Barack Obama đã gặp người kế nhiệm Donald Trump và những bức ảnh trong Phòng Bầu dục của họ phản ánh bầu không khí ấm áp chút ít giữa hai người.
                    </div>
                </div>
                <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        Vị cựu Phó Tổng thống đã dành nhiều tháng trời để tập hợp nhóm chuyển giao và quyên tiền mặt để tạo quỹ. Nhưng Cơ quan Quản lý Dịch vụ Tổng hợp - có nhiệm vụ chính thức công nhận tổng thống đắc cử và cung cấp ngân quỹ cũng như quyền tiếp cận các cơ quan liên bang mà nhóm của ông cần, cho đến nay vẫn chưa công nhận chiến thắng của chính trị gia Dân chủ. Người đứng đầu cơ quan này, Emily Murphy (được ông Trump bổ nhiệm) khẳng định chưa có "xác nhận" nào về người chiến thắng bầu cử được đưa ra.

                        Nhóm ông Biden được cho là đang chuẩn bị hành động pháp lý nếu chính quyền ông Trump tiếp tục trì hoãn việc chuyển giao.
                    </div>
                </div>
                <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        Tổng thống đắc cử: Một ứng viên tổng thống thắng cử nhưng chưa tuyên thệ nhậm chức sẽ được gọi như vậy.

                        Nội các: Joe Biden sẽ sớm bắt đầu công bố những người mà ông ấy muốn có trong nội các của mình, đội ngũ cấp cao nhất của chính phủ. Đội này bao gồm những người đứng đầu của tất cả các bộ và cơ quan chủ chốt.

                        Điều trần phê chuẩn: Nhiều vị trí hàng đầu của chính phủ do Tổng thống bổ nhiệm cần được Thượng viện chấp thuận. Những người được ông Biden chọn sẽ được các ủy ban của Thượng viện thẩm vấn trong một cuộc điều trần, sau đó sẽ có một cuộc bỏ phiếu để chấp thuận hoặc từ chối.

                        Celtic: Là Tổng thống đắc cử, ông Biden được Cơ quan Mật vụ tăng cường bảo vệ và mật danh của ông là Celtic. Những mật danh này được chính ứng viên lựa chọn. Ông Trump là Mogul còn bà Harris là Người tiên phong.
                    </div>
                </div>
                <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        Chiến dịch tranh cử của Tổng thống Trump tuyên bố đâm đơn kiện ở một số bang mà ông Biden đã thắng hoặc dẫn trước sít sao. Ông Trump cáo buộc có tình trạng gian lận bỏ phiếu nhưng không đưa ra bằng chứng.

                        Ông Trump có kế hoạch kiện tụng thế nào?

                        Nỗ lực loại bỏ một số phiếu bầu qua thư sẽ bắt đầu ở các tòa án tiểu bang nhưng có thể kết thúc tại Tòa án Tối cao. Tuy nhiên, các chuyên gia pháp lý cho rằng các vụ kiện khó thành công trong việc thay đổi kết quả. Cũng có thể sẽ có kiểm phiếu lại ở một số bang, theo yêu cầu của chiến dịch Trump, nhưng chúng khó mà đảo ngược chiến thắng của ông Biden.
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>   <div class="d-flex item-information">
                    <div class="left-information">
                        YYYY.MM.DD
                    </div>
                    <div class="right-information">
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include("Customer.Components.button-scroll")
@include("Customer.Components.footer")

</body>
</html>
@include("Customer.Components.script")
