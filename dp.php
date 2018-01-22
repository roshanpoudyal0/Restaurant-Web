<?php

define("dbhost","localhost");
define("username","root");
define("password","");
define("database","mandala");



function dbconnect() {
	$dblink = mysqli_connect(dbhost,username,password,database);
	return $dblink;
}


function execute_query($sql) {
	$dblink = dbconnect();
	$result = mysqli_query($dblink,$sql);
	mysqli_close($dblink);
	return $result;
}

?>