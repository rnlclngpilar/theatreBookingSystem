<!-- notes:
    CSS mostly reused from movie history page (self reminder when combining css later)

    Reference: https://www.w3schools.com/howto/howto_js_tabs.asp
-->
<!DOCTYPE html>
<html>
<head>
            <meta>

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

        .error {
            color: green;
        }
    </style>
    <?php 
        include "php/login.php";
        include "php/signup.php";
    ?>
</head>

<body>
    <h1>Menu</h1>
    <table class="tableOutline">
        <thead>
                <thead class="tab">
                    <tr>
                        <th><button class="tablinks" onclick="openTab(event, 'Welcome')">Welcome</button></th>
                        <th><button class="tablinks" onclick="openTab(event, 'Login')">Login</button></th>
                        <th><button class="tablinks" onclick="openTab(event, 'SignUp')">SignUp</button></th>
                        <th style="width:100%"></th>
                        <th><span class="error"><?php echo "".$_SESSION['isSuccessful']."";?></span></th>
                    </tr>
                </thead>
        </thead>
        <tbody>
            <tr>
                <td  colspan="5">
                    <div id="Welcome" class="tabcontent" >
                        <h2><em>Welcome!</em></h2>
                            <h3>Please select a tab</h3>
                    </div>

                    <div id="Login" class="tabcontent">
                        <h2>Login</h2>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">             
                            <table>
                                <caption>Log-in to an existing account.</caption>
                                <tr><td>Username:</td><td><input type="text"     name="user"   id="user" required><span class="error"> *</span></td></tr>
                                <tr><td>Password:</td><td><input type="password" name="pass"   id="pass" required><span class="error"> *</span></td></tr> 
                            </table>
                            <input style="width:295px" type="submit" id="submitLogin" name="submitLogin" value="SUBMIT">
                            <span class="error"><?php echo "".$_SESSION['invalidLogin']."";?></span>
                        </form>
                    </div>

                    <div id="SignUp" class="tabcontent">
                        <h2>SignUp</h2>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">            
                            <table>
                                <caption>Sign-up for a new user account.</caption>
                                <tr><td>First name:</td><td><input type="text"  name="f_name" id="f_name" required><span class="error"> *</span></td></tr> 
                                <tr><td>Last name:</td><td><input type="text"   name="l_name" id="l_name" required><span class="error"> *</span></td></tr> 
                                <tr><td>E-mail:</td><td><input   type="email"   name="email"  id="email" required><span class="error"> *</span></td></tr>
                                <tr><td>Username:</td><td><input type="text"     name="user"   id="user" required><span class="error"> *</span></td></tr>
                                <tr><td>Password:</td><td><input type="password" name="pass"   id="pass" required><span class="error"> *</span></td></tr>
                            </table>
                            <input style="width:295px" type="submit" id="submitSignUp" name="submitSignUp" value="SUBMIT">
                            <span class="error"><?php echo "".$_SESSION['invalidSubmit']."";?></span>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

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
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
        }
    </script>

</body>
</html> 
