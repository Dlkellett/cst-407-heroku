<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// modify these settings according to the account on your database server.
//$host = "localhost";
$host = "lyn7gfxo996yjjco.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$port = "3306";
//$username = "root";
$username = "ef4yika9ogxc5d00";
//$user_pass = "root";
$user_pass = "mzylthfiqbzm0y46";
//$database_in_use = "cst_407_applications";
$database_in_use = "e08mi2odp5ctiegn";


$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

?>