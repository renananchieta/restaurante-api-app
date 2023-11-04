<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoRequest;
use App\Http\Resources\ProdutoResource;
use App\Models\Entity\Produto;
use App\Models\Facade\ProdutoDB;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $parametros = (Object)$request->all();
        $produtos = ProdutoDB::getProduto($parametros);

        return response(ProdutoResource::collection($produtos));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdutoRequest $request)
    {
        $data = $request->valid();
        
        try {
            $produto = Produto::create($data);
            
            return response(new ProdutoResource($produto), 201);
        } catch (Exception $e){
            return response('Erro ao cadastrar Produto.', 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return response(new ProdutoResource($produto), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProdutoRequest $request, Produto $produto)
    {
        $data = $request->valid();

        try{
            $produto->update($data);
            $produto->fresh();

            return response(new ProdutoResource($produto), 200);
        } catch(Exception $e) {

            return response('Erro ao alterar o produto!', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $produto)
    {
        Produto::find($produto)->delete();
    }
}
