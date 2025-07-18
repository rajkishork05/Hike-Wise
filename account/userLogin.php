<?php

    session_start();
    require("../db/connection.php");
    require("../db/find.php");
    $userName = $_POST["username"];
    $password = $_POST["password"];

    $result = getRow($conn, "users", "email", $userName);
    if($result["password"] == $password){
        $_SESSION["user"] = $result["id"];
        $_SESSION["account"] = "user";
        // echo "done";
        header("Location: /hikewise");
    }
    else{
        header("Location: /hikewise/account");
    }




?>