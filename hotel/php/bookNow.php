<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="utf-8" />';
echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />';
echo '<meta name="description" content="" />';
echo '<meta name="author" content="" />';
echo '<title>Golden Conquerors Hotel</title>';
echo '<!-- Favicon-->';
echo '<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />';
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   <!-- Bootstrap icons-->';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />';
echo '<!-- Core theme CSS (includes Bootstrap)-->';
echo '<link href="css/styles.css" rel="stylesheet" />';
echo '</head>';
echo '<body>';
echo '<!-- Responsive navbar-->';
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">';
echo '<div class="container px-5">';
echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>';
echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
echo '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">';
echo '<li class="nav-item"><a class="nav-link"  href="index.html">Home</a></li>';
echo '<li class="nav-item"><a class="nav-link" href="About.html">About</a></li>';
echo '<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>>';
echo '<!-- <select id="Login" onchange="login(this.value)">';
echo '<option value="1">Login as admin</option>';
echo '<option value="2">Login as reception</option>';
echo '<option value="3">Login as cleaning service</option>';
echo '</select> -->';
echo '<div class="dropdown">';
echo '<button onclick="myFunction()" class="dropbtn">Login</button>';
echo '<div id="myDropdown" class="dropdown-content">';
echo '<a href="login(admin).html">Login as admin</a>';
echo '<a href="login(reception).html">Login as reception</a>';
echo '<a href="login(cleaningService).html">Login as cleaning sevice</a>';
echo '</div>';
echo '</div>';
echo '';
echo '';
echo '</ul>'; 
echo '</div>';
echo '</div>';
echo '</nav>';
echo '<!-- Header-->';
require_once "config.php";

$start = $_POST['start']; // to jest input uzytkownika
$end = $_POST['end'];
$guests = $_POST['guests'];
echo 'Your chosen term:',$start,"<br>";
echo 'Your chosen term:', $end, "<br>";
echo $guests,  "<br>";
// $conn = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if ($conn->connect_error){
	die("Connection failed: ". $conn->conneczt_error);
}

$sql = 	"select * from rooms where numberOfGuests like '%book now%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo "choose another term";
}
} else {
	echo "Your term is free ";
}
    
$conn->close();
echo '<!-- Footer-->';
echo '<footer class="py-5 bg-dark" style="position:absolute;bottom:0;width: 100%;">';
echo '<div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy;Golden Conquerors Hotel</p></div>';
echo '</footer>';
echo '<!-- Bootstrap core JS-->';
echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>';
echo '<!-- Core theme JS-->';
echo '<script src="js/scripts.js"></script>';
echo '<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->';
echo '<!-- * *                               SB Forms JS                               * *-->';
echo '<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->';
echo '<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->';
echo '<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>';
echo '</body>';
echo '</html>';

?>