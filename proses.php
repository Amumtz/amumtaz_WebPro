<?php
$username= $_POST["username"];
$password = $_POST["password"];

if($username == '' || $password == ''){
    echo "Username dan password harus diisi <br>";
} else {
    echo ("username = ".$username."<br>"); 
    echo ("password = ".$password."<br>");
} 
