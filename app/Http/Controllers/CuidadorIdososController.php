<?php

namespace App\Http\Controllers;

use App\Models\CuidadorIdosos;
use Illuminate\Http\Request;

class CuidadorIdososController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
        return View('cadastro_cuidador_idosos');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $verificadados = CuidadorIdosos::where('rg',$request['rg'].$request['rg_digi'])->exists();
        
        if(!$verificadados){
            
            $this->validate($request,[
                'nome' => 'required',
                'rg' => 'required', // Definindo 'rg' como obrigatório
                'rg_digi' => 'required',
                'cep' => 'required',
                'bairro' => 'required',
                'rua' => 'required',
                'numero' => 'required',
                'celular' => 'required',
                'status_pagamento' => 'required'
            ]);
        
        
            CuidadorIdosos::create([
                'nome_completo' =>$request['nome'],
                'rg' =>$request['rg'].$request['rg_digi'],
                'cep'=>$request['cep'], //
                'bairro'=>$request['bairro'], //
                'rua'=>$request['rua'], //
                'numero_casa'=>$request['numero'],//
                'celular'=>$request['celular'],
                'status_pagamento' => $request->input('status_pagamento'),
                'complemento' => $request['complemento']
            ]);
            return View('mensagens/cadastrado');
        }
        else{
            $erro = "Usuário já está cadastrado!";
            return View('mensagens/nao_cadastrado',compact('erro'));
        }
            
        
        
        
        
         
        
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(CuidadorIdosos $cuidadorIdosos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CuidadorIdosos $cuidadorIdosos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CuidadorIdosos $cuidadorIdosos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CuidadorIdosos $cuidadorIdosos)
    {
        //
    }
}
