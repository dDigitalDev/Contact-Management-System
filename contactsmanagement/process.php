<?php 
	session_start();
	//$db = mysqli_connect('localhost', 'root', '', 'contacts_management_system');
	$db = mysqli_connect("localhost", "root", "", "contacts_management_system");

	// initialize variables from database
	$Fullname = "";
	$Profession = "";
	$Email ="";
	$Mobile ="";
	$City ="";
	$Address ="";
	$id = 0;
	$update = false;
	$contact_type = 1;
    //save all patient data to mysqli database
	if (isset($_POST['save'])) {
		$Fullname = $_POST['Fullname'];
		$Profession = $_POST['Profession'];
		$Email = $_POST['Email'];
		$Mobile = $_POST['Mobile'];
		$City = $_POST['City'];
		$Address = $_POST['Address'];
		$contact_type = $_POST['contact_type'];

		mysqli_query($db, "INSERT INTO contacts (Fullname, Profession, Email, Mobile, City, Address, contact_type) VALUES ('$Fullname', '$Profession', '$Email','$Mobile','$City','$Address','$contact_type')");
		$_SESSION['message'] = "Contact saved"; 
		header('location: allcontacts.php');
	}
	
	//make changes to the database using UPDATE query 
	
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$Fullname = $_POST['Fullname'];
		$Profession = $_POST['Profession'];
		$Email = $_POST['Email'];
		$Mobile = $_POST['Mobile'];
		$City = $_POST['City'];
		$Address = $_POST['Address'];
		$contact_type = $_POST['contact_type'];

		mysqli_query($db, "UPDATE contacts SET Fullname='$Fullname', Profession='$Profession', Email='$Email', Mobile='$Mobile', City='$City',  Address='$Address', contact_type='$contact_type'   WHERE id=$id");
		$_SESSION['message'] = "Contact updated!"; 
		header('location: managecontacts.php');
		
		// deleting all patient information.
	}
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM contacts WHERE id=$id");
		$_SESSION['message'] = "Contact deleted!!"; 
		header('location: managecontacts.php');
	}
