<?php
$error='';
if (isset($_POST['submit'])) {
    if(empty($_POST['user']) || empty($_POST['pass'])){
      $error = "username or password is invalid";
    }
    else 
    {
          
       $user=$_POST['user'];
       $pass=$_POST['pass'];

       //$conn = mysqli_connect("localhost","root","");
       $conn = mysqli_connect("localhost", "root", "", "contacts_management_system");

       $db = mysqli_select_db($conn, "contacts_management_system");

       $query = mysqli_query($conn, "SELECT * FROM login WHERE pass='$pass' AND user='$user'");

       $rows = mysqli_num_rows($query);

       if($rows == 1){
         header("location: index.php");
      
      }
       else  
      {
         $error = "Invalid Credentials";
      }
      mysqli_close($conn);
   }   
}

?>