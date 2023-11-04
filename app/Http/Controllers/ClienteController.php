<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClienteRequest;
use App\Http\Resources\ClienteResource;
use App\Models\Entity\Cliente;
use App\Models\Facade\ClienteDB;
use Exception;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $parametros = (Object)$request->all();
        $cliente = ClienteDB::getCliente($parametros);

        return response(ClienteResource::collection($cliente));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClienteRequest $request)
    {
        $data = $request->valid();

        try {
            $cliente = Cliente::create($data);
            
            return response(new ClienteResource($cliente), 201);
        } catch (Exception $e){
            return response('Erro ao cadastrar Cliente.', 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return response(new ClienteResource($cliente),200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClienteRequest $request, Cliente $cliente)
    {
        $data = $request->valid();

        try {
            $cliente->update($data);
            $cliente->fresh();
            
            return response(new ClienteResource($cliente), 201);
        } catch (Exception $e){
            return response('Erro ao alterar Cliente.', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $cliente)
    {
        Cliente::find($cliente)->delete();
    }
}
