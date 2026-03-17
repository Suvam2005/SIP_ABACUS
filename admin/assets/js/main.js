let list  = document.querySelector(".navigation li");

function activeLink(){
    list.forEach((item) =>{
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
};

list.forEach((item) => item.addEventListener("mousehover", activeLink));


// Menu Tootle 

let toggle = document.querySelector(".toggle");
let navigation= document.querySelector(".navigation");
let main = document.querySelector(".main");

// toggle.onclick = function(){
//     navigation.classList.toggle("active");
//     main.classList.toggle("active");
// }

toggle.addEventListener("click", toggleFunction())