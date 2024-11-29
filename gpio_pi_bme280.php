
<!DOCTYPE html>
<html>
<head>
    <title>GPIO Example</title>
    <!--code for the LED button-->
    <script>
        function toggleLED() {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "control_led.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onload = () => {
                if (xhr.status === 200) {
                    document.getElementById("toggleButton").innerText = xhr.responseText;
                }
            };
            xhr.send("toggle=1");
        }

        function getLEDStatus() {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "control_led.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onload = () => {
                if (xhr.status === 200) {
                    document.getElementById("toggleButton").innerText = xhr.responseText;
                }
            };
            xhr.send("status=1");
        }

        window.onload = getLEDStatus; // Check LED status when the page loads
    </script>

    <!--Code for the temp/altude/humid sensor-->
    <script> 
    function fetchReadings() 
    {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "get_readings.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onload = () => 
        {
            if (xhr.status === 200) 
            { 
                const readings = JSON.parse(xhr.responseText); 
                document.getElementById("temperature").innerText = readings.temperature; 
                document.getElementById("pressure").innerText = readings.pressure; 
                document.getElementById("altitude").innerText = readings.altitude; 
            }
                
        }; 
        xhr.send(); 
    } 
    </script>

</head>
<body>
    
    <h1>GPIO Example</h1>
    
    <br><br>
    
    <button id="toggleButton" onclick="toggleLED()">Loading...</button>
    
    <br><br>
    
    <h1>Sensor Readings</h1>
    
    <button onclick="fetchReadings()">Get Readings</button>
    
    <p>Temperature: <span id="temperature">N/A</span></p>

    <p>Pressure: <span id="pressure">N/A</span></p>
    
    <p>Altitude: <span id="altitude">N/A</span></p>
    
    <br><br>
    
    <!--A way back to main site-->
    <a href="index.php">Back to the landing page</a>

</body>
</html>
