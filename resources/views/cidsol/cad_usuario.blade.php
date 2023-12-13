<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Document</title>
</head>
<body style="background: black">
    <style>
        *{
            color: white;
        }
    </style>
    <div class="container ">
        <h1>Cadastro de Usuário</h1>
        <form action="{{route('cadastrar_usuario')}}" method="POST" name="form-registro">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" value="{{old('nome')}}">
                
                @if ($errors->get('nome'))
                  
                  @foreach ($errors->get('nome') as $erro)
                    <p>{{$erro}}</p>
                  @endforeach
                @endif
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{old('email')}}">
                @if ($errors->get('email'))
                  
                  @foreach ($errors->get('email') as $erro)
                    <p>{{$erro}}</p>
                  @endforeach
                @endif
              </div>
              <div class="mb-3">
                <label class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" aria-describedby="emailHelp" value="{{old('cpf')}}">
                @if ($errors->get('cpf'))
                  
                  @foreach ($errors->get('cpf') as $erro)
                  <p>{{$erro}}</p>
                  @endforeach
                @endif
              </div>
              <label  class="form-label">Permissão</label>
              <select class="form-select" aria-label="Default select example" name="permissao">
                <option selected style="color: black;">Selecione a permissão do usuário</option>
                <option value="Observador" style="color: black">Observador</option>
                <option value="Cadastrador" style="color: black">Cadastrador</option>
                <option value="Administrador" style="color: black">Administrador</option>
                <option value="Master" style="color: black">Master</option>
              </select>
              <br>
              <label  class="form-label">Ong</label>
              <select class="form-select" aria-label="Default select example" name="ong">
                
                <option selected style="color: black;">Selecione a permissão do usuário</option>
                @foreach ($ongs as $ong)
                
                <option value="{{$ong->id}}" style="color: black">{{$ong->razao_social}}</option>

                @endforeach

                
         
              </select>
              <br>
            <div class="mb-3">
              <label class="form-label">Login</label>
              <input type="text" class="form-control" id="login" name="login">
              @if ($errors->get('login'))
                  
                  @foreach ($errors->get('login') as $erro)
                    <p>{{$erro}}</p>
                  @endforeach
              @endif
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha">
              @if ($errors->get('senha'))
                  
                  @foreach ($errors->get('senha') as $erro)
                    <p>{{$erro}}</p>
                  @endforeach
              @endif
            </div>
            
            <input type="submit" class="btn btn-primary">
          </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    /*
      $(function(){
        $('form[name="form-registro"]').submit(function(event){
          event.preventDefault();

          $.ajax({
            url:"{{ route('cadastrar_usuario') }}",
            type:"post",
            data: $(this).serialize(),
            dataType:'json',
            success:function(response){
                if(response.success){
                  alert("Cadastro realizado com sucesso")
                }
                else{
                  var errors = response.errors;
                  alert(response.errors['cpf'])
                }
            },
            error:function(xhr,status,error){
              alert( xhr);
            }
            
          })
        })
      })
      */
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>