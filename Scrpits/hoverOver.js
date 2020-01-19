
let loginOption = document.getElementById('login-option');
let loginContainer = document.getElementById('login-form-container');
let loginWindow = 0;


let errorMSG = document.getElementsByClassName("error_msg").item(0);

loginOption.addEventListener("click",showLoginContainer);
errorMSG.addEventListener("mouseover",hide);

function showLoginContainer() {
    console.log("click");
    if(loginWindow === 0) {
        loginContainer.classList.remove("nodisplay");
        loginWindow = 1;
    }
    else {
        loginContainer.classList.add("nodisplay");
        loginWindow = 0;
    }
}

function hide() {
    errorMSG.classList.add("nodisplay");
}