<?php

include("bagus-config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: bagus.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM jenis_menu WHERE id=$id";
$query = mysqli_query($db, $sql);
$menu = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>AdminLTE 3 | Edit</title>

     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
     <!-- Ionicons -->
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- Tempusdominus Bootstrap 4 -->
     <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
     <!-- iCheck -->
     <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
     <!-- JQVMap -->
     <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
     <!-- Theme style -->
     <link rel="stylesheet" href="dist/css/adminlte.min.css">
     <!-- overlayScrollbars -->
     <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
     <!-- Daterange picker -->
     <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
     <!-- summernote -->
     <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
     <div class="wrapper">

          <!-- Preloader -->
          <div class="preloader flex-column justify-content-center align-items-center">
               <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
          </div>

          <!-- Navbar -->
          <nav class="main-header navbar navbar-expand navbar-white navbar-light">
               <!-- Left navbar links -->
               <ul class="navbar-nav">
                    <li class="nav-item">
                         <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                   class="fas fa-bars"></i></a>
                    </li>
               </ul>

               <!-- Right navbar links -->
               <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->
                    <li class="nav-item">
                         <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                              <i class="fas fa-search"></i>
                         </a>
                         <div class="navbar-search-block">
                              <form class="form-inline">
                                   <div class="input-group input-group-sm">
                                        <input class="form-control form-control-navbar" type="search"
                                             placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                             <button class="btn btn-navbar" type="submit">
                                                  <i class="fas fa-search"></i>
                                             </button>
                                             <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                                  <i class="fas fa-times"></i>
                                             </button>
                                        </div>
                                   </div>
                              </form>
                         </div>
                    </li>
               </ul>
          </nav>
          <!-- /.navbar -->

          <!-- Main Sidebar Container -->
          <aside class="main-sidebar sidebar-dark-primary elevation-4">
               <!-- Brand Logo -->
               <a href="index3.html" class="brand-link">
                    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                         style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
               </a>

               <!-- Sidebar -->
               <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                         <div class="image">
                              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                         </div>
                         <div class="info">
                              <a href="#" class="d-block">Bagus Abdul Wahhab</a>
                         </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                              <li class="nav-item">
                                   <a href="index.php" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                             Beranda
                                        </p>
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a href="banu.php" class="nav-link active">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                             Bagus
                                        </p>
                                   </a>
                              </li>
                         </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
               </div>
               <!-- /.sidebar -->
          </aside>

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
               <!-- Content Header (Page header) -->
               <div class="content-header">
                    <div class="container-fluid">
                         <div class="row mb-2">
                              <div class="col-sm-6">
                                   <h1 class="m-0">Form Edit Pesanan</h1>
                              </div><!-- /.col -->
                              <div class="col-sm-6">
                                   <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Dashboard v1</li>
                                   </ol>
                              </div><!-- /.col -->
                         </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
               </div>
               <!-- /.content-header -->

               <!-- Main content -->
               <section class="content">
                   <div class="container-fluid">
                       <form action="bagus-proses-edit.php" method="POST">
                       
                        <fieldset>
                                <input type="hidden" name="id" value="<?php echo $menu['id'] ?>" />
                            <p>
                                <label for="nomor_meja">Nomor Meja: </label>
                                <input type="text" name="nomor_meja" placeholder="Nomor Meja" value="<?php echo $menu['nomor_meja'] ?>" />
                            </p>
                            <p>
                                <label for="daftar_minuman">Daftar Minuman: </label>
                                <?php $daftar_minuman = $menu['daftar_minuman']; ?>
                                <select name="daftar_minuman">
                                    <option <?php echo ($menu == 'None') ? "selected": "" ?>>None</option>
                                    <option <?php echo ($menu == 'Milk') ? "selected": "" ?>>Milk</option>
                                    <option <?php echo ($menu == 'Coffee') ? "selected": "" ?>>Coffee</option>
                                    <option <?php echo ($menu == 'Ice Tea') ? "selected": "" ?>>Ice Tea</option>
                                    <option <?php echo ($menu == 'Orage Juice') ? "selected": "" ?>>Orange Juice</option>
                                </select>
                            </p>
                            <p>
                                <label for="daftar_makanan">Daftar Makanan: </label>
                                <?php $daftar_makanan = $menu['daftar_makanan']; ?>
                                <select name="daftar_makanan">
                                    <option <?php echo ($menu == 'None') ? "selected": "" ?>>None</option>
                                    <option <?php echo ($menu == 'Nasi Goreng') ? "selected": "" ?>>Nasi Goreng</option>
                                    <option <?php echo ($menu == 'Ayam Goreng') ? "selected": "" ?>>Ayam Goreng</option>
                                    <option <?php echo ($menu == 'Bebek Goreng') ? "selected": "" ?>>Bebek Goreng</option>
                                    <option <?php echo ($menu == 'Ayam Bakar') ? "selected": "" ?>>Ayam Bakar</option>
                                </select>
                            </p>
                            <p>
                                <label for="opsi">Opsi: </label>
                                <?php $opsi = $menu['opsi']; ?>
                                <label><input type="radio" name="opsi" value="Bawa Pulang" <?php echo ($opsi == 'Bawa Pulang') ? "checked": "" ?>> Bawa Pulang</label>
                                <label><input type="radio" name="opsi" value="Makan Di Sini" <?php echo ($opsi == 'Makan Di Sini') ? "checked": "" ?>> Makan Di Sini</label>
                            </p>
                            <p>
                                <input type="submit" value="Simpan" name="simpan" />
                            </p>
                            <nav>
                                <a href="bagus  .php">Kembali</a>
                            </nav>
                    
                        </fieldset>
                
                    </form>
                         
                         <!-- /.row (main row) -->
                    </div><!-- /.container-fluid -->
               </section>
               <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->
          <footer class="main-footer">
               <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
               All rights reserved.
               <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.1.0
               </div>
          </footer>

          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
               <!-- Control sidebar content goes here -->
          </aside>
          <!-- /.control-sidebar -->
     </div>
     <!-- ./wrapper -->

     <!-- jQuery -->
     <script src="plugins/jquery/jquery.min.js"></script>
     <!-- jQuery UI 1.11.4 -->
     <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
     <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
     <script>
          $.widget.bridge('uibutton', $.ui.button)
     </script>
     <!-- Bootstrap 4 -->
     <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- ChartJS -->
     <script src="plugins/chart.js/Chart.min.js"></script>
     <!-- Sparkline -->
     <script src="plugins/sparklines/sparkline.js"></script>
     <!-- JQVMap -->
     <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
     <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
     <!-- jQuery Knob Chart -->
     <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
     <!-- daterangepicker -->
     <script src="plugins/moment/moment.min.js"></script>
     <script src="plugins/daterangepicker/daterangepicker.js"></script>
     <!-- Tempusdominus Bootstrap 4 -->
     <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
     <!-- Summernote -->
     <script src="plugins/summernote/summernote-bs4.min.js"></script>
     <!-- overlayScrollbars -->
     <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
     <!-- AdminLTE App -->
     <script src="dist/js/adminlte.js"></script>
     <!-- AdminLTE for demo purposes -->
     <script src="dist/js/demo.js"></script>
     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
     <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>