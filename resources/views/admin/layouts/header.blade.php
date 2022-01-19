<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/fonts/icomoon/style.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/summernote/summernote-bs4.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/dist/image-uploader.min.css">
    <script type="text/javascript">
      
      function previewFile(input){
          var file = $("input[type=file]").get(0).files[0];

          if(file){
              var reader = new FileReader();

              reader.onload = function(){
                  $("#previewImg").attr("style", "height: 180px; display:block;");
                  $("#previewImg").attr("src", reader.result);
              }

              reader.readAsDataURL(file);
          }
      }
      function previewFiles(input){
          var file = $("input[type=file]").get(0).files[0];

          if(file){
              var reader = new FileReader();

              reader.onload = function(){
                  $("#previewImg").attr("style", "height: 180px; display:block;");
                  $("#previewImg").attr("src", reader.result);
              }

              reader.readAsDataURL(file);
          }
      }
    </script>
    <style type="text/css">
      input[type="file"] {
        display: block;
      }
      .imageThumb {
        max-height: 75px;
        border: 2px solid;
        padding: 1px;
        cursor: pointer;
      }
      .pip {
        display: inline-block;
        margin: 10px 10px 0 0;
      }
      .remove {
        display: block;
        background: #444;
        border: 1px solid black;
        color: white;
        text-align: center;
        cursor: pointer;
      }
      .remove:hover {
        background: white;
        color: black;
      }
      .side-menu{
        position: fixed !important;
      }

    </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" id="menu-collps" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/logout') }}">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 side-menu">
      <!-- Brand Logo -->
      <!-- <a href="#" class="brand-link">
        <img src="{{URL::to('/')}}/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a> -->

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{URL::to('/')}}/assets/img/default-avatar.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header">Dashboard</li>
            <li class="nav-item">
              <a href="{{url('admin/banners')}}" class="nav-link {{ 'admin/banners' == request()->path() ? 'active' : ''}}">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Banners
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('admin/abouts')}}" class="nav-link {{ 'admin/abouts' == request()->path() ? 'active' : ''}}">
                <i class="nav-icon fab fa-servicestack"></i>
                <p>
                  Abouts
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('admin/service')}}" class="nav-link {{ 'admin/service' == request()->path() ? 'active' : ''}}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Service
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('admin/hours')}}" class="nav-link {{ 'admin/hours' == request()->path() ? 'active' : ''}}">
                <i class="nav-icon far fa-user"></i>
                <p>
                  Hours
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('admin/prices')}}" class="nav-link {{ 'admin/prices' == request()->path() ? 'active' : ''}}">
                <i class="nav-icon fas fa-link"></i>
                <p>
                  Prices
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('admin/quotes/index')}}" class="nav-link {{ 'admin/quotes/index' == request()->path() ? 'active' : ''}}">
                <i class="nav-icon fas fa-house-user"></i>
                <p>
                  Quotes
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('admin/clients/index')}}" class="nav-link {{ 'admin/clients/index' == request()->path() ? 'active' : ''}}">
                <i class="nav-icon fas fa-address-card"></i>
                <p>
                  Clients
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      
      <!-- Main content -->
      @yield('content')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{URL::to('/')}}/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{URL::to('/')}}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{URL::to('/')}}/assets/dist/js/adminlte.min.js"></script>

  <!-- Select2 -->
  <script src="{{URL::to('/')}}/assets/plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="{{URL::to('/')}}/assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="{{URL::to('/')}}/assets/plugins/moment/moment.min.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- date-range-picker -->
  <script src="{{URL::to('/')}}/assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="{{URL::to('/')}}/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{URL::to('/')}}/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="{{URL::to('/')}}/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- BS-Stepper -->
  <script src="{{URL::to('/')}}/assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- dropzonejs -->
  <script src="{{URL::to('/')}}/assets/plugins/dropzone/min/dropzone.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{URL::to('/')}}/assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{URL::to('/')}}/assets/dist/js/demo.js"></script>
  <!-- SweetAlert2 -->
  <script src="{{URL::to('/')}}/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="{{URL::to('/')}}/assets/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/assets/dist/image-uploader.min.js"></script>
  <!-- dropzonejs -->
  <!-- DataTables  & Plugins -->
  <script src="{{URL::to('/')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/summernote/summernote-bs4.min.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/jszip/jszip.min.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="{{URL::to('/')}}/assets/plugins/dropzone/min/dropzone.min.js"></script>
  <script type="text/javascript">
    (function($){
      $('.textarea').summernote()
    	jQuery('#menu-collps').click(function(){
    		jQuery('.sidebar-mini').toggleClass("sidebar-collapse");
    	});
      $('.select2').select2();
      @yield('scripts')
      @if ($message = Session::get('success'))
          toastr.success('{{Session::get("success")}}')
      @endif
      if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
      console.log(files);
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
    })(jQuery);
  </script>
</body>

</html>