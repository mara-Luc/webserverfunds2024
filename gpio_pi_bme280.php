<!DOCTYPE html>
<html>
<head>
    <title>GPIO</title>
    <!--Link to my Java Script file with functions-->
    <script>
    function toggleLED() 
    {
        var xhr = new XMLHttpRequest();
        
        xhr.open("POST", "control_led.php", true);
        
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        
        xhr.onreadystatechange = function() 
        {
            if (xhr.readyState == 4 && xhr.status == 200) 
            {
                document.getElementById("status").innerText = xhr.responseText;
            }
        };
        
        xhr.send("toggle=1");
    }
    </script>
</head>
<body>
    <h1>Control LED</h1>
    <button onclick="toggleLED()">Toggle LED</button>
    
    <br><br>
    <button id="toggleButton" onclick="toggleLED()">Loading...</button>
    <br><br>

    <!--A way back to main site-->
    <a href="index.php">Back to the landing page</a>

</body>
</html>

