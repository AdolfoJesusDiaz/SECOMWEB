<?php  session_start();
  if (isset($_SESSION['usuario'])) {
    header('Location:principal.php');
  }
 ?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>.::inicie sesion::.</title>
    <meta name="viewport" content="width=device-width. initial-scale=1, user-scalable=yes">
      <link rel='stylesheet prefetch' href="https://fonts.googleapis.com/css?family=Open+Sans">
      <link rel="stylesheet" href="/css/style.css">
  </head>

  <body>
      <div class="cont">
        <div class="demo">
          <div class="login">
            <--! Inicia el código de la imágen de la cabecera del login-->
            <div class="login_check"><img src="img/icon.svg" width="70%"></div>
            <--! Acaba el código de la imágen de la cabecera del login-->

            <--! Inicia el código del formulario login-->
            <form action="valida.php" method="post">
              <--! El área-->
              <div class="login_form">

                <--! Inicio la fila de usuario-->
                <div class="login_row">
                  <--! Imágen de la izquierda en usuario-->
                  <svg class="login_icon name svg-icon" viewbox="0 0 20 20">
                    <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                  </svg>
                    <--! Caja de texto de usuario-->
                    <input type="text" class="login_input name" placeholder="Usuario" name="usuario" maxlength="20"/>
                </div>
                <--! Acacbo la fila de usuario-->

                <--! Inicio la fila de contraseña-->
                <div class="login_row">
                  <--! Imágen de la izquierda en contraseña-->
                  <svg class="login_icon name svg-icon" viewbox="0 0 20 20">
                    <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                  </svg>
                    <--! Caja de texto de contraseña-->
                    <input type="password" class="login_input pass" placeholder="Contraseña" name="password" maxlength="20"/>
                </div>
                <--! Acacbo la fila de contraseña-->
                <button type="submit" class="login_submit">Ingresar</button>
              </div>
            </form>
            <--! Acaba el código del formulario login-->
          </div>
        </div>
      </div>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/index.js"></script>
  </body>

</html>
