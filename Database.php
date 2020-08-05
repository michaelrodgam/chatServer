<?php
    //this is the config to connect to the db;
    $userName = "michael";
    $userPass = "1234";
    $host = "localhost";
    $port = "3306";
    $dbName = "chatserver";

    //here you can see the connection.
    $pdo = new PDO("mysql:host=".$host.";port=".$port.";dbname=".$dbName, $userName, $userPass); 

    //this make the errors no visible to the user, do not show up.
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>