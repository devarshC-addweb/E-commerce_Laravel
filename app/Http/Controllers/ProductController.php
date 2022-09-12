<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data= Product::all();
        return view('product',['products'=>$data]);
    }
    public function details($id)
    {
        $data= Product::find($id);
        return view('details',['product'=>$data]);
    }
    public function addCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart =new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    static public function cartItem()
    {
        $userID=Session::get('user')['id'];
        return Cart::where('user_id',$userID)->count();
    }
    public function cartList()
    {
        $userID=Session::get('user')['id'];
        $product=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userID)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cart',['products'=>$product]);

    }
    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('/cartlist');

    }
    public function orderItem()
    {
        $userID=Session::get('user')['id'];
        $total= $product=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userID)
        ->select('products.*','cart.id as cart_id')
        ->sum('products.price');
        return view('order',['total'=>$total]);
    }
    public function orderPlace(request $req)
    {
        $userID=Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userID)->get();
        foreach($allCart as $cart)
        {
            $order=new order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment_method;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userID)->delete();
        }
        // $req->input();
        return redirect('/');
    }
    public function myOrders()
    {
        $userID=Session::get('user')['id'];
        $orders=DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userID)
        ->get();
        return view('/myorders',['myorders'=>$orders]);
    }
}
