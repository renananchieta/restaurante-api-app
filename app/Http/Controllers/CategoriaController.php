<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriaRequest;
use App\Http\Resources\CategoriaResource;
use App\Models\Entity\Categoria;
use App\Models\Facade\CategoriaDB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoriaController extends Controller
{
    public function index(Request $request): Response
    {
        $parametros = (Object)$request->all();
        $categorias = CategoriaDB::getCategoria($parametros);

        return response(CategoriaResource::collection($categorias), 200);
    }

    public function store(CategoriaRequest $request)
    {
        $data = $request->valid();
        
        try {
            $categoria =Categoria::create($data);
            
            return response(new CategoriaResource($categoria), 201);
        } catch (Exception $e){
            return response('Erro ao cadastrar Categoria.', 500);
        }
    }

    public function show(Categoria $categoria)
    {
        return response(new CategoriaResource($categoria), 200);
    }

    public function update(Request $request)
    {
        //$data = $request->valid();

        try{
            $categoria = Categoria::find($request->id);
            $categoria->nome = $request->categoria;
            $categoria->update();
            $categoria->fresh();

            return response(new CategoriaResource($categoria), 200);
        } catch (Exception $e) {
            return response('Erro ao alterar Categoria.', 500);
        }
    }

    public function delete(int $categoria)
    {
        try {
            Categoria::find($categoria)->delete();

            return response('Categoria removida com sucesso.', 200);
        } catch(Exception $e){
            return response('Erro ao remover categoria.', 500);
        }
    }
}
