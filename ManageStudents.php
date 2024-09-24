<?php

include('config/connection.php');

///////  UPDATE  

if (isset($_GET['action']) && $_GET['action'] == 'update') {
  

   $stud_id = $_GET['stud_id'];
   $status    = '2';

    
    $updateQry = "UPDATE registration_form SET 
                    status       = '".$status."'
            WHERE   stud_id     = '".$stud_id."'";
 
  $runUpdateQry=mysqli_query($conn,$updateQry);

  if ($runUpdateQry) {
     $success = base64_encode("Student has been dispatched successfully.");
     header("location:ManageStudents.php?success=$success");
     exit;
  }
  else
  {
      $error = base64_encode("Student has not been successfully dispatched.");
     header("location:ManageStudents.php?error=$error");
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

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/custom.css">

  <!-- Data Tables Starting -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>
<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">



    <!-- Navbar  Starting-->
    <?php include('body/navbar.php')?>
    <!-- Navbar  Ending -->



    <!-- Sidebar Starting -->
    <?php include('body/side.php')?>
    <!-- Sidebar Ending -->




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">


          <!-- Top Line Starting -->
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Student Detail</h1>
            </div>



            <!-- Messege Starting -->
          </div> <!-- /.container-fluid -->
          <div class="row">
            <div class="col-md-12">
              <?php include('body/msg.php')?>
            </div>
          </div>

        </section>



        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <!-- <th>Sr#</th> -->
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>DoB</th>
                    <th>Gender</th>
                    <th>Father Name</th>
                    <th>Father Profession</th>
                    <th>Mother Name</th>
                    <th>Mother Profession</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Postal Code</th>
                    <th>Address</th>
                    <th>Admission Date</th>
                    <th>Action</th>
                  </tr>
                </thead>



                <tbody>
                  <?php


                  $seelpurchase = mysqli_query($conn, "SELECT * FROM registration_form WHERE status = 1
                    ORDER BY stud_id DESC");
                  while ($getpurchase = mysqli_fetch_array($seelpurchase)) {
                    $stud_id = $getpurchase['stud_id'];
                    ?>

                    <tr>

                      <td><?php echo $getpurchase['stud_id'] ?></td>
                      <td><?php echo $getpurchase['first_name']; ?></td>
                      <td><?php echo $getpurchase['last_name']; ?></td>
                      <td><?php echo $getpurchase['dob']; ?></td>
                      <td><?php echo $getpurchase['gender']; ?></td>
                      <td><?php echo $getpurchase['f_name']; ?></td>
                      <td><?php echo $getpurchase['f_profession']; ?></td>
                      <td><?php echo $getpurchase['m_name']; ?></td>
                      <td><?php echo $getpurchase['m_profession']; ?></td>
                      <td><?php echo $getpurchase['mobile_number']; ?></td>
                      <td><?php echo $getpurchase['email']; ?></td>
                      <td><?php echo $getpurchase['city']; ?></td>
                      <td><?php echo $getpurchase['state']; ?></td>
                      <td><?php echo $getpurchase['country']; ?></td>
                      <td><?php echo $getpurchase['postal_code']; ?></td>
                      <td><?php echo $getpurchase['address']; ?></td>
                      <td><?php echo $getpurchase['add_date']; ?>

                    </td> 
                    <td>

                            <a href="ManageStudents.php?stud_id=<?php echo $stud_id;?>&action=update" class="btn btn-success" onclick="return confirm('Do you really want to dispatched this Student.');">
                             Dispatched
                           </a> 

                    
                          
                        </td>
                    </td>
                  </tr>
                </div>        <!-- Card Body Ending -->




                <?php
              }

              ?>
            </tbody>


          </table>

        </div>    
        <!-- card -->



      </section>  <!-- content -->
    </div>        <!-- content-wrapper -->

    <!-- Footer Starting -->
    <?php include('body/footer.php')?>
    <!-- Footer Ending -->



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark"></aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
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
        "responsive": true, "lengthChange": false, "autoWidth": false,"ordering": false,
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>

</body>
</html>
