<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
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
    public function product() {
        return view('pages.product');
    }
    public function register() {
        return view('pages.register');
    }
    public function wishlist() {
        return view('pages.wishlist');
    }

}
