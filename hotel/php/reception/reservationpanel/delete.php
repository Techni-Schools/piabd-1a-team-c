<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedinreception"]) || $_SESSION["loggedinreception"] !== true){
    header("location: ../receptionlogin.php");
    exit;
}
?>

<?php   
 include 'connection.php';  
 if (isset($_GET['name'])) {  
      $name = $_GET['name'];  
      $query = "DELETE FROM `reservation` WHERE name = '$name'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:index.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?> 