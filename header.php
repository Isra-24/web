<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  date_default_timezone_set("Asia/Manila");

  ob_start();
  $title = isset($_GET['page']) ? ucwords(str_replace("_", ' ', $_GET['page'])) : "Home";
  ?>
  <title>Gestión de tareas</title>

  <!-- Fuente de Google: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Iconos impresionantes de fuentes -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- superponerbarras de desplazamiento -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Tablas de datos -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Seleccionar 2 -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Alerta 2 -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Tostada -->
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
  <!-- zona de caída js -->
  <link rel="stylesheet" href="assets/plugins/dropzone/min/dropzone.min.css">
  <!-- Selector de fecha y hora -->
  <link rel="stylesheet" href="assets/dist/css/jquery.datetimepicker.min.css">
  <!-- Compruebe casillas de verificación y entradas de radio-->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Cambiar de palanca -->
  <link rel="stylesheet" href="assets/plugins/bootstrap4-toggle/css/bootstrap4-toggle.min.css">
  <!-- Estilo del tema -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/dist/css/styles.css">
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery interfaz de usuario 1.11.4 -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Nota -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

</head>