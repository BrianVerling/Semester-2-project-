<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
         <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        
        
         <form action="Ebus3.php"method="POST"
        
             <label for="user_pin">PIN</label>
             <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
        
        <button type="Submit" id="btnPurchase" disable>Proceed with Purchase/button>
        
        </form>
        
        <br/>
        <button onClick="ValidateDetails()">Validate</button>
        
        <?php
        // Set session variables
        $_Session["total"] = $_POST["total"];
        ?>
        
        
        <script type="text/javascript" spc="ebus2_validator.js"></script>
    </body>
    </html>