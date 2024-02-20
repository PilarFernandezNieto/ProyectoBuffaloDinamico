$(document).ready(function () {
  iniciarApp();
  
});


function iniciarApp() {
  //navegacionFija();
  //crearGaleria();
 // scrollNav();
 menuResponsive();

}
function menuResponsive(){
  const menuMobile = document.querySelector(".menu-mobile");
  menuMobile.addEventListener("click", mostrarNavegacion);
}
function mostrarNavegacion() {
  const navegacion = document.querySelector(".navegacion-principal");
  navegacion.classList.toggle("mostrar");
}




function crearGaleria() {
  const galeria = document.querySelector(".galeria-imagenes");
  for (let i = 1; i <= 12; i++) {
    const imagen = document.createElement("picture");
    imagen.innerHTML = `
        <source srcset="build/img/thumb/${i}.webp" type="image/webp" />
        <img loading="lazy" width="200" height="300" src="build/img/thumb/${i}.jpg" alt="imagen-galeria" />
        `;
    imagen.onclick = function () {
      mostrarImagen(i);
    };
    galeria.appendChild(imagen);
  }
}
function mostrarImagen(id) {
  const imagen = document.createElement("picture");
  imagen.innerHTML = `
        <source srcset="build/img/grande/${id}.webp" type="image/webp" />
        <img loading="lazy" width="200" height="300" src="build/img/grande/${id}.jpg" alt="imagen-galeria" />
        `;

  // Crea el overlay a la imagen
  const overlay = document.createElement("div");
  overlay.appendChild(imagen);
  overlay.classList.add("overlay");
  overlay.onclick = function () {
    const body = document.querySelector("body");
    body.classList.remove("fijar-body");
    overlay.remove();
  };

  // Cerrar el modal
  const cerrarModal = document.createElement("p");
  cerrarModal.textContent = "X";
  cerrarModal.onclick = function () {
    const body = document.querySelector("body");
    body.classList.remove("fijar-body");
    overlay.remove();
  };
  cerrarModal.classList.add("btn-cerrar");
  overlay.append(cerrarModal);

  // lo añade al html
  const body = document.querySelector("body");
  body.appendChild(overlay);
  body.classList.add("fijar-body");
}
