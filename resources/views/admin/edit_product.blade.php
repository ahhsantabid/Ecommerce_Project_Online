<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')

  <style>
    .heading_category{
        color: white;
    }
    .update_Product{
        color: white;
    }

    .form-label{
        color: rgb(190, 0, 0);
    }

    .update_product_btn{
        color: white;
    }
  </style>
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
         
            <form action="{{url('update_product',$product->id)}}" method="post">

                @csrf

                <div>
                    <h2 class="heading_category">Update Product</h2>
                </div>
                <div class="container">
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>

                        <input type="text" class="update_Product form-control" name= "update_product_name" value="{{$product->product_name}}">

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price</label>

                        <input type="text" class="update_Product form-control" name= "update_product_price" value="{{$product->product_price}}">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Discription</label>

                        <textarea type="text" class="update_Product form-control" name= "update_product_des" value="">{{$product->product_discription}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Qty</label>

                        <input type="text" class="update_Product form-control" name= "update_product_qty" value="{{$product->product_qty}}">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Category</label>

                        <input type="text" class="update_Product form-control" name= "update_product_category" value="{{$product->product_category}}">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Category</label>

                        <select name="update_product_category" id="">

                            <option value="{{$product->product_category}}">{{$product->product_category}}</option>


                            @foreach ($category as $category)
                              <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                            @endforeach
                        </select>

                    </div>


                        <input type="submit" class="btn btn-danger form-control update_product_btn" name="update_product" id="" value="Update Product">
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