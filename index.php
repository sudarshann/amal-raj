<?php
// include Function file
include_once('function.php');
// Object creation
$userdata=new DB_con();
if(isset($_POST['submit']))
{
// Posted Values
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$address=$_POST['address']  ;
//Function Calling

$sql=$userdata->registration($name,$email,$phone,$address,$password);

if($sql)
{
// Message for successfull insertion
echo "<script>alert('Registration successfull.');</script>";
echo "<script>window.location.href='login.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='login.php'</script>";
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
    <h4>Register Form</h4>
    <a href="login.php">Go To Signin </a>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="name" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" name="phone" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Password" name="password" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Address" name="address" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset> 
  </form>
</div>


</body>
</html>
