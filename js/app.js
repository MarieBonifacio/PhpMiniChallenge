var navbar = document.querySelector(".navbar img");
navbar.addEventListener("click",toggleMenu);

function toggleMenu(){
    var navul = document.querySelector(".liste");
    navul.classList.toggle("show");
}
