<?php
$servername="PRAGATI_K-LP\PRAGATI";
$username="sa";
$password="Pr@g@ti1304";

$conn=mysql_connect($servername,$username,$password);
if(!$conn)
  echo "Error in Connection".mysql_error();

$dbcheck=mysql_select_db("lname");
if(!$dbcheck)
	echo "Error selecting Database<br>".mysql_error();
//else echo "Success";

  //mysql_close($conn);
  
  ?>
