<?php
include('config/connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php include('body/title.php')?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="dist/css/custom.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->



    <!-- Navbar  Starting-->
    <?php include('body/navbar.php')?>
    <!-- Navbar  Ending -->



    <!-- Sidebar Starting -->
    <?php include('body/side.php')?>
    <!-- Sidebar Ending -->



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Your Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <strong><a href="dashboard.php"> PCS </a>SYSTEM</strong>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->


          <!-- Messege Starting -->
          <div class="row">
            <div class="col-md-12">
              <?php include('body/msg.php')?>
            </div>
          </div>


        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <!-- 1st Row Starting  -->
          <div class="row">

           <!-- Total Students Starting -->
           <div class="col-lg-4 col-6">
            <div class="small-box bg-blue">
              <div class="inner">

                <?php
                $select_num_students=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM registration_form WHERE status = '1'"));
                ?> 

                <h3><?php echo $select_num_students;?></h3>
                <h4>Total Active Students</h4>
              </div>

              <div class="icon">
                <i class="fas fa-users"></i>
              </div>

              <a href="ManageStudents.php" class="small-box-footer">More info 
                <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- Total Suppliers Starting -->




           <!-- Total Students Starting -->
           <div class="col-lg-4 col-6">
            <div class="small-box bg-yellow">
              <div class="inner">

                <?php
                $select_num_students=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM registration_form WHERE status = 2"));
                ?> 

                <h3><?php echo $select_num_students;?></h3>
                <h4>Total Dispatched Students</h4>
              </div>

              <div class="icon">
                <i class="fas fa-users"></i>
              </div>

              <a href="DispatchedStudents.php" class="small-box-footer">More info 
                <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- Total Suppliers Starting -->



          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <!-- Profile Report Starting -->
          <div class="col-lg-4 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h4>Profile</h4>
                <p>Check</p>
              </div>

              <div class="icon">
                <i class="fas fa-user"></i>
              </div>

              <a href="setting.php" class="small-box-footer">More info 
                <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- Profile Report Ending -->

        </div>
        <!-- 4th Row Ending -->

      </div><!--Container Fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Footer Starting -->
  <?php include('body/footer.php')?>
  <!-- Footer Ending -->



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"></aside>
  <!-- /.control-sidebar -->


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
