<?php
if (isset($_POST['toggle'])) {
    $gpioPin = 23;
    toggleLED($gpioPin);
    echo getLEDStatus($gpioPin);
}

function toggleLED($pin) {
    $currentState = shell_exec("gpio -g read $pin");
    $newState = ($currentState == 0) ? 1 : 0;
    shell_exec("gpio -g write $pin $newState");
}

function getLEDStatus($pin) {
    $state = shell_exec("gpio -g read $pin");
    return ($state == 1) ? "On" : "Off";
}
?>
