

let header = document.getElementById('stick_header');
let logoY = 216;
let stick = 0;

stickMenu();

window.addEventListener('scroll', stickMenu);


function stickMenu() {

    let ScrollY = window.scrollY;



    if(logoY < ScrollY){

        if(stick === 0) {
            console.log("Add");
            console.log(ScrollY);
            header.classList.add("sticky");
            stick = 1;
        }
    }else{

        if(stick === 1) {
            console.log("Remove");
            console.log(ScrollY);
            header.classList.remove("sticky");
            stick = 0;
        }
    }
}