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
include_once 'database.php';
if(isset($_POST['submit']))
{	 
	 $name = $_POST['name'];
	 $surname = $_POST['surname'];
	 $email = $_POST['email'];
	 $phone_number = $_POST['phone_number'];
     $payment_method = $_POST['payment_method'];
     $date_of_birth = $_POST['date_of_birth'];
     $message = $_POST['message'];
	 $sql = "INSERT INTO person (name,surname,phone_number,email_address,date_of_birth,payment_method,message,number_room)
	 VALUES ('$name','$surname','$phone_number','$email','$date_of_birth','$payment_method','$message','1')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>