<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{"/"}}">

        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Enzo Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{"/"}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route("listAccount")}}">
            <i class="far fa-id-card fa-tachometer-alt"></i>
            <span>ユーザーリスト </span>
{{--                <span style="color: red;margin: 30px;-webkit-text-stroke: medium;">{{$countUser}}</span>--}}

        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("index-appnew")}}">
            <i class="fa fa-folder-open fa-tachometer-alt"></i>
            <span>新規申し込みリスト ung dung moi nhat </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("checkImager")}}">
            <i class="fas fa-image fa-tachometer-alt"></i>
            <span>写真承認リスト phe duyet anh</span>
{{--            <span style="color: red;margin: 30px;-webkit-text-stroke: medium;">{{$wait}}</span>--}}
        </a>


    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("loan.index")}}">
            <i class="far fa-id-card fa-tachometer-alt"></i>
            <span>売却審査リスト danh sach ban hang</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("index-banking")}}">
            <i class="fa fa-credit-card fa-tachometer-alt"></i>
            <span>送金リスト danh sach chuyen tien</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("refund")}}">
            <i class="fa fa-check fa-tachometer-alt"></i>
            <span>返金リスト</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("delay")}}">
            <i class="fas fa-exclamation-circle fa-tachometer-alt"></i>
            <span>遅延者リスト danh sach tri hoan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="material-icons fa-tachometer-alt"></i>
            <span>ブラックリスト danh sach den</span></a>
    </li>


{{--    <li class="nav-item">--}}
{{--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">--}}
{{--            <i class="fas fa-fw fa fa-money"></i>--}}
{{--            <span>Loan Management</span>--}}
{{--        </a>--}}
{{--        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">--}}
{{--            <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                <a class="collapse-item" href="{{route("Loan-Creation")}}">Loan term creation</a>--}}
{{--                <a class="collapse-item" href="#">Pending Authorization</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
