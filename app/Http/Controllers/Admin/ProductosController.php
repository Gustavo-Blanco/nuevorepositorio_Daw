<?php

namespace App\Http\Controllers\Admin;

use App\Categoria;
use App\DetalleProductos;
use App\Http\Controllers\Controller;
use App\Tipo;
use Illuminate\Http\Request;
use \App\Producto;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{

    public function index()
    {
        $productos = Producto::all();
        return view('admin.productos.index')->with('productos', $productos);
    }

    public function create($categoriaID)
    {

        $categoria = Categoria::all()->firstWhere('id', $categoriaID);
        $tipos = Tipo::all()->where('categoria_id', $categoriaID);
        return view('admin.productos.create')->with(compact('categoria', 'tipos'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'tipo_id' => 'required',
            'linea' => 'required',
            'precio' => 'required|numeric|gt:0',
            'genero' => 'required',
            'color' => 'required',
            'img' => 'required'
        ]);

        $producto = Producto::create([
            'tipo_id' => $request->tipo_id,
            'linea' => $request->linea,
            'precio' => $request->precio,
            'genero' => $request->genero,
            'color' => $request->color,
            'img' => $request->img
        ]);

        return redirect(route('admin.productos.show', [$producto->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('admin.productos.show', ['producto' => Producto::findOrFail($id)]);
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categoriaID = $producto->tipo->categoria->id;
        $categoria = Categoria::all()->firstWhere('id', $categoriaID);
        $tipos = Tipo::all()->where('categoria_id', $categoriaID);
        return view('admin.productos.edit')->with(compact('categoria', 'tipos', 'producto'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        request()->validate([
            'tipo_id' => 'required',
            'linea' => 'required',
            'precio' => 'required|numeric|gt:0',
            'genero' => 'required',
            'color' => 'required',
            'img' => 'required'
        ]);

        $producto->update([
            'tipo_id' => $request->tipo_id,
            'linea' => $request->linea,
            'precio' => $request->precio,
            'genero' => $request->genero,
            'color' => $request->color,
            'img' => $request->img
        ]);

        return redirect(route('admin.productos.show', [$id]))
            ->with([
                'mensaje' => 'Producto Editado Exitosamente!',
                'mensajeTipo' => 'warning'
            ]);
    }

    public function destroy(Producto $producto)
    {
        $producto->detalleProductos()->delete();
        $producto->delete();
        return redirect(route('admin.productos.index'))->with([
            'mensaje' => 'Producto Eliminado Exitosamente!',
            'mensajeTipo' => 'danger'
        ]);
    }
}
