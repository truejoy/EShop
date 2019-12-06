@extends('layouts.admin-layout')


@section('content')
<form role="form" method="POST" action="{{ action('ProductController@store') }}">
    @csrf
    <div class="box-body">
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">
    </div>
    <div class="form-group">
        <label for="SKU">SKU</label>
        <input type="text" class="form-control" id="SKU" placeholder="Enter Product SKU" name="SKU">
    </div>
    <div class="form-group">
        <label for="category">Enter Category</label>
        <input type="text" class="form-control" id="category" placeholder="Enter Product Category" name="category">
    </div>
    <div class="form-group">
        <label for="sub_category">Enter Sub Category</label>
        <input type="text" class="form-control" id="sub_category" placeholder="Enter Product Sub Category" name="sub_category">
    </div>
    <div class="form-group">
        <label for="price">Enter Price</label>
        <input type="text" class="form-control" id="price" placeholder="Enter Product Price" name="price">
    </div>
    <div class="form-group">
        <label for="discount">Enter Discount</label>
        <input type="text" class="form-control" id="discount" placeholder="Enter Product Discount" name="discount">
    </div>

    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile" name="images">

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
@endsection
