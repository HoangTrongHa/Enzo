<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route("home.admin")}}">
        <div class="sidebar-brand-icon">
{{--            <i class="fas fa-laugh-wink"></i>--}}
{{--            <img src="{{asset("image/ENZO_bank_logo_white.png")}}" alt="">--}}
        </div>
        <div class="sidebar-brand-text mx-3">Enzo Admin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{route("home.admin")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route("listAccount")}}">
            <i class="far fa-id-card fa-tachometer-alt"></i>
            <span>ユーザーリスト </span>

            <i style="color: red">{{$countUser}}</i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("checkImager")}}">
            <i class="fas fa-image fa-tachometer-alt"></i>
            <span>写真承認リスト</span>
            <i style="color: red">{{$wait}}</i>
        </a>


    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("loan.index")}}">
            <i class="far fa-id-card fa-tachometer-alt"></i>
            <span>売却審査リスト </span>
            <i style="color: red">{{$loancus}}</i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("index-banking")}}">
            <i class="fa fa-credit-card fa-tachometer-alt"></i>
            <span>送金リスト</span>
            <i style="color: red">{{count($loan)}}</i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("refund")}}">
            <i class="fa fa-check fa-tachometer-alt"></i>
            <span>返金リスト</span>
            <i style="color: red">{{count($refund)}}</i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("delay")}}">
            <i class="fas fa-exclamation-circle fa-tachometer-alt"></i>
            <span>遅延者リスト</span>
            <i style="color: red">{{$delay}}</i>

        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("list-dark")}}">
            <i class="fa fa-close"></i>
            <span>ブラックリスト</span>
            <i style="color: red">{{$listDark}}</i>
        </a>


    </li>

<!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
