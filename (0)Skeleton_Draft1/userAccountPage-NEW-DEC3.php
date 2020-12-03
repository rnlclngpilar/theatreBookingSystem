<!-- INCOMPLETE - in the process of joining previous version of this file with the format of the lign/signin form-->


<!-- need to connect to a file which checks
need to account for case: if not a user then .... (Ex.)
      display a warning when they try to enter this page, 
      or give option to redirect to login/signin, 
      ... something
(same checks as if they were on signup/login page)

FOR THIS FILE: can the width be set to "width:fit-content" on the input?  Issue: Selector Specificity
                -->
                <!--  a few checks for debugging
                        input:disabled{background:navy; border:medium red solid}
                        input:invalid{background-color: greenyellow;}
                        input:indeterminate{background-color: orchid;}
                        input:optional{background-color: aquamarine;}
                        input:in-range{background-color: grey;}
                -->

                <?php 
                    session_start();
                    include 'php/updateUserInfo.php';
                    include 'php/getMovieHistory.php';
                ?>

                <!DOCTYPE html>    
                <html>
                    <h1>Menu</h1>
                    <span><?php echo ("Logged-in as: ");?></span><br><br>
                <head>
                    <title>Account</title> <!-- changed border-radius under th - compared to user file - many css changes      (visibility in listener changed ***  capitalization changes in sign up)-->
                    <style>                
         
                        table:not(.innerContentTable) {border-spacing: 0;}
                        .innerContentTable{padding:5px;margin:5px; background-color: darkgoldenrod;}
                        td:first-of-type {border-width: 0 4px 4px 0}

                        tbody, td, th {
                            border-collapse:collapse;
                            padding: 1px 5px;
                        }
                        th {
                            border-radius:  10px 0 0 10px ;  
                        }                        
                        

                        th, td, input, tbody table { border: solid black medium;}
                        table>tbody>tr:first-child>td:nth-child(2) td:nth-child(2) {border:none;}

                        tbody table td, input {  border-radius: 5px; row-gap: 3px;}
                        tbody table td:first-child {background: darkred; color:  white; }
                        
                        tbody:not(.internalTableClr), .tabColor {
                            background-color:oldlace;
                            color:black; 
                        }
                        
                        tbody>tr~tr th:only-child {height:min-content;}



                        .tabcontent th { overflow: hidden;}
                        .tab th {
                            background-color:khaki;
                            color:black; 
                        }
                        .tab th:hover {
                            background-color:  rgb(175, 75, 75);
                        }
                        .tab th.active {
                            background-color: rgb(173, 48, 48);;
                        }
                        

                        
                        

                    </style> 
                    <style>
                        caption {font-weight: bold; text-decoration: darkred underline double; padding-bottom: 5px;}

                        html {background-color: white;}
                        body {background-color: lightgray; font-family: Georgia,serif;}
                        .tableOutline{border: black double thick; padding:5px; border-spacing: 0; margin:5px}
                        .tabcontent td {
                            padding: 0px  5px  0px  5px;
                            border: black medium;
                            border-style: ridge ;
                        }

                        thead, tfoot {             color: black; background-color: rgb(192, 108, 108); }
                        tbody tr td:first-child{  color: black; background-color: oldlace;}
                        tbody .tabcontent tr td:first-child{ color: black; background-color: khaki; }
                        tbody .tabcontent tr td:last-child{  color: white; background-color: darkred;}

                        th:first-child, td{ 
                            border-top-left-radius: 10px;
                            border-bottom-left-radius: 10px;
                        }
                        th:last-child, 
                        td:last-child,
                        tbody td:first-child { 
                            border-top-right-radius: 10px;
                            border-bottom-right-radius: 10px;
                        }

                        .tab button {
                            background-color: inherit;
                            border: none;
                            outline: none;
                            padding: 10px 20px;
                            font-size: 18px;
                        }

                        .tab button:hover {
                            background-color:  rgb(175, 75, 75);
                        }

                        .tab button.active {
                            background-color: rgb(173, 48, 48);;
                        }

                        .tabcontent{
                            display: none;
                            padding: 5px;
                        }
                    </style>

                    <!-- below overwrites a line in middle style - middle style is copy from user lognin/signin - working to make consistent css-->
                    <!-- not first line has same background colour as body-->
                    <style>
                        
                        tbody tr td.internalTableSideBar:first-child  {
                             background-color: lightgrey;
                             padding: 0;
                        }
                        .internalTableSideBar, .internalTableSideBar table, .internalTableSideBar div{
                            border: none;  
                            vertical-align: text-top;
                        }
                        tbody tr td.internalTableSideBar table td:first-child{  color: black; background-color: oldlace;}
                        tbody tr td:not(.internalTableSideBar):first-child{  color: black; background-color: khaki;}

                    </style>

<!-- movie table css below-->
                <style>
                    table[id="movieTable"], table[id="movieTable"]> {
                        border-style:unset;
                        border-radius: unset unset unset unset;
                        background-color: unset;
                        color: unset;
                    }
                    

                    table[id="movieTable"]{border: black double thick; padding:3px; border-spacing: 0;}
                    table[id="movieTable"] caption{font-weight: bold;}
                    #movieTable th, #movieTable tr, #movieTable td {
                        padding: 0px  5px ;
                        border-color: black oldlace black oldlace;
                        border-style: ridge groove ridge none ;
                    }

                    #movieTable thead, #movieTable tfoot {             color: black; background-color: rgb(192, 108, 108); }
                    #movieTable tbody tr td:nth-child(1){  color: black; background-color: white;}
                    #movieTable tbody tr:nth-child(even){  color: white; background-color: darkred;}
                    #movieTable tbody tr:nth-child(odd){   color: black; background-color: oldlace;}
                    #movieTable tbody tr:hover{            color: black; background-color: khaki;}

                    #movieTable th:first-child, 
                    #movieTable td:first-child, 
                    #movieTable tbody td:nth-child(2) { 
                        border-top-left-radius: 10px;
                        border-bottom-left-radius: 10px;
                        border-left: black ridge;
                    }
                    #movieTable th:last-child, 
                    #movieTable td:last-child,
                    #movieTable tbody td:first-child { 
                        border-top-right-radius: 10px;
                        border-bottom-right-radius: 10px;
                        border-right: black ridge;
                    }
                    #movieTable tbody td:first-child{
                        border-color: darkgoldenrod;
                    }
                    #movieTable tbody td:first-child image {width:50px;}

                    
                </style>

                </head>
                
                <body>    
                <form method="POST">             
                        <table>
                            <tbody>
                            <tr>
                                <td class="internalTableSideBar">
                                    <table>
                                    <tr><td>User Account</td></tr>
        <!-- welcome tab -->   <!--  <div><tr class="tab" style="height:min-content"><th><button class="tablinks" onclick="openTab(event, 'Welcome')">Welcome</button></th>        </tr></div> -->
        <!-- movie history tab -->  <div><tr class="tab" style="height:min-content"><th><button class="tablinks" onclick="openTab(event, 'Account')">Update Account</button></th> </tr></div>       
        <!-- user account tab  -->  <div><tr class="tab" style="height:min-content"><th><button class="tablinks" onclick="openTab(event, 'MovieHist')">Movie History</button></th></tr></div>
        <!-- statistics tab    -->  <div><tr class="tab" style="height:min-content"><th><button class="tablinks" onclick="openTab(event, 'Stats')">Statistics</button></th>       </tr></div>
                                    
                                    </table>
                                </td>
                                    
                                <td > <!-- fix quotes on user file-->
                                <form action=" " method="POST" enctype="multipart/form-data">   <!-- action - check if they are a user (php) -->
                                    

<!-- welcome section -->                <div id="Welcome" class="tabcontent" style="display:block">
                                            <h2><em>Welcome!</em></h2>
                                                <h3>Please select a tab</h3>
                                        </div>                                       
<!-- user account section -->           <div id="Account" class="tabcontent">      <!-- if a seperate html page has the content for signin/login fields they can be used here too - using a php include statement (may need to change file type)  -->
                                                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">             <!-- form element here  ////////////////////////////////////////////////// -->
                                                    <table class="innerContentTable">
                                                        <caption>Update Account Information</caption>
                                                        <tr><td>First name:</td><td><input type="text"     name="f_name"  id="f_name"  required></td></tr> 
                                                        <tr><td>Last name:</td> <td><input type="text"     name="l_name"  id="l_name"  required></td></tr> 
                                                        <tr><td>E-mail:</td>    <td><input type="email"    name="email"   id="email"   required></td></tr>
                                                        <tr><td>Address:</td>   <td><input type="text"     name="address" id="address" required></td></tr>
                                                        <tr><td>Username:</td>  <td><input type="text"     name="user"    id="user"    required></td></tr>
                                                        <tr><td>Password:</td>  <td><input type="password" name="pass"    id="pass"    required></td></tr>
                                                    </table>
                                                    <input type="submit" id="submit" name="submit" value="submit">
                                                </form>  
                                                            <!--  signup page contents here  (import/include) -->
                                        </div>

 <!-- movie history section -->         <div id="MovieHist" class="tabcontent" >
                                            <table class="innerContentTable">
                                                <caption>Movie History</caption>
                                                    <tr>
                                                        <td>
                                                    <table id="movieTable">
                                                       <!-- <caption>Movie History</caption> --> 
                                                        <thead>
                                                            <tr>
                                                                <th>Poster</th>
                                                                <th>Title</th>
                                                                <th>Genre</th> 
                                                                <th>Date(s) Watched</th> <!-- note: changed this column (compared to form file)  --> 
                                                                <th>Rating</th>
                                                                <th>Reviews</th>
                                                                <th>Description</th> 
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <td>Total:</td>
                                                                <td>#</td>
                                                                <td colspan="5"></td>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td>
                                                            </tr>
                                                            <tr><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td></tr>
                                                            <tr><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td></tr>
                                                            <tr><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td></tr>
                                                        </tbody>
                                                    </table>
                                                </td>

                                            </tr>
                                                    <br>
                                            </table>
                                            <!--  should include / get from database:  [suggestions - add/change them]
                                                    import/include movie history table page
                                                    past theatres visited 
                                                        (also link directing to relivant section of the theatres page (not yet created) ) 
                                            --> 



                                            
                                        </div>
<!-- statistics section -->             <div id="Stats" class="tabcontent">
                                            <!--  general statistics... 
                                                    favorite genre  ( calculated based on tally of movies watched of each type (can have multiple if ties)  )
                                                    favorite theatre location 
                                                    time, day....
                                                    movies (if they re-watch them? - only count if different movie times (ex. not group tickets)?)
                                                    
                                                    ****************
                                                        idea: show information that can be pulled from the database [as long as it is relivant] - especially if not able to show elsewhere. 
                                                        Create new sections where needed for reasonable page length / neatness 
                                                    *****************
                                            -->
                                        </div>

  
                                 </td>
                            </tr> 
                            



                        
                       <!-- <tr rowspan="4" style="visibility: hidden"><th>row gap</th></tr> --><!-- gap - note: visibility is different than display  -->
                        

                        </tbody>
                        </table>
                        


                        </table>
                    </form>  
           



                <!--   --------------------------------------------------------------------------------------    -->
<!-- notes:
    CSS mostly reused from movie history page (self reminder when combining css later)

    Reference: https://www.w3schools.com/howto/howto_js_tabs.asp
-->
    
    <script>
        function openTab(evt, tabName) {
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
    </script>

</body>
</html> 