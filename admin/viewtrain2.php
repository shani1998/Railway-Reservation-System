<body>
  <?php include("viewadmin.php") ?>
<?php
$con=mysqli_connect("localhost","root","","railway");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
$sql="select * from rapti order by dis";
$result=mysqli_query($con,$sql);
mysqli_close($con);
?>
<div class="container-grid">
  <table class="table table-striped table-hover table-condensed" style="background-color:lightblue;margin:10px;">
  <tr width="100%" style="color:hotpink"><th style="text-align:center">Rapti Sagar SF Express </th></tr></table>
<table class="table table-striped table-hover table-condensed" style="background-color:lightblue;margin:10px;">
<tr><th>Stations</th><th>Code</th><th>Arrival Time</th><th>Departure Time</th><th>Distance</th><th>Avg. Speed(Km/h)</th></tr>
<?php
while($row=mysqli_fetch_assoc($result)) {
?>
<tr>
<td width="10%"><?php echo $row['stations'] ?></td>
<td width=""><?php echo  $row['code']; ?></td>
<td><?php echo $row['at'] ?></td>
<td><?php echo $row['dt'] ?></td>
<td><?php echo $row['dis'] ?></td>
<td><?php echo $row['speed'] ?></td>
</tr>
<?php } ?>
</table>
</div>
</body>
