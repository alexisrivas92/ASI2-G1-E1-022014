<?php 
	
	$mysqli = new mysqli("localhost", "root", "verde91", "scout");
	if ($mysqli->connect_errno) {
	    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	echo $mysqli->host_info . "\n";

?>
