<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Subject;
use App\Http\Controllers\Controller;

class MenuController extends Controller {

      //Find category by id, subcategory
      public function catByID($id)
      {
         $category=\App\Category::find($id);
         $subcategories = DB::select('select * from _sub_category');
         return view('particals.cat', compact('category'),  ['subcategories'=>$subcategories]);
      }  

      //ubcategory Id, subject info
      public function subcatByID($id)
      {
         $Subjects = Subject::all()->toArray();
         $subcategory=\App\SubCategory::find($id);
         $categories = DB::select('select * from _category');
         $subcategories = DB::select('select * from _sub_category');
        return view('particals.subcat   ', compact('subcategory'), compact('Subjects'))->with([
            'categories' => $categories,
            'subcategories'=>$subcategories
        ]); 
      }  
   
}