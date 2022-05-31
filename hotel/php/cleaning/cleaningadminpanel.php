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
 $query = "select * from cleanservice";
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
           <th>Who Clean?</th>  
           <th>Room Number</th>  
           <th>Clean Date</th>
           <th>Delete Query</th>
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                              <td>".$result['who']."</td>  
                              <td>".$result['room_number']."</td>  
                              <td>".$result['clean_date']."</td>  
                              <td><a href='delete.php?clean_date=".$result['clean_date']."' id='btn'>Delete</a></td>
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>
 </body>  
 </html>  