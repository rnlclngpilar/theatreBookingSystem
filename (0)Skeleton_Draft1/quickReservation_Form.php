<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"></meta>
    <link type="text/css" rel="stylesheet" href="../css/stucture_Draft1.css"> <!-- href="css/main.css" -->
    <style><?php include 'css/stucture_Draft1.css'; ?></style>
    <script type="text/javascript" src="../js/mainScript.js"><?php include 'js/mainScript.js';?></script>
    <Title>Movie Theater</Title>
</head>
<body>
    <!-- ____________ Top Navigation Bar ________________ -->
    <?php include("html/TopNav_and_Header.html"); ?>

    <!-- ____________ Quick Reservation Form ________________ -->
    <form action="" method="POST" id="ticketForm">
        <div class="content">
            <div id="Location">
                <!-- _______________ ~ Theater ~ (Start) __________________-->
                <section>
                <div class="outerRim">
                <div class="innerBlock" >
                    <fieldset>
                        <legend><h1 class="innerBlockTitle">~ Theatre ~</h1></legend>
                        <table class="formTable" align="center">
                        <!-- theater -->
                        <tr>
                            <th><label for="theatre">Theatre:</label> </th>
                            <td>
                                <select id="theatre" name="theatre" onchange="calculateTotal()" onchange="setTheatre()">  <!-- put on recipt - no actual cost-->
                                <option value="none" display="not(noSeatsOrMovieNotShownAtABCD())">Select a Theatre Location</option>
                                <option value="invalid" display="noSeatsOrMovieNotShownAtABCD()">No Theatres Available</option>  <!-- call a function to change display -->
                                <optgroup label="Cineplex" >    <!-- need proper function - Connect to database -->
                                    <?php 
                                        include 'php/connection.php';
                                        $res = mysqli_query($connection, "SELECT * FROM theatrelocationinfo");
                                        
                                        while($row = mysqli_fetch_array($res)) {
                                            echo("<option id='location'>".$row['name']."</option>");
                                        }
                                    ?>
                                </optgroup>

                                <!-- need proper function - Connect to database -->
                                <optgroup label="Oshawa" >    
                                    <option value="a" disabled="noSeatsOrMovieNotShownAtA()">theatre a  | <output for="a" value="proximityToA()">---</output>km</option>
                                    <option value="b" disabled="noSeatsOrMovieNotShownAtB()">theatre b  | <output for="b" value="proximityToB()">---</output>km</option>
                                    <option value="c" disabled="noSeatsOrMovieNotShownAtC()">theatre c  | <output for="c" value="proximityToC()">---</output>km</option>
                                    <option value="d" disabled="noSeatsOrMovieNotShownAtD()">theatre d  | <output for="d" value="proximityToD()">---</output>km</option>
                                </optgroup>

                                </select>
                            </td>
                            <td style="text-align:right">Distance: <output for="theatre" name="proximity" value="proximityToTheatre()"> --- </output></td>
                        </tr>
                        <!-- list of titles (this filters the titles as you type) or you can use it as a dropdown-->
                        <tr>
                            <th><span><strong>Available Movie Title: </strong></span></th>
                            <td colspan='2'><input type="text" name="movies" list="movieTitles" placeholder="Enter movie title"/></td>
                            <datalist id="movieTitles">                         
                                <?php 
                                    function setTheatre(){
                                        include 'php/connection.php';

                                        (isset($_POST["theatre"])) ? $theaterName = $_POST["theatre"] : $theaterName=1;
                                        $res = mysqli_query($connection, "SELECT * FROM cinemadetail WHERE theatreName='$theaterName'");

                                        while($row = mysqli_fetch_array($res)) {
                                            echo("<option >".$row['movieTitle']."</option>");
                                        }
                                    }

                                    
                                ?>
                            </datalist>
                        </tr>
                        <!-- ------------------------------- -->
                        </table>
                    </fieldset>
                </div>
                </div>
                </section>
                <!-- ________________ ~ Theater ~ (End) ___________________-->
                    
                    
                <!-- _______________ ~ Seats ~ (Start) __________________-->
                <section>
                <div class="outerRim">
                <div class="innerBlock" >       <!-- NEED New ID-->
                    <fieldset  class="nestedTable" align="center">
                        <legend><h1 class="innerBlockTitle">~ Seats ~</h1></legend>
                        <table class="formTable" align="center">
                            <caption> Seats Available:</caption>
                                <!-- number of seats available-->
                                <tr>
                                    <th><label for="availableSeats"><strong>Number of Seats Available: </strong></label></th>  
                                    <td colspan='2'><output type="number" id="availableSeats" name="availableSeats" value="getRemainingSeats()">-----</output></td>
                                </tr>
                                <tr>
                                    <th><label for="availableAcessibleSeats"><strong>Number of Wheelchair Accessible Seats Available: </strong></label></th>
                                    <td colspan='2'><output type="number" id="availableAccessibleSeats" name="availableAccessibleSeats" value="getRemainingAcbessibleSeats()">-----</output></td>
                                </tr>
                                <!-- ------------------------------- -->
                                <!-- Date and time - check if local?-->
                                <tr>
                                    <th><span><strong>Date/time: </strong></span><span style="color: rgb(185, 32, 109)"><br>(at a later date: will cleanup / provide clear options for when the movie is shown)<br><br>
                                    </span></th>
                                    <td colspan='2'>
                                        <input type="date" /> 
                                        <input type="time" /> 
                                        <input type="datetime-local" /> <!-- NOTE: don't let them do both time and date at once, use one to update the other-->
                                        <input type="datetime" />       <!-- ???  -->
                                    </td>
                                </tr>
                                <!-- ------------------------------- -->
                        </table>
                    </fieldset>
                </div>
                </div>    
            </section>
            <!-- ________________ ~ Seats ~ (End) ___________________-->



            <!-- _________ ~ Ticket Reservation ~ (Start) ___________-->
            <section>
                <div class="outerRim">
                <div id="TicketOrderForm" class="innerBlock" >
                    <fieldset>
                        <legend><h1 class="innerBlockTitle">~ Ticket Reservation ~</h1></legend>
                        <table class="formTable" align="center">
                            <tr><td colspan=3>
                                <!-- _______ Nested Table 1 ________ --> 
                                <table  align="center">
                                    <th></th>
                                    <th colspan=2>Number of Tickets: </th>
                                    <tr>
                                        <th><label for="adult">Adult(s): </label></th>
                                        <td><input type="number" id="adult" name="adult" placeholder="Please enter a number" min="0" max="getRemainingSeats()"></td>	
                                        <td class="ticketCostDisp">($<output for="adult" name="adultTicket">  </output>/person)</td>
                                    </tr>
                                    <tr>
                                        <th><label for="senior">Senior(s): </label></th>
                                        <td><input type="number" id="senior" name="senior" placeholder="Please enter a number" min="0" max="getRemainingSeats()()"></td> 
                                        <td class="ticketCostDisp">($<output for="senior" name="seniorTicket">  </output>/person)</td>
                                    </tr>
                                    <tr>
                                        <th><label for="child">Childeren: </label></th>
                                        <td><input type="number" id="child" name="child" placeholder="Please enter a number" min="0" max="getRemainingSeats()"></td>  
                                        <td class="ticketCostDisp">($<output for="child" name="childTicket">  </output>/person)</td>
                                    </tr>
                                    <!-- ------------------------------- --> 
                                    <tr>
                                        <th rowspan=2><label for="wheelchair">Accessible: </label></th>
                                        <td>
                                            <input type="checkbox" id="wheelchair" name="wheelchair" value="wheelchair" onchange="calculateTotal()">
                                            <label for="wheelchair">Wheelchair Accessible</label>
                                        </td>
                                        <td class="ticketCostDisp">($<output for="wheelchair" name="accessibleTicket">  </output>/person)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="support" name="support" value="support" onchange="calculateTotal()"> 
                                            <label for="support">Support Person (No fee)</label>
                                        </td>
                                        <td class="ticketCostDisp">($<output for="support" name="supportTicket">  </output>/person)</td>
                                    </tr>
                                </table>
                                <!-- _______________________________ --> 
                            </td></tr>                            
                            <!-- ------------------------------- --> <!-- need function to set value=getUserEmail()-if user has an account-->
                            <tr>
                                <th><label for="email">E-mail for Receipt: </label></th>
                                <td><input type="email" id="email" name="email" placeholder="movies@gmail.com"></td>
                                <td style="text-align:right"><output for="email" name="email" display="isInvalidEmail">Invalid</output></td>
                            </tr>
                            <!-- ------------------------------- -->  
                            <tr>	
                                <th><label for='radioEx'>Radio Buttons:</label></th>
                                <td colspan=2>
                                    <!-- _______ Nested Table 2 ________ --> 
                                    <table class="nestedTable">
                                        <tr>
                                            <td>
                                                <input type="radio" id="radio1" name="radioEx" value="radio1" onchange="calculateTotal()"> 
                                                <label for="radio1">radio3</label>
                                            </td>
                                            <td>
                                                <input type="radio" id="radio2" name="radioEx" value="radio2" onchange="calculateTotal()"> 
                                                <label for="radio2">radio3</label>
                                            </td>
                                            <td>
                                                <input type="radio" id="radio3" name="radioEx" value="radio3" onchange="calculateTotal()"> 
                                                <label for="radio3">radio3</label>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- _______________________________ --> 
                                </td>
                            </tr>
                        </table>
                        <!-- ------------------------------- -->
                        <p align="center"><input type="submit" id='submit' name="submit" value='Submit' onclick="validation()"></p>
                        <!-- ------------------------------- -->
                    </fieldset>
                </div>
                </div>    
            </section>
            <!-- __________ ~ Ticket Reservation ~ (End) ____________-->
            
            




<!-- _____ Content Moved to Movie_Information_page.php _____ -->
            <!-- ____________ ~ Information ~ (Start) _______________-->
            <!-- _______________ ~ Stats ~ (Start) __________________-->

        </section>
        </div>
    </div>
</form>

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



