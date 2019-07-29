<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $carts = Cart::where('status',0)
      ->where('user_id', Auth::user()->id)
      ->get();
      $carts = Cart::all()->where('status',0)
      ->where('user_id', Auth::user()->id);

      $total = 0;
      foreach ($carts as $item) {
        $total = $total +($item->quantity * $item->price);
        }

      return view('cart', compact('carts', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rule = [
        'quantity'=>"integer|min:1"
      ];
      $message = [
        'min'=>'La cantidad debe ser mayor a 0.',
        'integer'=>'Ingrese una cantidad de productos.'
      ];

      $this->validate($request, $rule, $message);

      $product = Product::find($request->id);

            $exist = Cart::where('product_id', $request->id)->where('user_id',Auth::user()->id)->where('status','0')->first();

      if($exist){
        $exist->quantity += $request->quantity;
        $exist->save();
        return redirect('/productos');
      }

      $cart = new Cart;
      $cart->product_id = $product->id;
      $cart->name = $product->name;
      $cart->price = $product->price;
      $cart->quantity = $request->quantity;
      $cart->user_id = Auth::user()->id;

      $cart->save();
      return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $item = Cart::where('id', $id)
      ->where('user_id',Auth::user()->id)
      ->where('status',0)->first();

      $item->delete();
      return redirect('/cart');
    }
    public function cartClose(){
      $items = Cart::where('user_id',Auth::user()->id)
      ->where('status',0)->get();

      $lastCart = Cart::max('cart_num'); //Busca el último cerrado.

      foreach ($items as $item) {
        $item->cart_num = $lastCart + 1;
        $item->status = 1;
        $item->save();
      }

      return redirect ('/products');
    }

    public function history(){
      $carts = Cart::where('user_id',Auth::user()->id)
      ->where('status',1)->get()->groupBy('cart_num');

      return view('history', compact('carts'));
    }
}
