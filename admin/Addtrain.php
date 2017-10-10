<html>
<head>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$src=$_POST['src'];
$des=$_POST['des'];
$no=$_POST['no'];
$seat=$_POST['seat'];
$type=$_POST['type'];
$con=mysqli_connect("localhost","root","","railway");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
$sql="insert into train values('$name','$type','$src','$des','$no','$seat')";
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
  <a href="traindetails.php" style="color:green">Add details</a>

  <div class="info">Fill Up The Details</div>
<form action="train.php" method="post" name="form-box" style="margin:10px;">
<input type="text" class="inp" name="name" placeholder="Train name" required><br><br>
<input type="text" class="inp" name="src" placeholder="Source station name" required><br><br>
<input type="text" class="inp" name="des" placeholder="Destination station name" required><br><br>
<input type="number" class="inp" name="no" placeholder="Train no" required><br><br>
<input type="number" class="inp" name="seat" placeholder="Total no seat" required><br><br>
<input type="text" class="inp" name="type" placeholder="Type" required><br><br>
<input type="submit" value="Submit" name="submit" class="sub-btn">
</form>
</div>
</body>
</html>
