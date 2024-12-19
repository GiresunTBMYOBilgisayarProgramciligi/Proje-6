<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <?php
  $page = isset($_GET['p']) ? htmlspecialchars($_GET['p']) : 'dashboard';
  ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | <?php echo ucfirst($page); ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">
<?php
include_once "navbar.php";

include_once "sidebar.php";
//Dinamik içerik yükleme
$allowed_pages = ['dashboard', 'settings', 'users', 'profile']; // Geçerli sayfalar
$content_file = "pages/{$page}.php";
if (in_array($page, $allowed_pages) && file_exists($content_file)) {
  include_once $content_file;
} else {
  include_once "pages/404.php"; // Sayfa bulunamazsa 404 sayfası göster
  }

include_once "control-sidebar.php";

include_once "footer.php";
    ?> 
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>
