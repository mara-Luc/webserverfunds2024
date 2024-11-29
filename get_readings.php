<?php
$raw = `./bme280`;
$deserialized = json_decode($raw, true);
echo json_encode([
    'temperature' => $deserialized["temperature"],
    'pressure' => $deserialized["pressure"],
    'altitude' => $deserialized["altitude"]
]);
?>
