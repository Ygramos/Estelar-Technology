<?php

namespace App\Http\Controllers;

use App\Models\ProductosModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $productos = ProductosModel::all();

        return  view('Home', compact('productos'));
    }
}
