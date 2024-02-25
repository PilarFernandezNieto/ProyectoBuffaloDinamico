/* global bootstrap: false */
(function () {
  "use strict";
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl);
  });
})();
/*** modales eliminar **/
$(".eliminar").on("click", function (e) {
  e.preventDefault();
  const formulario = $(e.target).closest("form"); 
  confirmarBorrado(formulario);
});

function confirmarBorrado(formulario) {
  Swal.fire({
    title: "¿Estás seguro?",
    text: "Esta acción no se puede deshacer",
    icon: "warning",
    width: 400,
    padding: "3em",
    showCancelButton: true,
    confirmButtonColor: "#2D882D",
    cancelButtonColor: "#D44E49",
    confirmButtonText: "Sí, eliminarlo",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      formulario.submit();
    }
  });
}
// Obtener el parámetro 'exito' de la URL
const urlParams = new URLSearchParams(window.location.search);
const exito = urlParams.get("exito");
const accion = urlParams.get("accion");
const mensaje = urlParams.get("mensaje");

// Si 'exito' es igual a 'true', mostrar una alerta de éxito
if (exito === "true") {
  switch (accion) {
    case "crear":
      Swal.fire({
        width: 400,
        padding: "3em",
        title: "¡Enhorabuena!",
        text: "El registro se ha creado",
        icon: "success",
        customClass: {
          content: "contenido_alertas",
        },
      }).then((result) => {
        if (result.isConfirmed) {
          history.replaceState({}, document.title, window.location.pathname);
        }
      });
      break;
    case "actualizar":
      Swal.fire({
        width: 400,
        padding: "2rem",
        title: "¡Enhorabuena!",
        text: "El registro se ha actualizado",
        icon: "success",
      }).then((result) => {
        if (result.isConfirmed) {
          history.replaceState({}, document.title, window.location.pathname);
        }
      });
      break;
    case "eliminar":
      Swal.fire({
        width: 400,
        padding: "3em",
        title: "¡Borrado!",
        text: "Has eliminado el registro",
        icon: "success",
      }).then((result) => {
        if (result.isConfirmed) {
          history.replaceState({}, document.title, window.location.pathname);
        }
      });
      break;
  }
} else if ( exito == "false") {
  Swal.fire({
    width: 400,
    padding: "3em",
    icon: "error",
    title: "Ups!",
    text: mensaje,
  }).then((result) => {
    if (result.isConfirmed) {
      history.replaceState({}, document.title, window.location.pathname);
    }
  });
} 

$(function () {
  $("#listado_noticias").DataTable({
    responsive: true,
    order: [[4, "desc"]],
    columnDefs: [
      { width: "5%", targets: 0 },
      { width: "25%", targets: [1, 2] },
      { width: "15%", targets: 3 },
      { width: "10%", targets: [4, 5] },
      { className: "text-center", targets: [0, 4, 5] },
    ],
    language: {
      decimal: "",
      emptyTable: "No hay datos que mostrar",
      info: "Mostrando _START_ a _END_ de _TOTAL_ entradas",
      infoEmpty: "Mostrando 0 a 0 de 0 entradas",
      infoFiltered: "(filtered from _MAX_ total entries)",
      infoPostFix: "",
      thousands: ",",
      lengthMenu: "Mostrando _MENU_ entradas",
      loadingRecords: "Cargando...",
      processing: "",
      search: "Búsqueda:",
      zeroRecords: "No hay registros",
      paginate: {
        first: "Primera",
        last: "Última",
        next: "Siguiente",
        previous: "Anterior",
      },
      aria: {
        sortAscending: ": activate to sort column ascending",
        sortDescending: ": activate to sort column descending",
      },
    },
  });
});
$(function () {
  $("#listado_usuarios").DataTable({
    responsive: true,
    columnDefs: [
      { width: "5%", targets: 0 },
      { width: "15%", targets: 1 },
      { width: "25%", targets: [2, 3] },
      { width: "10%", targets: [4, 5] },
      { className: "text-center", targets: [0, 4, 5] },
    ],
    language: {
      decimal: "",
      emptyTable: "No hay datos que mostrar",
      info: "Mostrando _START_ a _END_ de _TOTAL_ entradas",
      infoEmpty: "Mostrando 0 a 0 de 0 entradas",
      infoFiltered: "(filtered from _MAX_ total entries)",
      infoPostFix: "",
      thousands: ",",
      lengthMenu: "Mostrando _MENU_ entradas",
      loadingRecords: "Cargando...",
      processing: "",
      search: "Búsqueda:",
      zeroRecords: "No hay registros",
      paginate: {
        first: "Primera",
        last: "Última",
        next: "Siguiente",
        previous: "Anterior",
      },
      aria: {
        sortAscending: ": activate to sort column ascending",
        sortDescending: ": activate to sort column descending",
      },
    },
  });
});

$("#texto").summernote({
  placeholder: "Texto de la noticia",
  tabsize: 2,
  height: 120,
  toolbar: [
    ["style", ["style"]],
    ["font", ["bold", "underline", "clear"]],
    ["color", ["color"]],
    ["para", ["ul", "ol", "paragraph"]],
    ["table", ["table"]],
    ["insert", ["link", "picture", "video"]],
    ["view", ["fullscreen", "codeview", "help"]],
  ],
});
