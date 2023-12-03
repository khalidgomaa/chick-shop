<!DOCTYPE html>
<html lang="en">
<!-- head -->
@include('admin/head')
<style>
  
</style>
<!-- end of head  -->
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin/sidebar')
      <!-- partial -->
      @include('admin/navebar')

        <!--end of partial -->
   <!-- content -->
   <div class="main-panel">
          <div class="content-wrapper text-center">
            <h2 class="">ADD New Category</h2>
            <form >
                <input type="text" name="name" placeholder="add category name">
                <input type="submit" name="submit" value="add category" class="btn btn-primary">
            </form>
</div>
</div>
   
   <!-- end of content -->
    <!-- container-scroller -->
    @include('admin/scriptlinks')
   
  </body>
</html>