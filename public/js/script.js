/** @format */

// Toggle Class Active
const navbarNav = document.querySelector(".absolute-nav");
// Ketika Hamburger Menu di-Klik
document.querySelector("#hamburger-menu").onclick = () => {
    navbarNav.classList.toggle("absolute-nav-active");
};

// Klik di luar sidebar untuk menghilangkan nav
const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove("absolute-nav-active");
    }
});
// Menit ke 49
