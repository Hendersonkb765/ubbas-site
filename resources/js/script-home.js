        


        seletor = document.querySelector("#seletor")
        container = document.querySelector(".container")
        emails = document.querySelectorAll(".mail")
        header = document.querySelector(".header")
        menu = document.querySelector(".menu")
        moon = document.querySelector(".imgBox")
        toggle = document.querySelector(".toggle")
        invisivel = document.querySelector(".invisivel")
        

        if(localStorage.getItem("iluminacao") == "escuro"){
            escuro();
        }
        function escuro(){
            container.classList.toggle("escuro")
            emails.forEach(function(email){
    
                email.classList.toggle("escuro");
    
            })
            header.classList.toggle("escuro")
                menu.classList.toggle("escuro")
    
    
        }
        
    
        seletor.addEventListener('click', function(){
         
           escuro();

            moon.classList.toggle("active")
            document.documentElement.style.setProperty('--padrao', '#232323')
            
            if(container.classList[1]== "escuro"){
                localStorage.setItem("iluminacao","escuro")
            }
            else{
                localStorage.setItem("iluminacao","claro")
            }
            

        })
        
        toggle.addEventListener('click', function(){

            toggle.classList.toggle("active")
            menu.classList.toggle("open")
            invisivel.classList.toggle("active")
            

        })

        function fecharMenu(){
            mediaQuery = window.matchMedia("(max-width: 785px)");

            if(mediaQuery.matches){

                toggle.classList.toggle("active")
                menu.classList.toggle("open")
                invisivel.classList.toggle("active")

            }

            

        }

