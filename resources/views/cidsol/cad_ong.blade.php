@extends('cidsol/layout',['titulo'=>'Cadastrar ONG','pagina'=>'ong'])

@section('cadastro_ong')

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
@endsection