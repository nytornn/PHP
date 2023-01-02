<?php
$total = 0;
$method = filter_input(INPUT_GET, 'method');
$num1 = filter_input(INPUT_GET, 'num1');
$num2 = filter_input(INPUT_GET, 'num2');

if(is_numeric($num1) && is_numeric($num2)){
    if($method == 'plus'){
        $total = $num1 + $num2;
        header('Content-Type: application/json');
        echo json_encode(array('result' => $total));
    }
    if($method == 'minus'){
        $total = $num1 - $num2;
        header('Content-Type: application/json');
        echo json_encode(array('result' => $total));
    }
    if($method == 'deleni'){
        $total = $num1 / $num2;
        header('Content-Type: application/json');
        echo json_encode(array('result' => $total));
    }
    if($method == 'nasobeni'){
        $total = $num1 * $num2;
        header('Content-Type: application/json');
        echo json_encode(array('result' => $total));
    }
}
else{
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'input musi byt cislo'));
    exit;
}
