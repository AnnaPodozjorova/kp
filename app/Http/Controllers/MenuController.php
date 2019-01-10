<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MenuController extends Controller {

   //Category, SubCategory info
   public function Category() {
      $categories = DB::select('select * from _category');
      $subcategories = DB::select('select * from _sub_category');
      return view('pages.category',['subcategories'=>$subcategories], ['categories'=>$categories]);
   }

      //Find category by id, subcategory
      public function catByID($id)
      {
         $category=\App\Category::find($id);
         $subcategories = DB::select('select * from _sub_category');
         return view('pages.cat', compact('category'),  ['subcategories'=>$subcategories]);
      }  

      //ubcategory Id, subject info
      public function subcatByID($id)
      {
         $subcategory=\App\SubCategory::find($id);
         $subjects = DB::select('select * from subject');
         return view('pages.subcat', compact('subcategory'),  ['subjects'=>$subjects]);
      }  


      public function subCat()
      {
         $subcategories = DB::select('select * from _sub_category');
         return view('pages.subcat',['subcategories'=>$subcategories]);
      }  

      public function subjects()
      {
         $subjects = DB::select('select * from subject');
         return view('pages.subcat',['subjects'=>$subjects]);
      }  
   
   
}