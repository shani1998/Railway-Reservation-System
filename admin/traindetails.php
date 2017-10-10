<html>
<head>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$code=$_POST['code'];
$at=$_POST['at'];
$dt=$_POST['dt'];
$des=$_POST['des'];
$avg=$_POST['speed'];
$con=mysqli_connect("localhost","root","","railway");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
$sql="insert into  rapti values('$name','$code','$at','$dt','$des','$avg')";
if(mysqli_query($con,$sql))
echo '<script>alert("Record is inserted Successfully!")</script>';
else
  echo '<script>alert("There is a something Wrong!")</script>';
}
?>
</head>
<body>
  <?php include("viewadmin.php") ?>
<div class="main">
  <div class="info">Fill Up The Details</div>
<form action="traindetails.php" method="post" name="form-box" style="margin:10px;">
<input type="text" class="inp" name="name" placeholder="Station Name" required><br><br>
<input type="text" class="inp" name="code" placeholder="Code" required><br><br>
<input type="time" class="inp" name="at" placeholder="Arrival Time"><br><br>
<input type="time" class="inp" name="dt" placeholder="Departure Time"><br><br>
<input type="number" class="inp" name="des" placeholder="Distance in Km" required><br><br>
<input type="number" class="inp" name="speed" placeholder="Avg. Speed in Km/h" required><br><br>
<input type="submit" value="Submit" name="submit" class="sub-btn">
</form>
</div>
</body>
</html>
