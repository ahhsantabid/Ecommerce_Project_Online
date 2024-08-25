<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        .category {
            width: 300px;
            height: 40px;
            /* margin: 0px 0px 10px 0px; */
            margin-right: 15px;
        }

        .heading_category {
            color: white;
            font-size: 2.2rem;
            margin-top: 50px;
            margin-bottom: 15px;

        }

        .category_table {
            width: 67rem;
        }

        .Cat_table {
            margin-top: 2rem;
        }

        .cat_data {
            color: white;
        }

        .cat_heading {
            color: rgb(252, 68, 68);
        }

        .product_table_data {
            color: white;
        }

        .product_search {
            height: 2.5rem;
            width: 21rem;
            border-radius: 8px;
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


                    <form action="{{ url('product_search') }}" method="GET">
                        <input type="text" name="product_search" class="product_search" />
                        <button type="submit" class="btn btn-danger">Search</button>
                    </form>

                    <div>
                        <h2 class="heading_category">Product List</h2>
                    </div>


                </div>


                <div class=" Cat_table table-deg" style="margin-left: 4rem;">
                    <table class="table-striped category_table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="cat_heading">SL</th>
                                <th scope="col" class="cat_heading">Product Name</th>
                                <th scope="col" class="cat_heading"> Price</th>
                                <th scope="col" class="cat_heading"> Discription</th>
                                <th scope="col" class="cat_heading"> Qty</th>
                                <th scope="col" class="cat_heading"> Category</th>
                                <th scope="col" class="cat_heading">Image</th>
                                <th scope="col" class="cat_heading">Action</th>


                        </thead>
                        <tbody>

                            @foreach ($products as $product)
                                <th scope="row" class="product_table_data">{{ $loop->iteration }}</th>
                                <td class="product_table_data">{{ $product->product_name }}</td>
                                <td class="product_table_data">{{ $product->product_price }}</td>
                                <td class="product_table_data">{!! Str::limit($product->product_discription, 50) !!}</td>
                                <td class="product_table_data">{{ $product->product_qty }}</td>
                                <td class="product_table_data">{{ $product->product_category }}</td>
                                <td class=""><img width="120" height="120"
                                        src="products/{{ $product->product_img }}" alt="product_img"></td>
                                {{-- <td>{{$product->product_name}}</td> --}}
                                <td>
                                    <a href="{{ url('edit_product', $product->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('delete_product', $product->id) }}" class="btn btn-danger"
                                        onclick="return confirm('Are you sure?')">Delete</a>
                                </td>



                                <tr>
                            @endforeach

                        </tbody>
                    </table>



                </div>

                <div class="d-felx justify-content-center" style="margin-left: 63rem;margin-top: 23px;">

                    {{ $products->links() }}

                </div>



            </div>
        </div>
        </footer>
    </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('/admin_css/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/admin_css/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('/admin_css/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admin_css/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('/admin_css/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/admin_css/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/admin_css/js/charts-home.js') }}"></script>
    <script src="{{ asset('/admin_css/js/front.js') }}"></script>
</body>

</html>
