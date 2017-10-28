<?php
/*if(!isset($_SESSION['name']))
{
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("oops!","Please Login or Register","error");';
  echo '}, 1000);</script>';
 header("location:http://localhost/myphp/railway/login.php");
  //echo 'window.location.href = "http://localhost/myphp/railway/login.php"';

}
*/
include("viewuser.php");
$v=$_SESSION['name'];  ?>
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
 <?php
 if(isset($_POST['submit']))
 {
 $name=$_POST['name'];
 $email=$_POST['email'];
 $age=$_POST['age'];
 $tn=$_POST['tn'];
 $date=$_POST['date'];
 $g=$_POST['gender'];
 $f=$_SESSION['fare'];
 $con=mysqli_connect("localhost","root","","railway");
 if(!$con){
 die('could not connect :'.mysqli_connect_error());}
 $e=$_SESSION['name'];
 $s="select wallet from user where email='$e' ";
 $r=mysqli_query($con,$s);
 if(mysqli_num_rows($r)>0){
 $row=mysqli_fetch_assoc($r);
 $f1=$row['wallet'];
 if($f1>$_SESSION['fare']) {
$f1=$f1-$_SESSION['fare'];
$SQ="update user set wallet=$f1 where email='$e' ";
mysqli_query($con,$SQ);
$pnr=rand(100000000,999999999);
$_SESSION['pnr']=$pnr;
$sr=$_POST['src'];
$de=$_POST['des'];
 $sql="insert into booking (name,email,tn,date,pnr,age,Gender,fare,ss,ds) values ('$name','$email',$tn,'$date',$pnr,$age,'$g',$f,'$sr','$de')";
 if($result=mysqli_query($con,$sql))
 {
   echo '<script>alert("Thanks..for using This Website...!")</script> ';
   header("location:http://localhost/myphp/railway/pdf.php");
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Great",".You have Successfully generated a Ticket.","success");';
  echo '}, 1000);</script>';

 }
 else {
   echo "there is an error";
 }
 mysqli_close($con);
 }
 else {
   echo '<script>alert("Sorry ..You have not sufficient balance !")</script> ';
   echo '<script type="text/javascript">';
   echo 'setTimeout(function () { swal("oops!","Sorry!..You have not sufficient balance !..","error");';
   echo '}, 1000);</script>';
 }
}
}
  ?>
<script>
 function validate()
 {
   var cn1=document.myform.tn.value;
  var d=document.getElementByName('gender');
  var c=0;
  if(a.length<6){
   alert("please check train no!");
  }
  }
 </script>
<div style="background-color:#696969">
<div class="main" style="background-color:silver;">
<div class="info">Fill UP</div>
<div style="padding:10px;">
<form action="ticketform.php"  method="post" name="myform" onsubmit="validate()" class="form-box">
  <input type="text" class="inp" name="name" placeholder="Name"  required ><br><br>
  <input type="email" class="inp"name="email"  value="<?php echo $v; ?>" required></br><br>
  <input type="number" class="inp" name="age" placeholder="Enter Ur Age"required><br><br>
  <input class="inp" type="number"  placeholder="Enter Train No:" name="tn" required><br><br>
  <input type="text" class="inp" name="src"  value="<?php echo $_SESSION['src']; ?>" required ><br><br>
  <input type="text" class="inp" name="des"  value="<?php echo $_SESSION['des']; ?>" required></br><br>
  <input class="inp" type="date"  placeholder="" name="date" required ></br></br>
  <abbr title="Total Fare"><input type="number" class="inp"name="email"  value="<?php echo $_SESSION['fare']; ?>" required></abbr></br><br>
  Male <input  type="radio" value="male" name="gender">Female
   <input  type="radio"  value="female" name="gender"><br><br>
   <input type="reset" name="submit" value="cancel" class="lg-btn">
<input type="submit" name="submit" value="Submit" class="lg-btn">

</form>
</div></div></div>
<?php //include("footer.php") ?>
