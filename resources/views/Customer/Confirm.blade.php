@extends("Customer.Components.layout")
@section("content")
    <section id="banner-register">
        <div class="title-register">
            <span>申し込み</span>
        </div>
    </section>
    <section id="confirm-customer">
        <div class="confirm-customer">
                    <div class="content-confirm">
                        <div class="box-yeallow">
                            <span>申請受け付けました。</span>
                            <div>
                                連絡が来るまで、しばらくお待ちください。
                            </div>
                        </div>
                    </div>
                <a href="{{route("home")}}" class="button-confirm">
                    <span>
戻る                    </span>
                </a>
        </div>
    </section>
@endsection

