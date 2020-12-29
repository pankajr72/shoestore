<?php

namespace App\Http\Controllers;

use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productAttributes = ProductAttribute::all();
        return view('admin.products_attributes.index',['productAttributes' => $productAttributes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = \App\Models\Product::all();
        return view('admin.products_attributes.create',['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'product_id' => 'required',
            'size' => 'required',
            'stock' => 'required'
        ]);

        $productAttribute = new ProductAttribute($request->all());
        $productAttribute->save();

        return redirect()->route('product-attributes.index')->with('success', 'Product Attributes Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductAttribute  $productAttribute
     * @return \Illuminate\Http\Response
     */
    public function show(ProductAttribute $productAttribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductAttribute  $productAttribute
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductAttribute $productAttribute)
    {
        $products = \App\Models\Product::all();
        return view('admin.products_attributes.edit',['products' => $products, 'productAttribute' => $productAttribute]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductAttribute  $productAttribute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductAttribute $productAttribute)
    {
        $validateData = $request->validate([
            'product_id' => 'required',
            'size' => 'required',
            'stock' => 'required'
        ]);

        $productAttribute->fill($request->all());
        $productAttribute->save();

        return redirect()->route('product-attributes.index')->with('success', 'Product Attributes Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductAttribute  $productAttribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductAttribute $productAttribute)
    {
        $productAttribute->delete();

        return redirect()->route('product-attributes.index')->with('success', 'Product Attributes Successfully Deleted');

    }
}
