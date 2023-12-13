<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/cadastro.css')}}">
    <link rel="icon" href="{{asset('/imgCadastro/icone.png')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title> Cuidador de Idosos</title>
</head>

<body>
    <div class="container">

        <form name="formCadastro" action="{{route('cadcuidador')}}" method="POST" class="form">
            @csrf
            <img src="/imgCadastro/logo.png" alt="">


            <div class="modal">

                <div class="box">
                    <span></span>
                    <span></span>
                    <div class="box_internal"></div>
                </div>

            </div>

            <div class="head">

                <h1><span>Cadastro</span></br>Curso Cuidador de Idosos</h1>


            </div>
                 <div class="inserts">

                <div class="insert">

                    <p id="txt_nome">Nome Completo</p>
                    <input type="text" name="nome" id="nome" class="nome">
                       
                </div>
                 
                <div class="insert">

                    <p>RG</p>
                    <div class="inserts_rg">
                        <input type="text" name="rg" id="rg" class="rg" placeholder="Número" inputmode="numeric">
                        <input type="text" name="rg_digi" id="rg_digi" class="rg_digi" placeholder="Dígito" maxlength="2">
    
                    </div>
              
                </div>

                <div class="insert">

                    <p>CEP</p>
                    <input type="text" name="cep" id="cep" class="cep" inputmode="numeric">
                    

                </div>

                <div class="insert">

                    <p>Bairro</p>
                    <input type="text" name="bairro" id="bairro" class="bairro">
                   

                </div>
                
                <div class="insert">

                    <p>Rua</p>
                    <input type="text" name="rua" id="rua" class="rua">
                        
                </div>

                <div class="insert">

                    <p>Número da Residência</p>
                    <input type="text" name="numero" id="numero" class="numero" inputmode="numeric">
                     
                </div>
                
                <div class="insert">

                    <p>Complemento</p>
                    <input type="text" name="complemento" id="rua" class="rua">
                        
                </div>
                
                <div class="insert">

                    <p>Contato (Whatsapp)</p>
                    <input type="text" name="celular" id="contato" class="contato" inputmode="numeric">
                      
                </div>
                
                <p>Status do pagamento</p>
                <div class="radio-container">
                    
                        <label>Pago</label>
                        <input type="radio" name="status_pagamento" value="Pago">
                    
                        <label>Pendente</label>
                        <input type="radio" name="status_pagamento" value="Pendente">
                    
                </div>
                

            </div>


            <input type="submit" value="Enviar" class="btn">

           
        </form>

    </div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    

    <script>


var cepInput = document.querySelector("#cep")




// Listeners

document.querySelector(".btn").addEventListener("click", function () {

    campos_validos = 0

    if (nome_valido()) {

        campos_validos++

    }

    if (rg_valido()) {

        campos_validos++

    }

    if (cep_valido()) {

        campos_validos++

    }

    if (bairro_valido()) {

        campos_validos++

    }

    if (rua_valido()) {

        campos_validos++

    }

    if (numero_valido()) {

        campos_validos++

    }

    if (contato_valido()) {

        campos_validos++

    }

   

    // if(campos_validos >= 8){

    //     window.alert("Tudo Certo")

    // }else{

    //     window.alert("Algo Errado")

    // }

    document.querySelector(".box").classList.add("sucess")



    

})

// Validadores
function nome_valido() {

    nome_completo = document.querySelector("#nome").value

    if (nome != "") {

        nomes = nome_completo.split(" ")
        if (nomes.length > 1) {

            document.querySelector("#nome").classList.remove("invalido")
            return true

        } else {

            document.querySelector("#nome").classList.add("invalido")
            return false

        }

    } else {

        document.querySelector("#nome").classList.add("invalido")
        return false

    }

}

function rg_valido() {

    rg = document.querySelector("#rg").value
    rg_digito = document.querySelector("#rg_digi").value
    campos_validos = 0

    if (rg.length < 10) {

        document.querySelector("#rg").classList.add("invalido")


    } else {

        document.querySelector("#rg").classList.remove("invalido")
        campos_validos++

    }

    if (rg_digito.length < 1) {

        document.querySelector("#rg_digi").classList.add("invalido")


    } else {

        document.querySelector("#rg_digi").classList.remove("invalido")
        campos_validos++

    }

    if (campos_validos == 2) {

        return true

    } else {

        return false

    }


}

function cep_valido() {

    cep = document.querySelector("#cep").value


    if (cep.length < 9) {
        document.querySelector("#cep").classList.add("invalido")
        return false

    } else {

        document.querySelector("#cep").classList.remove("invalido")
        return true

    }


}

function bairro_valido() {

    bairro = document.querySelector("#bairro").value

    if (bairro.length < 4) {
        document.querySelector("#bairro").classList.add("invalido")
        return false

    } else {

        document.querySelector("#bairro").classList.remove("invalido")
        return true

    }

}

function rua_valido() {

    rua = document.querySelector("#rua").value

    if (rua.length < 4) {
        document.querySelector("#rua").classList.add("invalido")
        return false

    } else {

        document.querySelector("#rua").classList.remove("invalido")
        return true

    }

}

function numero_valido() {

    numero = document.querySelector("#numero").value

    if (numero.length < 1) {
        document.querySelector("#numero").classList.add("invalido")
        return false

    } else {

        document.querySelector("#numero").classList.remove("invalido")
        return true

    }

}

function contato_valido() {

    contato = document.querySelector("#contato").value

    if (contato.length < 15) {
        document.querySelector("#contato").classList.add("invalido")
        return false

    } else {

        document.querySelector("#contato").classList.remove("invalido")
        return true

    }

}



function cep_preenchedor() {

    let cep = document.querySelector("#cep").value
    if (cep.length == 7) {

        let url = "https://brasilapi.com.br/api/cep/v1/" + cep

        let req = new XMLHttpRequest()
        req.open("GET", url)
        req.send()

        req.onload = function () {

            if (req.status == 200) {

                let endereco = JSON.parse(req.response)
                document.querySelector("#bairro").value = endereco.neighborhood
                document.querySelector("#rua").value = endereco.street

            } else if (req.status == 404) {

                cepInput.classList.add("invalido")

            }

        }

    }

}

// Máscaras

$("#rg").mask("00.000.000")

$("#cep").mask("00000-000")

$("#contato").mask("(00) 00000-0000")



    </script>

</body>

</html>