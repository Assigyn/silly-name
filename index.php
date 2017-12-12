<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method =="POST"){
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);

    $color = $json->result->parameters->color;
    $number = $json->result->parameters->number;

    $response = new \stdClass();
    $response->speech = "";
    $response->displayText = "";
    $response->source= "webhook";
    echo json_encode($response);
}

else{
    echo "Method not allowed";
}

?>