import './bootstrap';

// Importiamo il nostro stile custom
import '~resources/scss/app.scss';

// Importiamo la parte JS di Bootstrap
import * as bootstrap from 'bootstrap';

// Istruiamo Vite e Blade affinchè processino correttamente i nostri assets
import.meta.glob([
      '../img/**'
]);

const modal = document.getElementById("deleteModal");
const modalButton = document.getElementById("modalButton");
const noneButton = document.getElementById("noneButton");

modalButton.onclick = function () {
      modal.style.display = "block";
}

noneButton.onclick = function () {
      modal.style.display = "none";
}

window.onclick = function (event) {
      if (event.target == modal) {
            modal.style.display = "none";
      }
}