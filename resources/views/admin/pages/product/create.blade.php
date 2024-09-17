@extends('admin.layout.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.product.create') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        <textarea name="description" class="form-control" rows="8" cols="80"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" class="form-control" name="price" id="title" aria-describedby="emailHelp">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="number" class="form-control" name="quantity" id="title" aria-describedby="emailHelp">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" name="product_image" id="product_image" aria-describedby="emailHelp">
                       
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
        </div>
    </footer>
    <!-- partial -->
</div>

@endsection