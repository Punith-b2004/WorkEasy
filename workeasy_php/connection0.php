<?php
   $servername="localhost";
   $username="root";
   $password="";
   $dbname="loginform";
   $conn=mysqli_connect($servername,$username,$password,$dbname);
   if($conn)
   {
      
   }
   
   else
   {
   	echo "connection fail".mysqli_connect_error;
   }
?>