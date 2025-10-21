<?php

namespace App\Http\Controllers;

use App\Models\Producto_ABG;
use Illuminate\Http\Request;

class Producto_ABGController extends Controller
{
    public function index()
    {
        $productos = Producto_ABG::all();
        return view('productos.index', compact('productos'));
    }

    public function show($id)
    {
        $producto = Producto_ABG::findOrFail($id);
        return view('productos.show', compact('producto'));
    }
}
