<?php

namespace App\Http\Controllers\Admin;

use App\DetalleProductos;
use App\Http\Controllers\Controller;
use App\Producto;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class DetalleProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create($productoID)
    {
        return view('admin.detalles.create')->with('producto', $productoID);
    }

    public function store(Request $request)
    {
        request()->validate([
           'producto_id' => 'required',
            'talla' => 'required',
            'stock' => 'required|gte:0'
        ]);

        DetalleProductos::create([
            'producto_id' => $request->producto_id,
            'talla' => $request->talla,
            'stock' => $request->stock
        ]);

        return redirect(route('admin.productos.show', [$request->producto_id]))
            ->with([
                'mensaje' => 'Detalle Creado Exitosamente!',
                'mensajeTipo' => 'success'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $detalle = DetalleProductos::find($id);
        $producto = Producto::find($detalle->producto_id);
        $detalle->delete();

        return redirect(route('admin.productos.show', [$producto]))
            ->with([
                'mensaje' => 'Detalle Eliminado!',
                'mensajeTipo' => 'danger'
            ]);
    }
}
