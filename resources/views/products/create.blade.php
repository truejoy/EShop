@extends('layouts.admin-layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Product
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- Default box -->
    <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Title</h3>

        <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
            <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        Start creating your amazing application!
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        Footer
    </div>
    <!-- /.box-footer-->
    </div>
    <!-- /.box -->

    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create A Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
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
          </div>

        </div>
        <!--/.col (left) -->
    </div>

    </section>
    <!-- /.content -->
  </div>
@endsection
