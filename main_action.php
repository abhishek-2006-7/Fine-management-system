<?php
$con=mysqli_connect("localhost","root","password","fine_type");
   
   $id=$_POST["txtid"];  
   
   $name=$_POST["txtname"];  
   
   $dept=$_POST["txtdept"];
   
   $sem=$_POST["txtsem"];
   
   $date=$_POST["txtdate"];
   
   $fine=$_POST["fine"];
   
   $batch=$_POST["txtbatch"];
   
   $teacher=$_POST["name"];
  
   $result=mysqli_query($con,"insert into main(id,name,dept,sem,date,fine,batch,teacher,status)values('$id','$name','$dept','$sem','$date','$fine','$batch','Principal','not paid')");
   if($result==1)
   {
   echo"<script>
   		alert('Fine Details Saved Successfully');
   		window.location='main.php'
         </script>";
   }      
   else
   {
   echo"<script>
   		alert('Failed');
   		window.location='main.php'
         </script>";
   }
   
?>
