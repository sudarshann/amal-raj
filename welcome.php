<?php
    include_once('function.php');
    $userdata=new DB_con();
    session_start();
    if(!isset($_SESSION["USER"]))
    {
      header("Location:login.php");
    }
    $phone=$_SESSION["USER"]["phone"];
    $password=$_SESSION["USER"]["password"];
    $res=$userdata->useravailblty($phone,$password);
    $res=mysqli_fetch_array($res);
?>


<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 
</head>
<body>
s
<div class="container">  
  <form id="contact" action="" method="post">
    <a href="logout.php" style="text-align: right">Logout</a>
    <table border="1" >
      <tbody>
        <tr>
          <td colspan="4"><center>
            User Details
          </center></td>
        </tr>
        <tr>
          <td style="padding: 5px;">name</td>
          <td style="padding: 5px;">phone</td>
          <td style="padding: 5px;">email</td>
          <td style="padding: 5px;">Address</td>
        </tr>
        <tr>
          <td ><?=$res["name"]?></td>
          <td ><?=$res["phone"]?></td>
          <td ><?=$res["email"]?></td>
          <td ><?=$res["address"]?></td>
        </tr>
        <tbody>
          <tr></tr>
        </tbody>
      </tbody>
    </table>
  </form>
</div>
</body>
</html>
