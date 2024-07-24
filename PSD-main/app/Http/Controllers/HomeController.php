<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = [
            ['image' => 'nike.jpg', 'title' => 'Nike Air Max', 'price' => 'IDR 500.000'],
            ['image' => 'tnf.jpg', 'title' => 'The North Face', 'price' => 'IDR 200.000'],
            ['image' => 'kenzo.jpeg', 'title' => 'T-Shirt Kenzo', 'price' => 'IDR 575.000'],
            // Add more products as needed
        ];

        return view('home', compact('products'));
    }
}
