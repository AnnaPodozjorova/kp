<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function login() {
        return view('pages.login');
    }

    public function checkout() {
        return view('pages.Checkout');
    }
    public function contact() {
        return view('pages.contact');
    }
    public function Error404() {
        return view('pages.Error404');
    }
    public function product()
    {
    $Subjects= Subject::all()->toArray();
    return view('pages.product', compact('Subjects'));
    }


    public function register() {
        return view('pages.register');
    }
    public function wishlist() {
        return view('pages.wishlist');
    }
    public function home() {
        return view('pages.home');
    }
    public function verify() {
        return view('pages.verify');
    }

    public function single(){
        return view('pages.single');
    }   

}
