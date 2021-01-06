<html>
<head>
<link rel="stylesheet" href="adminmain.css"> 
<style>
    table
    {
        width:80%;
        border-collapse:separate;
        border: 5px black;
        padding: 2px;
        font-size: 30px;
        font-family: cursive;
    }
    th
    {
        border: 2px black;
        background-color:peru ;
        color: white;
        text-align: left;
    }
    tr,td
    {
        border: 2px black;
        background-color: whitesmoke;
        color:black;
    }
</style>
</head>
<body style="background-image: url(Images/Pic10.jpg);">
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
                        <a href="DoctorSchedule.php" style="font-family: cursive;">Doctor Schedules</a>
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
        <center>
            <h1 style="font-family:cursive">SHOW BOOKINGS</h1><hr>
            <?php
            session_start();    
            $conn = mysqli_connect('localhost','root','','appointments');
            if (!$conn)
            {
               die('Could not connect: ' . mysqli_error($conn));
            }
            $sql="SELECT * FROM booking";
            $result = mysqli_query($conn,$sql);
            echo "<br><h2>TOTAL BOOKINGS AVAILABLE=<b>".mysqli_num_rows($result)."</b></h2><br>";
            echo "<table>
            <tr>
            <th>CID</th>
            <th>DID</th>
            <th>Patient_Name</th>
            <th>Gender</th>
            <th>Booking_Date</th>
            <th>Booking_time</th>
            </tr>";
            while($row = mysqli_fetch_array($result)) 
            {
                echo "<tr>";
                echo "<td>" . $row['CID'] . "</td>";
                echo "<td>" . $row['DID'] . "</td>";
                echo "<td>" . $row['Fname'] . "</td>";
                echo "<td>" . $row['Gender'] . "</td>";
                echo "<td>" . $row['DOV'] . "</td>";
                echo "<td>" . $row['Timestamp'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_close($conn);
            ?>
    </body>
</html>