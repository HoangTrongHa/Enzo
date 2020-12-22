<!doctype html>
<html lang="en">
<head>
    @include("Customer.Components.head")
    <link rel="stylesheet" href="{{asset("css/docs.theme.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/owl.theme.default.min.css")}}">
</head>
<body>
<section class="screen-desktop">
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
                <i class="fa">&#xf144;</i>
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
                    <span class="more-future" data-toggle="modal" data-target="#future-1">MORE <i
                            class="fa">&#xf144;</i>

                    </span>
                        <div class="modal fade" id="future-1" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                    <div class="modal-header-future">
                                        <div class="box-modal-header">
                                            <div class="span-future-header">
                                                <span>ご利用者様の手数料が業界最安値</span>
                                            </div>
                                            <div class="img-modal-body">
                                                <img src="{{asset("image/feature1_img.png")}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="span-modal-body">

                                            <span>8～25％</span>
                                        </div>
                                    </div>
                                    <div class="footer-modal-body">
                                        <div class="box-footer-modal-body">

                                    <span>
ENZO独自のAIを使った適切なスコアリング審査によりご利用者様ごとに手数料や与信枠の最適化を実現し、適切な金額のご提案が可能                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-future">
            <span class="item-future-heading">
                独自の審査方法で 審査が最短で15分
            </span>
                    <hr>
                    <img src="{{asset("image/feature2_img.png")}}">
                    <div class="footer-future">
                    <span class="more-future" data-toggle="modal" data-target="#future-2">MORE <i
                            class="fa">&#xf144;</i>

                    </span>
                        <div class="modal fade" id="future-2" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                    <div class="modal-header-future">
                                        <div class="box-modal-header">
                                            <div class="span-future-header">
                                                <span>独自の審査方法で審査が最短15分</span>
                                            </div>
                                            <div class="img-modal-body">
                                                <img src="{{asset("image/feature2_img.png")}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="span-modal-body">
                                            <img src="{{asset("image/feature2_popup.png")}}">
                                        </div>
                                    </div>
                                    <div class="footer-modal-body">
                                        <div class="box-footer-modal-body">

                                    <span>
                               お金が必要なのはいつも急だから、せっかくファクタリング使いたくてもすぐに現金化できなきゃ意味がない。ENZOは最新のAI技術に
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <span class="more-future" data-toggle="modal" data-target="#future-3">MORE <i
                            class="fa">&#xf144;</i>
                        <div class="modal fade" id="future-3" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                    <div class="modal-header-future">
                                        <div class="box-modal-header">
                                            <div class="span-future-header">
                                                <span>独自の審査方法で審査が最短15分</span>
                                            </div>
                                            <div class="img-modal-body">
                    <img src="{{asset("image/feature3_img.png")}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="span-modal-body">
                                            <img src="{{asset("image/feature3_popup.png")}}">
                                        </div>
                                    </div>
                                    <div class="footer-modal-body">
                                        <div class="box-footer-modal-body">

                                    <span>
ENZOへの入金期限は次のお給料日から3営業日（お給料日含む）。
                                        <br>期日に余裕があるからお金の使い道をしっかり考えてからでも大丈                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </span>
                    </div>
                </div>
                <div class="item-future">
                    <span class="item-future-heading">
                ENZOが給料を買い取り 借金しないで現金化
            </span>

                    <hr>
                    <img src="{{asset("image/feature4_img.png")}}">
                    <div class="footer-future">
                    <span class="more-future" data-toggle="modal" data-target="#future-4">MORE <i
                            class="fa">&#xf144;</i></span>
                        <div class="modal fade" id="future-4" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                    <div class="modal-header-future">
                                        <div class="box-modal-header">
                                            <div class="span-future-header">
                                                <span>独自の審査方法で審査が最短15分</span>
                                            </div>
                                            <div class="img-modal-body">
                                                <img src="{{asset("image/feature4_img.png")}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="span-modal-body">
                                            <div class="body-future-4">
                                                <div class="item-body-future-4">
                                                    <span>自己破産<br> した方</span>
                                                </div>
                                                <div class="item-body-future-4">
                                                    <span>債務状況が<br> 気になる方</span>
                                                </div>
                                                <div class="item-body-future-4">
                                                    <span>給料が<br> 手渡しの方</span>
                                                </div>
                                            </div>
                                            <div class="body-future-4-footer">
                                                <div class="item-body-future-4">
                                                    <span>他社で <br>断られた方</span>
                                                </div>
                                                <div class="item-body-future-4">
                                                    <span>過払いの方</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-modal-body">
                                        <div class="box-footer-modal-body">

                                    <span>
 借金はお金を借りること。ENZOの給与ファクタリングはあなたの次の給料をENZOが買い取り、給料日前にお支払いするサービス。<br>
                                        借金はお金を借りること。ENZOの給与ファクタリングはあなたの次の給料をENZOが買い取り、給料日前にお支払いするサービス。
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                <a href="{{route("registercustomer")}}" class="item-button-footer-factoring">
                    <span>法人新規申し込みはこちら</span>
                    <img src="{{asset("image/play.png")}}" alt="">
                </a>
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

                            Tổng thống sắp tới tập hợp một nhóm được gọi là nhóm chuyển giao, bao gồm những người chuẩn
                            bị
                            nắm quyền ngay sau khi nhậm chức.

                            Nhóm của ông Biden hiện đã thiết lập một trang web cho quá trình tiếp quản. Họ sẽ chọn những
                            người sẽ phục vụ trong Nội các, bàn bạc các ưu tiên chính sách và chuẩn bị cầm quyền. Các
                            thành
                            viên trong nhóm sẽ đến các cơ quan liên bang để nhận báo cáo tóm tắt về những thứ như thời
                            hạn
                            chót, ngân sách và nhân sự. Họ sẽ thu thập tất cả thông tin đó cho đội ngũ nhân sự sắp đảm
                            trách
                            công việc. Một số người của chính quyền trước có thể vẫn tiếp tục phục vụ.

                            Năm 2016, Tổng thống Barack Obama đã gặp người kế nhiệm Donald Trump và những bức ảnh trong
                            Phòng Bầu dục của họ phản ánh bầu không khí ấm áp chút ít giữa hai người.
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            Vị cựu Phó Tổng thống đã dành nhiều tháng trời để tập hợp nhóm chuyển giao và quyên tiền mặt
                            để
                            tạo quỹ. Nhưng Cơ quan Quản lý Dịch vụ Tổng hợp - có nhiệm vụ chính thức công nhận tổng
                            thống
                            đắc cử và cung cấp ngân quỹ cũng như quyền tiếp cận các cơ quan liên bang mà nhóm của ông
                            cần,
                            cho đến nay vẫn chưa công nhận chiến thắng của chính trị gia Dân chủ. Người đứng đầu cơ quan
                            này, Emily Murphy (được ông Trump bổ nhiệm) khẳng định chưa có "xác nhận" nào về người chiến
                            thắng bầu cử được đưa ra.

                            Nhóm ông Biden được cho là đang chuẩn bị hành động pháp lý nếu chính quyền ông Trump tiếp
                            tục
                            trì hoãn việc chuyển giao.
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            Tổng thống đắc cử: Một ứng viên tổng thống thắng cử nhưng chưa tuyên thệ nhậm chức sẽ được
                            gọi
                            như vậy.

                            Nội các: Joe Biden sẽ sớm bắt đầu công bố những người mà ông ấy muốn có trong nội các của
                            mình,
                            đội ngũ cấp cao nhất của chính phủ. Đội này bao gồm những người đứng đầu của tất cả các bộ
                            và cơ
                            quan chủ chốt.

                            Điều trần phê chuẩn: Nhiều vị trí hàng đầu của chính phủ do Tổng thống bổ nhiệm cần được
                            Thượng
                            viện chấp thuận. Những người được ông Biden chọn sẽ được các ủy ban của Thượng viện thẩm vấn
                            trong một cuộc điều trần, sau đó sẽ có một cuộc bỏ phiếu để chấp thuận hoặc từ chối.

                            Celtic: Là Tổng thống đắc cử, ông Biden được Cơ quan Mật vụ tăng cường bảo vệ và mật danh
                            của
                            ông là Celtic. Những mật danh này được chính ứng viên lựa chọn. Ông Trump là Mogul còn bà
                            Harris
                            là Người tiên phong.
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            Chiến dịch tranh cử của Tổng thống Trump tuyên bố đâm đơn kiện ở một số bang mà ông Biden đã
                            thắng hoặc dẫn trước sít sao. Ông Trump cáo buộc có tình trạng gian lận bỏ phiếu nhưng không
                            đưa
                            ra bằng chứng.

                            Ông Trump có kế hoạch kiện tụng thế nào?

                            Nỗ lực loại bỏ một số phiếu bầu qua thư sẽ bắt đầu ở các tòa án tiểu bang nhưng có thể kết
                            thúc
                            tại Tòa án Tối cao. Tuy nhiên, các chuyên gia pháp lý cho rằng các vụ kiện khó thành công
                            trong
                            việc thay đổi kết quả. Cũng có thể sẽ có kiểm phiếu lại ở một số bang, theo yêu cầu của
                            chiến
                            dịch Trump, nhưng chúng khó mà đảo ngược chiến thắng của ông Biden.
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
                        <div class="left-information">
                            YYYY.MM.DD
                        </div>
                        <div class="right-information">
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>
                    </div>
                    <div class="d-flex item-information">
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
</section>
<section class="smart-phone">
    @include("Customer.Components-sp.header")
    <section id="banner-smart">
        <div class="container banner-content">
            <div class="margin-span-top-smart">
            <span>
              給料即日払い<small>の</small>
            </span>
            </div>
            <img src="{{asset("image/ENZO_bank_logo_white.png")}}">
            <div class="d-flex justify-content-center margin-circle">
                <div class="circle-banner-smart">
                <span>
                    <span>業界<br>最安値の<br>手数料</span>
                </span>
                </div>
                <div class="circle-banner-smart">
                <span>
                   <span>業界<br>最安値の<br>手数料</span>-
                </span>
                </div>
            </div>
            <div class="footer-banner">
                <span>必要な時に給料が受け取れて、安心して暮らせる！<br>借金しないで現金を調達できる、給料ファクタリング！</span>
            </div>
            <div class="footer-img">
                <img src="{{asset("image/enzo_topbb_sp_w750xh1334px.png")}}" id="hand-up">
            </div>
        </div>
    </section>
    <section id="about_enzo_sp">
        <div class="container">
            <div class="logo-about-us">

                <img src="{{asset("image/ENZO_bank_logo_black.png")}}">
            </div>
            <div class="title-header-about-us">
            <span>
                の給料即日払いサービス（ファクタリング）とは
            </span>
            </div>
            <div class="title-content-about-us">
                次の給料を買い取り即日現金化
            </div>
            <div class="title-content-about-us-2">
                借金しないで現金を調達できる画期的なサービスです
            </div>
            <img src="{{asset("image/scheme_diagram_sp.png")}}" alt="">
            <div class="title-content-about-us-3">
                サービスの詳細<i class="fa">&#xf144;</i>
            </div>

        </div>
    </section>
    <section id="how-to-us-sp">
        <div class="container">
            <div class="logo-how-to-us">
                <img src="{{asset("image/ENZO_bank_logo_black.png")}}">
            </div>
            <div class="title-header-how-to-us-sp">
            <span>
                の特徴
            </span>
            </div>
            <div id="demos">
                <div class="container">
                    <div class="col-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item-how-to-us">
                                <div class="span-item">
                                   <span>
                                       ご利用者様の手数料が<br>業界最安値
                                   </span>
                                    <hr>
                                    <div class="img-content">
                                        <img src="{{asset("image/feature1_img.png")}}" alt="">
                                    </div>
                                    <a href="#" class="more-button">
                                        MORE<i class="fa">&#xf144;</i>
                                    </a>
                                </div>
                            </div>

                            <div class="item-how-to-us">
                                <div class="span-item">
                                   <span>
                                       ご利用者様の手数料が<br>業界最安値
                                   </span>
                                    <hr>
                                    <div class="img-content">
                                        <img src="{{asset("image/feature2_img.png")}}" alt="">
                                    </div>
                                    <a href="#" class="more-button">
                                        MORE<i class="fa">&#xf144;</i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-how-to-us">
                                <div class="span-item">
                                   <span>
                                       ご利用者様の手数料が<br>業界最安値
                                   </span>
                                    <hr>
                                    <div class="img-content">
                                        <img src="{{asset("image/feature3_img.png")}}" alt="">
                                    </div>
                                    <a href="#" class="more-button">
                                        MORE<i class="fa">&#xf144;</i>
                                    </a>
                                </div>
                            </div>
                            <div class="item-how-to-us">
                                <div class="span-item">
                                   <span>
                                       ご利用者様の手数料が<br>業界最安値
                                   </span>
                                    <hr>
                                    <div class="img-content">
                                        <img src="{{asset("image/feature4_img.png")}}" alt="">
                                    </div>
                                    <a href="#" class="more-button">
                                        MORE<i class="fa">&#xf144;</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="factoring-sp">
        <div class="header-factoring-sp">
            <div class="border-a-button">

                <a class="button-header-sp" href="">
                    <div>
                        こんな時に！
                    </div>
                </a>
            </div>
            <div class="img-factoring">
                <img src="{{asset("image/ENZO_bank_logo_black.png")}}" alt="">
            </div>
            <div class="span-header-sp">
                <span>
                    の使い方
                </span>
            </div>
        </div>
        <div class="container content-factoring-sp">
            <div class="circle-factoring" id="margin-top-circle">
                <span>
                給料日前で<br>
                財布が寂しい
                </span>
            </div>
            <div class="circle-factoring">
                <span>
                急用で<br> どうしても<br> お金が必要
                </span>
            </div>
        </div>
        <div class="container content-factoring-sp">
            <div class="circle-factoring">
                <span>
                給料日前で<br>
                財布が寂しい
                </span>
            </div>
            <div id="margin-circle-comment-sp" class="circle-factoring">
                <span>
                急用で<br> どうしても<br> お金が必要
                </span>
            </div>
            <div class="circle-factoring">
                <span>
                急用で<br> どうしても<br> お金が必要
                </span>
            </div>

        </div>
        <img src="{{asset("image/human_illustration_sp-svg.png")}}" alt="">
        <div class="container d-flex justify-content-between box-comment-factoring-sp">
            <div class="comment-factoring-1">
                <div class="span-comment">
                    <span>
                        給料日目前
                    </span>
                </div>
            </div>
            <div class="comment-factoring-other-color">
                <div class="span-comment">
                <span>
                    今月は前半で
                </span>
                </div>
                <div class="span-comment">
                   <span>
                       お金を使いすぎた
                   </span>
                </div>
            </div>
            <div class="comment-factoring">
                <div class="span-comment">
                   <span>
                                           お金が必要

                    </span>
                </div>
                <div class="span-comment">
                   <span>
                       大事な友達の結婚式で

                   </span>
                </div>
            </div>
            <div class="comment-factoring-other-color">
                <div class="span-comment">来月の給料を</div>
                <div class="span-comment">
                   <span>
                       ファクタリング
                   </span>
                </div>
            </div>
            <div class="comment-factoring-2">
                <div class="span-comment">来月の給料日に返済</div>
            </div>
        </div>
    </section>
    <section id="information-sp">
        <div class="container">
            <div class="logo-information-sp">
                <img src="{{asset("image/ENZO_bank_logo_black.png")}}">
            </div>
            <div class="title-information-sp">
            <span>
               （ファクタリング）の使い方
            </span>
            </div>
            <div class="title-content-information-sp">
                かんたん<span>  ４</span> ステップ
            </div>
        </div>
        <div class="container d-flex justify-content-between">
            <div class="item-information-sp">
                <img src="{{asset("image/no_01.png")}}" class="numer-factoring">
                <img src="{{asset("image/factoring_step1_illustration.png")}}" class="img-factoring">
                <span>新規申し込みにて<br> ユーザー情報登録 <br>写真・口座登録</span>
            </div>
            <div class="item-information-sp">
                <img src="{{asset("image/no_02.png")}}" class="numer-factoring">
                <img src="{{asset("image/factoring_step2_illustration.png")}}" class="img-factoring">
                <span>給料債権<br> 売却申し込み </span>
            </div>
        </div>
        <div class="container d-flex justify-content-between" id="footer-item-sp">
            <div class="item-information-sp">
                <img src="{{asset("image/no_03.png")}}" class="numer-factoring">
                <img src="{{asset("image/factoring_step3_illustration.png")}}" class="img-factoring">
                <span>入金確認 <br>（申請後最速15分）</span>
            </div>
            <div class="item-information-sp">
                <img src="{{asset("image/no_04.png")}}" class="numer-factoring">
                <img src="{{asset("image/factoring_step4_illustration.png")}}" class="img-factoring">
                <span>給料債権買い戻し<br> 指定口座へご入金を <br>お願いします </span>
            </div>
        </div>
        <div class="container justify-content-center d-flex button-footer-information">
            <a href="#" class="button-register-customer">
                法人新規申し込みはこちら <img src="{{asset("image/play.png")}}" alt="">
            </a>
        </div>
        <div class="container justify-content-center d-flex button-footer-information-enterprise">
            <a href="#" class="button-register-customer">
                法人新規申し込みはこちら <img src="{{asset("image/play.png")}}" alt="">
            </a>
        </div>
        <div class="container">
            <div class="information-sp-scoll">
                <span id="title-scroll">Information</span><br>
                <span id="footer-scroll">新着情報</span>
                <div class="container content-information-sp">
                    <div class="wall-paper">
                        <div class="top-wall-paper">
                            <span class="date-time-information">
                                YYYY.MMMM.DDDD
                            </span>
                        </div>
                        <div class="botton-wall-paper">
                            <span class="content-span-information">そして、トラックに積み替えられ、最終目的地である神奈川県相模原市のJAXA宇宙科学研究所に午前10時半すぎに到着しました。研究所には専用の施設が設けられていて、外気に触れることなく中のサンプルを取り出したり、顕微鏡や機器で分析したりできるようになっていますプロジェクトチームは記者会見を開いて、カプセルの状態などについて説明する方針です。カプセルのふたが開けられるのは今月中旬になると見られ、半年ほどかけて試料の記録をとり、来年の6月ごろから本格的な分析を行うことになっています。</span>
                        </div>
                        <div class="top-wall-paper">
                            <span class="date-time-information">
                                YYYY.MMMM.DDDD
                            </span>
                        </div>
                        <div class="botton-wall-paper">
                            <span class="content-span-information">
                                探査機「はやぶさ2」の、小惑星の砂が入ったとみられるカプセルは、最終目的地である神奈川県相模原市のJAXA＝宇宙航空研究開発機構の施設にトラックで到着しました。オーストラリアの砂漠地帯で6日に回収された、探査機「はやぶさ2」のカプセルは、昨夜、飛行機でオーストラリアを出発して、8日午前7時すぎに羽田空港に到着しました。


                            </span>
                        </div>
                        <div class="top-wall-paper">
                            <span class="date-time-information">
                                YYYY.MMMM.DDDD
                            </span>
                        </div>
                        <div class="botton-wall-paper">
                            <span class="content-span-information">
                                研究所に続く沿道には一般の人たちが集まり、「おかえりなさい」などと書かれた手作りの横断幕やボードを掲げトラックの到着を待ちました。

                                そして午前10時半ごろ、カプセルを積んだとみられるトラックが姿を見せると集まった人は写真を撮りながら「おかえり」と拍手をして迎えました。

                                トラックはそのまま研究所内に入り、専用施設の近くに停車すると、連絡を受けたプロジェクトチームのメンバーらが走って駆けつけました。

                                そして、トラックの前に並んで、バンザイと叫んだり、拍手をしたりして、カプセルの帰還を喜んでいました

                            </span>
                        </div>
                        <div class="top-wall-paper">
                            <span class="date-time-information">
                                YYYY.MMMM.DDDD
                            </span>
                        </div>
                        <div class="botton-wall-paper">
                            <span class="content-span-information">
東京 江東区の豊洲市場で水産仲卸業者を中心に新型コロナウイルスの感染の確認が160人になりました。

東京都は「感染経路が追えないケースが多いため、クラスターではない」と説明しています。

東京・豊洲市場ではことし8月以降、水産仲卸業者の従業員を中心に感染の確認が相次ぎ、481の事業者で自主的な検査を進めた結果、3111人中、71人の感染が確認されました。

このほか、散発的に感染が確認された人や濃厚接触者として検査を受けて確認された89人を合わせると、市場全体では7日までに160人になりました。市場の業務に影響は、ないということです。

都によりますと、160人のうち感染経路が分かっている人は16人で、中には同じ水産仲卸業者の従業員もいるということです。

都は「同じ事業者でも短期間で一気に5人以上が確認されたことはなく、別の人の感染が分かるまで2週間以上、空いたケースもあり、保健所からは濃厚接触者にあたらないと説明された。感染経路が追えないケースが多いため、クラスターではない。ただ、対策が甘かったのではないかという声は真摯（しんし）に受け止めている」と話しています。
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="footer-sp">
        <div class="container margin-footer-sp">
            <div class="button-footer">
                <a href="" class="button-content-sp">法人新規申し込みはこちら <img src="{{asset("image/play.png")}}" alt=""></a>
            </div>
            <div class="button-footer">
                <a href="" class="button-content-sp">個人新規申し込みはこちら <img src="{{asset("image/play.png")}}" alt=""></a>
            </div>
            <div class="button-footer">
                <a href="" class="button-content-sp">チャットで問い合わせる <img src="{{asset("image/play.png")}}" alt=""></a>
            </div>
            <div class="img-footer">
                <img src="{{asset("image/logo_footer_2.png")}}" alt="">
            </div>
            <div class="img-footer">
                <span>株式会社XXXXXXXX </span>
            </div>
            <div class="img-footer">
                <span>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</span>
            </div>
        </div>
        <div class="container">
            <div class="footer-play">
                <div class="margin-center-footer-sp">
                    <div>▶︎ よくある質問</div>
                    <div>▶︎ 利用規約</div>
                    <div> ▶︎ サイトマップ</div>
                    <div> ▶︎ サイトマップ</div>
                </div>
            </div>
            <div class="footer-copy">

                <span>Copyright © 2019 XXXXXXXXXXXXX All rights reserved. </span>
            </div>
        </div>

    </section>
</section>
<script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay:true,
            autoplayTimeout:5000,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        })
    })
</script>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v9.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/zh_HK/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="102536525038100"
     theme_color="#fa3c4c"
     logged_in_greeting="「こんにちは！どうすればお手伝いできますか？」"
     logged_out_greeting="「こんにちは！どうすればお手伝いできますか？」">
</div>
</body>
</html>
