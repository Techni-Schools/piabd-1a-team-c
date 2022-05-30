<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: adminlogin.php");
    exit;
}
?>


<?php   
 include 'connection.php';  
 $query = "select * from receptionaccount";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
     <title>Admin Panel</title>  
      <link rel="stylesheet" type="text/css" href="style.css">  
 </head>  
 <body>  
 <header></header>  
 <center><h1 style="color:white;">Delete Reception Accounts</h1></center>
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
           <th>Number</th>  
           <th>id</th>  
           <th>username</th>  
           <th>password</th>  
           <th>created_at</th>   
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          <td>".$i++."</td>  
                               <td>".$result['id']."</td>  
                               <td>".$result['username']."</td>  
                               <td>".$result['password']."</td>  
                               <td>".$result['created_at']."</td>  
                               <td><a href='delete.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 </body>  
 </html>  