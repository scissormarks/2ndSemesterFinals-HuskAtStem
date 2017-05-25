<?php 

//$HOSTNAME
$MYSQLUSER="root";
$MYSQLPASS="root";
$MYSQLDB="huskatstem";

$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

//definere char-set(utf8)
$con->set_charset("utf8");

//hvis der er forbindelses fejl
if($con->connect_error){
	die($con->connect_error);
}
else {
	
}

?>