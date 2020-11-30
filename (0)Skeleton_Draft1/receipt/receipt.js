	var ticket_price= new Array();
	ticket_price["adult"] = 40;
	ticket_price["child"] = 40;
	ticket_price["senior"] = 40;
	ticket_price["none"] = 0;  // fix prices, add if needed ...

    function price_display() {
        document.getElementById("adultTicket").innerHTML = ticket_price["adult"];
        document.getElementById("seniorTicket").innerHTML= ticket_price["senior"];
        document.getElementById("childTicket").innerHTML = ticket_price["child"];
    }
	
    function getTicketQuantity(){ return 40;}// PLACEHOLDER
    function getRelevantValue(){  return 0; }// PLACEHOLDER



  
    function calculateTotal(){
        var ticketNo = 0; // initialize
        ticketNo = getTicketQuantity();  // will need to create a new multiplier for different ticket types...
        var total =  ticketNo*(getRelevantValue() + getRelevantValue()) ; //add functions...
        var tax = total*0.13;
        var totalTaxed = (Math.round((total+tax)*100))/100;
        
        var tableObj = document.getElementById("receipt");		
        var multiplier =((ticketNo>0)?("<td>"+" X "+ ticketNo + "</td>"):"<td></td>"); 

        // fix names, check if "$" is applicable, fix functions
        tableObj.innerHTML =  "<caption>Receipt</caption>" +
        "<tr><td>Number of Tickets:</td>    <td>  </td><td>" + getTicketQuantity()    + "</td> <td></td> </tr>" +
        "<tr><td>Form Element:</td>         <td>$</td> <td>" + getRelevantValue()     + "</td>"+ multiplier+"</tr>" +
        "<tr><td>Form Element:</td>         <td>$</td> <td>" + getRelevantValue()     + "</td>"+ multiplier+"</tr>" +
        "<tr><td>Form Element:</td>         <td>$</td> <td>" + getRelevantValue()     + "</td>"+ multiplier+"</tr>" +
        "<tr><td>Form Element:</td>         <td>$</td> <td>" + getRelevantValue()     + "</td>"+ multiplier+"</tr>" +
        "<tr><td>Form Element:</td>         <td>$</td> <td>" + getRelevantValue()     + "</td>"+ multiplier+"</tr>" +
        "<tr><td colspan=4>---------------------------------------------------</td></tr>" +
        "<tr><td>SubTotal Price: </td>     <td>$</td> <td>" + total + "</td></tr>" +
        "<tr><td>Tax: </td>         	   <td>$</td> <td>" + ((Math.round((tax)*100))/100) + "</td></tr>" +
        "<tr><td>Total Price: </td>        <td>$</td> <td>" + totalTaxed + "</td></tr>";

   //     hideTotal();         // commented for debug
   //     hideWarning();       // commented for debug




        var  emailObj = document.getElementById("submitEmail");
        emailObj.value=receiptText(); // this sends "[name attribute]=" BEFORE text in receiptText() function when email is sent
        /*OUTPUT 
            Your Movie Receipt=Receipt
            Number of Tickets    40
            Number of Tickets    40
            Form Element:        0
        */

        
        //emailObj.name=receiptText(); // this sends "=[value attribute]" AFTER text in receiptText() function when email is sent
        /* OUTPUT:
            Receipt
            Number of Tickets    40
            Number of Tickets    40
            Form Element:        0

            =Email Receipt
        */


       //emailObj=receiptText(); //this sends "[name attribute]=[value attribute]"
       /*OUTPUT 
            Your Movie Receipt=Email Receipt
        */


        return total;
    }


    function receiptText() {
        //var  emailObj = document.getElementById("submitEmail");
        var receiptText ="Receipt\n" +
        "Number of Tickets    " + getTicketQuantity()    + "\n" +
        "Number of Tickets    " + getTicketQuantity()    + "\n" +
        "Form Element:        " + getRelevantValue() + "\n\n";

        return receiptText;      
    }


    function hideTotal(){                               // commented for debug
     //   var  divobj = document.getElementById("receipt");
     //   divobj.style.display='none';						 
    }

    function showTotal() {
        var  divobj = document.getElementById("receipt");
        divobj.style.display='block';                  
    }
    
    function hideWarning(){
        var warningObj = document.getElementById("warning");
        warningObj.style.display='none';						 
    }
    
    function validation() {
        var invalidElements = new Array;
        if(getTicketQuantity()==0) 		    invalidElements.push("number of tickets");
        if(getRelevantValue()==0) 	   		invalidElements.push("missing field description"); 
        if(getRelevantValue()==0) 	   		invalidElements.push("missing field description"); 
        if(getRelevantValue()==0) 	   		invalidElements.push("missing field description"); 

        if (invalidElements.length==0) {
            calculateTotal();
            showTotal();			
        } else {
            var warningObj = document.getElementById("warning");
            var warningMessage = document.getElementById("errorMessage");

            warningMessage.innerHTML="<strong>Submission not accepted. Review the following:</strong> <br>";
            //warningMessage.innerHTML+=invalidElements;   //list style print
            for(var i=0; i<invalidElements.length; i++){
             warningMessage.innerHTML+=" - "+invalidElements[i]+"<br>"; //bulleted print
            }
            warningObj.style.display = "block"; 
        }
    }