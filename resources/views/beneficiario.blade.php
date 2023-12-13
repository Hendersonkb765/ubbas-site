<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/cidsol_cadastros.css')}}">
    <title>Cadastro de Beneficiários</title>
</head>
<body style="background: #181818">

    <div class="container">

        <div class="main">

            <h1>Cadastro de Beneficiários</h1>

            <form action="{{route('cadastrar_beneficiario')}}" method="POST">
                @csrf
                @if (Auth::user()->permissao== 'Master')
                <div class="inputBox">
             
                  
                    
                    <p>Organização Responsável</p>
                    <select name="ong" id="org">
                      
                      @foreach ( $ongs as $id => $name )
                        
                        <option value="{{$id}}" name="org_responsavel" id="org" selected>{{$name}}</option>
                      @endforeach

                    </select>
                  
                </div>
                @endif
               

                <div class="inputBox">
                    
                    <p>Nome do Beneficiário</p>
                    <input type="text" name="nome" required>
                    @if ($errors->get('nome'))
                  
                    @foreach ($errors->get('nome') as $erro)
                      <p>{{$erro}}</p>
                    @endforeach
                  @endif
                </div>
                <div class="inputBox">
                    
                  <p>Sobrenomes do Beneficiário</p>
                  <input type="text" name="sobrenome" required>
                  @if ($errors->get('sobrenome'))
                  
                  @foreach ($errors->get('sobrenome') as $erro)
                    <p>{{$erro}}</p>
                  @endforeach
                @endif
              </div>

              <div class="inputBox">
                    
                <p>CPF</p>
                <input type="number" name="cpf" required>
                @if ($errors->get('cpf'))
                  
                    @foreach ($errors->get('cpf') as $erro)
                        <p>{{$erro}}</p>
                    @endforeach
                @endif
              </div>

                <div class="inputBox">
                    
                    <p>Telefone do Beneficiário</p>
                    <input type="number" name="telefone" required>
                    @if ($errors->get('telefone'))
                  
                    @foreach ($errors->get('telefone') as $erro)
                      <p>{{$erro}}</p>
                    @endforeach
                  @endif
                </div>
                <div class="inputBox">
                    
                  <p>CEP</p>
                  <input type="number" name="cep" required>
                  @if ($errors->get('cep'))
                  
                  @foreach ($errors->get('cep') as $erro)
                    <p>{{$erro}}</p>
                  @endforeach
                @endif
              </div>

           
                {{-- <div class="smartphone">

                    <div class="rdbtnGroup">

                        <p>Crianças de 0 a 7</p>

                        <div class="rdbtnGroupC">

                            <div class="rdbtn">
                                <p class="rdbtnOpc">1</p>
                                <input type="radio" name="qtd_criancas" id="" value="1">
                            </div>

                            <div class="rdbtn">
                                <p class="rdbtnOpc">2</p>
                                <input type="radio" name="qtd_criancas" id="" value="2">
                            </div>

                            <div class="rdbtn">
                                <p class="rdbtnOpc">3</p>
                                <input type="radio" name="qtd_criancas" id="" value="3">
                            </div>

                            <div class="rdbtn">
                                <p class="rdbtnOpc">4</p>
                                <input type="radio" name="qtd_criancas" id="" value="4">
                            </div>

                            <div class="rdbtn">
                                <p class="rdbtnOpc">5</p>
                                <input type="radio" name="qtd_criancas" id="" value="5">
                            </div>



                        </div>

                    </div>

                    <div class="rdbtnGroup">

                        <p>Adolescentes de 7 a 17 Anos</p>

                        <div class="rdbtnGroupC">

                            <div class="rdbtn">
                                <p class="rdbtnOpc">1</p>
                                <input type="radio" name="qtd_adolecentes" id="" value="1">
                            </div>

                            <div class="rdbtn">
                                <p class="rdbtnOpc">2</p>
                                <input type="radio" name="qtd_adolecentes" id="" value="2">
                            </div>

                            <div class="rdbtn">
                                <p class="rdbtnOpc">3</p>
                                <input type="radio" name="qtd_adolecentes" id="" value="3">
                            </div>

                            <div class="rdbtn">
                                <p class="rdbtnOpc">4</p>
                                <input type="radio" name="qtd_adolecentes" id="" value="4">
                            </div>

                            <div class="rdbtn">
                                <p class="rdbtnOpc">5</p>
                                <input type="radio" name="qtd_adolecentes" id="" value="5">
                            </div>



                        </div>
                    </div>

                        <div class="rdbtnGroup">

                            <p>Jovens e Adultos 18 a 59 Anos</p>
    
                            <div class="rdbtnGroupC">
    
                                <div class="rdbtn">
                                    <p class="rdbtnOpc">1</p>
                                    <input type="radio" name="qtd_adultos" id="" value="1">
                                </div>
    
                                <div class="rdbtn">
                                    <p class="rdbtnOpc">2</p>
                                    <input type="radio" name="qtd_adultos" id="" value="2">
                                </div>
    
                                <div class="rdbtn">
                                    <p class="rdbtnOpc">3</p>
                                    <input type="radio" name="qtd_adultos" id="" value="3">
                                </div>
    
                                <div class="rdbtn">
                                    <p class="rdbtnOpc">4</p>
                                    <input type="radio" name="qtd_adultos" id="" value="4">
                                </div>
    
                                <div class="rdbtn">
                                    <p class="rdbtnOpc">5</p>
                                    <input type="radio" name="qtd_adultos" id="" value="5">
                                </div>
    
    
    
                            </div>
                        </div>

                            <div class="rdbtnGroup">

                                <p>Idosos de 60+ Anos</p>
        
                                <div class="rdbtnGroupC">
        
                                    <div class="rdbtn">
                                        <p class="rdbtnOpc">1</p>
                                        <input type="radio" name="qtd_idosos" id="" value="1">
                                    </div>
        
                                    <div class="rdbtn">
                                        <p class="rdbtnOpc">2</p>
                                        <input type="radio" name="qtd_idosos" id="" value="2">
                                    </div>
        
                                    <div class="rdbtn">
                                        <p class="rdbtnOpc">3</p>
                                        <input type="radio" name="qtd_idosos" id="" value="3">
                                    </div>
        
                                    <div class="rdbtn">
                                        <p class="rdbtnOpc">4</p>
                                        <input type="radio" name="qtd_idosos" id="" value="4">
                                    </div>
        
                                    <div class="rdbtn">
                                        <p class="rdbtnOpc">5</p>
                                        <input type="radio" name="qtd_idosos" id="" value="5">
                                    </div>
                                </div>
                            



                    </div>

                </div>
               --}}
                <div class="pc">

                    <div class="inputBox">
                    
                        <p>Crianças de 0 a 6 Anos</p>
                        <input type="number" name="qtd_criancas">
                        @if ($errors->get('qtd_criancas'))
                  
                        @foreach ($errors->get('qtd_criancas') as $erro)
                            <p>{{$erro}}</p>
                        @endforeach
                        @endif
                    </div>
    
                    <div class="inputBox">
                        
                        <p>Adolescentes de 7 a 17 Anos</p>
                        <input type="number" name="qtd_adolecentes">
                        @if ($errors->get('qtd_adolecentes'))
                  
                        @foreach ($errors->get('qtd_adolecentes') as $erro)
                            <p>{{$erro}}</p>
                        @endforeach
                        @endif
                    </div>
    
                    <div class="inputBox">
                        
                        <p>Jovens e Adultos de 18 a 59 Anos</p>
                        <input type="number" name="qtd_adultos">
                        @if ($errors->get('qtd_adultos'))
                  
                        @foreach ($errors->get('qtd_adultos') as $erro)
                            <p>{{$erro}}</p>
                        @endforeach
                        @endif
                    </div>
    
                    <div class="inputBox">
                        
                        <p>Idosos de 60+ Anos</p>
                        <input type="number" name="qtd_idosos">
                        @if ($errors->get('qtd_idosos'))
                  
                        @foreach ($errors->get('qtd_idosos') as $erro)
                            <p>{{$erro}}</p>
                        @endforeach
                        @endif
                    </div>

                </div>

                <div class="rdBtnGestante">

                    <p class="titulo">Possui Gestante?</p>
                    <div class="rdBtnGroup">

                        <p>Sim</p>
                        <input type="radio" name="existe_gestante" id="" value="Sim"> 
                        <p>Não</p>
                        <input type="radio" name="existe_gestante" id="" value="Não"> 

                    </div>


                </div>
                            
                <div class="inputBox">
                        
                    <p>Quantas Cestas por Remessa?</p>
                    <input type="number" name="qtd_cesta" required>
                    @if ($errors->get('qtd_cesta'))
                  
                    @foreach ($errors->get('qtd_cesta') as $erro)
                        <p>{{$erro}}</p>
                    @endforeach
                    @endif
                </div>


                <input type="submit" value="enviar" class="btnEnviar">

            </form>
            

        </div>

    </div>
    
</body>
</html>