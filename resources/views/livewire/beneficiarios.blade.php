
<div class="searchField">
   
    <div class="searchParameters">
        
        <x-buscar.caixa-pesquisa ></x-buscar.caixa-pesquisa>
        
        <x-buscar.selecao-organizacao></x-buscar.selecao-organizacao>
    
    </div>

    <div class="aboutSearch">

        <p class="count"> Resultados</p>

    </div>

    <div class="listBox">


     
    @if ($dispositivo)
         @foreach ($beneficiarios as $familia)
        <x-mobile.card-beneficiarios
        id="{{$familia->id}}"
        nome="{{$familia->nome}}"
        sobrenome="{{$familia->sobrenome}}"
        cpf="{{$familia->cpf}}"
        status="{{$familia->status}}"
        telefone="{{$familia->telefone}}"
        cep="{{$familia->cep}}"
        criancas="{{$familia->qtd_criancas}}"
        adolecentes="{{$familia->qtd_adolecentes}}"
        adultos="{{$familia->qtd_adultos}}"
        idosos="{{$familia->qtd_idosos}}"
        gestante="{{$familia->existe_gestante}}"
        cestas="{{$familia->qtd_cestas}}">
        </x-mobile.card-beneficiarios>

        @endforeach
    @else

        @foreach ($beneficiarios as $familia)
            <x-card-beneficiarios
        id="{{$familia->id}}"
        nome="{{$familia->nome}}"
        sobrenome="{{$familia->sobrenome}}"
        cpf="{{$familia->cpf}}"
        status="{{$familia->status}}"
        telefone="{{$familia->telefone}}"
        cep="{{$familia->cep}}"
        criancas="{{$familia->qtd_criancas}}"
        adolecentes="{{$familia->qtd_adolecentes}}"
        adultos="{{$familia->qtd_adultos}}"
        idosos="{{$familia->qtd_idosos}}"
        gestante="{{$familia->existe_gestante}}"
        cestas="{{$familia->qtd_cestas}}">
        </x-card-beneficiarios>
        @endforeach 
    @endif




    @if (session('alterar'))
    <x-card-alterar-familia>

    </x-card-alterar-familia>
    @endif
        {{--$beneficiarios->links()--}}
    
    <style>
        .paginacao{
            width: 60px;
           display: flex;
           flex-direction: row
        }
        .paginacao p{
            display: none;
        }
      
    </style>

    
    

    </div>
    
</div>
