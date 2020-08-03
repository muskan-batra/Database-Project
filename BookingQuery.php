<?php
include_once 'PHPCONNECTION.PHP';

      $FirstName = $_GET['FirstName'];
      $LastName = $_GET['LastName'];
      $CNIC = $_GET['CNIC'];
      $TravelingFrom = $_GET['From'];
      $TravelingTo = $_GET['To'];
      $dateDepart = $_GET['dateDepart'];
      $dateArive = $_GET['dateArive'];
      $Seats = $_GET['Seats'];
      $Children = $_GET['Children'];
      $ClassOption = $_GET['ClassOption'];
      $Time = $_GET['Time'];


      $sql2="INSERT INTO booking (FirstName,LastName,CNIC,T_From,T__To,Depart,Arival,Seat,Children,TravelingClass,TimeToDept) VALUES ('$FirstName','$LastName','$CNIC','$TravelingFrom','$TravelingTo','$dateDepart','$dateArive','$Seats','$Children','$ClassOption','$Time');";
      mysqli_query($dbObject,$sql2);

?>
