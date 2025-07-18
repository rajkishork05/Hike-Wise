<?php

    require("../db/methods.php");
    require("../db/connection.php");
    $upload_dir = "../uploads/";
    $fileNameId = generateRandomID();
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));    
    $randomFileName = generateRandomID() . '.' . $fileType;
    $targetFile = $upload_dir . $randomFileName;
    move_uploaded_file($fileTmpName, $targetFile);
    insertTrek($conn, generateRandomID(), $_POST["name"], $_POST["from"], $_POST["to"], $_POST["km"], $_POST["day"], $_POST["night"], $randomFileName);

?>