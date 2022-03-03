//bật tắt menu

const menuBtn = document.querySelector(".button-click");
const headerNav = document.querySelector(".header__navbar");
const barIcon = document.querySelector(".fa-bars");

menuBtn.addEventListener("click" , function() {
    headerNav.classList.toggle("active");
    barIcon.classList.toggle("fa-x");
});

// headerNav.style.display = "block";