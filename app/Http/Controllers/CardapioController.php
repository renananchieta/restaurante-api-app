<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CardapioRequest;
use App\Http\Resources\CardapioResource;
use App\Models\Entity\Cardapio;
use App\Models\Facade\CardapioDB;
use Exception;
use Illuminate\Http\Request;

class CardapioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $cardapio = Cardapio::all();
        $parametros = (Object)$request->all();
        $cardapio = CardapioDB::getItemDoCardapio($parametros);

        return response(CardapioResource::collection($cardapio));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CardapioRequest $request)
    {
        $data = $request->valid();

        try {
            $cardapio = Cardapio::create($data);
            
            return response(new CardapioResource($cardapio), 201);
        } catch (Exception $e){
            return response('Erro ao cadastrar item no Cardápio.', 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cardapio $cardapio)
    {
        return response(new CardapioResource($cardapio),200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CardapioRequest $request, Cardapio $cardapio)
    {
        $data = $request->valid();

        try {
            $cardapio->update($data);
            $cardapio->fresh();
            
            return response(new CardapioResource($cardapio), 201);
        } catch (Exception $e){
            return response('Erro ao alterar item do Cardápio.', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $cardapio)
    {
        Cardapio::find($cardapio)->delete();
    }
}
