<?php
    //include db later
    if($_GET["action"] == "test"){
        $data = ["test" => "it works Michael!"];
    }

    echo json_encode($data); //this send a json, is this really a restful api?

?>