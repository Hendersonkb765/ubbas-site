<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('imagens/cidsol/LogoCidSolSimples.ico')}}">
    <link rel="stylesheet" href="{{asset('css/cidsol/home.css')}}">
    <title>{{$titulo}}</title>
</head>
<body>
 
    
    @livewire('menssagem')
    @livewireScripts
    <div class="container">

        <div class="sideBar">

            <div class="top">

                <img class="logo" src="{{asset('/imagens/cidsol/LogoUbbasSimples.png')}}" alt="">

                <div class="menu">

                    <a href="{{route('home_cesta')}}">
                        <div class="optMenu @if($pagina === 'painel') selected @endif">

                        <img src="{{asset('/imagens/cidsol/home/menu.png')}}" alt="">
                        <p> Painel Principal </p>
        
                        </div>
                    </a>
                @if (Auth::user()->permissao != "Observador")
                
                <a href="{{route('cad_familia')}}">
                    <div class="optMenu @if($pagina === 'familias') selected @endif">

                        <img src="{{asset('/imagens/cidsol/home/adc_family.png')}}" alt="">
                        <p> Cadastrar Família</p>

                    </div>
                </a>
                
                @endif
           
                <a href="{{route('busca_familia')}}">
                    <div class="optMenu">

                        <img src="{{asset('/imagens/cidsol/home/loupe.png')}}" alt="">
                        <p> Buscar Cadastros </p>

                    </div>
                </a>
                @if(Auth::user()->permissao === "Master")    
                <a href="{{route('registrar_usuario')}}">
                    <div class="optMenu">

                        <img src="{{asset('/imagens/cidsol/home/user.png')}}" alt="">
                        <p> Adicionar Usuário </p>

                    </div>
                </a>
          
                    <div class="optMenu">

                        <img src="{{asset('/imagens/cidsol/home/teamwork.png')}}" alt="">
                        <p>Adicionar Org</p>

                    </div>
                @endif
                </div>

            </div>

            <div class="down">

                <div class="optMenu">

                    <img src="{{asset('/imagens/cidsol/home/exit.png')}}" alt="">
                    <p><a href="{{route('auth_deslogar')}}" style="text-decoration: none; color:white;"> Sair</a></p>

                </div>

            </div>

        </div>
        <script>
            document.getElementById("meu-link").addEventListener("click", function(event){
                event.preventDefault();
                // Faça alguma coisa aqui
            });
        </script>

        <div class="main">

            
        <div class="loadingBox">

            <div class="loading">
                <div class="fill"></div>
            </div>

        </div>

        <div class="header">

            <h1>{{$titulo}}</h1>

            <p>{{Auth::user()->nome}}</p>

        </div>

        @yield('painel')
        @yield('cadastro')
        @yield('usuario')
        @yield('buscar')
        @yield('cadastro_ong')
        
        </div>
        
    </div>
    

</body>
</html>