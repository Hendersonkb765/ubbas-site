header = document.querySelector(".header")
menu = document.querySelector(".menu")
toggle = document.querySelector(".toggle")
invisivel = document.querySelector(".invisible")

toggle.addEventListener('click', function(){

    toggle.classList.toggle("active")
    menu.classList.toggle("open")
    invisivel.classList.toggle("active")
    

})

function fecharMenu(){

    toggle.classList.toggle("active")
    menu.classList.toggle("open")
    invisivel.classList.toggle("active")

}