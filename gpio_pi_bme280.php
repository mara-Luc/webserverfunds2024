<!DOCTYPE html>
<html>
    <head>
        <title>GPIO Page</title>
        <h1>Control LED</h1>
        <!--Link to my Java Script file with functions-->
        <script src="Sandbox.js"></script>
    </head>
    <body>
        <!--API simple fetch text-->
       
        <p id="gpio_input">Toggle LED</p>
                
                <button onclick="ledBttn()">Push Button</button>
                <?php

                    $output = `gpio toggle 23`;
                
                    echo "LED on: " . $output;
                
                ?>
        <h1>Control LED</h1>
        
        <form action="control_led.php" method="post">
        <button type="submit" name="toggle" value="1">Toggle LED</button>
        </form>

            <br><br>

        <!--A way back to main site-->
        <a href="index.php">Back to the landing page</a>

    </body>
</html>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    
    
</body>
</html>
