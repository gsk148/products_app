<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        Product::create($request->input());

        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('products');
    }


    // Filters
    public function oilFilter()
    {
        $products = Product::where('type', '=', 'Масла, смазки')->get();
        return view('product.index', compact('products'));
    }

    public function liquidsFilter()
    {
        $products = Product::where('type', '=', 'Технические жидкости')->get();
        return view('product.index', compact('products'));
    }

    public function PVLFilter()
    {
        $products = Product::where('category', '=', 'PVL')->get();
        return view('product.index', compact('products'));
    }

    public function CVLFilter()
    {
        $products = Product::where('category', '=', 'CVL')->get();
        return view('product.index', compact('products'));
    }

    public function INDFilter()
    {
        $products = Product::where('category', '=', 'IND')->get();
        return view('product.index', compact('products'));
    }

    public function gFamilyFilter()
    {
        $products = Product::where('brand', '=', 'G-Family')->get();
        return view('product.index', compact('products'));
    }

    public function gazpromneftFilter()
    {
        $products = Product::where('brand', '=', 'Газпромнефть')->get();
        return view('product.index', compact('products'));
    }
}
