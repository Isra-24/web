<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="icon" href="img/log.ico">
</head>
<?php session_start() ?>
<?php
if (!isset($_SESSION['login_id']))
  header('location:login.php');
include 'db_connect.php';
ob_start();
if (!isset($_SESSION['system'])) {

  $system = $conn->query("SELECT * FROM system_settings")->fetch_array();
  foreach ($system as $k => $v) {
    $_SESSION['system'][$k] = $v;
  }
}
ob_end_flush();

include 'header.php'
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <?php include 'topbar.php' ?>
    <?php include 'sidebar.php' ?>

    <!-- Contiene contenido de la página. -->
    <div class="content-wrapper">
      <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
      <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
      <!-- Encabezado de contenido  -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="p-0 m-0"><b>Formulario</b></h1>
            </div><!-- Columna -->

          </div><!-- Fila -->
          <hr class="border-primary">
        </div><!-- Contenedor-fluido-->
      </div>
      <!-- Encabezado de contenido -->

      <!-- Contenido principal -->
      <section class="content">
        <div class="container-fluid">
          <?php
          $page = isset($_GET['page']) ? $_GET['page'] : 'home';
          if (!file_exists($page . ".php")) {
            include '404.html';
          } else {
            include $page . '.php';
          }
          ?>
        </div><!-- Contenedor-fluido -->
      </section>
      <!-- Contenido -->
      <div class="modal fade" id="confirm_modal" role='dialog'>
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="p-0 m-0"><b style="color: grey;">Confirmación</b></h5>
            </div>
            <div class="modal-body">
              <div id="delete_content"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id='confirm' onclick="">Continuar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="uni_modal" role='dialog'>
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="p-0 m-0"><b style="color: grey;">Detalle</b></h5>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Guardar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="uni_modal_right" role='dialog'>
        <div class="modal-dialog modal-full-height  modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="fa fa-arrow-right"></span>
              </button>
            </div>
            <div class="modal-body">
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="viewer_modal" role='dialog'>
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
            <img src="" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- Envoltorio de contenido -->

    <!-- Barra lateral de control -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- El contenido de la barra lateral de control va aquí -->
    </aside>
    <!-- Barra lateral de control-->

    <!-- Pie de página principal -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2024 <a href="https://www.facebook.com/Ubaldodoki" target="_blank">Ikiam</a>.</strong>
      Todos los derechos reservados
      <div class="float-right d-none d-sm-inline-block">
        <b>Sistema de gestión de tareas</b>
      </div>
    </footer>
  </div>
  <!-- Envoltura -->

  <!-- GUIONES REQUERIDOS -->
  <!-- jQuery -->
  <!-- Bootstrap -->
  <?php include 'footer.php' ?>
</body>

</html>