<?php include("banu_config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>AdminLTE 3 | Dashboard</title>

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
                              <a href="#" class="d-block">Banu Eka Prayoga</a>
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
                                             Banu
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
                                   <h1 class="m-0">Kendaraan</h1>
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
               <!-- row -->
               <div class="row">
                    <div class="col-12">     
                         <div class="card">
                              <div class="card-header">
                                   <h3 class="card-title">List Kendaraan</h3>

                                   <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                             <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                             <div class="input-group-append">
                                                  <button type="submit" class="btn btn-default">
                                                       <i class="fas fa-search"></i>
                                                  </button>
                                             </div>
                                             <nav class=>
                                                  <a href="banu_form_daftar.php">[+] Tambah Data</a>
                                             </nav>
                                        </div>
                                   </div>
                              </div>
                              <!-- ./tab -->
                              <div class="card-body table-responsive p-0" style="height: 300px;">
                                   <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                             <tr>
                                                  <th>No</th>
                                                  <th>Jenis Kendaraan</th>
                                                  <th>Warna Kendaraan</th>
                                                  <th>Plat Kendaraan</th>
                                                  <th>Bahan Bakar</th>
                                                  <th>Tindakan</th>
                                             </tr>
                                        </thead>
                                   <tbody>
                                   <?php
                                   $sql = "SELECT * FROM jenis_kendaraan";
                                   $query = mysqli_query($db, $sql);
                                        
                                   while($kendaraan = mysqli_fetch_array($query)){
                                        echo "<tr>";
                                             
                                        echo "<td>".$kendaraan['id']."</td>";
                                        echo "<td>".$kendaraan['jenis_kendaraan']."</td>";
                                        echo "<td>".$kendaraan['warna_kendaraan']."</td>";
                                        echo "<td>".$kendaraan['plat_kendaraan']."</td>";
                                        echo "<td>".$kendaraan['bahan_bakar']."</td>";
                                             
                                        echo "<td>";
                                        echo "<a href='banu_form_edit.php?id=".$kendaraan['id']."'>Edit</a> | ";
                                        echo "<a href='banu_hapus.php?id=".$kendaraan['id']."'>Hapus</a>";
                                        echo "</td>";
                                             
                                        echo "</tr>";
                                   }
                                   ?>
                                   </tbody>
                                   </table>
                                   <p>Total: <?php echo mysqli_num_rows($query) ?></p>

                                   <?php if(isset($_GET['status'])): ?>
                                        <p>
                                             <?php
                                             if($_GET['status'] == 'sukses'){
                                                  echo "Pendaftaran jenis kendaraan baru berhasil!";
                                             } else {
                                                  echo "Pendaftaran gagal!";
                                             }
                                             ?>
                                        </p>
                                   <?php endif; ?>
                         </div>
                    </div>
               </div>
                         
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
