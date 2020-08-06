<?php
    
    //just testing a really simple restful api, next time a soap.

    $apiUrl = "http://localhost/restApi.php?action=test"; //where and how is send

    $client = curl_init($apiUrl); //init the curl

    //test 2 start
    $postData = ["name" => "Michael", "lastName"=> "RodGam"];

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $postData);

    //end test 2

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client); //exc the curl setopt

    curl_close($client); //part of test 2

    $result = json_decode($response, true); //convert json to php array

    $data = "<p>".$result["message"]."</p>"; //makes and html

    echo ($data); //send back to index
?>