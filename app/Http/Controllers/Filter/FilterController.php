<?php

namespace App\Http\Controllers\Filter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    public function categoria( $categoria){

        if ($categoria == "Superior" || $categoria == "Inferior" || $categoria == "Calzado" || $categoria == "Accesorios") {
            if ($categoria=="Superior"){
                $id_categoria = 1;
            }
            elseif ($categoria=="Inferior") {
                $id_categoria = 2;
            }
            elseif ($categoria=="Calzado") {
                $id_categoria = 3;
            }
            else{
                $id_categoria = 4;
            }
            $productos = DB::table('tipos')
                ->join('productos','productos.tipo_id','=','tipos.id')
                ->select('tipos.nombre','productos.linea','productos.color','productos.precio','productos.img','productos.id')
                ->where('tipos.categoria_id',$id_categoria)
                ->get();

            $tipos = DB::table('tipos')
                ->select('tipos.nombre','tipos.id')
                ->where('tipos.categoria_id',$id_categoria)
                ->distinct()
                ->get();

            $colores = DB::table('tipos')
                ->join('productos','productos.tipo_id','=','tipos.id')
                ->select('productos.color')
                ->where('tipos.categoria_id',$id_categoria)
                ->distinct()
                ->get();

            $tallas = DB::table('detalle_productos')
                ->join('productos','productos.id','=','detalle_productos.producto_id')
                ->join('tipos','tipos.id','=','productos.tipo_id')
                ->select('talla')
                ->where('tipos.categoria_id',$id_categoria)
                ->distinct()
                ->get();

            return view('categoria',compact('productos','categoria','tipos','colores','tallas'));
        }
        else{
            return back();
        }

    }

    public function subfiltro1(Request $request){
        if ($request->ajax()){
            $categoria = $request->v_categoria;
            $id_tipo = $request->v_id_tipo;

            if($id_tipo == "0"){
                return redirect('/Superior');
            }
            else{
                if ($categoria=="Superior"){
                    $id_categoria = 1;
                }
                elseif ($categoria=="Inferior") {
                    $id_categoria = 2;
                }
                elseif ($categoria=="Calzado") {
                    $id_categoria = 3;
                }
                else{
                    $id_categoria = 4;
                }
                $productos = DB::table('tipos')
                    ->join('productos','productos.tipo_id','=','tipos.id')
                    ->select('tipos.nombre','productos.linea','productos.color','productos.precio','productos.img','productos.id')
                    ->where([['tipos.categoria_id',$id_categoria],['tipos.id',$id_tipo]])
                    ->get();
                //echo '<option>dajsodjsajdasidj</option>';
                return response()->json([$productos,$categoria]);
            }
            /* if($talla=="0"){
                return response()->json([0]);
            }else{ */


            //}

        }
    }
    public function subfiltro2(Request $request){
        if ($request->ajax()){
            $categoria = $request->v_categoria;
            $genero = $request->v_genero;
            /* if($talla=="0"){
                return response()->json([0]);
            }else{ */

            if ($categoria=="Superior"){
                $id_categoria = 1;
            }
            elseif ($categoria=="Inferior") {
                $id_categoria = 2;
            }
            elseif ($categoria=="Calzado") {
                $id_categoria = 3;
            }
            else{
                $id_categoria = 4;
            }
            $productos = DB::table('productos')
                ->join('tipos','productos.tipo_id','=','tipos.id')
                ->select('tipos.nombre','productos.linea','productos.color','productos.precio','productos.img','productos.id')
                ->where([['tipos.categoria_id',$id_categoria],['productos.genero',$genero]])
                ->get();
            //echo '<option>dajsodjsajdasidj</option>';
            return response()->json([$productos,$categoria]);
            //}

        }
    }

    public function subfiltro3(Request $request){
        if ($request->ajax()){
            $categoria = $request->v_categoria;
            $color = $request->v_color;
            /* if($talla=="0"){
                return response()->json([0]);
            }else{ */

            if ($categoria=="Superior"){
                $id_categoria = 1;
            }
            elseif ($categoria=="Inferior") {
                $id_categoria = 2;
            }
            elseif ($categoria=="Calzado") {
                $id_categoria = 3;
            }
            else{
                $id_categoria = 4;
            }
            $productos = DB::table('productos')
                ->join('tipos','productos.tipo_id','=','tipos.id')
                ->select('tipos.nombre','productos.linea','productos.color','productos.precio','productos.img','productos.id')
                ->where([['tipos.categoria_id',$id_categoria],['productos.color',$color]])
                ->get();
            //echo '<option>dajsodjsajdasidj</option>';
            return response()->json([$productos,$categoria]);
            //}

        }
    }

    public function subfiltro4(Request $request){
        if ($request->ajax()){
            $categoria = $request->v_categoria;
            $talla = $request->v_talla;
            /* if($talla=="0"){
                return response()->json([0]);
            }else{ */

            if ($categoria=="Superior"){
                $id_categoria = 1;
            }
            elseif ($categoria=="Inferior") {
                $id_categoria = 2;
            }
            elseif ($categoria=="Calzado") {
                $id_categoria = 3;
            }
            else{
                $id_categoria = 4;
            }
            $productos = DB::table('productos')
                ->join('tipos','productos.tipo_id','=','tipos.id')
                ->join('detalle_productos','detalle_productos.producto_id','=','productos.id')
                ->select('tipos.nombre','productos.linea','productos.color','productos.precio','productos.img','productos.id')
                ->where([['tipos.categoria_id',$id_categoria],['detalle_productos.talla',$talla]])
                ->distinct()
                ->get();
            //echo '<option>dajsodjsajdasidj</option>';
            return response()->json([$productos,$categoria]);
            //}

        }
    }


    public function subfiltro5(Request $request){
        if ($request->ajax()){
            $categoria = $request->v_categoria;
            $orden = $request->v_orden;

            if ($categoria=="Superior"){
                $id_categoria = 1;
            }
            elseif ($categoria=="Inferior") {
                $id_categoria = 2;
            }
            elseif ($categoria=="Calzado") {
                $id_categoria = 3;
            }
            else{
                $id_categoria = 4;
            }


            $productos = DB::table('tipos')
                ->join('productos','productos.tipo_id','=','tipos.id')
                ->select('tipos.nombre','productos.linea','productos.color','productos.precio','productos.img','productos.id')
                ->where('tipos.categoria_id',$id_categoria)
                ->orderBy('productos.precio',$orden)
                ->get();
            //echo '<option>dajsodjsajdasidj</option>';
            return response()->json([$productos,$categoria]);
            //}

        }
    }


}
