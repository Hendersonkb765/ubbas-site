@extends('cidsol/layout',['pagina'=>'familias','titulo'=>'Novo Cadastro'])

@section('cadastro')
    <link rel="stylesheet" href="{{asset('build/assets/cadastro-de28972e.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.1.0/vanilla-masker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
   
    
        <div class="formBody">

            <form method="post" action="{{route('cad_familia')}}">
                @csrf
                <div class="inputBox">

                    <p class="label">Nome do Beneficiário</p>
                    <input name="nome" value="{{old('nome')}}" type="text" class="inputField" id="nome" placeholder="Nome Completo Sem Abreviações">
                    @if ($errors->get('nome'))
                  
                  @foreach ($errors->get('nome') as $erro)
                    <p style="color: red">{{$erro}}</p>
                  @endforeach
                @endif
                    <p class="labelError" id="labelNome"></p>

                </div>

                <div class="inputBox">

                    <p class="label">CPF</p>
                    <input name="cpf" value="{{old('cpf')}}" type="text" class="inputField" id="cpf">
                    @if ($errors->get('cpf'))
                  
                  @foreach ($errors->get('cpf') as $erro)
                    <p style="color: red">{{$erro}}</p>
                  @endforeach
                @endif
                    <p class="labelError" id="labelCpf"></p>

                </div>

                <div class="inputBox">

                    <p class="label">Telefone do Beneficiário</p>
                    <input name="telefone" value="{{old('telefone')}}" type="text" class="inputField" id="telefone" placeholder="Telefone ou Celular">
                    @if ($errors->get('telefone'))
                  
                  @foreach ($errors->get('telefone') as $erro)
                    <p style="color: red">{{$erro}}</p>
                  @endforeach
                @endif
                    <p class="labelError" id="labelTel"></p>

                </div>

                <div class="inputBox">

                    <p class="label">CEP do Beneficiário</p>
                    <input name="cep" value="{{old('cep')}}" type="text" class="inputField" id="cep">
                    @if ($errors->get('cep'))
                  
                  @foreach ($errors->get('cep') as $erro)
                    <p style="color: red">{{$erro}}</p>
                  @endforeach
                @endif
                    <p class="labelError" id="labelCep"></p>

                </div>

                <div class="inputBox">

                    <p class="label">Crianças de 0 a 6 Anos</p>
                    <input name="qtd_criancas" value="{{old('qtd_criancas')}}" type="text" class="nums" placeholder="Somente Números (Vazio = 0)">
                    @if ($errors->get('qtd_criancas'))
                  
                  @foreach ($errors->get('qtd_criancas') as $erro)
                    <p style="color: red">{{$erro}}</p>
                  @endforeach
                @endif
                    <p class="labelError"></p>

                </div>

                <div class="inputBox">

                    <p class="label">Adoslecentes de 7 a 17 Anos</p>
                    <input name="qtd_adolecentes" value="{{old('qtd_adolecentes')}}" type="text" class="nums" placeholder="Somente Números (Vazio = 0)">
                    @if ($errors->get('qtd_adolecentes'))
                  
                  @foreach ($errors->get('qtd_adolecentes') as $erro)
                    <p style="color: red">{{$erro}}</p>
                  @endforeach
                @endif
                    <p class="labelError"></p>

                </div>

                <div class="inputBox">

                    <p class="label">Jovens e Adultos de 18 a 59 Anos</p>
                    <input name="qtd_adultos"  value="{{old('qtd_adultos')}}" type="text" class="nums" placeholder="Somente Números (Vazio = 0)">
                    @if ($errors->get('qtd_adultos'))
                  
                  @foreach ($errors->get('qtd_adultos') as $erro)
                    <p style="color: red">{{$erro}}</p>
                  @endforeach
                @endif
                    <p class="labelError"></p>

                </div>

                <div class="inputBox">

                    <p class="label">Idosos de 60+ Anos</p>
                    <input name="qtd_idosos" value="{{old('qtd_idosos')}}" type="text" class="nums" placeholder="Somente Números (Vazio = 0)">
                    @if ($errors->get('qtd_idosos'))
                  
                  @foreach ($errors->get('qtd_idosos') as $erro)
                    <p style="color: red">{{$erro}}</p>
                  @endforeach
                @endif
                    <p class="labelError"></p>

                </div>

                <div class="inputBox">

                    <p class="label">Gestantes</p>
                    <input name="gestante" value="{{old('gestante')}}" type="text" class="nums" placeholder="Somente Números (Vazio = 0)">
                    @if ($errors->get('gestante'))
                  
                  @foreach ($errors->get('gestante') as $erro)
                    <p style="color: red">{{$erro}}</p>
                  @endforeach
                @endif
                    <p class="labelError"></p>

                </div>

                <div class="inputBox">

                    <p class="label">Cestas por Remessa</p>
                    <input name="qtd_cesta" value="{{old('qtd_cesta')}}" type="text" class="nums" placeholder="Somente Números (Vazio = 0)" value="1">
                    @if ($errors->get('qtd_cesta'))
                  
                  @foreach ($errors->get('qtd_cesta') as $erro)
                    <p style="color: red">{{$erro}}</p>
                  @endforeach
                @endif
                    <p class="labelError"></p>

                </div>

                <button class="send">Enviar</button>

            </form>
            

        </div>

       
        


@endsection