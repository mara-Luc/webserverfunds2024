<?php
$rawOutput = `./bme280`;
$deserializedData = json_decode($rawOutput, true);
echo json_encode([
    'currentTemperature' => $deserializedData['temperature'],
    'currentPressure' => $deserializedData['pressure'],
    'currentAltitude' => $deserializedData['altitude']
]);
?>

