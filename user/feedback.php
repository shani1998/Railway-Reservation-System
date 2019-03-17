<html>
<head>
<meta charset="utf-8">
<title>feedback</title>
<?php
if(isset($_POST['submit'])){

$to="shani.pathak98@gmail.com";
$name=$_POST['name'];
$msg=$_POST['msg'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject='My User Feedback';
$message="Name: ".$name.'\n'."phone: ".$phone.'\n'."Message "."\n\n".$msg;
$header="Form: ".$email;
if(mail($to,$subject,$message,$header))
{
echo "Email has been sent".$to;
}
else
{
echo "there is something error";
}
}
?>
<link rel="stylesheet" href="fed.css"/>
</head>
<div class="fed">
<body>
<div class="main">
<div class="info">Give Your Feedback!</div>
<form action="feedback.php" method="post" name="fed" class="form-box">
  <input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br><br>
  <input type="email" name="email" class="inp" placeholder="Enter Your Email" required></br><br>
  <input type="number" class="inp" placeholder="Enter Your phone no" name="phone"required></br><br>
<textarea name="msg" id="msg-box" placeholder="Enter Your Message...""></textarea><br><br>
<input type="submit" name="submit" value="Send" class="sub-btn">
</form>
</div>
</body>
</div>
</html>
