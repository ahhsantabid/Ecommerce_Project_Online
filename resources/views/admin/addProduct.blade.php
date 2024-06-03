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
   
  
          @if (\Session::has('success'))
              <div class="alert alert-success">
              <ul>
                  <li>{!! \Session::get('success') !!}</li>
              </ul>
             </div>
          @endif
  
  
  
           
              <form action="{{url('upload_product')}}" method="post" enctype="multipart/form-data">
  
                  @csrf

                  <div class="container">
                  <div>
                    <h2 class="heading_category" style="color: #DB6574 !important;">Add Product</h2>
                </div>
            
                    <div class="mb-3">
                      <label class="form-label">Product Name</label>
                      <input type="text" class="form-control" name="product_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price</label>
                        <input type="number" class="form-control" name="product_price">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Product Distription</label>
                        <input type="text" class="form-control" name="product_discription">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Product Quantity</label>
                        <input type="number" class="form-control" name="product_qty">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Product Category</label>
      
                     <select name="product_category">

                        
                        <option value="">Select the Category</option>

                        @foreach ($category as  $category)                     
                        <option value="{{ $category->category_name}}">{{ $category->category_name}}</option>
                        @endforeach

                     </select>              
                       
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Product Image</label>
                        <input type="file" class="form-control" name="product_img">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
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