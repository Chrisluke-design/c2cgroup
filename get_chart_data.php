<?php
header('Content-Type: application/json');

// Function to generate a random number
function getRandomWholeNumber($min, $max) {
    return rand($min, $max);
}

// Define the ESTCON sizes
$sizes = ["500 SQM", "600 SQM", "700 SQM", "800 SQM", "900 SQM", "1000 SQM"];
$data = [];

foreach ($sizes as $size) {
    if ($size == "500 SQM" || $size == "800 SQM") {
        $efx = number_format(1000 / getRandomWholeNumber(10, 20), 2);
    } else {
        $efx = number_format(500 / getRandomWholeNumber(10, 20), 2);
    }

    if ($size == "500 SQM") {
        $volume = 45 * getRandomWholeNumber(25, 40);
    } else {
        $volume = 35 * getRandomWholeNumber(30, 45);
    }

    $data[] = [
        "size" => $size,
        "efx_rate" => $efx,
        "trading_volume" => $volume
    ];
}

// Send JSON response
echo json_encode($data);


