@extends("Customer.layout.app")
@section('css')
    <link rel="stylesheet" href="{{asset("css/register.css")}}">
@endsection
@section("content")
    <section id="banner-register">
        <div class="title-register">
            <span>個人新規申し込み</span>
        </div>
    </section>
    <form action="{{route("postRegister")}}" method="POST" id="form-register">
        {{csrf_field()}}
        @method("POST")
        <section id="body-register">
            <div class="container header-body">
                <span id="header-body">Entry</span>
                <br>
                <span id="header-body-2">
                申し込み
        </span>
            </div>
            <div class="container footer-header-body">
                <div class="margin-footer-body">

                </div>

            </div>
            <div class="container">
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register">
                            <span>氏名（漢字)</span><span class="span-red">※</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input  class="input-full" type="text" name="tenchuhan" value="{{old("tenchuhan")}}">
                            @error('tenchuhan')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register">
                            <span>氏名(カナ)</span><span class="span-red">※</span>
                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="text" name="tenphienam" value="{{old("tenphienam")}}">
                            @error('tenphienam')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register">
                            <span>性別</span><span class="span-red">※</span>
                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <div class="radio-type">
                                <input class="input-radio"  type="radio" name="male" value="男">
                                <span>男</span><br>
                            </div>
                            <div class="radio-type">
                                <input class="input-radio" type="radio" name="male" value="女">
                                <span>女</span><br>

                            </div>
                            <div class="radio-type">
                                @error("male")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register">
                            <span>生年月日</span><span class="span-red">※</span>
                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <select class="input-three" name="birth_year" id="year_id">
                                <option></option>
                                @for ($year = 2019; $year >= 1930; $year--)
                                    <option
                                        {{old('birth_year') == $year ? 'selected' : ''}} value="{{$year}}">{{$year}}
                                    </option>
                                @endfor
                            </select>年
                            <select class="input-three" name="birth_month" id="month_id">
                                <option></option>
                                @for ($month = 1; $month <= 12; $month++)
                                    <option
                                        {{old('birth_month') == $month ? 'selected' : ''}} value="{{sprintf('%02d', $month)}}">{{sprintf('%02d', $month)}}</option>
                                @endfor
                            </select>月
                            <select class="input-three" name="birth_day" id="day_id">
                                <option></option>
                                @for ($day = 1; $day <= 31; $day++)
                                    <option
                                        {{old('birth_day') == $day ? 'selected' : ''}}  value="{{sprintf('%02d', $day)}}">{{sprintf('%02d', $day)}}</option>
                                @endfor
                            </select>日
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register">
                            <span>家族構成</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="text" name="family_structure">
                            @error('family_structure')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register">
                            <span>住所</span><span class="span-red">※</span>
                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="text" name="diachinha" value="{{old("diachinha")}}">
                            @error("diachinha")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register">
                            <span>住居の種類</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="number" name="type_of_residence">
                            @error('type_of_residence')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register">
                            <span>住居人数</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="number" name="number_of_residents">
                            @error('number_of_residents')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register">
                            <span>携帯電話</span><span class="span-red">※</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="number" name="sodienthoaididong" value="{{old("sodienthoaididong")}}">
                            @error('sodienthoaididong')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register">
                            <span>自宅番号</span>
                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="text" name="diachinha">
                            @error('diachinha')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>スマホメールアドレス</span><span class="span-red">※</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="text" name="electricmail">
                            @error('electricmail')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>スマホメールアドレス</span><span class="span-red">※</span>
                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <span>確認用</span>
                            <input class="input-one-letter" type="text" name="electricmail-confirm">
                            @error('electricmail-confirm')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>E-mailアドレス</span><span class="span-red">※</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="email" name="email">
                            @error('email')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>E-mailアドレス</span><span class="span-red">※</span>
                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <span>確認用</span>
                            <input class="input-one-letter" type="email" name="email-confirm">
                            @error('email-confirm')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>パスワード</span><span class="span-red">※</span>
                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="password" name="password">
                            @error('password')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>パスワード</span><span class="span-red">※</span>
                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <span>確認用</span>
                            <input class="input-one-letter" type="password" name="password-confirm">
                            @error('password-confirm')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>勤務先本社名</span><span class="span-red">※</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="text" name="truso">
                            @error('truso')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>勤務先本社住所</span><span class="span-red">※</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="text" name="head_office_address">
                            @error('head_office_address')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>勤務先本社電話番号</span><span class="span-red">※</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="number" name="sdtcty">
                            @error('sdtcty')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>常駐先名</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="text" name="nguoibaolanh">
                            @error('nguoibaolanh')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>常駐先住所</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="text" name="diachinguoibaolanh">
                            @error('diachinguoibaolanh')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>常駐先電話番号</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="number" name="sdtnguoibaolanh">
                            @error('sdtnguoibaolanh')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>従業員数</span>
                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="number" name="songuoilam">
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>雇用形態</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="text" name="chucvu">
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>勤続年数</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="number">
                        </div>

                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>勤続時間帯</span>
                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="text" name="thoigianlamviec">
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="left-register">
                        <div class="margin-left-register-2">
                            <span>お休み</span>

                        </div>
                    </div>
                    <div class="right-register">
                        <div class="margin-right-register">
                            <input class="input-full" type="text" name="thoigiannghi">
                        </div>

                    </div>
                </div>
                <div class="check-box-register">
                    <input type="checkbox" name="checkbox">
                    <span>個人情報の取り扱いについて</span>
                    @error('checkbox')
                    <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="rules">
                    <div class="content-information">
                        <div class="d-flex item-information">
                            <div class="content-rules">
                        <span>Exactly
Trao cho anh, trao cho anh đê
Trao cho anh, trao cho anh đê
Tay chân đâu hết rồi nào?
Yeah yeah
Yeah yeah
Yeah yeah
1 2
Bóng ai đó nhẹ nhàng vụt qua nơi đây
Quyến rũ ngây ngất loạn nhịp làm tim mê say
Cuốn lấy áng mây theo con sóng xô dập dìu
Nụ cười ngọt ngào cho ta tan vào phút
Giây miên man quên hết con đường về eh
Lemme know your name
Chẳng thể tìm thấy lối về eh
Lemme know your name
Điệu nhạc hoà quyện trong ánh mắt đôi môi
Dẫn lối những bối rối rung động khẽ lên ngôi
Chạm nhau mang vô vàn đắm đuối vấn vương dâng tràn
Lấp kín chốn nhân gian
Làn gió hoá sắc hương mơ màng
Một giây ngang qua đời cất tiếng nói không nên lời
Ấm áp với trao tay ngàn sao trời lòng càng thêm chơi vơi
Dịu êm không gian bừng sáng
Đánh thức muôn hoa mừng quấn quýt hát
Ngân nga từng chút níu bước chân em dừng
Bao ý thơ tương tư ngẩn ngơ
Níu giữ nơi mê cung đẹp thẫn thờ
Hãy trao cho anh
Hãy trao cho anh
Hãy trao cho anh
Thứ anh đang mong chờ
Hãy trao cho anh
Hãy trao cho anh
Hãy mau làm điều ta muốn vào khoảnh khắc này đi
Hãy trao cho anh
Hãy trao cho anh
Hãy trao anh, trao cho anh những yêu thương nồng cháy
Trao anh ái ân nguyên vẹn đong đầy
La-la-la-la-la-la-la-la
La-la-la-la-la-la-la-la
Woo woo (la-la-la-la-la-la-la-la)
Tay chân nào, tay chân đây
La-la-la-la-la-la-la-la
Ya ya
Câu ca du dương vang bên tai âu yếm đong đưa mây trong sương mờ
Yêu thương trao mê say thôi miên sẽ khiến con tim tuân theo tôn thờ
Em như nam châm ngọt ngào hút, ngọt ngào ngọt ngào hút
Vạn vật hiến dâng đôi chân si mê lao đao vây quanh ta yêu thương tô mờ
One
Ay
Señorita người thướt tha kiêu sa tựa ngàn hoa
Gìn giữ những điều đẹp hơn cả những gì người ta ban tặng
Chạm nhau mang vô vàn đắm đuối vấn vương dâng tràn
Lấp kín chốn nhân gian
Làn gió hoá sắc hương mơ màng
Một giây ngang qua đời cất tiếng nói không nên lời
Ấm áp với trao tay ngàn sao trời lòng càng thêm chơi vơi
Dịu êm không gian bừng sáng
Đánh thức muôn hoa mừng quấn quýt hát
Ngân nga từng chút níu bước chân em dừng
Bao ý thơ tương tư ngẩn ngơ
Níu giữ nơi mê cung đẹp thẫn thờ
Hãy trao cho anh
Hãy trao cho anh
Hãy trao cho anh
Thứ anh đang mong chờ
Hãy trao cho anh
Hãy trao cho anh
Hãy mau làm điều ta muốn vào khoảnh khắc này đi
Hãy trao cho anh
Hãy trao cho anh
Hãy trao anh, trao cho anh những yêu thương nồng cháy
Trao anh ái ân nguyên vẹn đong đầy
La-la-la-la-la-la-la-la
La-la-la-la-la-la-la-la
La-la-la-la-la-la-la-la
La-la-la-la-la-la-la-la
Em cho ta ngắm thiên đàng vội vàng trong chốc lát
Như thanh âm chứa bao lời gọi mời trong khúc hát
Liêu xiêu ta xuyến xao rạo rực khát khao trông mong
Dịu dàng lại gần nhau hơn, dang tay ôm em vào lòng
Trao đi, trao hết đi đừng ngập ngừng che giấu nữa
Quên đi, quên hết đi ngại ngùng, lại gần thêm chút nữa
Chìm đắm giữa khung trời riêng hai ta như dần hoà quyện
Mắt nhắm mắt, tay đan tay hồn lạc về miền trăng sao
Gì nào?
Em cho ta ngắm thiên đàng vội vàng trong chốc lát
Như thanh âm chứa bao lời gọi mời trong khúc hát
Liêu xiêu ta xuyến xao rạo rực khát khao trông mong
Dịu dàng lại gần nhau hơn, dang tay ôm em vào lòng
Trao đi, trao hết đi đừng ngập ngừng che giấu nữa
Quên đi, quên hết đi ngại ngùng, lại gần thêm chút nữa
Tay đâu? Tay đâu? Tay đâu? (chìm đắm giữa khung trời riêng hai ta như dần hoà quyện)
One, two, three (mắt nhắm mắt, tay đan tay hồn lạc về miền trăng sao)
Hãy trao cho anh
Hãy trao cho anh
Hãy trao cho anh
La-la-la-la-la-la-la-la
Hãy trao cho anh
Hãy trao cho anh
Hãy trao cho anh
La-la-la-la-la-la-la-la
Hãy trao cho anh
Hãy trao cho anh
Hãy trao cho anh
La-la-la-la-la-la-la-la
Hãy trao cho anh
Hãy trao cho anh
OK (hãy trao cho anh)
Thứ anh đang mong chờ
Sơn Tùng M-TP
                        Liệu rằng chia tay trong em có quên được câu ca
Tình yêu khi xưa em trao cho anh đâu nào phôi pha
Đừng lừa dối con tim anh em sẽ không buông tay anh được đâu mà
(Yeah)
Gạt nước mắt yếu đuối đó cứ quay lại nơi anh
Em biết rằng cơn mưa qua đâu có che lấp được nụ cười đau thương kia
Nước mắt đó vẫn rơi vì em, oh baby
(No baby)

Đừng nhìn anh nữa, đôi mắt ngày xưa giờ ở đâu, em còn là em?
Em đã khác rồi, em muốn quay lưng, quên hết đi
(Yeah)
Tình yêu trong em giờ toàn giả dối
Anh không muốn, vùi mình trong mơ
Anh không muốn, đi tìm giấc mơ ngày hôm nao
Đừng vội vàng em hãy là em của ngày hôm qua
(Oh-oh-oh-oh)
Xin hãy là em của ngày hôm qua
(Oh-oh-oh-oh)
Đừng bỏ mặc anh một mình nơi đây
(Oh-oh-oh-oh)
Dừng lại và xoá nhẹ đi kí ức
(Oh-oh-oh-oh)

Mưa đang rơi
Đôi tay buông lơi
Mình anh ngồi đây tìm lại những khoảng không dường như chơi vơi
Thật ngu ngốc vu vơ
Lang thang trên con đường tìm lại giấc mơ
Dường như đã quá xa
Và em không còn thiết tha
Nắm lấy đôi tay anh muốn giữ em ở lại
Nếu cứ tiếp tục cả hai sẽ phải khổ đau
Đừng cố tỏ ra mạnh mẽ
Đó đâu phải là em vậy đi
(Tạm biệt em)

Phải không em hỡi người?
Tìm lại thời gian của riêng
Nhưng sao trong anh đã quá
Sự thật đang bủa vây nơi anh, anh
(Forget baby)

Đừng nhìn anh nữa, đôi mắt ngày xưa giờ ở đâu, em còn là em?
Em đã khác rồi, em muốn quay lưng, quên hết đi
Tình yêu trong em giờ toàn giả dối
Anh không muốn, vùi mình trong mơ
Anh không muốn, đi tìm giấc mơ ngày hôm nao
Đừng vội vàng em hãy là em của ngày hôm qua
(Oh-oh-oh-oh)
Xin hãy là em của ngày hôm qua
(Oh-oh-oh-oh)
Đừng bỏ mặc anh một mình nơi đây
(Oh-oh-oh-oh)
Dừng lại và xoá nhẹ đi kí ức
(Oh-oh-oh-oh)

Em mang tiếng cười
Em mang hạnh phúc đi rời xa
Xung quanh chỉ còn mỗi anh và những nỗi đau
Hãy xoá sạch hết đi, đừng vấn vương
Vì em, do em, chính em
Hãy mang hết đi
Người cứ vội vàng, người cứ vội vàng
(Oh-oh)
No, no, no, no, no, no, no, no, no, no
Người bước xa rồi, và người đã bước xa rồi

Đừng vội vàng em hãy là em của ngày hôm qua
(Oh-oh-oh-oh)
Xin hãy là em của ngày hôm qua
(Oh-oh-oh-oh)
Đừng bỏ mặc anh một mình nơi đây
(Oh-oh-oh-oh)
Dừng lại và xoá nhẹ đi kí ức
(Oh-oh-oh-oh)
Đừng vội vàng em hãy là em của ngày hôm qua
(Oh-oh-oh-oh)
Xin hãy là em của ngày hôm qua
(Oh-oh-oh-oh)
Đừng bỏ mặc anh một mình nơi đây
(Oh-oh-oh-oh)
Dừng lại và xoá nhẹ đi kí ức
(Oh-oh-oh-oh) Người theo hương hoa mây mù giăng lối
Làn sương khói phôi phai đưa bước ai xa rồi
Đơn côi mình ta vấn vương hồi ức trong men say chiều mưa buồn !
Ngăn giọt lệ ngừng khiến khoé mi sầu bi
Đường xưa nơi cố nhân từ giã biệt li
Cánh hoa rụng rơi
Phận duyên mong manh rẽ lối trông mơ ngày tương phùng !!!!
Ohhhh ...
Tiếng khóc cuốn theo làn gió bay
Thuyền ai qua sông lỡ quên vớt ánh trăng tàn nơi này
Trống vắng bóng ai dần hao gầy
Ehhhhhh
Lòng ta xin nguyện khắc ghi trong tim tình nồng mê say
Mặc cho tóc mây vương lên đôi môi cay
Bâng khuâng mình ta lạc trôi giữa đời
Ta lạc trôi giữa trời !!!!
Rap:
Đôi chân lang thang về nơi đâu
Bao yêu thương giờ nơi đâu
Câu thơ tình xưa vội phai mờ
Theo làn sương tan biến trong cõi mơ
Mưa bụi vương trên làn mi mắt
Ngày chia lìa hoa rơi buồn hiu hắt
Tiếng đàn ai thêm sầu tương tư lặng mình trong chiều hoàng hôn ... Tan vào lời ca ..???
Lối mòn đường vắng một mình ta
Nắng chiều vàng úa nhuộm ngày qua
Xin đừng quay lưng xoá
Đừng mang câu hẹn ước kia rời xa
Yên bình nơi nào đây
Chôn vùi theo làn mây
Ehhhh...</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="button-register">
                    <button type="submit">戻って</button>
                </div>
            </div>
        </section>
    </form>

@endsection
