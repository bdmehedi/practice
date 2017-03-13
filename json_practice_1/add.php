<?php

   // header('Content-type: text/javascript');

    $json = array(
        'success' => false,
        'result'  => 0
    );

    $number = gettype(12);
    //echo $number . '<br>';

    if (isset($_POST['first'], $_POST['second'])){
        $first = (int)$_POST['first'];
        $second = (int)$_POST['second'];

        if (!empty($first) && !empty($second)){
            $json['success'] = true;
            $json['result'] = "The result is : " . $first + $second + 'size' + $number;
        }else{
            $json['success'] = true;
            $json['result'] = 'Opps! invalid input.';
        }
    }else{
        $json['success'] = true;
        $json['result'] = 'Opps! invalid input.';
    }

    echo json_encode($json);
