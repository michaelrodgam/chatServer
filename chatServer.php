<?php
    //this is just a commment by the way -_-)
    
    require_once "Database.php";
    
    //session to store the chats
    session_start();
    
    //connecting the database;
    $query = "SELECT * FROM messages";
    $stmt = $pdo->query($query);
    $rows = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $rows[] = $row;
    }

    //sending a response to the index.php ($.getJSON).
    $_SESSION["chats"] = $rows;
    echo(json_encode($_SESSION["chats"]));
?>