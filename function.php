<?php
define('DB_SERVER','localhost');// Your hostname
define('DB_USER','root'); // Databse username
define('DB_PASS' ,''); // Database Password
define('DB_NAME', 'superbotics');// Database name
class DB_con
{
  function __construct()
  {
    $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    $this->dbh=$con;
    // Check connection
    if (mysqli_connect_errno())
    {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  } 

  // for username availblty
  public function useravailblty($phone,$password) {
    $result =mysqli_query($this->dbh,"SELECT * FROM tbl_user WHERE phone='$phone' AND password='$password'");
    return $result;
  }

  // Function for registrations
  public function registration($name,$email,$phone,$address,$password)
  {
      $ret=mysqli_query($this->dbh,"INSERT INTO tbl_user(name,phone,email,address,password)VALUES('$name','$phone','$email','$address','$password')"); 
      return $ret;
  }

  // Function for signin
  public function signin($name,$password)
  {
    $result=mysqli_query($this->dbh,"select id,name from tbl_user where name='$name' and password='$pasword'");
    return $result;
  }

}
?>