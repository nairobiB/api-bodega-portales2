$("#btnGuardar").click(function () {
  $.post(
    "/entradadetalle/guardar",
    {
      fecha: $("#fecha").val(),
      proveedor: $("#proveedor").val(),
      usuario: $("#usuario").val(),
    },
    function (data, status) {
      alert("Data: " + data + "\nStatus: " + status);
    }
  );
});
