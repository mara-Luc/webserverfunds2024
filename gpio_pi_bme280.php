
<!DOCTYPE html>
<html>
<head>
    <title>GPIO Example</title>

    <!--Code for the temp/altude/humid sensor-->
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { color: #333; }
        button { padding: 10px 20px; font-size: 16px; }
        p { font-size: 18px; }
    </style>
</head>
<body>
    <h1>Sensor Readings</h1>
    <?php
    $raw = `./bme280`;
    echo $raw;
    $deserialized = json_decode($raw, true);
    var_dump($deserialized);
    echo $deserialized["temperature"];
    echo $deserialized["pressure"];
    echo $deserialized["humidity"];
    echo $deserialized["altitude"];
    ?>
    
    <br><br>
    
    <!--A way back to main site-->
    <a href="index.php">Back to the landing page</a>

</body>
</html>
