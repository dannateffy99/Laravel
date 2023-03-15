<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaPostRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoriaRestController extends Controller
{
    public function index(){
    $categorias=Categoria::all();
    return response()->json($categorias,Response::HTTP_OK);
   }
   public function store(CategoriaPostRequest $request){
    $categoria=Categoria::create($request->all());
    return response()->json([
        'message'=> "Registro creado satisfractoriamente",
        'categoria'=> $categoria
    ],Response::HTTP_CREATED);
   }
   public function update(CategoriaPostRequest $request,$categoria){
    $categoria=Categoria::find($categoria);
    $categoria->update($request->only('name','descripcion'));
    return response()->json([
        'message'=> "Registro actualizado",
        'categoria'=> $categoria
    ],Response::HTTP_CREATED);
   }
   public function destroy($categoria){
    $categoria=Categoria::find($categoria);
    $categoria->delete();
    return response()->json([
        'message'=> "Registro eliminado correctamente",
    ],Response::HTTP_OK);
   }
}
