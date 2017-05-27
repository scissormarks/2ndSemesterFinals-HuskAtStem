<?php 
// Connection to mySQL server via a mysgli method.

// Constants used when connecting to the database

//$HOSTNAME="mysql32.unoeuro.com"; //The host that needs to be connected to. It depends on where it is uploaded.
//$MYSQLUSER="arksdesign_com"; //Username
//$MYSQLPASS="A114107sI11562us"; //Password
//$MYSQLDB="arksdesigns_com_db"; //The name of the database
const HOSTNAME="localhost"; //The host that needs to be connected to. It depends on where it is uploaded.
const MYSQLUSER="root"; //Username
const MYSQLPASS="root"; //Password
const MYSQLDB="test"; //The name of the database

// Establishes connection via mySQLi

$con = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

//definere char-set(utf8) 
$con->set_charset("utf8"); 

//If there is a connection error, this will cloes stop the process
if($con->connect_error){
	die($con->connect_error);
}

?>