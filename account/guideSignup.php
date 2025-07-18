<?php

session_start();
require("../db/connection.php");
require("../db/methods.php");
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$number = $_POST["number"];
$id = generateRandomID();

$upload_dir = "../uploads/";
    $fileNameId = generateRandomID();
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));    
    $randomFileName = generateRandomID() . '.' . $fileType;
    $targetFile = $upload_dir . $randomFileName;
    move_uploaded_file($fileTmpName, $targetFile);

insertGuide($conn, $id, $name,  $email, $password, $number, $randomFileName);


?>