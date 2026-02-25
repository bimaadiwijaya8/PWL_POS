<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodBeverage()
    {
        return view('products.food');
    }

    public function beautyHealth()
    {
        return view('products.beauty');
    }

    public function homeCare()
    {
        return view('products.homecare');
    }

    public function babyKid()
    {
        return view('products.babykid');
    }
}
