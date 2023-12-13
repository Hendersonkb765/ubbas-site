<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/cidsol/home.css')}}">
    <title>Painel Principal</title>
</head>
<body>

    <div class="container">

        <div class="sideBar">

            <div class="top">

                <img class="logo" src="{{asset('/imagens/cidsol/LogoUbbasSimples.png')}}" alt="">

                <div class="menu">

                    <div class="optMenu selected">

                        <img src="{{asset('/imagens/cidsol/home/menu.png')}}" alt="">
                        <p>Painel Principal</p>
        
                    </div>
                @if ($permissao != "Observador")
                    <div class="optMenu">

                        <img src="{{asset('/imagens/cidsol/home/adc_family.png')}}" alt="">
                        <p>Cadastrar Família</p>

                    </div>
                @endif
           
                    <div class="optMenu">

                        <img src="{{asset('/imagens/cidsol/home/loupe.png')}}" alt="">
                        <p>Buscar Cadastros</p>

                    </div>
                @if($permissao === "Master")    
                    <div class="optMenu">

                        <img src="{{asset('/imagens/cidsol/home/user.png')}}" alt="">
                        <p>Adicionar Usuário</p>

                    </div>
                @endif
                
                @if($permissao === "Master" || $permissao === "Administrador")
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
                    <p>Sair</p>

                </div>

            </div>

        </div>

        <div class="main">

            <div class="header">

                <h1>Painel Principal</h1>

                <p>{{$nome}}</p>

            </div>

            <div class="dashboard">

                <div class="card">

                    <div class="head">
                        <img src="{{asset('/imagens/cidsol/home/family.png')}}" alt="">
                        <div class="infos">
    
                            <h2>Famílias Cadastradas</h2>
                            <p style="--fontColor: #fff;">{{$familias}}</p>
    
                        </div>
                    </div>

                    <div class="bottom">

                        <p>Atualmente, {{$familias}} famílias estão cadastradas no banco de dados.</p>

                    </div>


                </div>

                <div class="card">

                    <div class="head">
                        <img src="{{asset('/imagens/cidsol/home/receiving.png')}}" alt="">
                        <div class="infos">
    
                            <h2>Cadastros Ativos</h2>
                            <p style="--fontColor: rgb(23, 207, 23);">{{$familias_ativas}}</p>
    
                        </div>
                    </div>

                    <div class="bottom">

                        <p>Atualmente, {{$familias_ativas}} famílias estão cadastradas e recebendo cestas.</p>

                    </div>

                </div>

                <div class="card">

                    <div class="head">
                        <img src="{{asset('/imagens/cidsol/home/not_receiving.png')}}" alt="">
                        <div class="infos">
    
                            <h2>Cadastros Inativos</h2>
                            <p style="--fontColor: rgb(255, 29, 29);">{{$familias_inativas}}</p>
    
                        </div>
                    </div>

                    <div class="bottom">

                        <p>Atualmente, {{$familias_inativas}} famílias estão cadastradas e não estão recebendo cestas.</p>

                    </div>

                </div>

                <div class="card">

                    <div class="head">
                        <img src="{{asset('/imagens/cidsol/home/add-group.png')}}" alt="">
                        <div class="infos">
    
                            <h2>Inclusão Pendente</h2>
                            <p style="--fontColor: rgb(24, 89, 255);">{{$familias_inclusao}}</p>
    
                        </div>
                    </div>

                    <div class="bottom">

                        <p>Atualmente, {{$familias_inclusao}} famílias estão cadastradas e com inclusão pendente no programa.</p>

                    </div>

                </div>

                <div class="card">

                    <div class="head">
                        <img src="{{asset('/imagens/cidsol/home/delete-group.png')}}" alt="">
                        <div class="infos">
    
                            <h2>Exclusão Pendente</h2>
                            <p style="--fontColor: rgb(255, 149, 28);">{{$familias_exclusao}}</p>
    
                        </div>
                    </div>
                    

                    <div class="bottom">

                        <p>Atualmente, {{$familias_exclusao}} famílias estão cadastradas e com exclusão pendente no programa.</p>

                    </div>

                </div>

                <div class="card">

                    <div class="head">
                        <img src="{{asset('/imagens/cidsol/home/edit-group.png')}}" alt="">
                        <div class="infos">
    
                            <h2>Alteração Pendente</h2>
                            <p style="--fontColor: rgb(255, 149, 28);">{{$familias_alteracao}}</p>
    
                        </div>
                    </div>
                    

                    <div class="bottom">

                        <p>Atualmente, {{$familias_alteracao}} famílias estão cadastradas e com alteração pendente no programa.</p>

                    </div>

                </div>


            </div>

        </div>


    </div>
    
</body>
</html>