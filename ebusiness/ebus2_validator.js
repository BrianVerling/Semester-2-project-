/* global $ */

function validateDetails(){                    
    
                                                    <!-- This is the code for my validator it allows me to make sure all details are entered correctly and fully -->
    
    var pin;
    var FirstName;
    var email;

    
    pin = document.getElementById("user_pin").value;
    FirstName = document.forms["myForm"]["name"].value;
    email =document.forms["myForm"]["email"].value;
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is entered correctly");
    }
    else if (FirstName == "") {
        alert("Please enter your name");
        return false;
    }
    else if (email == "") {
        alert("Please enter your email");
        return false;
    }
    else 
        enablebtnPurchase();
    }
    

                                                               <!-- This code allows me to make my proceed to purchase button active -->

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}