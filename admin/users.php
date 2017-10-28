
<style>
  .lg-btn
  {
    width:100%;
    padding :10px;
    margin-left: 30px;
    margin-top: 5px;
    border: none;
    border-radius: 10px;
    background :linear-gradient(green,green);
   color:#fff;
    font-size: 18px;
    cursor: pointer;
  }
  .lg-btn:focus{
    outline: none;
    }
  .lg-btn:hover
  {
  /*  background :linear-gradient(green,green);*/
    opacity: 0.8;
    filter:alpha(opacity=20 );
  }
  </style>
<?php include("viewadmin.php") ?>
<?php
$con=mysqli_connect("localhost","root","","railway");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
$sql="select fname,email,password,cn,dob,pin,wallet from user order by email";
$result=mysqli_query($con,$sql);
if(isset($_POST['submit']))
{
  $e=$_POST['delete'];
  $r=mysqli_query($con,"delete from user where email='$e'");
  if($r)
  {
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () { swal("Ohh","You have Successfully Deleted","success");';
    echo '}, 1000);</script>';

  }
  else {
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () { swal("Ohh","plz enter email","error");';
    echo '}, 1000);</script>';
  }
}
mysqli_close($con);
?>
<div class="container-grid">
<table class="table table-striped table-hover table-condensed" style="background-color:lightblue;margin:10px;">
<tr><th>Fname</th><th>Email</th><th>Password</th><th>Contact No</th><th>Dob</th><th>Pin_Code</th><th>Amount</th></tr>
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
</tr>
<?php } ?>
</table>
<table class="table table-striped table-hover table-condensed" style="background-color:lightblue;margin:10px;">
<form action="users.php" method="post">
  <input type="email" class="inp" placeholder="Enter the Email to delete" name="delete">
  <input type="submit" name="submit" value="Delete" class="lg-btn"></form>
</table>
</div>
