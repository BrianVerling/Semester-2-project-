<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <link rel="stylesheet" href="ebus.css" type="text/css" />
    
    
    </head>
   
    <body>
        
         <h4>Select a Product</h4>
         
         <br/>
         
         <form method="POST" action="Ebus2.php">
             
             <label for="salesforce" class= "lblsalesforce"> 
                 <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                 Salesforce @ $100
             </label>
             <br/>
             
             <label for="aws">
                 <input type="radio" id="aws" name="product" checked onClick ="disablebtnProceed()"/>
                 AWS @ $300
             </label>
             <br/>
             
             <label for="gmail">
             <input type = "radio" id="gmail" name="product" checked onClick ="disablebtnProceed()"/>
             gmail @ $400
             </label>
             <br/>
             
             <label for="cloud9">
             <input type = "radio" id="cloud9" name="product" checked onClick ="disablebtnProceed()"/>
             cloud 9 @ $200
             </label>
             <br/>
             
             <label for="subtotal">
                 Sub Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
             </label>
             <br/>
                 
            <label for="discount" class="lbldiscount">
              Discount @ 5%  <input type="text" id="discount"  value="0.00" readonly/>
            
            </label>
                
            <br>
            
            <label for="vat" class="lblvat">
              VAT @ 10% &nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="vat"  value="0.00" readonly/>
            </label>
             <br/>
             
             
             <label for="total">
                 Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="text" id="total" name="total" value="0.00" readonly/>
             </label>
             
             <br/>
             
             <button type="submit" id="btnProceed" disabled> Add to Shopping Cart</button>
         </form>
         
         <br/>
         <button onClick="calcSub()" class= "btncalc">Calculate Cost</button>
         <a role="button" href="Ebus1.php">Clear Choice</a>
         
    </body>
</html>