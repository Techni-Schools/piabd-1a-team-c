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
 $query = "select * from reservation";
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
     <meta charset="utf-8">  
     <title>Reception Panel</title>  
      <link rel="stylesheet" href="style.css">  
 </head>  
 <body>  
 <header>
</header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading"> 
           <th>Name</th>  
           <th>Surname</th>  
           <th>Phone Number</th>  
           <th>Email Address</th>  
           <th>Date of Birth</th>
           <th>payment method</th>   
           <th>Number room</th>
           <th>Date In</th>
           <th>Date Out</th>
           <th>Confirm Reservation</th>
           <th>Confirm By</th>
           <th>Delete Reservation</th>
           <th>Confirm Reservation</th>
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                              <td>".$result['name']."</td>  
                              <td>".$result['surname']."</td>  
                              <td>".$result['phone_number']."</td>  
                              <td>".$result['email_address']."</td>  
                              <td>".$result['date_of_birth']."</td>  
                              <td>".$result['payment_method']."</td>  
                              <td>".$result['number_room']."</td>
                              <td>".$result['date_in']."</td>
                              <td>".$result['date_out']."</td>
                              <td>".$result['confirm_reservation']."</td>
                              <td>".$result['confirm_by']."</td>
                              <td><a href='delete.php?name=".$result['name']."' id='btn'>Delete</a></td>
                              <td><a href='confirm.php?name=".$result['name']."' class='btnconfirm'>Confirm</a></td>
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>
 </body>  
 </html>  