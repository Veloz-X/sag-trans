<?php 


$conn= new mysqli("localhost","storcdnu_trans_sag","Siselacontra1","storcdnu_trans_sag");

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
	exit;
}
$conn->set_charset("utf8");


?>