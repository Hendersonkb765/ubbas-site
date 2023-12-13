@extends('cidsol/layout',['titulo'=>'Buscar','pagina'=>'buscar'])

@section('buscar')
<head>
    <link rel="stylesheet" href="{{asset('css/cidsol/buscar.css')}}">
   
</head>
<script>

    function toggleOdernarPor(){

        caixaOrdernarPor = document.querySelector(".orderByOptions")
    
        caixaOrdernarPor.classList.toggle("active")
    
    }
    
    function ordernarPor(opcS){
    
        opcsOdernarPor = document.querySelectorAll(".orderByOption")
        opcSelecionada = document.querySelector("#"+opcS)
    
        opcsOdernarPor.forEach(listOpc => {
            
            listOpc.classList.remove("selected")
    
        });
    
        opcSelecionada.classList.add("selected")
    
        
    
    
    }
    
</script>


@livewire('beneficiarios')      
         
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>
@livewireScripts


<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
@endsection