<?php
require_once('vistas/plantilla/head.php');
?>
<div class="parent clearfix">
    <div class="bg-illustration">
      <img src="https://i.ibb.co/Pcg0Pk1/logo.png" alt="logo">

      <div class="burger-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>

    </div>
    
    <div class="login">
      <div class="container">
        <h1>Accede a tu cuenta<br />Generamos confianza</h1>
    
        <div class="login-form">
          <form action="vistas/login/ValidacionUsuario.php" method="POST">
            <input type="text" name= "usuario" placeholder="Usuario">
            <input type="password" name= "pass" placeholder="Password">

            <div class="remember-form">
              <input type="checkbox">
              <span>Recordar</span>
            </div>
            <div class="forget-pass">
              <a href="#">Olvidaste tu contrase;a?</a>
            </div>

            <button type="submit" >LOG-IN</button>
            <a class="btn btn-block bg-green waves-effect" href="inicio/inicio" type="button">INGRESAR</a>

          </form>
        </div>
    
      </div>
      </div>
  </div>