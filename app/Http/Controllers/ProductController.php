<?php

namespace App\Http\Controllers;

use App\ViewModels\ICreateProductModel;
use App\ViewModels\IEditProductModel;
// use App\ViewModels\IViewProductModel;
use App\Services\IProductService;
use Illuminate\Http\Request;

use App\Models\Product;


class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IProductService $productService)
    {
        $products = $productService->showAll();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (!$request->user()->hasRole('admin')) {
            return abort(401, "This action is not allowed");
        }
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ICreateProductModel $viewModel)
    {
        if (!$request->user()->hasRole('admin')) {
            return abort(401, 'This action is not allowed');
        }

        $viewModel->createProduct($request);

        return redirect('products/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, IProductService $productService)
    {
        //
        $product = $productService->show($id);

        return view('products/show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('products/edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, IEditProductModel $viewModel)
    {
        //
        if (!$request->user()->hasRole('admin')) {
            return abort(401, 'This action is not allowed');
        }

        $viewModel->updateProduct($request, $id);

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, IProductService $productService)
    {
        $productService->deleteProduct($id);

        return view('products/index');
    }
}
