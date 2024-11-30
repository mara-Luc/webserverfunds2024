
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
    if (isset($_POST['get_readings'])) {
        $rawOutput = `./bme280`;
        $data = json_decode($rawOutput, true);
        $temperature = $data['temperature'];
        $pressure = $data['pressure'];
        $altitude = $data['altitude'];
    } else {
        $temperature = 'N/A';
        $pressure = 'N/A';
        $altitude = 'N/A';
    }
    ?>
    <form method="post">
        <button type="submit" name="get_readings">Get Readings</button>
    </form>
    <p>Temperature: <span><?php echo $temperature; ?></span></p>
    <p>Pressure: <span><?php echo $pressure; ?></span></p>
    <p>Altitude: <span><?php echo $altitude; ?></span></p>
    
    <br><br>
    
    <!--A way back to main site-->
    <a href="index.php">Back to the landing page</a>

</body>
</html>
