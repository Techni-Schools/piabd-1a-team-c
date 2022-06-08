<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: adminlogin.php");
    exit;
}
?>


<body>
  <h1>Create New Account</h1>
    <div class="buttons">
    <span><a href="registeradmin.php"></a></span>
    <span><a2 onclick="location.href='./reception/registerreception.php'"></a2></span>
    <span><a3 onclick="location.href='./cleaning/registercleaning.php'"></a3></span>
    </div>
  </body>

  <style>
      @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');
body{
  background-color: #28282B;
}
.buttons {
  margin: 0;
  padding: 0;
  display: flex;
  /* height: 100vh; */
  align-items: center;
  justify-content: center;
}
h1 {
  color: white;
  align-items: center;
  justify-content: center;
  display:flex;
  /* margin:0; */
  margin-top:20%;
}

span{
  position: relative;
  display: inline-flex;
  width: 180px;
  height: 55px;
  margin: 0 15px;
  perspective: 1000px;
}

/* Admin button  */
span a{
  font-size: 19px;
  letter-spacing: 1px;
  transform-style: preserve-3d;
  transform: translateZ(-25px);
  transition: transform .25s;
  font-family: 'Montserrat', sans-serif;
  
}
span a:before,
span a:after{
  position: absolute;
  content: "Create Admin Account";
  height: 55px;
  width: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 5px solid black;
  box-sizing: border-box;
  border-radius: 5px;
}
span a:before{
  color: #fff;
  background: #000;
  transform: rotateY(0deg) translateZ(25px);
}
span a:after{
  color: white;
  transform: rotateX(90deg) translateZ(25px);
}
span a:hover{
  transform: translateZ(-25px) rotateX(-90deg);
}

/* ***** */

span a2{
  font-size: 16px;
  letter-spacing: 1px;
  transform-style: preserve-3d;
  transform: translateZ(-25px);
  transition: transform .25s;
  font-family: 'Montserrat', sans-serif;
  
}
span a2:before,
span a2:after{
  position: absolute;
  content: "Create Reception Account";
  height: 55px;
  width: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 5px solid black;
  box-sizing: border-box;
  border-radius: 5px;
}
span a2:before{
  color: #fff;
  background: #000;
  transform: rotateY(0deg) translateZ(25px);
}
span a2:after{
  color: white;
  transform: rotateX(90deg) translateZ(25px);
}
span a2:hover{
  transform: translateZ(-25px) rotateX(-90deg);
}

/* ****** */

span a3{
  font-size: 16px;
  letter-spacing: 1px;
  transform-style: preserve-3d;
  transform: translateZ(-25px);
  transition: transform .25s;
  font-family: 'Montserrat', sans-serif;
  
}
span a3:before,
span a3:after{
  position: absolute;
  content: "Create Cleaning Service Account";
  height: 55px;
  width: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 5px solid black;
  box-sizing: border-box;
  border-radius: 5px;
}
span a3:before{
  color: #fff;
  background: #000;
  transform: rotateY(0deg) translateZ(25px);
}
span a3:after{
  color: white;
  transform: rotateX(90deg) translateZ(25px);
}
span a3:hover{
  transform: translateZ(-25px) rotateX(-90deg);
}
  </style>