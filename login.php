<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="muskan_css.css">
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
<?php
include_once 'PHPCONNECTION.PHP';
 ?>

 <div style="display: block;
 background-color: black;
 opacity: 0.5;
 border:2px solid black;
 margin-top: 50px;
 width: 800px;
 margin-left: 350px;
 border-radius: 10px;">

  <form style="text-align: center;
  font-size: 40px;
  color: white;"  method="GET">

  <img style="height:150px; width:200px;" src="admin-png-7.png" alt=""><br><br>

    FirstName:<input style="font-size:30px;
    border-radius:8px;" type="text" name="FirstName" placeholder="FirstName">
    <br><br>
    CNIC: <input style="font-size:30px;
    border-radius:8px; margin-left:45px;" type="text" name="Cnic" placeholder="xxxxx-xxxxxxx-x">
    <br><br>

    <button style="height:40px; width:150px; background-color:skyblue; border-radius:10px;" type="signin" name="signin">Sign in</button>
    <br><br>
  </form>

 </div>

<div style="color:black; font-size:20px; margin-top:300px; border:3px solid black; padding:10px; border-radius:10px;">


<?php

if(isset($_GET['signin']))
{

$CNIC2=$_GET['Cnic'];
$sql="SELECT * FROM booking where CNIC='$CNIC2';";
$result=mysqli_query($dbObject,$sql);
$resultCheck=mysqli_num_rows($result);

if($resultCheck>0)
{
  echo "SerialNo___"."FirstName______"."LastName__________"."  CNIC_________"."FROM____"."TO____"."Depart____"."Arival______"."Seats______"."Children____"."T_Class______"."Time"."<br>";
                 echo "<br>";

while ($row =mysqli_fetch_assoc($result))
  {

    echo $row['serialNo']."_________".$row['FirstName']."_________".$row['LastName']."_______".$row['CNIC']."____".$row['T_From']."___".$row['T__To']."__".$row['Depart']."__".$row['Arival']."____".$row['Seat']."_________".$row['Children']."______".$row['TravelingClass']."____".$row['TimeToDept'];
                echo "<br><br>";
              }
      }

}
?>
</div>
<br><br>
  </body>
</html>
