
<div>
    @if (session('success'))

    <div class="container-mensagem"   wire:poll.1s>
   
        <div class="mensagem" wire:loading.class="opacity-50" wire:target="métodoDoComponente" >
            <p >{{session('success')}}</p>
        </div>
       
      
      <style>
    
        .container-mensagem{
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        }
        .mensagem{
        background-color: green;
        width: 300px;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: black;
        font-size: 25px;
        border-radius: 20px;
        z-index: 2;
        transition: 3s;
        }
      </style>
    </div>
    @endif

</div>


