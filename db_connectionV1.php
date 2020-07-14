<?php

function OpenCon()
 {
$dbhost = "localhost";
 $dbuser = "username1";
 $dbpass = "layaniki";
 $db = "testOne";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 	if ($conn -> connect_error) {
 		die("Connection failed: " . $conn -> connect_error);
	}

//$conn -> close();


 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>