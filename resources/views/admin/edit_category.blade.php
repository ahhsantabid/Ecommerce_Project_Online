<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')
  </head>
  <body>
  @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
         
            <form action="{{url('update_category',$category->id)}}" method="post">

                @csrf

                <div>
                    <h2 class="heading_category">Update Category</h2>
                </div>
                <div>
                    
                        <input type="text" class="update_category" name= "updateCategory" value="{{$category->category_name}}">
                        <input type="submit" class="btn btn-warning" name="update_category" id="" value="Update Category">
                </div>


            </form>
          </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/admin_css/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admin_css/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admin_css/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admin_css/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admin_css/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admin_css/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admin_css/js/charts-home.js')}}"></script>
    <script src="{{asset('/admin_css/js/front.js')}}"></script>
  </body>
</html>