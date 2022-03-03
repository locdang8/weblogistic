//bật tắt menu

const menuBtn = document.querySelector(".button-click");
const headerNav = document.querySelector(".header__navbar");
const barIcon = document.querySelector(".fa-bars");

menuBtn.addEventListener("click" , function() {
    headerNav.classList.toggle("active");
    barIcon.classList.toggle("fa-x");
});

// object dichvu

function Dichvu(ten) {
    this.ten = ten;
}

let dichvu_array = [
    new Dichvu("Dịch vụ vận tải hàng không"),
    new Dichvu("Dịch vụ vận tải"),
    new Dichvu("Dịch vụ hải quan"),
    new Dichvu("Dịch vụ COD")
];

const listMini = document.querySelector(".list-mini");
console.log(listMini);
window.addEventListener("DOMContentLoaded", function() {
    let ten_dv = dichvu_array.map(function(element) {
        return `<li><a href="">${element.ten}</a></li>`;
    }).join("");

    listMini.innerHTML = ten_dv;
});


// function getDichVu() {

// }
