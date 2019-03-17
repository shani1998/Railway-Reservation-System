<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <style>
  .lg-btn
  {
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
<link rel="stylesheet" href="fed.css"/>
<meta charset="utf-8">
<?php
 $email=$_POST['email'];
 $password=$_POST['password'];
 $q="select * form user where email=$email and password=$password"
 ?>
</head>
<div class="fed">
<body>
<div class="main">
<div class="info">Login</div>
<form action="feedback.php" method="post" name="fed" class="form-box">
  <input type="email" name="email" class="inp" placeholder="Enter Your Email" required></br><br>
  <input type="password" name="login" class="inp" placeholder="Enter Your Password" onclick=""required></br></br>
  <input type="submit" name="forgot" value="Forgot Password" class="lg-btn">
  <input type="submit" name="submit" value="Login" class="lg-btn">
</form>
</div>
</body>
</div>
</html>
