<?php
include_once 'PHPCONNECTION.PHP';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="muskan_css.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="header_block">
      <div class="innerHeader">
      <h1 style="color:white; font-family: monospace; vertical-align:middle;">RAILWAY TICKET <span style="color:skyblue;">RESERVATION</span><span style="color:white; font-family: monospace; vertical-align:middle; margin-left:300px;">TicketBooking</span></h1>
      </div>
    </div>

    <div class="sideBlock"  style="height:1100px;">

    <div class="profilePic">
      <img src="admin-png-7.png" alt="">
      <h1>Profile</h1>

    </div>

    <div >
      <ul class="navigator">
        <a   href="http://localhost/myproject/muskan_project.php"><li>Home</li></a>
        <br>
        <a  href="http://localhost/myproject/booking_muskan.php"><li>Booking</li></a>
        <br>
        <a   href="http://localhost/myproject/information.php"><li>information</li></a>
        <br>
        <a   href="http://localhost/myproject/Reservation(1).php"><li>Your Reservation</li></a>
      </ul>
    </div>

    </div>


    <div class="booking_form">

      <form class="formClass" method="POST">
        <br>
        <span style="color:white; margin-left:30px; font-size:30px;">FirstName</span> <span style="color:white; margin-left:300px; font-size:30px;">LastName</span>
        <br><br>
        <input class="info-fields" style="margin-left:20px;" type="text" name="FirstName" placeholder="FirstName">
        <input class="info-fields" style="margin-left:20px;" type="text" name="LastName"  placeholder="LastName">
        <br><br>
        <span style="color:white; margin-left:30px; font-size:30px;">CNIC</span>
        <br><br>
        <input class="info-fields" style="margin-left:20px; width:800px;" type="text" name="CNIC" placeholder="xxxx-xxxxxxxx-x">
        <br><br>

        <span style="color:white; margin-left:30px; font-size:30px;">TravelingFrom</span>
        <br><br>
        <input class="info-fields" style="margin-left:20px; width:800px;" type="text" name="From"  placeholder="City or Station">
        <br><br>
        <span style="color:white; margin-left:30px; font-size:30px;">TravelingTO</span>

        <br><br>
        <input class="info-fields" style="margin-left:20px; width:800px;" type="text" name="To"  placeholder="City or Station">
        <br><br>
        <span style="color:white; margin-left:30px; font-size:30px;">Departing</span> <span style="color:white; margin-left:300px; font-size:30px;">Arive</span>
        <br><br>
         <input class="info-fields" style="margin-left:20px;" type="text" name="dateDepart"  placeholder="yyyy-mm-dd">
         <input class="info-fields" style="margin-left:20px;" type="text" name="dateArive"  placeholder="yyyy-mm-dd">
         <br><br>
         <span style="color:white; margin-left:30px; font-size:30px;">Seats</span> <span style="color:white; margin-left:350px; font-size:30px;">Children</span>
         <br><br>
         <input class="info-fields" style="margin-left:20px;" type="text" name="Seats"  placeholder="no of seats">
         <input class="info-fields" style="margin-left:20px;" type="text" name="Children"  placeholder="no of Children">
         <br><br>
          <span style="color:white; margin-left: 30px; font-size:30px;">TravellingClass</span>    <span style="color:white; margin-left:350px; font-size:30px;">Time</span><br><br>
         <select class="info-fields"  style="margin-left:15px;"  name="ClassOption">
           <option >EconomiClass</option>
           <option >BusinessClass</option>
         </select>
         <input class="info-fields" style="margin-left:20px;" type="text" name="Time"  placeholder="00:00:00">
         <br><br><br>

          <button class="info-fields"  style="margin-left:20px; border-radius:30px; width:830px; background-color:skyblue;" type="submit" name="submit">submit</button>
      </form>
      <?php
        if(isset($_POST['submit']))
        {
          $FirstName = $_POST['FirstName'];
          $LastName = $_POST['LastName'];
          $CNIC = $_POST['CNIC'];
          $TravelingFrom = $_POST['From'];
          $TravelingTo = $_POST['To'];
          $dateDepart = $_POST['dateDepart'];
          $dateArive = $_POST['dateArive'];
          $Seats = $_POST['Seats'];
          $Children = $_POST['Children'];
          $ClassOption = $_POST['ClassOption'];
          $Time = $_POST['Time'];
		
	$sql3="CREATE TABLE booking(
serialNo int(10) NOT null PRIMARY KEY AUTO_INCREMENT,   
FirstName varchar(10) NOT null,
LastName  varchar(10) NOT null,
CNIC  varchar(15) NOT null,
T_From varchar(7) NOT null,
    T__To varchar(7) NOT null,
    Depart date NOT null,
    Arival date NOT null,
    Seat  int(1) NOT null,
    Children int(1) NOT null,
    TravelingClass varchar(13),
    TimeToDept time NOT null    
 );
";
	mysqli_query($dbObject,$sql3);					

          $sql2="INSERT INTO booking (FirstName,LastName,CNIC,T_From,T__To,Depart,Arival,Seat,Children,TravelingClass,TimeToDept) VALUES ('$FirstName','$LastName','$CNIC','$TravelingFrom','$TravelingTo','$dateDepart','$dateArive','$Seats','$Children','$ClassOption','$Time');";
          mysqli_query($dbObject,$sql2);
        }
       ?>

    </div>


  </body>
</html>
/*INSERT INTO new_enrollment (FirstName,LastName,FatherName,Surname,CNIC,DOB,Age,PhoneNumber,Gender,MaritalStatus,FatherStatus,PerminantAddress,City,Province,PostalCode,LastAttendantCollege,StudentID,AddmissionDate) VALUES ('msukan','a','s','d','c','1997-10-11','1','12','x','s','a','as','ad','qw','21','add','123','1997-10-10');";*/