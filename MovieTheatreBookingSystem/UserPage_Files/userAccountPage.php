                <!DOCTYPE html>    
                <html>
                <head>
                    <title>Account</title>
                   
                    <link href="Resources/css_Theme/login_signup_styles.css" rel="stylesheet" type="text/css" /> 
                    <link href="Resources/css_Theme/user_account.css" rel="stylesheet" type="text/css" />
                    <script src = "Resources/js/tab_button.js" type="text/javascript" ></script>
                    <?php include 'Resources/php/updateUserInfo.php'; ?>      
                </head>

                <body> 
                <form action="../HomePage/homePage.html">
                    <input type="submit" value="< go HOME">
                </form>                
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

<!-- user account section -->           <div id="Update" class="tabcontent">
                                                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
                                                        
                                                        <?php include 'Resources/php/getMovieHistory.php'; ?>
                                                        
                                                    </table>
                                                </td>

                                            </tr>
                                                    <br>
                                            </table>




                                            
                                        </div>

<!-- statistics section -->             <div id="Stats" class="tabcontent">

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