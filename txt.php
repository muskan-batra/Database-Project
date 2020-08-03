<?php
include_once 'PHPCONNECTION.PHP';

      $sql="SELECT * FROM imformation;";
      $result=mysqli_query($dbObject,$sql);
      $resultCheck=mysqli_num_rows($result);

      if($resultCheck>0)
      {
        echo "TrainNo_____________"."_________________"."From____________________"."  To__________________"."Departure________________"."Araival______________"."BussinessClassF__________________"."EconomyClassF_________________________"."Seats"."<br>";
        echo "<br>";
	while ($row =mysqli_fetch_assoc($result))
        {
          echo $row['TrainNo']."_________________________".$row['Train']."______________--_".$row['From_Station']."______________________".$row['To_Station']."______".$row['Departure']."______".$row['Araival']."________________



__".$row['BussinessClassF']."___________".$row['EconomyClassF']."_______________________".$row['Seats']."<br>";
 	  echo "<br><br>";
        }
      }

?>
