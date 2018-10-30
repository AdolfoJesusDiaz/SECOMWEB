<?php  session_start();
  if (isset($_SESSION['usuario'])) {
    header('Location:login.php');
  }
 ?>

 <!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <title>.::Página principal::.</tittle>
  </head>

  <body>
      <div class="cont">
        <div class="demo">
          <div class="login">
            <div class="login_check">
              <img src="img/icon.svg" width="70%">
            </div>
            <div class="login_form">
              <div class="login_row">
                <p class="text">¡Bienvenido a la vista principal!.</p>
                <a class="login_signup" href="cerrar.php">Salir</a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/index.js"></script>
  </body>
 </html>
