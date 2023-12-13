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