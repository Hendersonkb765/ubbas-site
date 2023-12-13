<div class="listItem" id="searchInput">

    @if ($status === "Ativo")
        <div class="line" style="--lineColor: green;"></div>
    @else
        <div class="line" style="--lineColor: red;"></div>
    @endif
    

    <div class="infos">      

        <div class="beneficiario">

            <p class="titleBox">{{$nome ." ". $sobrenome}}</p>

            <div class="downLine">

                <div class="personalInfo">

                    <div class="head">
                        
                        <img src="{{asset('imagens/cidsol/buscar/id-card.png')}}" alt="">
                        <p>CPF</p>

                    </div>
                    <p class="info">{{$cpf}}</p>

                </div>
                <div class="personalInfo">

                    <div class="head">
                                
                        <img src="{{asset('imagens/cidsol/buscar/telephone.png')}}" alt="">
                        <p>Telefone</p>

                    </div>
                    <p class="info">(11) {{$telefone}}</p>

                </div>
                <div class="personalInfo">

                    <div class="head">
                        
                        <img src="{{asset('imagens/cidsol/buscar/address.png')}}" alt="">
                        <p>CEP</p>

                    </div>

                    <p class="info">{{$cep}}</p>

                </div>

            </div>


        </div>
        <div class="othersInfos">

            <p class="titleBox">Dependentes</p>

            <div class="downLine">

                <div class="otherInfo">

                    <img src="{{asset('imagens/cidsol/buscar/boy.png')}}" alt="">

                    <p>{{$criancas}}</p>

                </div>
                <div class="otherInfo">


                    <img src="{{asset('imagens/cidsol/buscar/teenager.png')}}" alt="">

                    <p>{{$adolecentes}}</p>

                </div>
                <div class="otherInfo">

                    
                    <img src="{{asset('imagens/cidsol/buscar/man.png')}}" alt="">
                        

                    <p>{{$adultos}}</p>

                </div>
                <div class="otherInfo">

                    

                    <img src="{{asset('imagens/cidsol/buscar/old-man.png')}}" alt="">

                    <p>{{$idosos}}</p>

                </div>
                <div class="otherInfo">

                    
                    
                    <img src="{{asset('imagens/cidsol/buscar/mother.png')}}" alt="">

                    <p>{{$gestante}}</p>

                </div>
                <div class="otherInfo">

                    

                    <img src="{{asset('imagens/cidsol/buscar/package.png')}}" alt="">

                    <p>{{$cestas}}</p>

                </div>

            </div>

            

        </div>

    </div>

    <div class="alter">
        <div class="opcAlter disable" wire:click="alterarFamilia({{$id}})">

            <img src="{{asset('imagens/cidsol/buscar/editar.png')}}" alt="">
            <p >Alterar</p>
        </div>
    </div>
    <style>
        .alter{
            cursor: pointer;
        }
        
    </style>

</div>