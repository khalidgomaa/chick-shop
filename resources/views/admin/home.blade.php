<!DOCTYPE html>
<html lang="en">
<!-- head -->
@include('admin/head')

<!-- end of head  -->
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin/sidebar')
      <!-- partial -->
      @include('admin/navebar')

        <!--end of partial -->
   <!-- content -->
   @include('admin/content')
   
   <!-- end of content -->
    <!-- container-scroller -->
    @include('admin/scriptlinks')
   
  </body>
</html>