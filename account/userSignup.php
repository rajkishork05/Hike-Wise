<?php

session_start();
require("../db/connection.php");
require("../db/methods.php");
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$number = $_POST["number"];
$id = generateRandomID();
insertUser($conn, $id, $name, $password, $email, $number);


?>