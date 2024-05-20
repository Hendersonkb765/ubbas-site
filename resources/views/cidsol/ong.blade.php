<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="bg-dark">
    
<form class="container" action="{{Route('cadastrar_ong')}}" method="POST">
        @csrf
        <h1 style="color: white">ONG Cadastro</h1>
          <div class="mb-3">
            <label style="color: white" for="exampleInputEmail1" class="form-label">Razão Social</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="razao_social">
          </div>
          <div class="mb-3">
            <label style="color: white" for="exampleInputEmail1" class="form-label">CNPJ</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="cnpj">
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>