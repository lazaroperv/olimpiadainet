// document.addEventListener("DOMContentLoaded", function() {
//     const menuButton = document.querySelector(".menu-button");
//     const menu = document.querySelector(".menu");
  
//     menuButton.addEventListener("click", function())
//       menu.classList.toggle("show");
//     });

//     document.addEventListener("click", function(event) {
//       if (!event.target.classList.contains("menu-button") && !event.target.classList.contains("menu")) {
//         menu.classList.remove("show");
//       }
//     });
//   });
  
//   /* Agregar la clase show al menú cuando se hace click en el botón */
//   .menu.show {
//     display: block;
//   }
document.addEventListener("DOMContentLoaded", function() {
    const menuButton = document.querySelector(".menu-button");
    const menu = document.querySelector(".menu");
  
    menuButton.addEventListener("click", function() {
      menu.classList.toggle("show");
    });
  
    document.addEventListener("click", function(event) {
      if (!event.target.classList.contains("menu-button") && !event.target.classList.contains("menu")) {
        menu.classList.remove("show");
      }
    });
  });
