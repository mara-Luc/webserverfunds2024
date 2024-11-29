<?php
if (isset($_POST['toggle'])) {
    $gpioPin = 23;
    toggleLED($gpioPin);
    echo getLEDStatus($gpioPin);
} elseif (isset($_POST['status'])) {
    $gpioPin = 23;
    echo getLEDStatus($gpioPin);
}

function toggleLED($pin) {
    shell_exec("gpio -g toggle $pin");
}

function getLEDStatus($pin) {
    $state = shell_exec("gpio -g read $pin");
    return ($state == 1) ? "LED is On" : "LED is Off";
}
?>

