<?php 
 $servername="PRAGATI_K-LP\PRAGATI";
 $username="sa";
 $password="Pr@g@ti1304";
 //connection to mysql
 $conn=mysqli_connect($servername,$username,$password);
 if(!$conn)
 {
	 die("Connection Failed".mysql_error());
 }
 
 //Create database
 $sql="CREATE DATABASE lname";//change name to change database
 
 if( mysqli_query($conn,$sql) )
 {
	 echo ("Database create successfully");
 }
 else
 {
	 echo ("Error Creating Database".mysqli_error());
 }
 mysqli_close($conn);
 ?>
