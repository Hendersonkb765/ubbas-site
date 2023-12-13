<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('imagens/cidsol/LogoCidSolSimples.ico')}}">
    <link rel="stylesheet" href="{{asset('css/cidsol/mobile/home.css')}}">
    <script src="{{asset('js/cidsol/mobile/menu.js')}}" defer></script>
    <title>{{$titulo}}</title>
</head>
<body>
    @livewire('menssagem')
    @livewireScripts
    <div class="container">

        <div class="invisible" onclick="fecharMenu()"></div>

        <div class="menu">

            <div class="optMenu @if($pagina ==='painel') selected @endif" onclick="fecharMenu()">

                <img src="{{asset('imagens/cidsol/home/menu.png')}}" alt="">
                <p><a href="{{route('home_cesta')}}" >Painel Principal></a></p>

            </div>

            <div class="optMenu @if($pagina ==='familias') selected @endif" onclick="fecharMenu()">

                <img src="{{asset('imagens/cidsol/home/adc_family.png')}}" alt="">
                <p><a href="{{route('cad_familia')}}"> Cadastrar Família </a></p>

            </div>
            <div class="optMenu" onclick="fecharMenu()">

                <img src="{{asset('imagens/cidsol/home/loupe.png')}}" alt="">
                <p><a href="{{route('busca_familia')}}"> Buscar Cadastros </a></p>

            </div>
            <a href="{{route('registrar_usuario')}}">
                <div class="optMenu">

                    <img src="{{asset('/imagens/cidsol/home/user.png')}}" alt="">
                    <p> Adicionar Usuário </p>

                </div>
            </a>
            <div class="optMenu" onclick="fecharMenu()">

                <img src="{{asset('imagens/cidsol/home/teamwork.png')}}" alt="">
                <p>Adicionar Org</p>

            </div>

            <div class="optMenu" id="exit" onclick="fecharMenu()">

                <img src="{{asset('imagens/cidsol/home/exit.png')}}" alt="">
                <p><a href="{{route('auth_deslogar')}}"> Sair</a></p>

            </div>

        </div>

        <div class="header">

            <img src="{{asset('imagens/cidsol/LogoUbbasSimples.png')}}" alt="">

            <div class="toggle">

                <span></span>
                <span></span>
                <span></span>

            </div>

        </div>

        @yield('painel')
        @yield('cadastro')
        @yield('buscar')

    </div>

</body>
</html>