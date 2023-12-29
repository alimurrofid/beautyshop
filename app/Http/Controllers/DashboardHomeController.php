<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardHomeController extends Controller
{
    public function index()
    {
        return view('dashboard.home',[
            'products' => Product::latest()->paginate(10),
            'totalUsers' => User::count(),
            'usersVerified' => User::where('status', 1)->count(),
            'totalProducts' => Product::count(),
            'productsVerified' => Product::where('status', 1)->count(),
        ]);
    }
    public function landingpage()
    {
        $products = Product::where('status', 1)->get();
        return view('landingpage', compact('products'));
    }
}
