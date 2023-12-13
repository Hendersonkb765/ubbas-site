<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/mensagens.css')}}">    
    <title>Cadastrado</title>
</head>
<body>
    <div class="container">
        <div class="form bloco-certo">
              <img class="certo" src="/imgCadastro/checked.png" >
            <h1>Cadastrado</h1>
           <!-- <progress id="loading" value="50" max="100"></progress> -->
           
            <button onclick="click_ok()" class="btn">OK</button>
        </div>
    </div>
    
    
    <script>
       

      let contador = 10
      function cont(){
        
        contador-=1
        if(contador ==0){
            clearInterval();
            location.href ='{{route("cad_idosos")}}';
        }
      }
      setInterval(cont,600);
      
    </script>
    <script>
        function click_ok(){
            window.location.href = '{{route("cad_idosos")}}';
        }
    </script>
</body>
</html>