<html>
<body style="background-image: url(Images/Pic5.jpg);">
    <link rel="stylesheet" href="main.css">
        <div class="header">
            <ul>
                <li style="float: left; border-right: none;"> <a href="Home.php" class="logo"> <img src="Images/Pic9.png" width="70px" height="60px"> <strong> WeCareU </strong> Online Apppointment Booking </a> </li>
                <li style=" font-size: 25px;padding: 10px; padding-top: 30px "> <a href="AdminLogin.php">Admin Login </a> </li>
               <!-- <li style=" font-size: 25px;padding: 10px; padding-top: 30px "> <a href="DoctorLogin.php">Doctor Login </a> </li>-->
            </ul>

            <ul style="float:right; font-size: 20px;display: inline-block;margin-left: 10px;padding: 10px ">
                
            </ul>
        </div>
        <div class=""><br>
            <h2 style="text-align:right; margin-right:300px"> WeCareU</h2>
            <p style="text-align:right; font-size:40px; font-family: cursive; color: black;margin-right:150px ">Your Health, Our Mission </p>
            <button onclick="document.getElementById('id01').style.display='block'" style="position: absolute;top: 55%;left:70%;">LOGIN</button>
            <button onclick="window.location.href='Signup.php'" style="position: absolute;top: 65%;left:70%;">SIGNUP</button>

        </div>
        
        
<div id="id01" class="modal">
    <form class="modal-content animate" method="POST" action="InsertLogin.php">
        <div class="imgcontainer">
            <span style="float: left;padding-left: 150px"><h2>Log In </h2></span>
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
        <div class="container">
            <label><b>Username</label></b></label>
            <input type="text" placeholder="Enter your Username" name="uname" required   >

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter your Password" name="psw" required>
            <button type="submit" name="login">LOGIN</button>
            <input type="checkbox" checked="checked"> Remember my login
        </div>
        <div class="container" style="background-color:white">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" onclick="window.location.href='Signup.php'" name="signup" style="float: left">Sign Up</button>
        </div>
    </form>
</div>
</div>
</body>
</html>