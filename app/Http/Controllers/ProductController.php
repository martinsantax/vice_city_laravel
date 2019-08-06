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
       return redirect('addProduct');

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
        return view('products', compact('products'));
      }

      $products = Product::paginate(5);
      return view('products', compact('products'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */





    public function indexHome($top = 1)
    {
      if ($top) {
        $products = Product::where('top', $top)->paginate(0);
        return view('/welcome', compact('products'));
      }

      $products = Product::paginate(0);
      return view('/welcome', compact('products'));

    }


    public function search(Request $request)
    {
      $products = Product::where('name','LIKE','%'.$request['name'].'%')->paginate(0);
      $category = Category::all();
      return view('products', compact('products','category'));
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
        return view('addProduct', compact('categories','colours','sizes'));
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



    public function edit($id)
    {
      $product = Product::find($id);
      $categories = Category::all();
      $colours = Colour::all();
      $sizes = Size::all();

      return view('editProduct', compact('product', 'categories', 'colours', 'sizes'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request)
    {
      $id=$request['product_id'];
       $product=Product::find($id);


      if ($request->file('cover')) {
          $path = $request->file('cover')->store('public/products');
          $file = basename($path);
        } else {
          $file = $product->image;
       }

       $product->name = $request['name'];
       $product->category_id = $request['category_id'];
       $product->price = $request['price'];
       $product->stock = $request['stock'];
       $product->colour_id= $request['colour_id'];
       $product->size_id = $request['size_id'];
       $product->description = $request['description'];
       $product->top = $request['top'];
       $product->image = $file;

       $product->save();
       return redirect('products');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */




    public function destroy($id)
    {
      $product=Product::find($id);

      $product->delete();
      return redirect('products');
    }
}
