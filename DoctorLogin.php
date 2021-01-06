<?php
   include "DBconnect.php";
?>
<!DOCTYPE html>
<html>
    <body style="background-image: url(Images/Pic13.jpg);">
        <link rel="stylesheet" href="main.css">
            <form action="AdminLogin.php" method="POST">
                <div class="header">
                    <ul>
                        <li style="float: left"><strong>DOCTOR LOGIN</strong></li>
                        <li><a href="Home.php">HOME</a></li>
                    </ul>
                </div>

                <div class="sucontainer" method="POST" action>
                    <label>Doctor Username:</label><br>
                    <input type="text" placeholder="Enter your Username" name="uname" required>

                    <label>Doctor Password:</label><br>
                    <input type="password" placeholder="Enter your Password" name="psw" required>
                    <br><br>
                    <div class="container" style="background-color:gray">
                    <button type="submit" name="submit" style="float: right;">LOGIN</button>
                </div>

                <?php
    
     if(isset($_POST['submit']))
     {
      $count=0;
      $res=mysqli_query($conn,"SELECT * FROM `doctor` WHERE uname='$_POST[username]' && psw='$_POST[password]';");

      $row= mysqli_fetch_assoc($res);

      $count=mysqli_num_rows($res);
      if($count==0)
      {
        ?>
        <script type="text/javascript">
          alert("User name and password doesnot match.");
        </script>
        <?php
      }
      else
      {
        /*--------------------------if username and password matches--------------------*/
        $_SESSION['login_user'] = $_POST['username'];
        $_SESSION['pic']= $row['pic'];

        ?>
             <script type="text/javascript">
              window.location="Appointments.php"
             </script>
        <?php
      }
     }

    ?>
            </form>
    </body>
</html>