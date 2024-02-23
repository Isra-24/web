<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="icon" href="img/log.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <!--Iconos-->
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<?php
session_start();
include('./db_connect.php');
ob_start();
if (!isset($_SESSION['system'])) {

  $system = $conn->query("SELECT * FROM system_settings")->fetch_array();
  foreach ($system as $k => $v) {
    $_SESSION['system'][$k] = $v;
  }
}
ob_end_flush();
?>
<?php
if (isset($_SESSION['login_id']))
  header("location:index.php?page=home");

?>
<?php include 'header.php' ?>
<!-- Fondo de pantalla -->

<body class="hold-transition login-page bg-black" style="background: url(img/em.jpg) no-repeat; background-size: cover; opacity: echo;">
  <div class="login-box">
    <div class="input-group mb-3">
      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    </div>
    <!-- Logo de login  -->
    <div class="card">
      <div class="card-body login-card-body">
        <center>
          <div>
            <img src="img/tar.png" alt="" style="width: 113px; height: 113px;">
            <div>
              <p><i>HormiWork</i></p>
            </div>
          </div>
        </center>
        <div>
          <br>
        </div>
        <form action="" id="login-form">
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" required placeholder="E-mail">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" required placeholder="Contraseña" id="Input">
            <!-- <img src="img/ojo.png" alt="" class="icon" id="Eye" style="height: 60%px; top: 50%; position: absolute; right: 40px; transform: translateY(-50%); opacity: 0.8; cursor: pointer; opacity: 0.3;"> -->
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <script src="assets/code.js"></script>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                </label>
                <font size=2>Grabar nombre de usuario</font>
              </div>
            </div>
            <br><br><br>
            <!-- /.Boton de acceso-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary btn-block;" style="width: 95%; display: block; margin-right: auto; margin-left: auto;">Iniciar Sesión</button>
            </div>
            <div class="input-group mb-3">
            </div>
            <div class="input-group mb-3">
            </div>
          </div>
        </form>
      </div>
      <!-- Cuerpo del login -->
    </div>
  </div>
  <!-- Funcion de login -->
  <script>
    $(document).ready(function() {
      $('#login-form').submit(function(e) {
        e.preventDefault()
        start_load()
        if ($(this).find('.alert-danger').length > 0)
          $(this).find('.alert-danger').remove();
        $.ajax({
          url: 'ajax.php?action=login',
          method: 'POST',
          data: $(this).serialize(),
          error: err => {
            console.log(err)
            end_load();

          },
          success: function(resp) {
            if (resp == 1) {
              location.href = 'index.php?page=home';
            } else {
              $('#login-form').prepend('<div class="alert alert-danger">Tu usuario o la contraseña es incorrecta</div>')
              end_load();
            }
          }
        })
      })
    })
  </script>
  <?php include 'footer.php' ?>
  <div class="input-group mb-3">
    <br>
    <br>
    <br>
  </div>
  <!-- Pie de Pagina -->
  <footer class="pie-pagina" style="background: white;">
    <div class="grupo-1">
      <div class="box">
        <figure>
          <a href="#">
            <img src="img/portada.gif" alt="Logo de SLee Dw">
          </a>
        </figure>
      </div>
      <div class="box">
        <h2 style="color: #5E933B;" class="m-0"><b>Sobre nosotros</b></h2>
        <br>
        <p style="color: black;">El GAD de Sevilla Don Bosco apoya a las ferias agrícolas, gastronómicas y de emprendimiento.
          Ademas es un gobierno incluyente y de puertas abiertas.</p>
      </div>
      <div class="box">
        <h2 style="color: #5E933B;" class="m-0"><b>Síguenos</b></h2>
        <br>
        <div class="red-social">
          <a href="https://www.facebook.com/GadPRSevillaDonBosco" target="_blank" class="fa fa-facebook" style="background-color:rgba(33, 37, 41);"></a>
          <a href="https://sevilladonbosco.gob.ec/" target="_blank" class="fa fa-globe" style="background-color:rgba(33, 37, 41);"></a>
        </div>
        <br>
        <div class="box">
          <h2 style="color: #5E933B;" class="m-0"><b>Contáctanos</b></h2>
          <br>
          <a href="mailto:[email protected]">info@sevilladonbosco.gob.ec
          </a>
        </div>
      </div>
    </div>
    <div class="grupo-2" style="background-color:rgba(0, 123, 255);">
      Copyright <small>&copy; 2024 <a href="https://www.facebook.com/Ubaldodoki" target="_blank" style="color:rgba(33, 37, 41);">Ikiam</a>.Todos los Derechos Reservados.</small>
    </div>
  </footer>
</body>

</html>