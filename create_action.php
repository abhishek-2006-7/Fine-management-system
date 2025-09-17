<?php
$con=mysqli_connect("localhost","root","password","fine_type");
   
   
   $name=$_POST["txtname"];  
   
   $date=$_POST["txtdate"];
   
   $college=$_POST["txtclg"];
   
   $username=$_POST["txtuser"];
   
   $password=$_POST["txtpass"];
   $result=mysqli_query($con,"insert into acreate(name,date,college,username,password)values('$name','$date','$college','$username','$password')");
   //$result=mysqli_query($con,"insert into create(name,date,college,user,pass)values('$name','$date','$college','$username','$password')");
   
   if($result==1)
   {
   echo"<script>
   		alert('Account created Successfully');
   		window.location='login.php'
         </script>";
   }      
   else
   {
   echo"<script>
   		alert('Failed');
   		window.location='create.php'
         </script>";
   }
   
?>
