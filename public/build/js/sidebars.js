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
$(document).ready(function () {
  lanza();
});

function lanza() {
  notificacionEliminar();
  notificacionesAcciones();
  listadoNoticias();
  listadoUsuarios();
  listadoDiscos();
  listadoInstrumentos();
  listadoMusicos();
  listadoCategorias();
  listadoProductos();
  textoDiscos();
  textosDiscos();
  textoNoticias();
  textoMusicos();
  lanzaModalDisco();
  lanzaModalMusico();
}

/*** modales eliminar **/
function notificacionEliminar() {
  $(".eliminar").on("click", function (e) {
    e.preventDefault();
    const formulario = $(e.target).closest("form");
    console.log(formulario);
    confirmarBorrado(formulario);
  });
}

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

function notificacionesAcciones() {
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
  } else if (exito == "false") {
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
}
function listadoCategorias() {
  $("#listado_categorias").DataTable({
      responsive: true,
      columnDefs: [
        { width: "5%", targets: [0, 2] },
        { width: "50%", targets: [1] },
        { className: "text-center", targets: [0] },
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
  }

  function listadoProductos() {
    $("#listado_productos").DataTable({
      responsive: true,
      order: [[5, "desc"]],
      columnDefs: [
        { width: "5%", targets: 0 },
        { width: "30%", targets: [1] },
        { width: "10%", targets: [2, 3, 4, 5, 6] },
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
  }



function listadoNoticias(){
  $("#listado_noticias").DataTable({
    responsive: true,
    order: [[5, "desc"]],
    columnDefs: [
      { width: "5%", targets: 0 },
      { width: "22%", targets: [1, 2] },
      { width: "15%", targets: 3 },
      { width: "10%", targets: [4, 5] },
      { width: "10%", targets: 6 },
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
    }
  });
  }

function listadoUsuarios(){
  $("#listado_usuarios").DataTable({
    responsive: true,
    columnDefs: [
      { width: "5%", targets: 0 },
      { width: "15%", targets: 1 },
      { width: "25%", targets: [2, 3] },
      { width: "15%", targets: [4, 5] },
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

}
function listadoDiscos(){
    $("#listado_discos").DataTable({
      responsive: true,
      order: [[3, "asc"]],
      columnDefs: [
        { width: "5%", targets: 0 },
        { width: "20%", targets: [1, 2] },
        { width: "5%", targets: [3, 4] },
        { width: "15%", targets: 5 },
        { width: "30%", targets: 6 },
        {
          targets: 6,
          render: function (data, type, row, meta) {
            if (type === "display") {
              return data.length > 50 ? data.substr(0, 50) + "..." : data;
            } else {
              return data;
            }
          },
        },

        { className: "text-center", targets: [0, 3, 4] },
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
}

function listadoInstrumentos(){
    $("#listado_instrumentos").DataTable({
      responsive: true,
      columnDefs: [
        { width: "5%", targets: 0 },
        { width: "25%", targets: [1, 2] },
        { width: "10%", targets:  3},
        { className: "text-center", targets: [0] },
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

}
function listadoMusicos() {
  $("#listado_musicos").DataTable({
    responsive: true,
    columnDefs: [
      { width: "5%", targets: [0, 3, 4, 7] },
      { width: "20%", targets: 6 },
      { width: "10%", targets: [1,2, 5] },
      {
        targets: 6,
        render: function (data, type, row, meta) {
          if (type === "display") {
            return data.length > 50 ? data.substr(0, 50) + "..." : data;
          } else {
            return data;
          }
        },
      },

      { className: "text-center", targets: [0, 3, 4, 5] },
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
}


function textoNoticias(){
  $("#texto").summernote({
    placeholder: "Texto de la noticia",
    tabsize: 2,
    height: 200,
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
}
function textoDiscos(){
  $("#informacion").summernote({
    placeholder: "Información del disco",
    tabsize: 2,
    height: 200,
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
}
function textosDiscos() {
  $("#textos").summernote({
    placeholder: "Información del disco",
    tabsize: 2,
    height: 200,
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
}

function textoMusicos(){
    $("#biografia").summernote({
      placeholder: "Biografía",
      tabsize: 2,
      height: 200,
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
}

function lanzaModalDisco(){
   $(".texto-recortado").on("click", function (e) {
     let discoID = $(this).closest("tr").find("td:eq(0)").text();
     $.ajax({
       type: "POST",
       url: "http://localhost:3000/api/getTextoCompletoDisco.php?id=" + discoID,
       contentType: "application/json",
       dataType: "json",
       cache: false,
       success: function (response) {
         lanzaInformacion(response.titulo, response.informacion);
       },
     });
   });

}
function lanzaModalMusico() {
  $(".texto-recortado-musico").on("click", function (e) {
    let musicoID = $(this).closest("tr").find("td:eq(0)").text();
    $.ajax({
      type: "POST",
      url:
        "http://localhost:3000/api/getTextoCompletoMusico.php?id=" + musicoID,
      contentType: "application/json",
      dataType: "json",
      cache: false,
      success: function (response) {
        console.log(response);
        lanzaInformacion(response.nombre + " " + response.apellidos, response.biografia);
      },
    });
  });
}
function lanzaInformacion(titulo, informacion){
  Swal.fire({
    title: titulo,
    html: informacion,
    showClass: {
      popup: `
      animate__animated
      animate__fadeInUp
      animate__faster
    `,
    },
    hideClass: {
      popup: `
      animate__animated
      animate__fadeOutDown
      animate__faster
    `,
    },
  });
}