<?php
    //include db later
    
    if($_GET["action"] == "test"){
        $data = ["message" => "blank!"];
    }


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_GET["action"] == "test"){
            $data = ["message" => "it works Michael post!"];
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if($_GET["action"] == "test"){
            $data = ["message" => "it works Michael get!"];
        }
    }

    if($_GET["action"]== "a"){
        $data = ["message" => "the msg is 'a'!"];
    }

    echo json_encode($data); //this send a json, is this really a restful api?

?>