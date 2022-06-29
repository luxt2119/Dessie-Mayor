<?php
$server="localhost";
$user="root";
$pass ="";
$con= new mysqli($server, $user, $pass, "customer");
if($con->connect_error){
    die("connection Error");

}
else{
    // echo "connected successfully";
}

?>