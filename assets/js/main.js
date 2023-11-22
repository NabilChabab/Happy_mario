let aside = document.querySelector(".navigation");
let menu = document.querySelector("#remove");
let content = document.querySelector(".content");
let header = document.querySelector(".tit");
let head = document.querySelector(".head");


menu.onclick = () => {
    aside.classList.toggle('remv');
    menu.classList.toggle('bxs-chevron-right');
    content.classList.toggle('left');
    head.classList.toggle('left');
    header.classList.toggle('titleft');
}