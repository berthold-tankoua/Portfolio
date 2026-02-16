<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('backend/bootstrap-tagsinput/tagsinput.css') }}">
    <title>@yield('title')</title>
    <link href="{{ asset('/frontend/favicon.png') }}" rel="icon">
    <link href="{{ asset('/frontend/favicon.png') }}" rel="apple-touch-icon">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

</head>
<style>

    .toast {
      background-color: #030303 !important;
    }
    .toast-info {
      background-color: #3276b1 !important;
    }
    .toast-info2 {
      background-color: #2f96b4 !important;
    }
    .toast-error {
      background-color: #bd362f !important;
    }
    .toast-success {
      background-color: #51a351 !important;
    }
    .toast-warning {
      background-color: #f89406 !important;
    }

  </style>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('components.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('components.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('admin')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Brecht Tankoua | Portofolio</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('user.logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>

        @if(Session::has('message'))

          var type = "{{ Session::get('alert-type', 'info') }}";
          switch (type) {
            case 'info':
              toastr.info(" {{ Session::get('message') }} ")
              break;

            case 'success':
              toastr.success(" {{ Session::get('message') }} ")
              break;

            case 'warning':
              toastr.warning(" {{ Session::get('message') }} ")
              break;

            case 'error':
              toastr.error(" {{ Session::get('message') }} ")
              break;
          }

        @endif

      </script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('backend/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('backend/js/demo/chart-pie-demo.js') }}"></script>
        <!-- Page level plugins -->
        <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>
        <script src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('backend/bootstrap-tagsinput/tagsinput.js') }}"></script>
</body>

</html>
