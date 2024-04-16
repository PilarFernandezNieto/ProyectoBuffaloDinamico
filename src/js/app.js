$(document).ready(function () {
  iniciarApp();
});

function iniciarApp() {
  menuResponsive();
  //checkPoliticaPrivacidad();
}
function checkPoliticaPrivacidad() {

  $(".btnEnviar").on("click", function () {
    if ($("#privacidad").is(":checked")) {
      console.log("Esta");
    } else {
      console.log("No está");
       $(".btnEnviar").prop("disabled", true);
       lanzaModal();
    }
  });
 

  $("#privacidad").on("change", function (event) {
    console.log(this.checked);

    var isNotChecked = !this.checked;
    $(".btnEnviar").prop("disabled", isNotChecked);
    console.log("Check");
    $("btnEnviar").removeAttr("data-bs-toggle");
  });
}

function menuResponsive() {
  const menuMobile = document.querySelector(".menu-mobile");
  menuMobile.addEventListener("click", mostrarNavegacion);
}
function mostrarNavegacion() {
  const navegacion = document.querySelector(".navegacion-principal");
  navegacion.classList.toggle("mostrar");
}

function lanzaModal(){
  Swal.fire("Debe aceptar la polícita de privacidad");
}
