<?php
session_start();
require('../../configuraciones/conexion.php');

//estos son los name que estan dentro de login
$Usr=$_POST['usuario'];
$Pass=$_POST['pass'];
$ConsultaU="SELECT NomUsr, nivel, u.IdPer, NomPer, ApePer, TelPer, DirPer, Email, IdSucursal  FROM usuarios u inner join personal p on u.IdPer = p.IdPer  WHERE NomUsr='$Usr' and Contra='$Pass'";
$Resultado=mysqli_query( $conn,$ConsultaU);
$filas=mysqli_num_rows($Resultado);


if($filas>0){
    while ($fila2 =mysqli_fetch_array($Resultado)){
        $_SESSION['Usuario'] = $fila2[0];
        $_SESSION['nivel'] = $fila2[1];
        $_SESSION['IdPer'] = $fila2[2];
        $_SESSION['NomPer'] = $fila2[3];
        $_SESSION['ApePer'] = $fila2[4];
        $_SESSION['TelPer'] = $fila2[5];
        $_SESSION['DirPer'] = $fila2[6];
        $_SESSION['Email'] = $fila2[7];
        $_SESSION['IdSucursal'] = $fila2[8];
    }
    
    echo'<script type="text/javascript"> alert("Bienvenido"); window.location.href="/api-bodega-portales/inicio"; </script>';//acceder al inicio 
    
}else{//error que reidirige al login si ingresa mal los datos 
    echo'<script type="text/javascript"> alert("Registro Incorrecto"); window.location.href="../../login"; </script>';
    
}
mysqli_free_result($Resultado);
mysqli_close($conn);
