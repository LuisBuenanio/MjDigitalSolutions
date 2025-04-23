<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Product; // si ya tienes tu modelo

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $productos = Product::latest()->take(6)->get(); // o lo que necesites

        return Inertia::render('Home', [
            'productos' => $productos
        ]);
    }
}
