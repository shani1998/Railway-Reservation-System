<?php
include("viewuser.php");
$con=mysqli_connect("localhost","root","","railway");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
if(isset($_POST['pnr']))
{
$sql="select * from booking where pnr=$_POST[pnr]";
$r=mysqli_query($con,$sql);
if(mysqli_affected_rows($con)>0)
{
 echo '<div class="container-grid">';
 echo '<table class="table table-striped table-hover table-condensed" style="background-color:lightblue;margin:10px;">';
 echo '<tr><th>Name</th><th>Age</th><th>Train No</th><th>Source</th><th>Destination</th><th>Date</th><th>Status</tr>';
 while($row=mysqli_fetch_assoc($r)) {
 echo '<tr>';
 echo '<td>'.$row['name'].'</td>';
 echo '<td>'.$row['age'].'</td>';
echo '<td width="10%">';
echo $row['tn'];
echo '</td>';
 echo '<td width="">';
 echo $row['ss'] .'</td>';
 echo '<td>'.$row['ds'].'</td>';
 echo '<td>'.$row['date'].'</td>';
 echo '<td>'."Confirmed".'</td>';


 //echo '<td>'.$row1[''].'</td>';
 echo '</tr>';
  }
 echo '</table>';
 echo '</div>';

 mysqli_close($con);

}
else {
 echo '<script type="text/javascript">';
 echo 'setTimeout(function () { swal("oops!","Invalid PNR!","error");';
 echo '}, 1000);</script>';

}
}
?>
 <head>
   <style>
   .lg-btn{
     width:40%;
     padding :10px;
     margin-left: 20px;
     margin-top: 5px;
     border: none;
     border-radius: 5px;
     background :linear-gradient(green,green);
    color:#fff;
     font-size: 20px;
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
</head>
<body>
  <div class="main" style="background-color:silver;">
  <div class="info">Fill UP</div>
  <div style="padding:10px;">
    <form action="pnr.php" method="post">
  <input type="number" class="inp" name="pnr" placeholder="Enter Your Pnr No:" class="inp" required ><br><br>
  <input type="reset" name="submit" value="cancel" class="lg-btn">
  <input type="submit" name="submit" value="Submit" class="lg-btn">
</form>
  </div></div>
  <?php //include("footer.php") ?>

</body>
