/*
* Handle navbar toglle on mobile view
*/
document.querySelector("#toggle-nav").addEventListener("click", (event) => {

    let navElement = event.target.offsetParent.querySelector("nav");

    navElement.classList.toggle("active");

});
