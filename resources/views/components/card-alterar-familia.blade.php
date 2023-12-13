<div class="container-alterar">

    <form class="alterar" name="formulario" wire:submit.prevent="registrarMudanca">
        <h1>Alterar cadastro</h1>
        <div class="campo">
            <label for="">Nome</label>
            <input wire:model.lazy="nome" type="text" placeholder="nome" >
        </div>
        <div class="campo">
            <label for="">CPF</label>
            <input wire:model.lazy="cpf" type="text" placeholder="cpf" >
        </div>
        <div class="campo">
            <label for="">Telefone</label>
            <input wire:model.lazy="telefone" type="text" placeholder="telefone" >
        </div>
        <div class="campo">
            <label for="">Cep</label>
            <input wire:model.lazy="cep" type="text" placeholder="cep" >
        </div>
        <div class="campo">
            <label for="">Crianças</label>
            <input wire:model.lazy="criancas" type="text" placeholder="quantidade de crianças" >
        </div>
        <div class="campo">
            <label for="">Adolecentes</label>
            <input wire:model.lazy="adolecentes" type="text" placeholder="quantidade de adolecentes" >
        </div>
        <div class="campo">
            <label for="">Adultos</label>
            <input wire:model.lazy="adultos" type="text" placeholder="quantidade de adultos">
        </div>
        <div class="campo">
            <label for="">Idosos</label>
            <input wire:model.lazy="idosos" type="text" placeholder="quantidade de idosos">
        </div>
        <div class="campo">
            <label for="">Gravidas</label>
            <input wire:model.lazy="gestante" type="text" placeholder="quantidade de gravidas" >
        </div>
        
       <div>
        <input type="submit" value="Alterar" class="botao-alterar" >
        <input wire:click="fecharJanela" type="button" class="botao-alterar" value="fechar">
       </div>
        
    </form>
</div>

<style>
    .campo{
        display: flex;
        justify-content: space-around;
        width: 100%;
    }
    .alterar label{
        font-size: 1.1rem; 
    }
    .container-alterar{
    position: absolute;
    display: flex;
    justify-content: center;
    width: 100%;
   height: 70vh;
}
.alterar{
    background-color: rgb(10, 174, 10);
    display: flex;
    align-items: center;
    justify-content: center;
    color: black;
    font-size: 25px;
    border-radius: 20px;
    flex-direction: column;
    padding: 10px;
    height: 500px;

}
.alterar input{
    padding: 5px;
    font-size: 1.1rem;
}
.alterar h1{
    font-size: 30px;
    padding: 10px;
}
.botao-alterar{
    padding: 60px;
    width: 80px;
    height: 40px;
}
</style>