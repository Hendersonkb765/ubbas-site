<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-dark">
    
    <table class="table ">
        <thead >
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">CEP</th>
            <th scope="col">Crianças</th>
            <th scope="col">Adolecentes</th>
            <th scope="col">Adultos</th>
            <th scope="col">Idosos</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($beneficiarios as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nome.' '.$item->sobrenome}}</td>
                <td>{{$item->telefone}}</td>
                <td>{{$item->cep}}</td>
                <td>{{$item->qtd_criancas}}</td>
                <td>{{$item->qtd_adolecentes}}</td>
                <td>{{$item->qtd_adultos}}</td>
                <td>{{$item->qtd_idosos}}</td>

            </tr>
            @endforeach
          
         
        </tbody>
      </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>