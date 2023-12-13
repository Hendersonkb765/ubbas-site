@extends('cidsol/mobile/layout',['titulo'=>'Buscar','pagina'=>'buscar'])
@section('buscar')
<head>
    <link rel="stylesheet" href="padraoM.css">
    <link rel="stylesheet" href="{{asset('css/cidsol/mobile/buscar.css')}}">
    <script src="{{asset('js/cidsol/buscar.js')}}" defer></script>
    <title>Painel Principal</title>
</head>


<div class="container">
    
    @livewire('beneficiarios')      
         
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>
@livewireScripts

</div>    
    
    


    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

   



@endsection