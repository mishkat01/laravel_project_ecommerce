<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rukada/color-admin/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Nov 2019 15:04:09 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title> Admin Dashboard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="
https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css
" rel="stylesheet">
  <!--favicon-->
  <link rel="icon" href="{{asset('adminBackend/assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="{{asset('adminBackend/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('adminBackend/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('adminBackend/assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('adminBackend/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('adminBackend/assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('adminBackend/assets/css/app-style.css')}}" rel="stylesheet"/>
  <!-- data tables -->
  <link href="{{asset('adminBackend/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('adminBackend/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  
</head>

<body class="bg-dark">

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
    @include('admin.body.sidebar')
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
@include('admin.body.header')
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
        @yield('admin')
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <!-- <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a> -->
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<!-- @include('admin.body.footer') -->
	<!--End footer-->
   
  </div><!--End wrapper-->


  <script src="{{asset('adminBackend/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('adminBackend/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('adminBackend/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('adminBackend/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('adminBackend/assets/plugins/bootstrap-datatable/js/jszip.min.js')}}"></script>
  <script src="{{asset('adminBackend/assets/plugins/bootstrap-datatable/js/pdfmake.min.js')}}"></script>
  <script src="{{asset('adminBackend/assets/plugins/bootstrap-datatable/js/vfs_fonts.js')}}"></script>
  <script src="{{asset('adminBackend/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('adminBackend/assets/plugins/bootstrap-datatable/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('adminBackend/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js')}}"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('adminBackend/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('adminBackend/assets/js/popper.min.js')}}"></script>
  <script src="{{asset('adminBackend/assets/js/bootstrap.min.js')}}"></script>
	
  <!-- simplebar js -->
  <script src="{{asset('adminBackend/assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- waves effect js -->
  <script src="{{asset('adminBackend/assets/js/waves.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset('adminBackend/assets/js/sidebar-menu.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{asset('adminBackend/assets/js/app-script.js')}}"></script>
  <!-- Chart js -->
  <script src="{{asset('adminBackend/assets/plugins/Chart.js/Chart.min.js')}}"></script>
  <!--Peity Chart -->
  <script src="{{asset('adminBackend/assets/plugins/peity/jquery.peity.min.js')}}"></script>
  <!-- Index js -->
  <script src="{{asset('adminBackend/assets/js/index3.js')}}"></script>

  <script src="
https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js
"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
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

<!-- data table -->

 
  
</body>

<!-- Mirrored from codervent.com/rukada/color-admin/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Nov 2019 15:04:10 GMT -->
</html>
