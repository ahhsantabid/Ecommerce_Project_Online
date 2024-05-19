<!DOCTYPE html>
<html>
  <head> 
    <style type="text/css">
    .category{
        width: 300px;
        height: 40px;
        /* margin: 0px 0px 10px 0px; */
        margin-right: 15px;
    }
    .heading_category{
        color: white;
        font-size: 2.2rem;
        margin-top: 50px;
        margin-bottom: 15px;

    }
    .category_table{
        width: 67rem;
        }

        .Cat_table{
            margin-top: 2rem;
        }

        .cat_data{
            color: white;
        }

        .cat_heading{
            color: rgb(153, 4, 4);
        }

    </style>
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



         
            <form action="{{url('add_category')}}" method="post">

                @csrf

                <div>
                    <h2 class="heading_category">Add Category</h2>
                </div>
                <div>
                    
                        <input type="text" class="category" name= "category">
                        <input type="submit" class="btn btn-danger" name="add_category" id="" value="Add Category">
                </div>
            </form>

          </div>
            
          
          <div class="Cat_table">
            <table class="table category_table">
                <thead>
                  <tr>
                    <th scope="col" class="cat_heading">SL</th>
                    <th scope="col" class="cat_heading">Category Name</th>
                  
                </thead>
                <tbody>

                    @foreach ($category as $category )
                    <tr>
                        <td class = "cat_data">{{$loop->iteration}}</td>
                        <td class = "cat_data">{{$category->category_name}}</td>
                          </tr>
                        
                    @endforeach
                 
                 
                </tbody>
              </table>
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