<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ProductosController extends Controller
{
    public function info($categoria,$id){
        $producto = DB::table('categorias')
        ->join('tipos','tipos.categoria_id','=','categorias.id')
        ->join('productos','productos.tipo_id','=','tipos.id')
        ->select('tipos.nombre AS tipo','productos.linea','productos.color','productos.precio','productos.img','productos.id','categorias.nombre')
        ->where('productos.id',$id)
        ->get();

        $linea = $producto[0]->linea;

        $otros = DB::table('productos')
        ->select('id','img')
        ->where([['linea',$linea],['id','<>',$id]])
        ->get();

        $detalles = DB::table('productos')
        ->join('detalle_productos','productos.id','=','detalle_productos.producto_id')
        ->select('detalle_productos.talla','detalle_productos.stock','productos.linea','detalle_productos.id')
        ->where('detalle_productos.producto_id',$id)
        ->get();

        //return $detalles;
        return view('info',compact('producto','detalles','otros','categoria'));
    }

    public function cantidad(Request $request){
        if ($request->ajax()){
            $talla = $request->v_talla;
            $codigo = $request->v_codigo;
            if($talla=="0"){
                return response()->json([0]);
            }else{
                $stock = DB::table('detalle_productos')
                ->select('stock')
                ->where([['talla',$talla],['producto_id',$codigo]])
                ->get();
                //echo '<option>dajsodjsajdasidj</option>';
                return response()->json($stock);
            }

        }
    }

    public function getAddToCart(Request $request, $id) {
        $producto = Producto::find($id);
        $carritoViejo = Session::has('carrito') ? Session::get('carrito') : null;
        $carrito = new Carrito($carritoViejo);
        $carrito->add($producto, $producto->id);

        Session::put('carrito', $carrito);
        return redirect('/');
    }

    public function busqueda(Request $request){

        $linea = $request->busqueda;

        $productos = DB::table('tipos')
            ->join('productos','productos.tipo_id','=','tipos.id')
            ->join('categorias','categorias.id','=','tipos.categoria_id')
            ->select('categorias.nombre As categoria','tipos.nombre','productos.linea','productos.color','productos.precio','productos.img','productos.id')
            ->where('productos.linea', 'like', '%'.$linea.'%')
            ->get();
        //return $productos;
        $tipos = DB::table('tipos')
            ->select('nombre','id')
            ->distinct()
            ->get();

        $colores = DB::table('tipos')
            ->join('productos','productos.tipo_id','=','tipos.id')
            ->select('productos.color')
            ->distinct()
            ->get();

        $tallas = DB::table('detalle_productos')
            ->join('productos','productos.id','=','detalle_productos.producto_id')
            ->join('tipos','tipos.id','=','productos.tipo_id')
            ->select('talla')
            ->distinct()
            ->get();

        return view('busquedas',compact('productos','tipos','colores','tallas'));
    }

    public function genero($genero){

        $productos = DB::table('tipos')
            ->join('productos','productos.tipo_id','=','tipos.id')
            ->join('categorias','categorias.id','=','tipos.categoria_id')
            ->select('categorias.nombre As categoria','tipos.nombre','productos.linea','productos.color','productos.precio','productos.img','productos.id')
            ->where('productos.genero',$genero)
            ->get();
        //return $productos;
        $tipos = DB::table('tipos')
            ->select('nombre','id')
            ->distinct()
            ->get();

        $colores = DB::table('tipos')
            ->join('productos','productos.tipo_id','=','tipos.id')
            ->select('productos.color')
            ->distinct()
            ->get();

        $tallas = DB::table('detalle_productos')
            ->join('productos','productos.id','=','detalle_productos.producto_id')
            ->join('tipos','tipos.id','=','productos.tipo_id')
            ->select('talla')
            ->distinct()
            ->get();

        return view('busquedas',compact('productos','tipos','colores','tallas'));
    }




    public function subfiltro1(Request $request){
        if ($request->ajax()){
            $id_tipo = $request->v_id_tipo;

            $productos = DB::table('tipos')
                ->join('productos','productos.tipo_id','=','tipos.id')
                ->join('categorias','categorias.id','=','tipos.categoria_id')
                ->select('categorias.nombre AS categoria','tipos.nombre','productos.linea','productos.color','productos.precio','productos.img','productos.id')
                ->where('tipos.id',$id_tipo)
                ->get();

            return response()->json([$productos]);

        }
    }

    public function subfiltro2(Request $request){
        if ($request->ajax()){
            $genero = $request->v_genero;

            $productos = DB::table('tipos')
                ->join('productos','productos.tipo_id','=','tipos.id')
                ->join('categorias','categorias.id','=','tipos.categoria_id')
                ->select('categorias.nombre AS categoria','tipos.nombre','productos.linea','productos.color','productos.precio','productos.img','productos.id')
                ->where('productos.genero',$genero)
                ->get();

            return response()->json([$productos]);

        }
    }

    public function subfiltro3(Request $request){
        if ($request->ajax()){
            $color = $request->v_color;

            $productos = DB::table('tipos')
                ->join('productos','productos.tipo_id','=','tipos.id')
                ->join('categorias','categorias.id','=','tipos.categoria_id')
                ->select('categorias.nombre AS categoria','tipos.nombre','productos.linea','productos.color','productos.precio','productos.img','productos.id')
                ->where('productos.color',$color)
                ->get();

            return response()->json([$productos]);

        }
    }

    public function subfiltro4(Request $request){
        if ($request->ajax()){
            $talla = $request->v_talla;

            $productos = DB::table('tipos')
                ->join('productos','productos.tipo_id','=','tipos.id')
                ->join('categorias','categorias.id','=','tipos.categoria_id')
                ->join('detalle_productos','detalle_productos.producto_id','=','productos.id')
                ->select('categorias.nombre AS categoria','tipos.nombre','productos.linea','productos.color','productos.precio','productos.img','productos.id')
                ->where('detalle_productos.talla',$talla)
                ->distinct()
                ->get();

            return response()->json([$productos]);

        }
    }

    public function subfiltro5(Request $request){
        if ($request->ajax()){
            $orden = $request->v_orden;

            $productos = DB::table('tipos')
                ->join('productos','productos.tipo_id','=','tipos.id')
                ->join('categorias','categorias.id','=','tipos.categoria_id')
                ->select('categorias.nombre AS categoria','tipos.nombre','productos.linea','productos.color','productos.precio','productos.img','productos.id')
                ->orderBy('productos.precio',$orden)
                ->get();

            return response()->json([$productos]);

        }
    }
}
