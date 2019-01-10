<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Subject;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

      public function category(){
        $categories = DB::select('select * from _category');
        return  ['categories'=>$categories];
    }

    public function subCategory(){
        $subcategories = DB::select('select * from _sub_category');
        return  ['subcategories'=>$subcategories];
    }

    public function index() {
        return view('home', $this->category(), $this->subCategory());
    }

     function login() {
        return view('pages.login', $this->category(), $this->subCategory());
    }


    public function checkout() {
        return view('pages.Checkout', $this->category(), $this->subCategory());
    }

    public function contact() {
        return view('pages.contact', $this->category(), $this->subCategory());
    }
    
    public function Error404() {
        return view('pages.Error404', $this->category(), $this->subCategory());
    }

    public function product()
    {
        $Subjects= Subject::all()->toArray();
        return view('pages.product', compact('Subjects'), $this->category(), $this->subCategory());
    }

    public function getProduct($id){
        $Subjects=\App\Subject::find($id);
        return view('pages.single', compact('Subjects'));
    }

    public function register() {
        return view('pages.register', $this->category(), $this->subCategory());
    }

    public function home() {
        return view('pages.home', $this->category(), $this->subCategory());
    }
    public function verify() {
        return view('pages.verify', $this->category(), $this->subCategory());
    }
  
}
