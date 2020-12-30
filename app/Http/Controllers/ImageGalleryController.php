<?php

namespace App\Http\Controllers;

use App\Models\ImageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imageGalleries = ImageGallery::all();
        return view('admin.image_gallery.index',['imageGalleries' => $imageGalleries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = \App\Models\Product::all();
        return view('admin.image_gallery.create',['products' => $products]);
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
            'image' => 'required'
        ]);

        $imageGallery = new ImageGallery();
        $imageGallery->product_id = $request->product_id;
        $imageGallery->image = '/storage' . Str::substr(Storage::putFile('public/images',$request->image),6);
        
        $imageGallery->save();

        return redirect()->route('image-galleries.index')->with('success', 'Product Image Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageGallery  $imageGallery
     * @return \Illuminate\Http\Response
     */
    public function show(ImageGallery $imageGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageGallery  $imageGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageGallery $imageGallery)
    {
        $products = \App\Models\Product::all();
        return view('admin.image_gallery.edi    t',['products' => $products, 'imageGallery' => $imageGallery]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageGallery  $imageGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageGallery $imageGallery)
    {
        $validateData = $request->validate([
            'product_id' => 'required'
        ]);

        $imageGallery->product_id = $request->product_id;
        if($request->image != null)
            $imageGallery->image = '/storage' . Str::substr(Storage::putFile('public/images',$request->image),6);
        
        $imageGallery->save();

        return redirect()->route('image-galleries.index')->with('success', 'Product Image Successfully Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageGallery  $imageGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageGallery $imageGallery)
    {
        $imageGallery->delete();

        return redirect()->route('image-galleries.index')->with('success', 'Product Image Successfully Removed');

    }
}
