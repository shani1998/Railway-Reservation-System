<?php
include("viewuser.php");
$con=mysqli_connect("localhost","root","","railway");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
if(isset($_POST['pnr']))
{
$sql="delete from booking where pnr=$_POST[pnr]";
$r=mysqli_query($con,$sql);
if(mysqli_affected_rows($con)>0)
{
  echo '<script>alert("So Sorry!..to say..You have cancelled the ticket")</script> ';
  $n=$_SESSION['name'];
  $f=$_SESSION['fare'];
  $q="update user set wallet=wallet+$f where email='$n'";
  mysqli_query($con,$q);
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
    <form action="cancel.php" method="post">
  <input type="number" class="inp" name="pnr" placeholder="Enter Your Pnr No:" class="inp" required ><br><br>
  <input type="reset" name="submit" value="cancel" class="lg-btn">
  <input type="submit" name="submit" value="Submit" class="lg-btn">
</form>
  </div></div>
  <?php //include("footer.php") ?>

</body>
