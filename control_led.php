<?php
if (isset($_POST['toggle']))
{
    $gpioPin = 23;
    toggleLED($gpioPin);
    echo getLEDStatus($gpioPin);
}

function toggleLED($pin) 
{
    shell_exec("gpio toggle $pin $newState");
}

function getLEDStatus($pin) 
{
    $state = shell_exec("gpio -g read $pin");
    return ($state == 1) ? "On" : "Off";
}
?>
