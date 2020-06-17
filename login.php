<?php
// include Function file
include_once('function.php');
// Object creation
$userdata=new DB_con();
if(isset($_POST['submit']))
{
// Posted Values
  $name=$_POST['name'];
  $password=$_POST['password'];

  $res=$userdata->useravailblty($name,$password);
  $res=mysqli_fetch_assoc($res);
    // print_r($res);
  if(count($res)>0)
  {
    session_start();
    $_SESSION["USER"]["name"]=$res["name"];
    $_SESSION["USER"]["phone"]=$res["phone"];
    $_SESSION["USER"]["password"]=$res["password"];
    // print_r($res);
    header("Location:welcome.php");    
  }
  else
  {
     header("location:login.php?msg=1");
  }

}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Suberbotics</h3>
    <h4>Login Form</h4>
    <a href="index.php">Go To Register</a>
    <fieldset>
      <input placeholder="Phone" name="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Password" name="password" type="password" tabindex="2" required>
    </fieldset>
   <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
</body>
</html>
