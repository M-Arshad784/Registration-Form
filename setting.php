<?php
session_start();
    include('config/connection.php');


   $AdminId = $_SESSION['school_registration']['admin_id'];

    $seleAdmin = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = '".$AdminId."'"));


// Update Query Starting

if (isset($_POST['updateadmin'])) {
 
    $username         = $_POST['username'];
    $current_pass     = $_POST['current_pass'];
    $new_pass         = $_POST['new_pass'];

    $selectquery  = "SELECT * FROM admin WHERE admin_id = '$AdminId'";
    $runquery     = mysqli_query($conn, $selectquery);
    $admindata    = mysqli_fetch_array($runquery);

    $hashcurrentpass = $admindata['password'];


    if (password_verify($current_pass, $hashcurrentpass)) {

      $encryptpassword = password_hash($new_pass, PASSWORD_DEFAULT);


      $runQry = "UPDATE admin SET 
                    username       = '".$username."',
                    password       = '".$encryptpassword."'";
      $runUpdQry = mysqli_query($conn,$runQry);

      if ($runUpdQry) {
       $success = base64_encode("Profile has been successfully updated");
       header("Location:setting.php?success=$success");
       exit;
   } 
   else
    {
      $error = base64_encode("Sorry! Profile has not been successfully updated");
      header("Location:setting.php?error=$error");
      exit;
   }
  
}

else
  {
    $error = base64_encode("Sorry! Your Current Password is Wrong");
      header("Location:setting.php?error=$error");
      exit;

 }
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php include('body/title.php')?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/custom.css">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar  Starting-->
   
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle data-toggle=" type="button" id="dropdownMenuButton" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded="false">
          Profile
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a href="setting.php" class="dropdown-item">Change Password</a>
            <a href="logout.php" class="dropdown-item">Logout</a>
          </div>
        </div>
      </li>

    
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>

    <!-- Sidebar Starting -->
    <?php include('body/side.php')?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">

          <!-- Manage Profile Starting -->
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Manage Profile</h1>
            </div>
           </div>


           <!-- Messege Starting -->
          <div class="row">
            <div class="col-md-12">
               <?php include('body/msg.php')?>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Profile</h3>

            <!-- Minimize Starting -->
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>

          <!-- Form Starting -->
          <div class="card-body">
            <form method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" value="<?php echo $seleAdmin['username'];?>" class="form-control" name="username">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Current Password</label>
                    <input type="text" class="form-control" name="current_pass">
                  </div>
              </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>New Password</label>
                    <input type="text" class="form-control" name="new_pass">
                  </div>
              </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <input type="submit" name="updateadmin" value="Update Profile" class="btn btn-success">
                </div>
              </div>
            </form>
          </div> 
        </div>    <!-- card -->
      </section>  <!-- content -->
    </div>        <!-- content-wrapper -->




    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>PCS SYSTEM</b>
      </div>
      <strong>Copyright &copy; 2024 <a href="https://adminlte.io">PCS SYSTEM</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark"></aside>
  </div>





<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print",]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

</body>
</html>
