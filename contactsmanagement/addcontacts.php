<?php  include('process.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contacts Management System</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-phone-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CMS<sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
	      <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-al"></i>
          <span>Contacts Management</span></a>
      </li>
	  
	  <!-- Nav Item - Dashboard -->
	  <li class="nav-item">
        <a class="nav-link" href="addcontacts.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Add Contacts</span></a>
      </li>
	  
	  <!-- Nav Item - Dashboard -->
	  <li class="nav-item">
        <a class="nav-link" href="managecontacts.php">
          <i class="fas fa-fw fa-table"></i>
          <span>List / Manage Contacts</span></a>
      </li>
	  
	  <!-- Nav Item - Dashboard -->
	  <li class="nav-item">
        <a class="nav-link" href="edit.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Edit / Update Contact</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="allcontacts.php">
          <i class="fas fa-fw fa-table"></i>
          <span>All Contacts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="business.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Business Contacts</span></a>
      </li>
	  <!-- Nav Item - Tables -->
	  <li class="nav-item active">
        <a class="nav-link" href="private.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Private Contacts</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"></h1>
          <p class="mb-4"></a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Dashboard/Add Contacts</h6>
            </div>
            

<div class="form1">
<!-- Extended default form grid -->
<form action="process.php" method="POST">
  <!-- Grid row -->
  <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="Fullname" value=""  placeholder="Full Name">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="Profession" value=""  placeholder="Profession">
    </div>
  </div>
  <!-- Grid row -->

  <!-- Default input -->
  <div class="form-group">
    <input type="text" class="form-control" name="Email" value=""  placeholder="Email">
  </div>
  <!-- Default input -->
  <div class="form-group">
    <input type="text" class="form-control" name="Mobile" value="" placeholder="Mobile">
  </div>
  <!-- Grid row -->
  <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="City" value="" placeholder="City">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="Address" value=""  placeholder="Address">
    </div>
  </div>
   
   <!--Dropdownlist--->
   <div class="form-group">
   <select name="contact_type">
        <option value="1">Public</option>
		<option value="2">Business</option>
		<option value="3">Private</option>
	</select> 
	</div>
  
  <!-- Grid row -->
  <button type="submit" name="save" class="btn btn-primary btn-md">Add</button>
</form>
<!-- Extended default form grid -->
</div>


	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
			
			
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
