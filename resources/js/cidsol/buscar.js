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

    toggleOdernarPor()


}

