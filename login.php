<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Internspace </title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <h2 class="active"> Sign In </h2>
          <h2 class="inactive underlineHover"><a href="registration.php">Sign Up</a> </h2>
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="assets/img/logo/login.jpeg" size=2px  id="icon" alt="User Icon" />
          </div>
      
          <!-- Login Form -->
     
      
            


<?php
$username="";
$password="";

if(isset($_POST["abc"]))
{
	$username=$_POST["login"];
	$password=$_POST["password"];
	
  $conn1 = new mysqli("localhost","root","","internspace");

if ($conn1->connect_error)
  die("Connection failed: " . $conn1->connect_error);
else
{
	$sql1="select * from student where Username = '$username' && Pass = '$password'";
  $r1=mysqli_query($conn1,$sql1);

  $total = mysqli_num_rows($r1);
	if($total==1)
    {?>
      

       <!-- echo"<table align=center><tr><td colspan=2 align=center><strong><font text color=#00CC00>Login successful</font></strong>"; -->

       <?php


  header("Location: index.php?Username=".$username);
 
exit;
	}
	else 
	{
   	echo"<table align=center><tr><td ><strong><font text color=red>Incorrect password or username</font></strong>";
	}
}

}
?>




<form action="login.php" method="post">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="User Name">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
          
          <div style="margin-top: 1px;">
          <input type="submit" class="fadeIn fourth" value="Log In">
</div>

            <input type=hidden name=abc value=1>
            </form>

             <!-- Remind Passowrd -->
          <div id="formFooter">
          <a class="underlineHover" href="adm_login.php" style="margin-bottom:5px;">Admin Login</a>
          </div>
      
        </div>
      </div>

                
         
</body>
</html>