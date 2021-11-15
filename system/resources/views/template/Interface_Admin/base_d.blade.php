<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin FashionStore.net</title>

  <!-- Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- EndBoostrap -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url ('public')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url ('public')}}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{url ('public')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url ('public')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<style>


  #g1 a:hover {
    background: black;

  }
</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.Interface_Admin.section_Admin.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.Interface_Admin.section_Admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          {{-- @include('template.utils.notif') --}}
        </div>
      </div>
    </div>
    
    @yield('konten')
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
  @include('template.Interface_Admin.section_Admin.footer')
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{url ('public')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url ('public')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url ('public')}}/dist/js/adminlte.min.js"></script>

{{-- data tables --}}
<script src="{{url ('public')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url ('public')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url ('public')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url ('public')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
  $(".table-datatable").DataTable();
</script>
</body>
</html>
