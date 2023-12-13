<div class="listItem">

    @if ($status === "Ativo")
        <div class="line" style="--lineColor: green;"></div>
    @else
        <div class="line" style="--lineColor: red;"></div>
    @endif
    

    <div class="infos">      
        <p class="titleBox">{{$nome ." ". $sobrenome}}</p>
        <div class="down">
            <div class="beneficiario">


                <div class="personalInfo">

                    
                    <img src="{{asset('img/imagens/cidsol/buscar/id-card.png')}}" alt="">
                      
                    <p class="info">{{$cpf}}</p>

                </div>
                <div class="personalInfo">
          
                        <img src="{{asset('img/imagens/cidsol/buscar/telephone.png')}}" alt="">

                    <p class="info">(11) {{$telefone}}</p>

                </div>
                <div class="personalInfo">

                        <img src="{{asset('img/imagens/cidsol/buscar/address.png')}}" alt="">

                    <p class="info">{{$cep}}</p>

                </div>
            </div>
            <div class="othersInfos">

                <div class="otherInfo">

                    <img src="{{asset('img/imagens/cidsol/buscar/boy.png')}}" alt="">

                    <p>{{$criancas}}</p>

                </div>
                <div class="otherInfo">


                    <img src="{{asset('img/imagens/cidsol/buscar/teenager.png')}}" alt="">

                    <p>{{$adolecentes}}</p>

                </div>
                <div class="otherInfo">

                    
                    <img src="{{asset('img/imagens/cidsol/buscar/man.png')}}" alt="">
                        

                    <p>{{$adultos}}</p>

                </div>
                <div class="otherInfo">

                    <img src="{{asset('img/imagens/cidsol/buscar/old-man.png')}}" alt="">

                    <p>{{$idosos}}</p>

                </div>
                <div class="otherInfo">
                    <img src="{{asset('img/imagens/cidsol/buscar/mother.png')}}" alt="">
                    <p>
                        @if($gestante == "Sim")
                            {{"S"}}
                        @else
                            {{"N"}}
                        @endif
                        
                    </p>
                </div>
                <div class="otherInfo">
                    <img src="{{asset('img/imagens/cidsol/buscar/package.png')}}" alt="">
                    <p>{{$cestas}}</p>
                </div>
                
            </div>    
        </div>
    </div>
</div>