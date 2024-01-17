<?php
$localhost='localhost';
$username='root';
$password='';
$database='school';
$dbconnection= new mysqli($localhost, $username, $password, $database);

if($dbconnection->connect_error){
// echo ' not connected'.$dbconnection->connect_error;
}else{

    // echo 'connected';
}

?>