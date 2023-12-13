<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;
use App\Models\Beneficiario;
use App\Models\AtividadeHistorico;
use App\Models\Ong;
use App\Models\User;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Cookie;

class BeneficiariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('cidsol_busca');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Agent $agent)
    {
        $ong = new Ong();
        $user = new User();

        if($agent->isMobile()){
            return view('cidsol/mobile/cad_familia',['ongs'=>$ong::pluck('razao_social','id'),'responsavel'=>$user::pluck('nome')]);
        }
        else{
            return view('cidsol/cad_familia',['ongs'=>$ong::pluck('razao_social','id'),'responsavel'=>$user::pluck('nome')]);
        }
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
   
      try{
       
        $validado = Validator::make($request->all(),[
            'cpf'=> ['required','unique:beneficiarios,cpf','max:11'],
            'nome'=>['required'],
            'telefone'=> ['required','max:11'],
            'cep'=>['required','max:8'],
            'qtd_criancas'=>['required'],
            'qtd_adolecentes'=>['required'],
            'qtd_adultos'=>['required'],
            'qtd_idosos'=>['required'],
            'qtd_cesta' =>['required'],
            'gestante'=>['required']
            
        ]);
       
       if($validado->fails()){
            
            return redirect()->route('cad_familia')->withErrors($validado)->withInput();
       }
       else{
/*
        if($request['gestante']== 0){
            $request['gestante'] = 'Não';
        }
        else{
            $request['gestante'] = 'Sim';
        }
        */
        $partes = explode(" ", $request['nome']);
        $nome = $partes[0];

        $partes[0]= "";

        $sobrenome = implode(" ",$partes);
        

        if($request['gestante'] == 0){
            $gestante = "Não";
        }
        else{
            $gestante  = "Sim";
        }
      
        $beneficiarios = new Beneficiario();
        $beneficiarios->user_id= Auth::user()->id;
        $beneficiarios->cpf = $request['cpf'];
        $beneficiarios->nome = $nome;
        $beneficiarios->sobrenome= $sobrenome;
        $beneficiarios->telefone= $request['telefone'];
        $beneficiarios->cep= $request['cep'];
        $beneficiarios->qtd_criancas = $request['qtd_criancas'];
        $beneficiarios->qtd_adolecentes= $request['qtd_adolecentes'];
        $beneficiarios->qtd_adultos= $request['qtd_adultos'];
        $beneficiarios->qtd_idosos= $request['qtd_idosos'];
        $beneficiarios->existe_gestante = $gestante;
        $beneficiarios->qtd_cestas= $request['qtd_cesta'];
        $beneficiarios->ong_id = Auth::user()->ong_id;
        $beneficiarios->status = 'Pendente';
        $beneficiarios->save();

        $historico = new AtividadeHistorico();
        $historico->tipo= 'Inclusão';
        $historico->status= 'Pendente';
        $historico->beneficiario_id = $beneficiarios->id;
        $historico->user_id = Auth::user()->id;
        $historico->data_conclusao = '1999/02/12';
        $historico->save();

       }
        
       
       session()->flash('success','Famlia Cadastrada');
       return redirect()->route('cad_familia');

      }
      catch(Exception $e){
        echo $e->getMessage();
      }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beneficiario  $beneficiarios
     * @return \Illuminate\Http\Response
     */
 
    public function show(Beneficiario $beneficiario)
    {
        
        $agent = new Agent();

        if($agent->isMobile()){
            //return view('cidsol/mobile/buscar',['beneficiarios'=>$dados]);
            return view('cidsol/mobile/buscar');
         }
         else{
             //return view('cidsol/buscar',['beneficiarios'=>$dados]);
             return view('cidsol/buscar');

         }
        /*
        if(Auth::user()->permissao == "Master"){
            
            
            $dados = $beneficiario::all();

            if($agent->isMobile()){
               return view('cidsol/mobile/buscar',['beneficiarios'=>$dados]);
            }
            else{
                return view('cidsol/buscar',['beneficiarios'=>$dados]);

            }
        }
        else{

            $dados = $beneficiario::all()->where('ong_id',Auth::user()->ong_id);

            if($agent->isMobile()){
                return view('cidsol/mobile/buscar',['beneficiarios'=>$dados]);
            }
            else{
                return view('cidsol/buscar',['beneficiarios'=>$dados]);
            }
            
        }
        */
        
    }
   

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beneficiario  $beneficiarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Beneficiario $beneficiario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beneficiario  $beneficiarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beneficiario $beneficiario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beneficiario  $beneficiarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beneficiario $beneficiario)
    {
        //
    }
}
