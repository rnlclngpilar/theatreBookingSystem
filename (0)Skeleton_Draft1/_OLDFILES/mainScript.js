function validation(){
    var adult_ticket = document.getElementById("adult").value; //get value from the adult textbox
    var senior_ticket = document.getElementById("senior").value;
    var child_ticket = document.getElementById("child").value

    var adult_price_total, senior_price_total, child_price_total, subtotal, total_price, wheelchair_price
    wheelchair_price = 4.99;
    adult_price_total = 14.95 * adult_ticket; /*14.95 is the price of the ticket for an adult*/
    senior_price_total = 13.95 * senior_ticket; /*13.95 is the price of the ticket for a senior*/
    child_price_total = 12.95 * child_ticket;
    subtotal = adult_price_total + senior_price_total + child_price_total; /*Total price before tax*/
    total_price = subtotal * 1.13; /*Total price including tax*/

    alert("The subtotal is " + "$" + subtotal.toFixed(2) + " and " + "the total price (with tax) is " + "$" + total_price.toFixed(2));

}


	
	
	
