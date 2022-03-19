function Dichvu(ten, src) {
  this.ten = ten;
  this.src = src;
}


let dichvu_array = [
  new Dichvu("Dịch vụ vận tải hàng không","../view/dv1.php?madv=VC02"),
  new Dichvu("Dịch vụ vận tải","../view/dv1.php?madv=VC01"),
  new Dichvu("Dịch vụ hải quan","../view/dv1.php?madv=TT01"),
  new Dichvu("Dịch vụ COD","../view/dv1.php?madv=COD"),
];

// <<<<<<< HEAD
const listMini = document.querySelector(".list-mini");
// listSet để hiển thị menu dịch vụ
const listSet = document.querySelector("#list-set");
// dropdown để bật tắt menu dịch vụ
const dropDown = document.querySelector(".dropdown");
window.addEventListener("DOMContentLoaded", function () {
  let ten_dv = dichvu_array.map(function (element) {
      return `<li><a href="${element.src}">${element.ten}</a></li>`;
    })
    .join("");

    let ten_dv2 = dichvu_array.map(function (element) {
      return `<a class="dropdown-item" href="${element.src}">${element.ten}</a>`
    })
    .join("");

  listMini.innerHTML = ten_dv;
  listSet.innerHTML = ten_dv2;
});
// =======
// const listMini = document.querySelector(".list-mini");
// // listSet để hiển thị menu dịch vụ
// const listSet = document.querySelector(".list-set");
// // dropdown để bật tắt menu dịch vụ
// const dropDown = document.querySelector(".dropdown");
// window.addEventListener("DOMContentLoaded", function () {
//   let ten_dv = dichvu_array
//     .map(function (element) {
//       return `<li><a href="">${element.ten}</a></li>`;
//     })
//     .join("");

//   listMini.innerHTML = ten_dv;
//   listSet.innerHTML = ten_dv;
// });
// >>>>>>> 23ed09f61caac612e5c2c01b73f005a44532673b

// dropDown.addEventListener("click", function () {
//   listSet.classList.toggle("active");
// });
