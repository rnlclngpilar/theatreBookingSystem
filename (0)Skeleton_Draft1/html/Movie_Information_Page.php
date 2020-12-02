<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"></meta>
    <link type="text/css" rel="stylesheet" href="../css/stucture_Draft1.css">   <!-- href="css/main.css" -->
    <script type="text/javascript" src="../js/mainScript.js"></script>
    <Title>Movie Theater</Title> 
</head>
<body>
    <!-- ____________ Top Navigation Bar ________________ -->
    <!-- Can Contain: Horizontal Navigation Links, Site logo, 1 or 2 horizontal banners -->
    <header class="navBar">
        <nav >
            <ul>
                <li>Home</li>
                <li>Booking</li>
                <li>Trailers</li>
                <li>Snacks</li>
            </ul>
        </nav>
    </header>

    <!-- ____________ Title Block ________________ -->
    <div class="nestWithBackgroundImage" id="bImg_Home">
        <div class="outerRim">
            <div class="innerBlock">
                <h1 class="innerBlockTitle">Movie Information</h1><br>
                <p>
                    ___ Content ___ Words wrap around lines __
                    __Dynamic-sizeing height expands__________
                    <br><br><br><br>
                </p> 
            </div>
        </div>
    </div>

    <!-- ____________ ~ Information ~ (Start) _______________-->
    <?php include 'php/getMovieInfo.php'; ?>

    <div class="outerRim">
        <div class="innerBlock" id="TicketOrderForm">          <!-- Need New Id-->
        <fieldset>
            <legend><h1 class="innerBlockTitle"> ~ Information ~ </h1></legend>
                <table class="formTable" align="center">
                    <caption>Information:</caption>
                    <tr>
                        <td rowspan="10"><image src="posters/<?php echo "".$row["movieID"].""?>" height="210px"></image> </td> <!-- get image from database? relative referencing?-->                      
                        <th>Title:</th>                                             <!-- src="poster.png"  --> 
                        <td>
                            <span id="chosenMovie" value="chosenMovie"><?php echo "".$row["title"].""?></span> 
                        </td><br>
                    </tr>
                    <tr><th>Availablity:</th>       
                        <td><?php echo "".$availability.""?>        </td></tr>  <!-- currently showing (or) coming soon" --> 
                    <tr><th>Release date:</th>      
                        <td><?php echo "".$row["releaseDate"].""?>  </td></tr>  <!-- ....................... --> 
                    <tr><th>Rating:</th>            
                        <td><?php echo "".$row["rating"].""?>       </td></tr>  <!-- ....................... --> 
                    <tr><th>Genre:</th>             
                        <td><?php echo "".$row["genre"].""?>        </td></tr>  <!-- ....................... --> 
                    <tr><th>Description:</th>       
                        <td><?php echo "".$row["description"].""?>  </td></tr>  <!-- ....................... --> 
                    <tr><th>3D:</th>                
                        <td><?php echo "".$threeD.""?>              </td></tr>  <!-- yes/no .................... --> 
                    <tr><th>Closed Captioning:</th> 
                        <td><?php echo "".$cc.""?>                  </td></tr>  <!-- ....................... --> 
                    <tr><th>Duration: </th>         
                        <td><?php echo "".$duration.""?>            </td></tr>  <!-- ....................... --> 

                    <!-- possibly link theater contact info here-->
                </table>
            </fieldset>
        </div>
    </div>
    <!-- _____________ ~ Information ~ (End) ________________-->
    
    <!-- _______________ ~ Stats ~ (Start) __________________-->
    <!-- ------------------------------- -->
    <div class="outerRim">
        <div class="innerBlock" >       <!-- Need New Id-->
            <fieldset>
                <legend><h1 class="innerBlockTitle">~ Stats ~</h1></legend>
                    <!-- ------------------------------- -->
                    <table class="formTable" align="center">
                        <caption>Score:</caption>
                        <tr>
                            <th><label>Rate this movie:</label></th>
                            <td><input type="number" min="1" max="5" name="rating" id="rating" placeholder="1"/></td>
                        </tr>
                        <tr>
                            <th>Stars:<input type="range" min="0" max="5" step="1" name="happiness"></th>
                            <td>Your Rating is: <span>---</span> stars</td>
                        </tr>
                    </table>
                    <br>
                    <!-- ------------------------------- -->
                    <label for="seatSelection"><strong>Seat selection: </strong></label>
                    (Note: component will be added at a later date)<br><br>
                    <!-- ------------------------------- -->
                    some additional information for reciept (which user is not asked)...<br><br>
                    
                    <label for="theatre"><strong>Theatre: </strong></label>  
                    <output type="number" id="theatre" name="theatre" value="theatre()">-----</output>
                    <br>
                    <label for="theatreLocation"><strong>Theatre Location: </strong></label>  
                    <output type="number" id="theatreLocation" name="theatreLocation" value="theatreLocation()">-----</output>
                    <br>
                    <label for="theatreNumber"><strong>Theatre Number: </strong></label>  
                    <output type="number" id="theatreNumber" name="theatreNumber" value="getTheatreNumber()">-----</output>

                    <br>
            </fieldset>
        </div>
    </div>
    <br>
    <!-- ________________ ~ Stats ~ (End) ___________________-->

<!--______________________________________________________________________________________________-->	
    <footer  class="navBar">
        <nav>                   <!-- Horizontal Navigation Links -->
            <ul>
                <li>Back to Top</li>
                <li>Site Map</li>
                <li>Contact</li>
                <li>About</li>
            </ul>
        </nav>
    </footer>
<!--______________________________________________________________________________________________-->
</body>
</html>



