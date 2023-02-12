<?php

function testTypes($input)
{
    switch (gettype($input)) {
        case 'integer':
            return 'integer';
        case 'double':
            return 'double';
        case 'string':
            return 'string';
        case 'boolean':
            return 'boolean';
        case 'array':
            return 'array';
        default:
            return 'unknown';
    }
}

$inputs = [123, 123456, "hello", "hi", [1, 2, 3]];
$expectedTypes = ['integer', 'double', 'string', 'boolean', 'array'];
$expectedOutputs = ['integer', 'double', 'string', 'boolean', 'array'];

foreach ($inputs as $i => $input) {
    $inputType = gettype($input);
    $result = ($inputType === $expectedTypes[$i]) ? "PASSED" : "FAILED";

    if ($result === "PASSED") {
        $output = testTypes($input);
        $result = ($output === $expectedOutputs[$i]) ? "PASSED" : "FAILED";
    }

    echo "Test $i $result." . PHP_EOL;
}
