<!DOCTYPE html>
<html>
@includeIf('Admin.Layouts.head')

<title>{{ config('app.name', 'Laravel') }}</title>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @includeIf('Admin.Layouts.navBar')
    @includeIf('Admin.Layouts.saidBar_Lateral')
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

   @includeIf('Admin.Layouts.footer')

   @includeIf('Admin.Layouts.saidBar_Lateral2')
</div>
<!-- ./wrapper -->
@includeIf('Admin.Layouts.js')

</body>
</html>

