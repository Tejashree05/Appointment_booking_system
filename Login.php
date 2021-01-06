<html>
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
    <body style="background-image: url(Images/Pic1.jpg);" >
        <div class="header">
            <ul>
                 <li style="float: left; border-right: none;"> <a href="Home.php" class="logo"> <img src="Images/Pic9.png" width="70px" height="60px"> <strong> WeCareU </strong> Online Apppointment Booking </a> </li>
                <li> <a href="Home.php"><strong> LOGOUT </strong></a></li>

            </ul>
        </div>
        
            <h2 style="font-size: 40px; color: black; text-align: center; margin-top: 100px;">The perfect balance between health & care!!</h2>
            <div class="container1" style="width: 100%;">
                <form method="POST">
                <button type="button" onclick="window.location.href='Booking.php'" style="background-color:cadetblue;color: black;">Book Appointment</button><br><br> 
                
            </form>
        </div>
        <?php
        if(isset($_POST['check']))
        {   
            $conn=mysqli_connect('localhost','root','','appointments');
            if(isset($_POST['cancel']))
            {
        	header( "Refresh:1; url=CancelBooking.php"); 
            }
            if(isset($_POST['logout']))
            {
	            session_unset();
	            session_destroy();
	            header( "Refresh:1; url=Home.php"); 
            }
        }
        ?>
    </body>
</html>