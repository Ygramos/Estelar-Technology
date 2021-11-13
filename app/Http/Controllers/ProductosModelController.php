<?php

namespace App\Http\Controllers;

use App\Models\ProductosModel;
use Illuminate\Http\Request;

class ProductosModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = ProductosModel::all();
        return  view('admin.productos.addProducts', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ProductosModel::created($request);
        $request->validate([
            'nombre_producto' => 'required',
            'codigo_producto' => 'required',
            'valor' => 'required |numeric',
            'cantidad' => 'required |numeric',

        ]);
        $produto = new ProductosModel($request->all());
        $produto->nombre_producto = $request->input('nombre_producto');
        $produto->codigo_producto = $request->input('codigo_producto');
        $produto->valor = $request->input('valor');
        $produto->cantidad = $request->input('cantidad');
        $imganesurl = [];
        if ($request->hasFile('imagen')) {
            $files    = $request->file("imagen");
            $ruta = $request->input('nombre_producto');
            $datos = str_replace(' ', '-', $ruta);
            $nombrearchivo  = $request->input('codigo_producto')
                . '-' . $datos  . '.' . $files->getClientOriginalExtension();
            $rutadisco = 'img/productos/';
            $rutafinal = $rutadisco . $datos . '/';
            $files->move(public_path($rutafinal), $nombrearchivo);
            $imganesurl = $rutafinal . $nombrearchivo;
        }
        $produto->img_url = $imganesurl;
        $produto->save();
        return $produto;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductosModel  $productosModel
     * @return \Illuminate\Http\Response
     */
    public function show(ProductosModel $productosModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductosModel  $productosModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductosModel $productosModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductosModel  $productosModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductosModel $productosModel, $id)
    {
        $produto = ProductosModel::where('id', '=', $id)->first();
        $produto->nombre_producto = $request->input('nombre_producto');
        $produto->codigo_producto = $request->input('codigo_producto');
        $produto->valor = $request->input('valor');
        $produto->cantidad = $request->input('cantidad');
        $produto->save();
        return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductosModel  $productosModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductosModel $productosModel, $id)
    { {
            $order = ProductosModel::where('id', '=', $id)->first();
            $order->delete();
            return redirect()->back();
        }
    }
}
