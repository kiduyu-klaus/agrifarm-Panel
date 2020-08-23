<?php
$dbuser="thebookh_kiduyu_k";
$dbpass="kiduyuKLAUS1995";
$host="localhost";
$db="thebookh_e_books_app";
$mysqli =new mysqli($host,$dbuser, $dbpass, $db);

if ($mysqli->connect_error) {
    die("Connection Failed: ").$mysqli->connect_error;
}

?>