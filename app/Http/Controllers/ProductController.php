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

      $rules = [
          'name' => "required",
          'category_id' => "required",
          'price' => "required",
          'stock' => "required",
          'size_id' => "required",
          'colour_id'=> "required",
          'cover' => "required"
     ];
      $messages = [
          'required' => "Este campo es obligatorio"
     ];

      $this->validate($request, $rules, $messages);

       $newProduct = new Product();


       $path = $request->file('cover')->store('public/products');
       $file = basename($path);


       $newProduct->name = $request['name'];
       $newProduct->category_id = $request['category_id'];
       $newProduct->price = $request['price'];
       $newProduct->stock = $request['stock'];
       $newProduct->colour_id= $request['colour_id'];
       $newProduct->size_id = $request['size_id'];
       $newProduct->description = $request['description'];
       $newProduct->image = $file;

       $newProduct->save();
       return redirect('agregarProductos');

  }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category = null)
    {
      if ($category) {
        $products = Product::where('category_id', $category)->paginate(5);
        return view('productos', compact('products'));
      }

      $products = Product::paginate(5);
      return view('productos', compact('products'));

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
