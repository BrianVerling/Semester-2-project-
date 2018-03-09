<?php
// start the session
session_start();
?>

<html>
    <head>
        <title>Enter Details</title>
        
        <link rel="stylesheet" href="Ebus.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script type="text/javascript" src="ebus2_validator.js"></script>
         <style type = "text/css">
             #content {
                  top:8em;
                  left:25em;
                  width:30em;
                  height:30em;
                  position:absolute;
                  border-style:ridge;
             }
                                /*This codes for my taskbar on my shop page*/
ul{
    list-style-type:none;
    margin:0;
    padding:0;
    overflow:hidden;
    background-color: 	#FE9A2E;
}
li{
    float: left;
}
li a{
    display: block;
    color:white;
    text-align:center;
    padding: 10px 59px;
    text-decoration: none;
}
li a:hover {
    background-color: #111;
}
input[type=text] {
                           border: 2px solid blue;
                           border-radius: 4px;
                           text-align:center;
}
input[type=email] {
                           border: 2px solid blue;
                           border-radius: 4px;
                           text-align:center;
}
input[type=password] {
                           border: 2px solid blue;
                           border-radius: 4px;
                           text-align:center;
}
 button[type=submit]:disabled {
                           background-color: grey;
                           border-radius: 2px;
                           border:none;
                           color: black;
                           padding: 5px;
                           cursor: pointer;
                           
       }
        button[type=submit]:enabled {
                           background-color: #FE9A2E;
                           border-radius: 2px;
                           border:none;
                           color: black;
                           padding: 5px;
                           cursor: pointer;
                           
       }
       button[onclick] {
           background-color:#FE9A2E;
                           border-radius: 2px;
                           border:none;
                           color: black;
                           padding: 5px;
                           cursor: pointer;
       }
         </style>
         
         
         
         </head></PHP>
    </head>
    <body>
      <ul>
        <li><a href = "../homepage.html">Home</a></li>
        <li><a href = "..//ebusiness/Ebus1.php">E-Business</a></li>
        <li><a href ="..//Interests/Cloudservices.html">Cloud Services</a></li>
        
        </ul>
                                <!--this codes for my shop page2 to make sure all information is entered -->
        
        <h2>Please enter your details</h2>
        <div id ="content">
            <form name = "myForm"  method="POST" action="ebus3.php">
                    <br>
                    <label for = "name">
                        <strong> &nbsp; Name:</strong>
                        <br>
                        &nbsp;<input type ='text' id ="name" name = "name"/>
                    </label>
                    <br><br>
                    <label for "email">
                        <strong>&nbsp; Email:</strong>
                        <br>
                        &nbsp;<input type = "email" id ="email" name="email"/>
                    </label>
                    <br><br>
                    &nbsp;&nbsp;<label for="user_pin"><strong>PIN:</strong></label>
                    <br> 
                    
                                                                                                    <!-- this code is for to validate my pin to make sure the max length entered is 4 characters -->
                   &nbsp;<input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br><br><br>
                &nbsp;&nbsp;&nbsp;<button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onClick="validateDetails()">Validate</button>
            
        </div>
        
       
        
        <?php
        //Set session variables
        $_SESSION["total"] = $_POST["total"];
        
        ?>
        
        </body>
</html>