<?php
    //this RESTful API will conect to the db.
    
    //require_once "Database.php"; //for using pdo

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if($_GET["action"]=="test"){
            $data = ["message"=>"get received"];
        }
    }

   
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_GET["action"] == "test"){    
            $data = ["message"=>"post received"];
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "PUT"){
        if($_GET["action"] == "test"){ 
            $data = ["message"=>"put received"];
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "DELETE"){
        if($_GET["action"]=="test"){
            $data = ["message"=>"delete received"];
        }
    }

    //JSON response
    echo json_encode($data);

?>