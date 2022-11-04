$("#btnGuardar").click(function () {
  $.post(
    "/tipos/guardar",
    {
      nombre: $("#inputNombre").val(),
    },
    function (data, status) {
      alert("Data: " + data + "\nStatus: " + status);
    }
  );
});
