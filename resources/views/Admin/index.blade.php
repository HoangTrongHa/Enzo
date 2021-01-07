<!DOCTYPE html>
<html lang="en">
<head>

    @include("Admin.Components.head")

</head>

<body id="page-top">


<div id="wrapper">
    <!-- Sidebar -->
@include("Admin.Components.navbar-nav")    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
@include("Admin.Components.content-wrapper")
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">出発する準備ができました?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">現在のセッションを終了する準備ができている場合は、下の[ログアウト]を選択してください。</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">キャンセル</button>
                <a class="btn btn-primary" href="{{route("logout-ad")}}">ログアウト</a>
            </div>
        </div>
    </div>
</div>
{!! Toastr::message() !!}
<script src="{{asset("../../../vendor/jquery/jquery.min.js")}}"></script>
<script src="{{asset("../../../vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset("../../../vendor/jquery-easing/jquery.easing.min.js")}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset("js/sb-admin-2.min.js")}}"></script>

<!-- Page level plugins -->
<script src="{{asset("../../../vendor/chart.js/Chart.min.js")}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset("js/demo/chart-area-demo.js")}}"></script>
<script src="{{asset("js/demo/chart-pie-demo.js")}}"></script>
</body>
</html>
