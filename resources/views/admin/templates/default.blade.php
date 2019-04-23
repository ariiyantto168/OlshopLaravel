<!DOCTYPE html>
<html>
 
 @include('admin.templates.partials._head')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 @include('admin.templates.partials._header')
  <!-- Left side column. contains the logo and sidebar -->
  
 @include('admin.templates.partials._sidebar')
 @include('admin.templates.partials._control-sidebar')

  <div class="content-wrapper">  
    @yield('content')  

  </div>
  
  
  
  @include('admin.templates.partials._footer')

  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('admin.templates.partials._scripts')

</body>
</html>
