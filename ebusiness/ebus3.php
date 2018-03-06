<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
          <link rel="stylesheet" href="ebus.css" type="text/css" />
    </head>
    <body>
          <?php  
          $_SESSION["name"] = $_POST["name"];
          $_SESSION["email"] = $_POST["email"];
        ?>
        <h4>RECEIPT</h4>
        
        <br>
        <div class="ebus3name">
        <?php
        // Echo session variables that were set on previous page
        echo "Name: " . $_SESSION["name"] . ".";
        ?>
         </div>
         
         <br>  
             <?php
        // Echo session variables that were set on previous page
        echo "Email: " . $_SESSION["email"] . ".";
        ?>
        
        <br>
             <?php
        // Echo session variables that were set on previous page
        echo "Total: $" . $_SESSION["total"] . ".";
        ?>
    </body>
</html>