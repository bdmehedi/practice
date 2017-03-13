<?php

header('Content-type: text/javascript');

$json = array(

    'success' => false,
    'result' => 0
);

if (isset($_POST['number1'], $_POST['number2'])){

    if (!empty($_POST['number1']) && !empty($_POST['number2'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];


        $json['success'] = true;
        $json['result'] = $number1 + $number2;
    }else{
        $json['success'] = true;
        $json['result'] = "Field must not be empty.";
    }
}



echo json_encode($json);