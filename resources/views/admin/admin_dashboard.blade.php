<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Admin Dashboard</title>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <link href="{{ asset('adminBackend/assets/plugins/inputtags/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
  <!--favicon-->
  <link rel="icon" href="{{ asset('adminBackend/assets/images/favicon.ico') }}" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="{{ asset('adminBackend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('adminBackend/assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('adminBackend/assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('adminBackend/assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('adminBackend/assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('adminBackend/assets/css/app-style.css') }}" rel="stylesheet"/>
  <!-- data tables -->
  <link href="{{ asset('adminBackend/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('adminBackend/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

  <style>
    .preloader {
    background-color: #fff;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 999999;
    -webkit-transition: 0.6s;
    transition: 0.6s;
    margin: 0 auto;
}

.preloader img.jump {
    max-height: 50px;
}
  </style>
</head>

<body class="bg-dark">

  <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center">
                <img src="{{ asset('frontend/assets/imgs/theme/loading1.gif') }}" alt="" width="500px" />
            </div>
        </div>
    </div>
</div>

<div id="wrapper">
  @include('admin.body.sidebar')
  @include('admin.body.header')
  <div class="clearfix"></div>

  <div class="content-wrapper">
    @yield('admin')
  </div>



  <script src="{{ asset('adminBackend/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('adminBackend/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminBackend/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('adminBackend/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminBackend/assets/plugins/bootstrap-datatable/js/jszip.min.js') }}"></script>
  <script src="{{ asset('adminBackend/assets/plugins/bootstrap-datatable/js/pdfmake.min.js') }}"></script>
  <script src="{{ asset('adminBackend/assets/plugins/bootstrap-datatable/js/vfs_fonts.js') }}"></script>
  <script src="{{ asset('adminBackend/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('adminBackend/assets/plugins/bootstrap-datatable/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('adminBackend/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js') }}"></script>
  <script src="{{asset('adminBackend/assets/plugins/inputtags/js/bootstrap-tagsinput.js')}}"></script>

  <script>
    $(document).ready(function() {
      // Default data table
      $('#default-datatable').DataTable();

      var table = $('#example').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
      });

      table.buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
    });
  </script>

  <script>
       $(window).on("load", function () {
        $("#preloader-active").delay(10).fadeOut("slow");
        $("body").delay(50).css({
            overflow: "visible",
        });
        $("#onloadModal").modal("show");
    });
  </script>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('adminBackend/assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('adminBackend/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('adminBackend/assets/js/bootstrap.min.js') }}"></script>
  <!-- simplebar js -->
  <script src="{{ asset('adminBackend/assets/plugins/simplebar/js/simplebar.js') }}"></script>
  <!-- waves effect js -->
  <script src="{{ asset('adminBackend/assets/js/waves.js') }}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ asset('adminBackend/assets/js/sidebar-menu.js') }}"></script>
  <!-- Custom scripts -->
  <script src="{{ asset('adminBackend/assets/js/app-script.js') }}"></script>
  <!-- Chart js -->
  <script src="{{ asset('adminBackend/assets/plugins/Chart.js/Chart.min.js') }}"></script>
  <!-- Peity Chart -->
  <script src="{{ asset('adminBackend/assets/plugins/peity/jquery.peity.min.js') }}"></script>
  <!-- Index js -->
  <script src="{{ asset('adminBackend/assets/js/index3.js') }}"></script>
  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="{{ asset('adminBackend/assets/js/code.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
  <script src="{{ asset('adminbackend/assets/plugins/input-tags/js/tagsinput.js') }}"></script>
  

  <script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch (type) {
      case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;

      case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;

      case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;

      case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break;
    }
    @endif
  </script>
</body>
</html>
