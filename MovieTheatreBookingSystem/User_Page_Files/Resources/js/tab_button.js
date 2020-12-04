/* notes:
          Reference: https://www.w3schools.com/howto/howto_js_tabs.asp
*/

function openTab(evt, tabName, num) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");           
        tablinks[i].parentElement.className = tablinks[i].parentElement.className.replace(" active", ""); // Added: reset tab th colour
    }
    document.getElementById(tabName).style.display = "block";     

    evt.currentTarget.className += " active";     
    
    evt.currentTarget.parentElement.className += " active"; // Added: tab th colour
    document.getElementById(tabName).parentElement.class="tabColor"; // Added: tab content colour
}
    