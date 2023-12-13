<?php

namespace App\Http\Controllers;

use App\Models\Ong;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class OngController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('cidsol/ong');
       /*
        if(Auth::user()->permissao == 'Master'){
            return view('ong');

        }
        else{
            return redirect()->back()->with('barrado','Não tem permissão');
        }
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validado= $request->validate([
            'cnpj' => ['required','unique:ongs,cnpj','max:14'],
            'razao_social'=>['required']
        ]);
        if($validado){
            $ong = new Ong();
            $ong->cnpj = $validado['cnpj'];
            $ong->razao_social = $validado['razao_social'];
            $ong->save();
            return redirect()->route('home_cesta');
        }
        else{
            return redirect()->route('view_ong');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ong  $ong
     * @return \Illuminate\Http\Response
     */
    public function show(Ong $ong)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ong  $ong
     * @return \Illuminate\Http\Response
     */
    public function edit(Ong $ong)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ong  $ong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ong $ong)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ong  $ong
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ong $ong)
    {
        //
    }
}
