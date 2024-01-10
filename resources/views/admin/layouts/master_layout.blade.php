<!DOCTYPE html>
<html>
    @include('admin/partials/head')
  <body class="skin-blue">
    <div class="wrapper">
    @include('admin/partials/header')
    @include('admin/partials/sidemenu')

      @yield('content')
      
    
      </div><!-- /.content-wrapper -->

    @include('admin/partials/footer')
     

    </div><!-- ./wrapper -->
    @include('admin/partials/footer_js')
      @yield('footerjs')


  </body>
</html>