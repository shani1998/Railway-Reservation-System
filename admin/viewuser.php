<?php include("viewadmin.php") ?>
<?php
$con=mysqli_connect("localhost","root","","railway");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
$sql="select fname,email,password,cn,dob,pin,wallet from user order by email";
$result=mysqli_query($con,$sql);
mysqli_close($con);
?>
<div class="container-grid">
<table class="table table-striped table-hover table-condensed" style="background-color:lightblue;margin:10px;">
<tr><th>Fname</th><th>Email</th><th>Password</th><th>Contact No</th><th>Dob</th><th>Pin_Code<th>Amount</th><th>Delete</th></tr>
<?php
while($row=mysqli_fetch_assoc($result)) {
?>
<tr>
<td width="10%"><?php echo $row['fname'] ?></td>
<td width=""><?php echo $row['email'] ?></td>
<td><?php echo $row['password'] ?></td>
<td><?php echo $row['cn'] ?></td>
<td><?php echo $row['dob'] ?></td>
<td><?php echo $row['pin'] ?></td>
<td><?php echo $row['wallet'] ?></td>
<td><input type="checkbox" name="delete" /></td>
</tr>
<?php } ?>
</table>
</div>
