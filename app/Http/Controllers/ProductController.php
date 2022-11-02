<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Product;
use Illuminate\Http\Request;

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
        return view('pages.product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        // $new_product = Product::create($data);

        $files=[];
        if($request->file('product_image')) $files[]=$request->file('product_image');
        if($request->file('vendor_image')) $files[]=$request->file('vendor_image');
        if($request->file('user_image')) $files[]=$request->file('user_image');

        foreach($files as $file){
                $uniqid = Str::random(9);
        $fileName = $uniqid.'.'.$file->extension();  
     
        $file->move(public_path('file'), $fileName);
        
        $data[]=$fileName;
            
        } 
            $images=new Product;
            $images->product_image=$data[0];
            $images->vendor_image=$data[1];
            $images->user_image=$data[2];
            $images->name = $request->name;
            $images->save();
            return response()->json([
                "message"=>"photo upload success"
            ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
