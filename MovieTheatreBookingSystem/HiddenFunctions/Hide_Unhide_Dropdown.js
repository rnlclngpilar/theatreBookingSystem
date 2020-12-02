//code below hides/unhide the movie display
document.getElementById("btn1").addEventListener("click", displayDropdown());

function displayDropdown()
{
    var box1 = document.getElementById("div2");
    if (box1.style.display == "none") { box1.style.display = "block"; }
}

/*

//code below hides/unhide the movie display
document.getElementById("btn1").addEventListener("click",function()
        {
            var box1 = document.getElementById("div2");
            if (box1.style.display == "none")
            {
                box1.style.display = "block";
            }
            else
            {
                box1.style.display = "none";
            }

        })
*/