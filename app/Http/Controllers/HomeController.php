<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function show(){
        return view('home', [
            'products'=>Product::with(['category'])->get()
        ]);
    }
}
