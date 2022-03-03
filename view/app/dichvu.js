function Dichvu(ten) {
  this.ten = ten;
}

let dichvu_array = [
  new Dichvu("Dịch vụ vận tải hàng không"),
  new Dichvu("Dịch vụ vận tải"),
  new Dichvu("Dịch vụ hải quan"),
  new Dichvu("Dịch vụ COD"),
];

const listMini = document.querySelector(".list-mini");
// listSet để hiển thị menu dịch vụ
const listSet = document.querySelector(".list-set");
// dropdown để bật tắt menu dịch vụ
const dropDown = document.querySelector(".dropdown");
window.addEventListener("DOMContentLoaded", function () {
  let ten_dv = dichvu_array
    .map(function (element) {
      return `<li><a href="">${element.ten}</a></li>`;
    })
    .join("");

  listMini.innerHTML = ten_dv;
  listSet.innerHTML = ten_dv;
});

dropDown.addEventListener("click", function () {
  listSet.classList.toggle("active");
});
