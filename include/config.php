<?php
$dbuser="root";
$dbpass="";
$host="localhost";
$db="herbalmb";
$mysqli =new mysqli($host,$dbuser, $dbpass, $db);

if ($mysqli->connect_error) {
    die("Connection Failed: ").$mysqli->connect_error;
}

?>