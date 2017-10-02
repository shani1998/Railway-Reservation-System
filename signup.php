<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cn=$_POST['cn'];
$dob=$_POST['dob'];
$add=$_POST['add'];
$pin=$_POST['pin'];
$bal=$_POST['wallet'];
$con=mysqli_connect("localhost","root","","railway");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
$sql="insert into user fname lname values('shani','pathak')";
if($result=mysqli_query($con,$sql))
{
  echo "Your query executed";
}
else {
  echo "Query failed!";
}
mysqli_close($con);
 ?>
 <script>
 function validate()
 {
 /*var a=document.getElementsByName('password').value;
 alert(a);
 var b=document.getElementsByName('cpassword').value;
 var cn=document.getElementsByName('cn').value;
 var pin=document.getElementsByName('pin').value;
 var email=document.getElementsByName('email').value;
 var bal=document.getElementsByName('wallet').value;
 if(a!=b)
 alert("Your password must same!");
 if(cn.lenght!=10)
 alert("Please verify your no.");
 if(bal<500)
 alert(bal+" Not sufficient!")
 }
 var fname=document.getElementById('fname');*/
 var cn1=document.myform.cn.value;
 var bal=document.myform.wallet.value;
var pin=document.myform.pin.value;
var a=document.myform.password.value;
var b=document.myform.cpassword.value;
if(a.length<6)
 alert("Password must be at least 6 characters long!");
if(a!=b)
alert("Password must be same!");
if(cn1.length<10)
alert("contact no. should not be less than 10!");
if(pin.length!=6)
alert("please verify pin code!");
if(bal<500)
alert(bal+" Not sufficient !");
}
 </script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col align-self-center custom2"><h3>Sign Up</h3><br><br>
<form action="signup.php" method="post" style="margin-left:370px" name="myform" onsubmit="validate()">
  <div class="form-group row">
    <div class="input-group col-sm-6"><span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
      <input type="text" class="form-control" name="fname" placeholder="Enter First Name" id="fname" required>
    </div>
  </div>
  <div class="form-group row">
       <div class=" input-group col-sm-6"><span class="input-group-addon"><i class="fa" aria-hidden="true"></i></span>
         <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
       </div>
     </div>
  <div class="form-group row">
       <!--<label class="col-sm-2 col-form-label">First Name:</label> -->
       <div class="input-group col-sm-6"><span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
         <input type="email" class="form-control"placeholder="Enter Email" name="email"required>
       </div>
     </div>
     <div class="form-group row">
       <div class="input-group col-sm-6"><span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
         <input type="password" class="form-control" placeholder="Enter Password"  name="password">
       </div>
     </div>
     <div class="form-group row">
       <div class="input-group col-sm-6"><span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
         <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
       </div>
     </div>
            <div class="form-group row">
                <div class="input-group col-sm-6"><span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                  <input type="number" class="form-control" placeholder="Enter Contact No" name="cn" required>
                </div>
              </div>
            <div class="form-group row">
                       <div class="input-group col-sm-6"><span class="input-group-addon"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
                         <input type="date" class="form-control" name="dob" required>
                       </div>
                     </div>
    <div class="form-group row">
      <div class="input-group col-sm-6"><span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
     <textarea placeholder="Enter Address" rows="4" cols="40" name="add" required></textarea>
     </div>
   </div>
   <div class="form-group row">
      <div class="input-group col-sm-6"><span class="input-group-addon"><i class="icon-pushpin"></i></span>
           <input class="form-control" type="number" placeholder="Enter Pin" name="pin" required>
       </div>
     </div>
     <div class="form-group row ">
       <div class="input-group col-sm-6"><span class="input-group-addon"><i class="icon-pushpin"></i></span>
       <select class="form-control" id="city" placeholder="City">
         <!--<option>city</option>-->
          <option>Kochi</option>
          <option>Patna</option>
          <option>Lucknow</option>
          <option>Mumbai</option>
          <option>Other</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="input-group col-sm-6"><span class="input-group-addon"><i class="fa fa-flag" aria-hidden="true"></i></span>
    <input class="form-control" text="text" value="India" name="country">
  </div>
</div>
   <div class="form-group row">
        <div class="col-sm-1"><input class="form-control" type="radio" name="gender">Male</div>
        <div class="col-sm-1"><input class="form-control" type="radio"  name="gender">Female</div>
</div>
<div class="form-group row">
  <div class="input-group col-sm-6"><span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
<input class="form-control" text="number" name="wallet" placeholder="Enter your initial Wallet amount" name="amount" required>
</div>
</div>
<!--<div class="form-group row">
  <div class="input-group col-sm-12"><span class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
<input class="form-control-file" type="file"  name="image">
</div>
</div>-->
<div class="form-group row">
  <div class="col-sm-3">
<button class="btn btn-success">Submit</button></div>
<div class="col-sm-4">
<button class="btn btn-default">Reset</button></div>
</div>
</div></div>
</form></div>
</body>
</html>
