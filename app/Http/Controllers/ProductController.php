<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cart;
use DB;
use App\Product;
use App\Subject;
use Session;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function getIndex()
     {
         $products = Subject::all();
         return view('shop.index', ['products'=>$products]);
     }


    public function getAddToCart(Request $request, $id)
    {
        $product = Subject::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product['id']);

        $request->session()->put('cart',$cart);
        dd($request->session()->get('cart'));
        return redirect()->route('product.index'); 

    }
}