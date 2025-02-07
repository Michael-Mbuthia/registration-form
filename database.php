<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegedb";
$conn ="";

// Create connection
try{
$conn =  mysqli_connect($servername, $username, $password, $dbname);
}
catch(mysqli_sql_exception){
    echo"Could not connect";
}
// Check connection
if ($conn) {
    echo"Connected";
}
?>