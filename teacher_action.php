<?php
$con=mysqli_connect("localhost","root","password","fine_type");

   $name=$_POST["txtname"];  
   
   $dept=$_POST["txtdept"];
   
   $desi=$_POST["txtdesi"];
   
   $date=$_POST["txtdate"];
   
   $user=$_POST["txtuser"];
   
   $pass=$_POST["txtpass"];
   
   $result=mysqli_query($con,"insert into teacher_reg(name_of_teacher,department,designation,date_of_join,username,password)values('$name','$dept','$desi','$date','$user','$pass')");
   if($result==1)
   {
   echo"<script>
   		alert('Teacher Details Saved Successfully');
   		window.location='teacher_reg.php'
         </script>";
   }      
   else
   {
   echo"<script>
   		alert('Failed');
   		window.location='teacher_reg.php'
         </script>";
   }
   
?>
