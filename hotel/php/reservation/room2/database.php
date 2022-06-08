<?php
$servername='localhost';
$username='igor';
$password='warszawa2022!';
$dbname = "hotel";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
