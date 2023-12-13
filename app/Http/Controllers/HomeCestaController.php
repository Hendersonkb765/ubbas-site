<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\Beneficiario;
use App\Models\AtividadeHistorico;
use Jenssegers\Agent\Agent;

class HomeCestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Agent $agent)
    {
        //     
        
        if(Auth::user()->permissao === "Master"){
        

            $beneficiarios= Beneficiario::all();
            $inclusao = AtividadeHistorico::where('tipo','Inclusão')->where('status','Pendente')->count();
            $exclusao = AtividadeHistorico::where('tipo','Exclusão')->where('status','Pendente')->count();
            $alteracao = AtividadeHistorico::where('tipo','Alteração')->where('status','Pendente')->count();
            $cadastroAtivo = AtividadeHistorico::where('tipo','Inclusão')->where('status','Ativo')->count();

            //$atividadeHistorico = AtividadeHistorico::where('tipo','Inclusão')->where('status','Pendente')->count();
            //dd($atividadeHistorico);

            /*
            $atividadeHistorico = AtividadeHistorico::where('status','Pendente')->whereHas('beneficiario',function($query){
                $query->where('status','Ativo');
            })->count();
            */
            //dd($atividadeHistorico);
        }
        else{
            $inclusao= AtividadeHistorico::where('tipo','Inclusão')->where('status','Pendente')->whereHas('beneficiario',function($query){
                $query->where('ong_id',Auth::user()->ong_id);
            })->count();
            $exclusao =AtividadeHistorico::where('tipo','Exclusão')->where('status','Pendente')->whereHas('beneficiario',function($query){
                $query->where('ong_id',Auth::user()->ong_id);
            })->count();
            $alteracao = AtividadeHistorico::where('tipo','Alteração')->where('status','Pendente')->whereHas('beneficiario',function($query){
                $query->where('ong_id',Auth::user()->ong_id);
            })->count();
            $cadastroAtivo = AtividadeHistorico::where('tipo','Inclusão')->where('status','Ativo')->whereHas('beneficiario',function($query){
                $query->where('ong_id',Auth::user()->ong_id);
            })->count();
            $beneficiarios = Beneficiario::where('ong_id',Auth::user()->ong_id)->get();

        }
       
        if($agent->isMobile()){
            return view('cidsol/mobile/painel_principal',[
                'nome'=>Auth::user()->nome,
                'permissao'=>Auth::user()->permissao,
                'familias'=> $beneficiarios->count(),
                'familias_ativas'=>$cadastroAtivo,
                'familias_inativas' => $beneficiarios->where('status','Inativo')->count(),
                'familias_inclusao' => $inclusao,
                'familias_exclusao' => $exclusao,
                'familias_alteracao' =>$alteracao
            ]);
        }
        else{
            return view('cidsol/painel_principal',[
                'nome'=>Auth::user()->nome,
                'permissao'=>Auth::user()->permissao,
                'familias'=> $beneficiarios->count(),
                'familias_ativas'=>$beneficiarios->where('status','Ativo')->count(),
                'familias_inativas' => $beneficiarios->where('status','Inativo')->count(),
                'familias_inclusao' => $inclusao,
                'familias_exclusao' => $exclusao,
                'familias_alteracao' =>$alteracao
            ]);
        }
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
