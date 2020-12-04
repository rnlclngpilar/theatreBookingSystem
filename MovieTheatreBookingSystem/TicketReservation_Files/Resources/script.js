//jquery

//in this function, checkboxes are set to be disabled initially
function onLoaderFunc()
{
  $(".seatStructure *").prop("disabled", true);
  $(".displayerBoxes *").prop("disabled", true);
}


//this function takes the legible data inputed by the user, to enable checkbox for seat selections.
function takeData()

{

  /* prevents the user from entering negative numbers. Will not proceed till the user enters positive numbers in all
  textboxes */
  if (($("#adult").val() < 0 ) || ($("#senior").val() < 0 ) || ($("#child").val() < 0 ))
  {
  alert("Cannot enter negative numbers!");
  }

  else
  {

    /* If all textboxes are 0, there will be an alert message to tell the user to at least enter one ticket  */
    if (($("#adult").val() == 0 ) && ($("#senior").val() == 0 ) && ($("#child").val() == 0 ))
      {
        alert("Please enter at least one ticket");
      }

      //proceeds to this if the user enter at least one ticket. 
    else
      {
        $(".inputForm *").prop("disabled", true);
        $(".seatStructure *").prop("disabled", false);
        document.getElementById("notification").innerHTML = "Please Select your Seats NOW!";
      }
  }

}

function myFunction() 
{
  alert($("input:checked").length);
}


//disables the checkbox after selection has reached the amount of tickets entered
$(":checkbox").click(function() 
{
  if ($("input:checked").length == ($("#adult").val()))
  {
      $(":checkbox").prop('disabled', true);
      $(':checked').prop('disabled', false);
  }


  else
  {
      $(":checkbox").prop('disabled', false);
  }
});