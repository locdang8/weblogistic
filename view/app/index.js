// //bật tắt menu

// const menuBtn = document.querySelector(".button-click");
// const headerNav = document.querySelector(".header__navbar");
// const barIcon = document.querySelector(".fa-bars");

// menuBtn.addEventListener("click", function () {
//   headerNav.classList.toggle("active");
//   barIcon.classList.toggle("fa-x");
// });

// const menuMini = document.querySelector(".menu-mini");
// console.log(menuMini);

// them class aos
function addthuoctinh(){
  const service_item = document.querySelectorAll('.home-service__item');
  const service_item2 = document.querySelectorAll('.home-introduce__item');
  service_item[0].setAttribute("data-aos", "fade-left");
  service_item[1].setAttribute("data-aos", "fade-right");
  service_item[2].setAttribute("data-aos", "fade-left");
  service_item[3].setAttribute("data-aos", "fade-right");
  service_item[4].setAttribute("data-aos", "fade-left");

  service_item2.forEach(function(name,index){
    name.setAttribute("data-aos","fade-left")
  })

}
addthuoctinh();