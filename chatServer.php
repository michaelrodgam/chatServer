<?php
    //this is just a commment by the way.
    
    require_once "pdo.php";
    
    //session to store the chats
    session_start();

    //connecting the database;
    $query = "SELECT * FROM users";
    $stmt = $pdo->query($query);
    $rows = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $rows[] = $row;
    }

    $_SESSION["chats"] = $rows;
    echo(json_encode($_SESSION["chats"]));
?>