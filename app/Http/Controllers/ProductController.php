<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Colour;
use App\Size;

class ProductController extends Controller
{
    public function store(Request $request)
    {
      $roules = [
          'name' => "required",
          'category' => "required",
          'price' => "required",
          'cover' => "required"
     ];
      $messages = [
          'required' => "Este campo es obligatorio"
     ];

   $this->validate($request,$roules,$messages);


       $newProduct = new Product();

       $path = $request->file('cover')->store('\public\cover');
       $file = basename($path);


       $newProduct->name = $request['name'];
       $newProduct->category = $request['category'];
       $newProduct->price = $request['price'];
       $newProduct->colour = $request['colour'];
       $newProduct->size = $request['size'];
       $newProduct->description = $request['description'];
       $newProduct->cover = $file;


       $newProduct->save();
  }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category = null)
    {
      $products = Product::paginate(5);
      return view('productos', compact('products'));

      if ($category) {
        $products = Product::all()->where('category_id', $category);
        return view('productos', compact('products'));
      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $colours = Colour::all();
        $sizes = Size::all();
        return view('agregarProductos', compact('categories','colours','sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function show($id)
    {
      $product = Product::find($id);
      return view('product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
