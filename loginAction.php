<?php
session_start();


$con=mysqli_connect("localhost","root","password","fine_type");
$username=$_POST["uname"];
$password=$_POST["pwd"];

$result=mysqli_query($con,"select * from teacher_reg where username ='$username'and password='$password'");

echo '$result';
$result1=mysqli_query($con,"select * from acreate where username ='$username'and password='$password'");
if(mysqli_num_rows($result)==1)
{
  
    $_SESSION["username"]=$username;
echo "<script>window.location='main1.php' </script>";
}
else if(mysqli_num_rows($result1)==1)
{
$_SESSION["username"]=$username;
echo "<script>window.location='main.php' </script>";
}
else
{
echo "<script>alert('Login failed');
window.location='login.php' </script>";
}
?>
