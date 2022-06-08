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
     $date_in = $_POST['date_in'];
	 $date_out = $_POST['date_out'];
	 $message = $_POST['message'];
	 $sql = "INSERT INTO reservation (name,surname,phone_number,email_address,date_of_birth,payment_method,message,date_in,date_out,number_of_guests,number_room)
	 VALUES ('$name','$surname','$phone_number','$email','$date_of_birth','$payment_method','$message','$date_in','$date_out','3','6')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>