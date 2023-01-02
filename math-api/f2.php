<?php

$path_elements = explode('/', $_SERVER['PATH_INFO']);

$method = $path_elements[1];
$numbers = array_slice($path_elements, 2);

$result = 0;

foreach ($numbers as $num) {
    if (is_numeric($num)) {
        $num = (int) $num;

        switch ($method) {
            case 'scitani':
                $result += $num;
                break;
            case 'odcitani':
                $result -= $num;
                break;
            case 'nasobeni':
                $result *= $num;
                break;
            case 'deleni':
                $result /= $num;
                break;
        }
    }
    else {
        header('Content-Type: application/json');
        echo json_encode(array('error' => 'input musi byt cislo'));
        exit;
    }
}

header('Content-Type: application/json');
echo json_encode(array('result' => $result));

?>