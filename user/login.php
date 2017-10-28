<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>-->
<?php
session_start();
include("some.php");
?>

<style>
  .lg-btn
  {
    width:40%;
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
<link rel="stylesheet" href="fed.css"/>
<?php
if(isset($_POST['submit']))
{
 $email=$_POST['email'];
 $password=$_POST['password'];
 $con=mysqli_connect("localhost","root","","railway");
 if(!$con){
 die('could not connect :'.mysqli_connect_error());}
 $sql="select * from user where email='$email' && password='$password'";
$result=mysqli_query($con,$sql);
 if(mysqli_affected_rows($con)==1)
 {
   $_SESSION['name']=$_POST['email'];
   echo '<script type="text/javascript">';
   echo 'setTimeout(function () { swal("Great!","You have Successfully Loged in","success");';
   echo '}, 1000);';
   /*$v=$_SERVER['REQUEST_URI'];
   echo '<script type="text/javascript">';*/
   echo 'window.location.href="http://localhost/myphp/railway/viewuser.php"';
  // header("location:http://localhost/myphp/railway/viewuser.php");
   echo '</script>';


 }
 else {
     echo '<script type="text/javascript">';
     echo 'setTimeout(function () { swal("oops!","Invalid username or password. Please try again!","error");';
     echo '}, 1000);</script>';
  // header('location:http://localhost/myphp/railway/home.php');
 }
 mysqli_close($con);
 }
 elseif (isset($_POST['submit1'])) {
        $email=$_POST['email1'];
        $pass=$_POST['password1'];
        if($email=="shani.pathak98@gmail.com" && $pass=="skp@123")
        {
          $_SESSION['name1']='shani.pathak98@gmail.com';
          //redirect the page using js
          echo '<script type="text/javascript">';
          echo 'window.location.href = "http://localhost/myphp/railway/viewadmin.php"';
          echo '</script>';
        }
        else {
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("oops!","Invalid username or password. Please try again!","error");';
            echo '}, 1000);</script>';
         // header('location:http://localhost/myphp/railway/home.php');
        }

    }
 ?>
<div class="fed" style="background-color:#696969">
<div class="main" style="background-color:silver;">
  <ul class="nav nav-tabs info" role="tablist">
  <li class="nav-item info"><a class="nav-link info" href="#user" role="tab" data-toggle="tab" >User</a></li>
  <li class="nav-item info"><a class="nav-link info" href="#admin" role="tab" data-toggle="tab" >Admin</a></li>
  </ul>
  <div class="tab-content">
  <div role="tabpanel" class="tab-pane show active" id="user" style="padding:10px">
    <form action="login.php" method="post"  class="form-box">
      <input type="email" name="email" class="inp" placeholder="Enter Your Email" required></br><br>
      <input type="password" name="password" class="inp" placeholder="Enter Your Password" required></br></br>
      <input type="submit" name="forgot" value="Forgot Password" class="lg-btn">
      <input type="submit" name="submit" value="Login" class="lg-btn">
    </form>
  </div>
  <div role="tabpanel" class="tab-pane fade " id="admin" >
    <form action="login.php" method="post" class="form-box">
      <input type="email" name="email1" class="inp" placeholder="Enter Your Email" required></br><br>
      <input type="password" name="password1" class="inp" placeholder="Enter Your Password" required></br></br>
      <input type="submit" name="submit1" value="Login" class="lg-btn">
    </form>
  </div>
</div>
</div>
</div>
<?php include("footer.php"); ?>
