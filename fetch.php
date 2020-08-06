<?php
    
    //just testing a really simple restful api, next time a soap.

    $apiUrl = "http://localhost/testApi.php?action=test"; //where and how is send

    $client = curl_init($apiUrl); //init the curl

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client); //exc the curl setopt

    $result = json_decode($response, true); //convert json to php array

    $data = "<p>Hello there! This api actually... ".$result["test"]."</p>"; //makes and html

    echo ($data); //send back to index
?>