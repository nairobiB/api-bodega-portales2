$("#btnGuardar").click(function () {
  $.post(
    "/entradadetalle/guardar",
    {
      Fechaentrada: $("#fecha").val(),
      IdProv: $("#proveedor").val(),
      NomUsr: $("#usuario").val(),
    },
    function (data, status) {
      alert("Data: " + data + "\nStatus: " + status);
    }
  );
});
