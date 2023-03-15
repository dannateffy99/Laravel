<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoPostRequest;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductoRestController extends Controller
{
    public function index(){
    $productos=Producto::all();
    return response()->json($productos,Response::HTTP_OK);
   }
   public function store(ProductoPostRequest $request){
    $producto=Producto::create($request->all());
    return response()->json([
        'message'=> "Registro creado satisfractoriamente",
        'producto'=> $producto
    ],Response::HTTP_CREATED);
   }
   public function update(ProductoPostRequest $request,$producto){
    $producto=Producto::find($producto);
    $producto->update($request->only('name','descripcion','stock','precio','status'));
    return response()->json([
        'message'=> "Registro actualizado",
        'producto'=> $producto
    ],Response::HTTP_CREATED);
   }
   public function destroy($producto){
    $producto=Producto::find($producto);
    $producto->delete();
    return response()->json([
        'message'=> "Registro eliminado correctamente",
    ],Response::HTTP_OK);
   }
}
