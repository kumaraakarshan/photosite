let click = document.getElementById("click");
let toggleNav = document.querySelector(".navbarToggle");
let cross = document.getElementById("cross")
click.addEventListener("click", function () {
    toggleNav.classList.add("shownav");
    toggleNav.classList.add("design")
    cross.addEventListener("click", function () {
        toggleNav.classList.remove("shownav")
        toggleNav.classList.remove("design")
    })
})