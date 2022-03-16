const btnUpdate = document.querySelectorAll(".update");
const myTable = document.querySelector(".styled-table"); 
const modalLayout = document.querySelector(".modal__layout");
const btnClose = document.querySelector(".btn__close");
modalLayout.classList.add("disable");
btnUpdate.forEach((element) => {
    element.addEventListener("click", () => {
        myTable.classList.add("disable");
        modalLayout.classList.remove("disable");
        modalLayout.classList.add("active");
    });
});

btnClose.addEventListener("click", () => {
    myTable.classList.remove("disable");
    modalLayout.classList.remove("active");
    modalLayout.classList.add("disable");
});


const getSpan = document.querySelector(".update");
console.log(getSpan.getAttribute("value"));