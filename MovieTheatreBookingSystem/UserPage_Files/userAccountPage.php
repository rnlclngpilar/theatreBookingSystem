

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

                <!DOCTYPE html>    
                <html>
                <head>
                    <title>Account</title>
                   
                    <link href="Resources/css_Theme/login_signup_styles.css" rel="stylesheet" type="text/css" />  <!-- some of content in other css should be added to this to fix it -->
                    <link href="Resources/css_Theme/user_account.css" rel="stylesheet" type="text/css" />  <!-- far more detailed -->
                    <script src = "Resources/js/tab_button.js" type="text/javascript" ></script>
                    <?php include 'Resources/php/updateUserInfo.php'; ?>      
                </head>

                <body> 
                <input type="button" value="< go back" onclick="history.back(-1)" />
                
                <h1>Menu | User Account</h1>   
                    <span class="error"><?php echo "".$_SESSION['isSuccessful']."<br><br>";?></span>
                <form method="POST">             
                        <table>
                            <tbody>
                            <tr>
                                <td class="internalTableSideBar">
                                    <table>
                                    <tr><td>
                                        <span><?php echo "<br>Logged-in as: ".$_SESSION['full_name']."<br><br>";?>  </span>
                                    </td></tr>
        <!-- view account tab  -->  <div><tr class="tab" style="height:min-content"><th><button class="tablinks" onclick="openTab(event, 'View')">View Account</button></th> </tr></div>       
        <!-- movie history tab -->  <div><tr class="tab" style="height:min-content"><th><button class="tablinks" onclick="openTab(event, 'Update')">Update Account</button></th> </tr></div>       
        <!-- user account tab  -->  <div><tr class="tab" style="height:min-content"><th><button class="tablinks" onclick="openTab(event, 'MovieHist')">Movie History</button></th></tr></div>
        <!-- statistics tab     <div><tr class="tab" style="height:min-content"><th><button class="tablinks" onclick="openTab(event, 'Stats')">Statistics</button></th>       </tr></div> -->
        <!-- logouts user tab  -->  <div><tr class="tab" style="height:min-content"><th><button class="tablinks" onclick="openTab(event, 'Logout')">Logout</button></th>       </tr></div>

                                    
                                    </table>
                                </td>
                                    
                                <td>
                                <form action=" " method="POST" enctype="multipart/form-data">   <!-- action - check if they are a user (php) -->
                                    

<!-- welcome section -->                <div id="Welcome" class="tabcontent" style="display:block">
                                            <h2><em>Welcome!</em></h2>
                                                <h3>Please select a tab</h3>
                                        </div>
                                        
                                        
<!-- view account tab  -->              <div id="View" class="tabcontent">      
                                            <table class="innerContentTable">
                                                <caption>User Profile</caption>
                                                <?php include 'Resources/php/getUserInfo.php'; ?>  <!--  -->
                                            </table>
                                        </div>

<!-- user account section -->           <div id="Update" class="tabcontent">      <!-- if a seperate html page has the content for signin/login fields they can be used here too - using a php include statement (may need to change file type)  -->
                                                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">             <!-- form element here  ////////////////////////////////////////////////// -->
                                                    <table class="innerContentTable">
                                                        <caption>Update Account Information</caption>
                                                        <tr><td>First name:</td><td><input type="text"     name="f_name"  id="f_name"  required><span class="error"> *</span></td></tr> 
                                                        <tr><td>Last name:</td> <td><input type="text"     name="l_name"  id="l_name"  required><span class="error"> *</span></td></tr> 
                                                        <tr><td>E-mail:</td>    <td><input type="email"    name="email"   id="email"   required><span class="error"> *</span></td></tr>
                                                        <tr><td>Address:</td>   <td><input type="text"     name="address" id="address" required><span class="error"> *</span></td></tr>
                                                        <tr><td>Username:</td>  <td><input type="text"     name="user"    id="user"    required><span class="error"> *</span></td></tr>
                                                        <tr><td>Password:</td>  <td><input type="password" name="pass"    id="pass"    required><span class="error"> *</span></td></tr>
                                                    </table>
                                                    <input type="submit" id="submit" name="submit" value="submit">
                                                    <span class="error"><?php echo "".$_SESSION['invalidUpdate']."";?></span>
                                                </form>    
                                                            <!--  signup page contents here  (import/include) -->
                                        </div>

 <!-- movie history section -->         <div id="MovieHist" class="tabcontent" >
                                            <table class="innerContentTable">
                                                <caption>Movie History</caption>
                                                    <tr>
                                                        <td>
                                                    <table id="movieTable" >
                                                       <!-- <caption>Movie History</caption> --> 
                                                        <thead>
                                                            <tr>
                                                                <th>Movie Poster</th>
                                                                <th>Title</th>
                                                                <th>Genre</th> 
                                                                <th>Description</th> 
                                                                <th>Rating</th>
                                                                <th>Theatre Attended</th>
                                                                <!-- <th>Date Watched</th> note: changed this column (compared to form file)  -->
                                                                <!-- <th>Reviews</th> -->
                                                            </tr>
                                                        </thead>
                                                        
                                                        <?php include 'Resources/php/getMovieHistory.php'; ?>  <!--  -->
                                                        
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
                                            
                                            <!-- chat note
                                            for statistics I was thinking of using that to display relevant user content that we don’t show elsewhere, for now it can be left blank 
                                            - when we are done we can delete the statistics tab if we don’t use it. 

                                            For the movie history table:
                                            •If it is faster, you can change the “date(s) watched” column to “most recent viewing” so that there would only be one entry for the date they watched the movie. 
                                            •Can you add a column for “theatre location” where they watched the movie  (proposal mentions history of past theatres)
                                            •In the table footer or under the table, 
                                            •can you add fields for favorite genre & favorite theatre 
                                                (based on a count of the largest number of entries of a particular genre)
                                            -->
                                        </div>

                                        <div id="Logout" class="tabcontent">
                                            <form action="enterUserPage.php">
                                                <input type="submit">
                                            </form>
                                        </div>

  
                                 </td>
                            </tr> 
                        </tbody>
                        </table>
                        


                        </table>
                    </form>  
</body>
</html> 