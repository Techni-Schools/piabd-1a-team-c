<?php   
 include 'connection.php';  
 $query = "select * from person";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
     <title>Admin Panel</title>  
      <link rel="stylesheet" href="style.css">  
 </head>  
 <body>  
 <header>
</header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading"> 
           <th>number</th> 
           <th>name</th>  
           <th>surname</th>  
           <th>phone_number</th>  
           <th>email_address</th>  
           <th>date_of_birth</th>
           <th>payment_method</th>   
           <th>message</th>
           <th>number_room</th>   
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          <td>".$i++."</td>  
                               <td>".$result['name']."</td>  
                               <td>".$result['surname']."</td>  
                               <td>".$result['phone_number']."</td>  
                               <td>".$result['email_address']."</td>  
                               <td>".$result['date_of_birth']."</td>  
                               <td>".$result['payment_method']."</td>  
                               <td>".$result['message']."</td>  
                               <td>".$result['number_room']."</td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 </body>  
 </html>  