@extends('cidsol/layout',['pagina'=>'painel','titulo'=> 'Painel Principal'])


@section('painel')

    <div class="dashboard">

        <div class="card">

            <div class="head">
                <img src="{{asset('img/imagens/cidsol/home/family.png')}}" alt="">
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
                <img src="{{asset('img/imagens/cidsol/home/receiving.png')}}" alt="">
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
                <img src="{{asset('img/imagens/cidsol/home/not_receiving.png')}}" alt="">
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
                <img src="{{asset('img/imagens/cidsol/home/add-group.png')}}" alt="">
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
                <img src="{{asset('img/imagens/cidsol/home/delete-group.png')}}" alt="">
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
                <img src="{{asset('img/imagens/cidsol/home/edit-group.png')}}" alt="">
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


@endsection

