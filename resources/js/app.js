import './bootstrap';

// Importiamo il nostro stile custom
import '~resources/scss/app.scss';

// Importiamo la parte JS di Bootstrap
import * as bootstrap from 'bootstrap';

// Istruiamo Vite e Blade affinchè processino correttamente i nostri assets
import.meta.glob([
      '../img/**'
]);

// let modal = document.getElementsByClassName("modale");
// let modalButton = document.getElementsByClassName("modalButton");
// let noneButton = document.getElementsByClassName("noneButton");

// document.getElementsByClassName("modalButton").onclick = function () {
//       document.getElementsByClassName("modale").style.display = "block";
// }

// document.getElementsByClassName("noneButton").onclick = function () {
//       document.getElementsByClassName("modale").style.display = "none";
// }

// window.onclick = function (event) {
//       if (event.target == modal) {
//             document.getElementsByClassName("modale").style.display = "none";
//       }
// }