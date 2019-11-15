@extends('layouts.admin-layout')

@section('content')
<div class="content-wrapper">

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">All Products</h3>
            </div>
            <!-- /.box-header -->
            <ul>
            @foreach($products as $product)
            <li><a href="{{route('products.show', $product->id)}}">{{$product->name}}</li>
            @endforeach
            </ul>
          </div>

        </div>
        <!--/.col (left) -->
    </div>

    </section>
    <!-- /.content -->
  </div>
@endsection
