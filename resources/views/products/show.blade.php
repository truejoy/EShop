@extends('layouts.admin-layout')

@section('content')


<div class="content-wrapper">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div>
                    <h3>{{$product->name}}</h3>
                </div>
                <div>
                    <a href="{{route('products.edit', $product->id)}}">Edit</a> |
                    <a href="{{route('products.destroy', $product->id)}}">Delete</a>
                </div>
            </div>
        </div>

    </div>
</div>
    @endsection
