<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedincleaning"]) || $_SESSION["loggedincleaning"] !== true){
    header("location: ../cleaninglogin.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; background-color: #28282B; } 
    </style>
</head>
<body>
    <h1 style="color: white;" class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our Cleaning Service Panel.</h1>
    <p>
        <a href="../logout.php" class="btn btn-outline-light">Sign Out of Your Account</a>
        <a href="cleaningpanell.php" class="btn btn-outline-light">Cleaning Service Panel</a>
    </p>
</body>
</html>