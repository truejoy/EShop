@extends('layouts.admin-layout')

@section('content')

<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="row">
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
        <div class="box-header with-border">
        <h3 class="box-title">Edit Product | {{$product->name}}</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('products.update', $product->id) }}">
            @method('PATCH')
            @csrf

            <div class="box-body">
            <div class="form-group">
                <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name" value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="SKU">SKU</label>
                <input type="text" class="form-control" id="SKU" placeholder="Enter Product SKU" name="SKU" value="{{$product->SKU}}">
            </div>
            <div class="form-group">
                <label for="category">Enter Category</label>
                <input type="text" class="form-control" id="category" placeholder="Enter Product Category" name="category" value="{{$product->category}}">
            </div>
            <div class="form-group">
                <label for="sub_category">Enter Sub Category</label>
                <input type="text" class="form-control" id="sub_category" placeholder="Enter Product Sub Category" name="sub_category" value="{{$product->sub_category}}">
            </div>
            <div class="form-group">
                <label for="price">Enter Price</label>
                <input type="text" class="form-control" id="price" placeholder="Enter Product Price" name="price" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <label for="discount">Enter Discount</label>
                <input type="text" class="form-control" id="discount" placeholder="Enter Product Discount" name="discount" value="{{$product->discount}}">
            </div>

            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile" name="images" value="{{$product->images}}">

                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
                <label>
                <input type="checkbox"> Check me out
                </label>
            </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>

    </div>
    <!--/.col (left) -->
</div>

</section>
<!-- /.content -->
</div>
@endsection
