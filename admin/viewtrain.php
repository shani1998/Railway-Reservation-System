<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<!--?php
$con=mysqli_connect("localhost","root","","railway");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
$sql="select * from train order by tn";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  echo '<table class="table table-striped table-hover table-condensed"><tr><th>No.</th><th>Name</th><th>Source</th><th>Destination</th></tr>';

while($row=mysqli_fetch_assoc($result))
{
  echo "<tr><td>";
  echo $row['tn'];
  echo "</td><td>";
  echo $row['tname'];
  echo "</td><td>";
  echo $row['ssn'];
  echo "</td><td>";
  echo $row['dsn'];
  echo "</td></tr>";
  echo "<br>";
}
}
?-->
<body>
  <?php include("viewadmin.php") ?>
<?php
$con=mysqli_connect("localhost","root","","railway");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
$sql="select * from train order by tname";
$result=mysqli_query($con,$sql);
mysqli_close($con);
?>
<div class="container-grid">
<table class="table table-striped table-hover table-condensed" style="background-color:lightblue;margin:10px;">
<tr><th>No.</th><th>Name</th><th>Source</th><th>Destination</th><th>Seat</th><th>Delete</th></tr>
<?php
while($row=mysqli_fetch_assoc($result)) {
?>
<tr>
<td width="10%"><?php echo $row['tn'] ?></td>
<td width=""><?php
if($row['tn']=='12512')
echo '<a href="viewtrain2.php">'.$row['tname'].'</a>';
else if($row['tn']=='22644')
echo '<a href="viewtrain1.php">'.$row['tname'].'</a>';
else
echo $row['tname'];
 ?></td>
<td><?php echo $row['ssn'] ?></td>
<td><?php echo $row['dsn'] ?></td>
<td><?php echo $row['seat'] ?></td>
<td><input type="checkbox" name="delete" /></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>
