<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php if(x($page,'title')) echo $page['title'] ?></title>
  <?php if(x($page,'htmlhead')) echo $page['htmlhead'] ?>
</head>
<body class="dark-mode sidebar-mini sidebar-mini-xs sidebar-mini-md layout-navbar-fixed layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="https://hub.utsukta.org/photo/ec268a46-11ab-427f-a605-a54cb341a637-1.png" alt="Utsukta Hub" height="60" width="60">
  </div>

  <?php if(x($page,'nav')) echo $page['nav']; ?>
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper px-4 py-2">
    <?php if(x($page,'content')) echo $page['content']; ?>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer text-sm">
    🖖 Live long and prosper.
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>
</div>
<!-- ./wrapper -->

</body>
</html>

