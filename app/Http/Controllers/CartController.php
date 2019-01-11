<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Subject;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{


    public function index() {
        $mightAlsoLike = Subject::mightAlsoLike()->get();
        
        $Subjects = Subject::paginate(3);
        $categories = DB::select('select * from _category');
        $subcategories = DB::select('select * from _sub_category');
        return view('cart', compact('Subjects'), compact('mightAlsoLike'))->with([
            'subcategories' => $subcategories,
            'categories' => $categories
        ]);
    }

}
