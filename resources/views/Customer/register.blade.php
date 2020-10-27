@extends("Customer.Components.layout")

    @section("content")
        <section style="background:#01897b ">
            <div class="container">
                <h1 class="login-h1">事前申し込み<br> 手数料優遇パス発行</h1>
            </div>
        </section>
        <section style="margin-bottom: 50px">
            <div class="container" style="border-bottom: 2px solid #01897b;">
                <h1 style="color: black" class="login-h1">Entry</h1>
            </div>
        </section>
        <div class="container">
        <form action="{{route("postRegister")}}" method="POST">
            @csrf
            @method("POST")
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    Ten chu han
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="text" name="tenchuhan" class="@error("tenchuhan") is-invalid  @enderror">
                    @error("tenchuhan")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    tenphienam
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="text" name="tenphienam" class="@error("tenphienam") is-invalid  @enderror">
                    @error("tenphienam")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    Gioi tinh
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="male" id="male"
                               value="男" {{old('male') == '男' ? 'checked' : ''}}>
                        <label class="form-check-label mr-3" for="male">男</label>
                        <input class="form-check-input" type="radio" name="male" id="female"
                               value="女" {{old('male') == '女' ? 'checked' : ''}}>
                        <label class="form-check-label mr-3" for="female">女</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    Sinh nhat
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault01">年</label>
                            <select class="birthday-select" name="birth_year" id="year_id">
                                <option></option>
                                @for ($year = 2019; $year >= 1930; $year--)
                                    <option
                                        {{old('birth_year') == $year ? 'selected' : ''}} value="{{$year}}">{{$year}}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault02">月</label>
                            <select class="birthday-select" name="birth_month" id="month_id">
                                <option></option>
                                @for ($month = 1; $month <= 12; $month++)
                                    <option
                                        {{old('birth_month') == $month ? 'selected' : ''}} value="{{sprintf('%02d', $month)}}">{{sprintf('%02d', $month)}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefaultUsername">Ngay</label>
                            <select class="birthday-select" name="birth_day" id="day_id">
                                <option></option>
                                @for ($day = 1; $day <= 31; $day++)
                                    <option
                                        {{old('birth_day') == $day ? 'selected' : ''}}  value="{{sprintf('%02d', $day)}}">{{sprintf('%02d', $day)}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                </div>


            </div>

            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    家族の一員     thanh phan gia dinh
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <div class="form-item form-group row">
                        <label class="item-title col-sm-4">家族構成</label>
                        <div class="item-input col-sm-8">
                            <select class="custom-select form-custom" name="thanhphangiadinh"
                                    value="{{ old('thanhphangiadinh') }}">
                                <option selected hidden></option>
                                <option {{old('thanhphangiadinh') == "未婚" ? 'selected' : ''}} value="未婚">未婚</option>
                                <option {{old('thanhphangiadinh') == "既婚" ? 'selected' : ''}} value="既婚">既婚</option>
                            </select>
                            @error('family_structure')
                            <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    住 所 Dia chi
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="text" name="diachinha" class="@error("diachinha") is-invalid  @enderror">
                    @error("diachinha")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    自宅固定電話番号 phone
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="number" class="form-custom" name="sodienthoaicodinh">
                    @error('sodienthoaicodinh')
                    <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    携帯電話番号 phone di dong
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="number" class="form-custom" name="sodienthoaididong">
                    @error('sodienthoaididong')
                    <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    パスワード       Mat Khau
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="password" name="password" class="@error("password") is-invalid  @enderror">
                    @error("password")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    パスワード(確認) confirm password
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="password"　class="w-custom-2 form-custom" name="password_confirmation" value="{{ old('password_confirmation') }}">
                    @error('password_confirmation')
                    <span class="text-danger" style="display: block;margin-bottom: -10px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    メールアドレス email
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="email" name="email" class="@error("email") is-invalid  @enderror">
                    @error("email")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    パスワード(確認) confirm Email
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="email" name="email" class="@error("email_confirm") is-invalid  @enderror">
                    @error("email_confirm")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    会社のウェブサイト website
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="text" name="linkweb" class="@error("linkweb") is-invalid  @enderror">
                    @error("linkweb")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">

                    本社 tru so
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="text" name="truso" class="@error("truso") is-invalid  @enderror">
                    @error("truso")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">


                    会社の電話番号 phone cty
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="text" name="sdtcty" class="@error("sdtcty") is-invalid  @enderror">
                    @error("sdtcty")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    会社何人 bao nhieu nguoi lam
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="number" name="songuoilam" class="@error("songuoilam") is-invalid  @enderror">
                    @error("songuoilam")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror

                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    ポジション chuc vu
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="text" name="chucvu" class="@error("chucvu") is-invalid  @enderror">
                    @error("chucvu")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror

                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">

                    勤続年数 nam cong tac
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="number" name="namcongtac" class="@error("namcongtac") is-invalid  @enderror">
                    @error("namcongtac")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror

                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">


                    労働時間 thoi gian lam viec
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <input type="text" name="thoigianlamviec" class="@error("thoigianlamviec") is-invalid  @enderror">
                @error("thoigianlamviec")
                <span class="error invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    疑わしい時間
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="text" name="thoigiannghi" class="@error("thoigiannghi") is-invalid  @enderror">
                    @error("thoigiannghi")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror

                </div>
            </div>


            <div class="row">
                <div class="col-sm-2 col-form-label item-left">


                    スポンサーの名前
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="text" name="nguoibaolanh" class="@error("nguoibaolanh") is-invalid  @enderror">
                    @error("nguoibaolanh")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror


                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    住所 dia chi
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="text" name="diachinguoibaolanh" class="@error("diachinguoibaolanh") is-invalid  @enderror">
                    @error("diachinguoibaolanh")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror

                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label item-left">
                    電話番号 sdt
                </div>
                {{--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>--}}
                <div class="col-sm-10 item-right">
                    <input type="number" name="sdtnguoibaolanh" class="@error("sdtnguoibaolanh") is-invalid  @enderror">
                    @error("sdtnguoibaolanh")
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror

                </div>
            </div>

            <div class="clear"></div>
            <p>
                <button class="button-login" type="submit">Register</button>
            </p>
        </form>
            <div class="entry-footer">
                <div class="entry-footer-title">
                    ●個人情報の取り扱いについて
                </div>
                <div class="entry-footer-content">
                    <div class="entry-footer-scroll">
                        <b>（1）事業者の氏名または名称</b><br>
                        BBS株式会社<br>
                        <b>（2）個人情報管理責任者</b><br>
                        BBS株式会社　代表取締役　中原正光<br>
                        <b>（3）個人情報の利用目的</b><br>
                        当社は、すべての事業で取扱う個人情報及び従業員等の個人情報を取得および利用する場
                        合には、利用目的を明確にし、特定された利用目的の達成に必要な範囲内で適正に個人情
                        報を取扱うとともに、目的外利用はいたしません。<br>
                        ＜各種サービスにて取得した個人情報＞<br>
                        当社の各サービスのご利用に際して、提供いただく個人情報の利用目的は、各サービス利
                        用規約の個人情報の取り扱いについての条項をご確認下さい。<br>
                        なお、当社が取得した会員情報については、会員規約第４条第３項に定める利用目的
                        の範囲内で利用します。<br>
                        ＜人事・採用関連、従業員から取得した個人情報＞<br>
                        採用選考に応募された方、当社に在籍されていた方、従業員の方の個人情報の利用目的
                        は、下記となります。<br>
                        ・採用の検討及び決定採用関係書類の送付<br>
                        ・労務管理、給与・賞与等の支払い、組合・互助組織・関係会社・出向会社等への連絡、
                        提供<br>
                        ・官公庁への届け出、報告<br>
                        ・労務関連法令への対応、連絡<br>
                        ・連絡文書の送付<br>
                        ＜お問い合わせ、個人情報保護法の開示請求にあたり取得した個人情報＞<br>
                        お問い合わせを通じてお客様からご提供いただきました個人情報は、お問い合わせ対応の
                        ために利用いたします。<br>
                        <b>（4）個人情報の提供</b><br>
                        当社は、個人情報について、あらかじめご本人から同意をいただいた提供先以外の第三者
                        に提供、開示等はいたしません。<br>
                        ただし、以下の場合は、個人情報を本人の同意なく提供することがあります。<br>
                        ・法令に基づく場合<br>
                        ・人の生命、身体または財産の保護のために必要がある場合であって、本人の同意を得る
                        ことが困難であるとき<br>
                        ・公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって、
                        本人の同意を得ることが困難であるとき<br>
                        ・国の機関、地方公共団体または当該機関・団体より委託を受けた者が法令に定める事務
                        を遂行するにあたり、当社が協力する必要がある場合であって、本人の同意を得ることに
                        より当該事務の遂行に支障を及ぼすおそれがあるとき<br>
                        ・犯罪捜査のため法律(刑事訴訟法)に基づく正規の手続きを経て、裁判所より捜索差押許
                        可状が発付されたとき<br>
                        <b>（5）個人情報の外部委託</b><br>
                        当社は、機密保持契約を交わしたうえで、業務の一部を委託業者に委託することがありま
                        す。委託業者は、委託業務を遂行するために必要な個人情報に接し、これを利用します
                        が、その業務以外の目的で利用することはありません。<br>
                        委託に際しては、個人情報の保護水準が、当社が設定する安全対策基準を満たす事業者を
                        選定し、適切な管理、監督を行います。<br>
                        <b>（6）個人情報の開示等</b><br>
                        当社は、お客様より個人情報の利用目的の通知、開示、訂正、削除、利用または第三者へ
                        の提供の停止の依頼を受けた場合は、すみやかに応じます。 なお、お客様のご登録頂いて
                        いる個人情報や、ご利用履歴につきましては、ご利用のサービスにログインいただくこと
                        でご確認いただけますので、そちらをご確認ください。また、書面での開示等の求めに応
                        じる手続きは、当社の定めた様式により承りますので、定めた様式にてお問い合わせくだ
                        さい。<br>
                        <b>（7）個人情報の管理、安全対策について</b><br>
                        個人情報への不正アクセス、個人情報の滅失、毀損、改ざんおよび漏えい等のリスクに対
                        して適切な予防措置を講ずることにより、個人情報の管理において、安全性、正確性の確
                        保を図ります。 また、万が一、問題が発生した場合には、被害の最小限化に努めるとと
                        もに、速やかに是正措置を実施します。
                    </div>
</div>

@endsection

