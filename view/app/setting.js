// const btnUpdate = document.querySelectorAll(".update");
// const myTable = document.querySelector(".styled-table"); 
// const modalLayout = document.querySelector(".modal__layout");
// const btnClose = document.querySelector(".btn__close");
// modalLayout.classList.add("disable");
// btnUpdate.forEach((element) => {
//     element.addEventListener("click", () => {
//         myTable.classList.add("disable");
//         modalLayout.classList.remove("disable");
//         modalLayout.classList.add("active");
//     });
// });

// btnClose.addEventListener("click", () => {
//     myTable.classList.remove("disable");
//     modalLayout.classList.remove("active");
//     modalLayout.classList.add("disable");
// });

// const getSpan = document.querySelectorAll(".update");
// // getSpan.forEach((element) => {
// //     element.addEventListener("click", ()=> {
// //         let obj = {
// //             dichvu_id: element.getAttribute("value")
// //         }
// //         const myObj = JSON.stringify(obj);
// //         const  xmlhttp = new XMLHttpRequest();
// //         xmlhttp.onload = function() {
// //             const myData = JSON.parse(this.responseText);
// //             let text = "";
// //             for(let x in myData) {
// //                 text += myData[x].tendv + "<br>";
// //             }
// //             document.querySelector(".demo").innerHTML = text;
// //         }
// //         xmlhttp.open("POST", "dichvu.php");
// //         xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
// //         xmlhttp.send("x=" + myObj);
// //     });
// // });
// function loadDoc(str) {
//     let xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//         if(this.onreadystatechange == 4 && this.status == 200) {
//             document.querySelector(".modal__layout").innerHTML = this.responseText;
//         }
//     };
//     xhttp.open("GET","../view/admin/dichvu.php?id="+str, true);
//     xhttp.send();
// }
// let myValue = null;
// getSpan.forEach(element => {
//     element.addEventListener("click", () => {
//         myValue = element.getAttribute("value");
//         console.log(myValue);
//         loadDoc(myValue);
//     });
// });



