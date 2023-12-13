<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
class AutentificacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function autenticar(Request $request)
    {
        // PARA CADASTRAR OS USUARIOS É SO TIRAR O CÓDIGO DO COMENTARIO ALTERAR AS INFORMAÇÕES E ABRIR O 
        // SITE NA PARTE DO LOGIN E CLICAR NO BOTAO, ELE IRÁ CADASTRAR E AUTENTICAR
    
        //
       /* 
        $cad = [
            'cpf' => '000013210',
            'nome' => 'Louro',
            'permissao'=> 'Cadastrador',
            'email' => 'louro@gmail.com',
            'login'=> 'louro',
            'password'=> '10203040'
        ];
        $user = new User();
        $user->cpf = $cad['cpf'];
        $user->email = $cad['email'];
        $user->nome = $cad['nome'];
        $user->password = Hash::make($cad['password']);
        $user->login = $cad['login'];
        $user->permissao= $cad['permissao'];
        $user->save();
       
       */
        $manter= false;
        if($request['manter'] ==='on'){
            $manter= true;
        }
        if(Auth::attempt(['login'=>$request['login'],'password'=> $request['password']],$manter)){
            $resposta['success'] = true;
            echo json_encode($resposta);
            return;
       }
       else{
            $resposta['success'] = false;
           
          
            echo json_encode($resposta);
            return;
       }
       
    }
    public function deslogar(){
        Auth::logout();
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function registrarUsuario(Request $request)
    {
        /*
        $validado = $request->validate([
            'nome'=> ['required'],
            'cpf' => ['required'],
            'login'=> ['required'],
            'password' =>['required']
        ]);
        */
     
       
        $validado = Validator::make($request->all(),[
            'nome'=> ['required'],
            'email'=>['unique:users,email'], 
            'cpf' => ['required','max:11','unique:users,cpf'],
            'login'=>['required','unique:users,login','max:30'],
            'ong'=>['required'],
            'senha'=>['required','max:18'],
            'ong'=>['required']
        ]);
        if($validado->fails()){
            
            
            //return response()->json(['success'=>false,'errors'=>$validado->errors()]);
            return redirect()->back()->withErrors($validado)->withInput();
        }
        else{
            
            $user = new User();
            $user->cpf = $request['cpf'];
            $user->email = $request['email'];
            $user->nome = $request['nome'];
            $user->password = Hash::make($request['senha']);
            $user->login = $request['login'];
            $user->ong_id = $request['ong'];
            $user->permissao = $request['permissao'];
            
            $user->save();

            $resposta['success'] = true;
            $resposta['message'] = 'O e-mail informado não é valido';


            //json_encode($resposta);

            return redirect()->back();
        }

        

        /*
        $validado = $request->validate([
            'nome'=> ['required'],
            'cpf' => ['required'],
            'email'=>[Rule::unique('users','email')],
            'login'=>['required',Rule::unique('users','login')],
            'password'=>['required'],
            'permissao'=>['require']
        ]);
        */
        
        // fails() verifica se as codições do validade estão cendo atendidas
       /*
        if($validado->fails()){
            dd($validado);
            //  redirect() Cria uma reposta HTTP de redirecionamento
            return redirect()->
                // back() Volta uma pagina 
                   back()->
                // withErrors() Recebe como parâmetro o objeto validate em que gerou a excecao, e manda para view 
                // os erros pela array $errors 
                   withErrors($validado)->
                // withInput() Mantem os dados preenchidos no formulario
                   withInput();
        }
        else{
            $user = new User();
            $user->cpf = $cad['cpf'];
            $user->email = $cad['email'];
            $user->nome = $cad['nome'];
            $user->password = Hash::make($cad['password']);
            $user->login = $cad['login'];
            $user->save();
            return redirect()->back();
        }
        */
        
  

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
