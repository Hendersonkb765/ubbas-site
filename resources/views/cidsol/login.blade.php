<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('build/assets/login-58adc626.css')}}">
    <script src="{{asset('build/assets/cidsol/jquery.js')}}"></script>
    <script src="{{asset('js/cidsol/login.js')}}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Entrar - CidSol</title>
</head>
<body>
    
    <div class="container">

        <div class="main">

            <div class="header">

                <h1>Painel de Controle CidSol</h1>
                <img src="{{asset('img/imagens/cidsol/login/LogoCidSolSimples.png')}}" alt="">

            </div>

            <div class="body">

                <div class="left">
                    
                    <img src="{{asset('img/imagens/cidsol/LogoUbbasSimples.png')}}" alt="">

                </div>

                <div class="formBody">

                    <h2>Entrar</h2>

                    <form action="" method="post" name="formLogin" action="{{route('auth_login')}}">
                        @csrf
                        <div class="inputBox">

                            <p>Login</p>
                            <input type="text" name="login">

                        </div>
                        <div class="inputBox">

                            <p>Senha</p>
                            <input type="password" name="password">

                        </div>
                        <div class="rmbMe">

                            <input type="checkbox" name="manter" id="rmbMe">
                            <p onclick="checkRmbMe()">Manter Conectado</p>

                        </div>
                        
                        <button type="submit" class="sendButton">Acessar</button>

                        <p class="pswrdError">Login ou Senha Incorretos!</p>

                    </form>

                    <a class="fgtPassword" href="https://wa.me/5511960640650?text=Ola%20Hathos,%20esqueci%20minha%20senha" target="_blank"><p>Esqueci a senha</p></a>

                </div>

            </div>

        </div>

    </div>

    <script>
        
        $(function(){
            $('form[name="formLogin"]').submit(function(event){
                
                event.preventDefault();

                $.ajax({
                    url:"{{route('auth_login')}}",
                    type:"post",
                    data: $(this).serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success === true){
                            window.location.href= "{{route('home_cesta')}}"
                        }
                        else{
                            passwordError();
                        }
                    }
                })
            });
        });
        
    </script>

    <script>

        
        chkBoxRmbMe = document.querySelector("#rmbMe")

        function checkRmbMe(){

            chkBoxRmbMe.checked = !chkBoxRmbMe.checked

        }

        function passwordError(){

            document.querySelector(".pswrdError").style.transform = "scale(1)"
            inputsBoxes = document.querySelectorAll(".inputBox")

            inputsBoxes.forEach(inputBox => {
                inputBox.classList.add("error")
            });

        }

    </script>

</body>
</html>