<!DOCTYPE html>
<html> 
<head>
    <title>Select Product</title>
    
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    </script> type="text//javascript" src="cost_ca;c.js></script
    
</head>

    <body>
    <h4>Select a Product</h4>
    
    <br/>
    
    <form method="POST" action="Ebus2.php" >
        
        <label for ="Salesforce">  
        <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
        Salesforce @ $100
        </label> 
        
        <br/> 
        
        <Label for="aws">
            <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
            AWS @ $300
        </Label>
        
        <br/>
        <br/>
        
        <label for="subtotal"/>
        Sub Total
        <input type="text" id="subtotal" value="0.00" readonly/>
        </label>
        
        <br>
        
        <Label for ="total">
            Total
            <input type="text" id="total" value="0.00" readonly/>
        </Label>
        
        <br/>
        
        <button type ="submit" id="btnProceed" disable>Add to Shopping Cart</button>
        
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
        
    </body>
</html>
