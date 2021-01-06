<html>
    <head>
        <link rel="stylesheet" href="adminmain.css">
    </head>
    <body style="background-image: url(Images/Pic15.jpg);">
        <ul>
            <li class="dropdown"><p style="font-family: cursive;font-size: 40px;color: white;">ADMIN MODE</p></li>
            <br>
            <h2>
                <li class="dropdown">
                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a class="dropbtn" style="font-family: cursive;">DOCTOR</a>
                    <div class="dropdown-content">
                        <a href="NewDoctor.php" style="font-family: cursive;">Add new Doctor</a>
                        <a href="DeleteDoctor.php" style="font-family: cursive;">Delete Doctor</a>

                        <a href="ShowDoctor.php" style="font-family: cursive;">Show all Doctors</a>
                    </div>
                </li>
                <li class="dropdown">
                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a class="dropbtn" style="font-family: cursive;">CLINIC</a>
                    <div class="dropdown-content">
                        <a href="NewClinic.php" style="font-family: cursive;">Add new Clinic</a>
                        <a href="DeleteClinic.php" style="font-family: cursive;">Delete Clinic</a>
                        <a href="AddDoctorToClinic.php" style="font-family: cursive;">Assign Doctor to a Clinic</a>
                        <a href="DeleteDoctorFromClinic.php" style="font-family: cursive;">Delete Doctor from a Clinic</a>
                        <a href="ShowClinic.php" style="font-family: cursive;">Show the Clinics</a>
                    </div>
                </li>

                <li>
                   <br>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a href="Appointments.php" style="font-family: cursive;">APPOINTMENTS</a>
                </li>

                <li>
                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a href="Home.php" style="font-family: cursive; float: right;">LOGOUT</a>
                </li>
            </h2>
        </ul>
        <br><br><br>
        <h1 style="font-family: cursive;font-size: 50px;color: whitesmoke;">WELCOME ADMIN !!!</h1>
    </body>
</html>