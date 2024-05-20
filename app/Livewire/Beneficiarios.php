<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Beneficiario;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;

class Beneficiarios extends Component
{
     
    private $dados;
    public $selectedFilter;
    public $inputFilter;
    public $familiaAlterar;
    private $dispositivo;

    public $id;
    public $nome;
    public $telefone;
    public $cpf;
    public $cep;
    public $criancas;
    public $adolecentes;
    public $adultos;
    public $idosos;
    public $cestas;
    public $gestante;
    public $fulano;
    public function __construct(){
        

        if (Auth::user()->permissao == "Master") {
            $this->dados = new Beneficiario();
        } else {
            $this->dados = Beneficiario::where('ong_id', Auth::user()->ong_id);
        }
        $agent = new Agent;
        if($agent->isMobile()){
            $this->dispositivo = "mobile";
        }
        

    }
    
    public function render()
    {
      
        if(blank($this->inputFilter)){
            $filtrado = $this->getOrganizar();
           
        }
        else{
            $filtrado = $this->getFiltroPessoas();
        }
        //$filtrado = $filtrado->paginate(60);
        return view('livewire.beneficiarios',['beneficiarios' => $filtrado->get(),'familiaAlterar'=>$this->familiaAlterar,'dispositivo'=>$this->dispositivo]);
        
    }

    public function getFiltroPessoas(){

        $dadosFiltrados = $this->dados->where('nome', 'like', '%' . $this->inputFilter . '%');
        return $dadosFiltrados;
    }

    public function getOrganizar()
    {
            // Filtrar a lista com base na opção selecionada
            if($this->selectedFilter == 0){
                $dadosfiltrados = $this->dados->orderBy('nome');               
            }
            else if($this->selectedFilter == 1){

                $dadosfiltrados = $this->dados->orderBy('cep');

            }
            else if($this->selectedFilter == 2){

                $dadosfiltrados = $this->dados->orderBy('qtd_cestas','desc');
            }
            else if($this->selectedFilter ==3){

                $dadosfiltrados = $this->dados->orderBy('created_at','desc');
            }
            
            
            return $dadosfiltrados;

    }
    public function alterarFamilia($id){

        session()->flash('alterar',true);
        $this->familiaAlterar = $this->dados->find($id);
    
        $this->id = $this->familiaAlterar->id;
        $this->nome = $this->familiaAlterar->nome. " " .$this->familiaAlterar->sobrenome;
        $this->cpf = $this->familiaAlterar->cpf;
        $this->telefone = $this->familiaAlterar->telefone;
        $this->cep = $this->familiaAlterar->cep;
        $this->criancas = $this->familiaAlterar->qtd_criancas;
        $this->adolecentes = $this->familiaAlterar->qtd_adolecentes;
        $this->adultos = $this->familiaAlterar->qtd_adultos;
        $this->idosos = $this->familiaAlterar->qtd_idosos;
        $this->gestante = $this->familiaAlterar->existe_gestante;
        
        
        
        
        return view('livewire.beneficiarios',['familiaAlterar'=>$this->familiaAlterar]);
    }
    public function fecharJanela(){
        
        session()->forget('alterar');
        
    }
    public function registrarMudanca(){

        $partes = explode(" ", $this->nome);
        $nome = $partes[0];

        $partes[0]= "";

        $sobrenome = implode(" ",$partes);
        $dados = [
            'nome'=>$nome,
            'sobrenome'=>$sobrenome,
            'cpf' => $this->cpf,
            'telefone' => $this->telefone,
            'cep' => $this->cep,
            'qtd_criancas' => $this->criancas,
            'qtd_adolecentes' => $this->adolecentes,
            'qtd_adultos' => $this->adultos,
            'qtd_idosos' => $this->idosos,
            'qtd_cesta' => $this->cestas,
            'gestante' => $this->gestante,
        ];
        if($dados['gestante']== 0){
            $dados['gestante'] = 'Não';
        }
        else{
            $dados['gestante'] = 'Sim';
        }
        
        $validador = Validator::make($dados, [
            'cpf' => ['required','max:11'],
            'nome' => ['required'],
            'telefone' => ['required', 'max:11'],
            'cep' => ['required', 'max:8'],
            'qtd_criancas' => ['required'],
            'qtd_adolecentes' => ['required'],
            'qtd_adultos' => ['required'],
            'qtd_idosos' => ['required'],
            'qtd_cesta' => ['required'],
            'gestante' => ['required'],
        ]);

        if($validador->fails()){
            dd($validador->fails());
        }
        else{
            Beneficiario::where('id',$this->id)->update(
                ['nome' => $dados['nome']],
                ['sobrenome' => $dados['sobrenome']],
                ['cpf' => $dados['cpf']],
                ['telefone' => $dados['telefone']],
                ['cep' => $dados['cep']],
                ['qtd_criancas' => $dados['qtd_criancas']],
                ['qtd_adolecentes' => $dados['qtd_adolecentes']],
                ['qtd_adultos' => $dados['qtd_adultos']],
                ['qtd_idosos' => $dados['qtd_idosos']],
                ['qtd_cesta' => $dados['qtd_cesta']],
                ['gestante' => $dados['gestante']],

            );
            $this->fecharJanela();
        }
        
    }

           /*
        if(Auth::user()->permissao == "Master"){
            
            $this->dados = $beneficiario::orderBy('nome')->get();
    
            dd($this->dados);
        }
        else{
            $dados = $beneficiario::orderBy()->where('ong_id',Auth::user()->ong_id);
        }
        */
}
