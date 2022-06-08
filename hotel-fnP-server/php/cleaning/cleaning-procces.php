<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedincleaning"]) || $_SESSION["loggedincleaning"] !== true){
    header("location: ../cleaninglogin.php");
    exit;
}
?>

<?php
include_once 'database.php';
if(isset($_POST['submit']))
{	 
	 $room_number = $_POST['room_number'];
	 $sql = "INSERT INTO cleanservice (who,room_number) VALUES ('$_SESSION[username]',$room_number)";
	 if (mysqli_query($conn, $sql)) {
		header("Location: cleaningpanel.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>