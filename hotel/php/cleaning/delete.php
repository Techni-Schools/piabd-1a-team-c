<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../adminpanel.php");
    exit;
}
?>

<?php   
 include 'connection.php';  
 if (isset($_GET['clean_date'])) {  
      $clean_date = $_GET['clean_date'];  
      $query = "DELETE FROM `cleanservice` WHERE clean_date = '$clean_date'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:cleaningadminpanel.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?> 