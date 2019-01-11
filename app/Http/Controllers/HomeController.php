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

    public function contact() {
        return view('pages.contact', $this->category(), $this->subCategory());
    }
    
    public function Error404() {
        return view('pages.Error404', $this->category(), $this->subCategory());
    }


    public function product()
    {   
        $Subjects = Subject::paginate(8);
        $categories = DB::select('select * from _category');
        $subcategories = DB::select('select * from _sub_category');
        return view('pages.product', compact('Subjects'))->with([
            'subcategories' => $subcategories,
            'categories' => $categories
        ]);
    }

    public function getProduct($id){
         $mightAlsoLike = Subject::mightAlsoLike()->get();
         $product =\App\Subject::find($id);
        $Subjects=\App\Subject::find($id);
        $Products = Subject::all()->toArray();
        $categories = DB::select('select * from _category');
        $subcategories = DB::select('select * from _sub_category');
        return view('pages.single', compact('Subjects', 'Products'), compact('mightAlsoLike'))->with([
            'subcategories' => $subcategories,
            'categories' => $categories
        ]);
        
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

  
    public function search(Request $request) {
        //otsingus v2hemalt 3 t2hte
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');
        $subjects = Subject::where('name', 'like', "%$query%")
                            ->orWhere('description', 'like', "%$query%")
                            ->paginate(10); //10 subject yhel lehel

        $categories = DB::select('select * from _category');
        $subcategories = DB::select('select * from _sub_category'); 
        return view('search-results', compact('subjects'))->with([
             'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }
}
