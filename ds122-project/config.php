<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "cafu";
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect($servername, $username, $pass, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>