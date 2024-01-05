<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Internspace </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <h2 class="active"> Sign In </h2>
          <h2 class="inactive underlineHover"><a href="adm_reg.php">Sign Up</a></h2>
      
          <!-- Icon -->
          <div class="fadeIn first">
          <img src="assets/img/logo/login.jpeg" size=2px  id="icon" alt="User Icon" />
          </div>
      
          <!-- Login Form -->
     
      
            


<?php
$CompanyId="";
$CPass="";

if(isset($_POST["abc"]))
{
	$CompanyId=$_POST["CompanyId"];
	$CPass=$_POST["CPass"];
	
  $conn1 = new mysqli("localhost","root","","internspace");

if ($conn1->connect_error)
  die("Connection failed: " . $conn1->connect_error);
else
{
	$sql1="select * from recruiter where CompanyId = '".$CompanyId."' && CPass = '".$CPass."'";
    
  $r1=mysqli_query($conn1,$sql1);

  $total = mysqli_num_rows($r1);
  $row = mysqli_fetch_array($r1); 
	if($total==1)
    {
       echo"<table align=center><tr><td colspan=2 align=center><strong><font text color=#00CC00>Login successful</font></strong>";
       header("Location: view.php?CompanyId=".$CompanyId);
	}
	else 
	{
   	echo"<table align=center><tr><td ><strong><font text color=red>Incorrect password or username</font></strong>";
	}
}

}

?>


<form action="adm_login.php" method="POST">
            <input type="text" id="login" class="fadeIn second" name="CompanyId" placeholder="Company ID">
            <input type="text" id="password" class="fadeIn third" name="CPass" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
            
            <input type=hidden name=abc value=1>
            </form>

             <!-- Remind Passowrd -->
          <div id="formFooter">
          <a class="underlineHover" href="login.php">Student Login</a>
          </div>
      
        </div>
      </div>

                
         
</body>
</html>