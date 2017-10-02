# railway-reservation-system
<!DOCTYPE html>
<head>
<title>My Example</title>
<link rel="stylesheet" href="home.css" />
<link rel="shortcut icon" href="favicon.png">
<link rel="stylesheet" 

href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-

awesome.min.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-

alpha.6/css/bootstrap.min.css" integrity="sha384-

rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" 

crossorigin="anonymous">-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-

KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 

crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" 

integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" 

crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" 

integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" 

crossorigin="anonymous"></script>
</head>
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>

<body>
<header>
  <h1><img src="favicon.png" width="100" style="left-margin:20">Railway Reservation 

System<img src="favicon.png" width="40" ></h1>
  <div class="date"><font color="hotpink"><marquee BEHAVIOR=ALTERNATE width="80%" 

height="30" scrollamount="5">Welcome to the Cucek Railway reservation system 

</marquee></font>
  <?php echo date('d/m/y'); ?></div>
    <!--<marquee>This is basic example of marquee</marquee>-->
</header/>

<div class="container-fluid">
<ul class="nav nav-tabs custom"  role="tablist">
<li class="nav-item"><a class="nav-link" href="#home" role="tab" data-toggle="tab" ><i class="fa 

fa-home fa-1x" aria-hidden="true"></a></i></li>
<li class="nav-item"><a class="nav-link" href="#reservation" role="tab" data-toggle="tab" ><i 

class="fa fa-book" aria-hidden="true" ></i> Reservation</a></li>
<li class="nav-item"><a class="nav-link" href="#cancellation" role="tab" data-toggle="tab" ><i 

class="fa fa-times" aria-hidden="true"></i> Cancellation</a></li>
<li class="nav-item"><a class="nav-link" href="#pnr" role="tab" data-toggle="tab"><i class="fa 

fa-ticket" aria-hidden="true"></i> PNR Status</a></li>
<li class="nav-item"><a class="nav-link" href="#song" role="tab" data-toggle="tab" 

onclick="song.html"><i class="fa fa-video-camera" aria-hidden="true"></i> 

Entertainment</a></li>
<li class="nav-item"><a class="nav-link" href="#feedback" role="tab" data-toggle="tab"><i 

class="fa fa-comments-o" aria-hidden="true"></i> Feedback</a></li>
<li class="nav-item"><a class="nav-link" href="#contact"  data-toggle="tab"><i class="fa fa-

phone" aria-hidden="true"> Contact Us</a></i></li>
<!--<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-cubes" aria-hidden="true"> 

About Us</a></i></li>
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" 

href="#" role="button"><i class="fa fa-cubes" aria-hidden="true"></i> About Us</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#vision" role="tab" data-toggle="tab">vision</a>
<a class="dropdown-item" href="#mission" role="tab"  data-toggle="tab">mission</a>
<a class="dropdown-item" href="#members" role="tab"  data-toggle="tab">Members</a>
</div>
</li>-->
<li class="nav-item"><a class="nav-link" href="#aboutus"  data-toggle="tab"><i class="fa fa-

cubes" aria-hidden="true"> About Us</a></i></li>
<li class="nav-item"><a class="nav-link" href="#signup" data-toggle="tab"><i class="fa fa-user-

plus" aria-hidden="true"></i> Register</a></li>
<li class="nav-item"><a class="nav-link" href="#login"  data-toggle="tab">Login <i class="fa fa-

sign-in" aria-hidden="true"></a></i></li>
</ul>

<div  class="tab-content">

<div role="tabpanel" class="tab-pane fade" id="home" >
<font color="green"><marquee BEHAVIOR=ALTERNATE width="100%" height="23" 

bgcolor="hotpink" scrollamount="5" vspace="15">Welcome to the Cucek Railway reservation 

system home page!</marquee></font>
</div>
<div role="tabpanel" class="tab-pane fade" id="reservation">
<p>Welcome to online ticket booking.</p>+
</div>
<div role="tabpanel" class="tab-pane fade" id="cancellation">
<p>so sad! why u want to cancel  the ticket </p>
</div>
<div role="tabpanel" class="tab-pane fade" id="pnr">
<p>Welcome to PNR Status.</p>
</div>

<div role="tabpanel" class="tab-pane fade " id="song">
<h4 style="text-align:center; text-decoration:underline"><i class="fa fa-smile-o" aria-

hidden="true"></i>
Life is like a roller coaster, live it, be happy, enjoy life.<i class="fa fa-smile-o" aria-

hidden="true"></i>
</h4>
<?php include("song.php"); ?>
</div>
<div role="tabpanel" class="tab-pane fade " id="feedback">
  <?php include("feedback.php"); ?>
<p>Please give us feedback.. it's more valuable for us.</p>
</div>
<div role="tabpanel" class="tab-pane fade " id="contact">
<h2 style="text-align:center">Contact Us</h2>
<?php include("contact.php"); ?>
</div>
<div role="tabpanel" class="tab-pane fade " id="aboutus">
<h3>About Us</h3>
<?php include("about.php"); ?>
</div>
<!--<div role="tabpanel" class="tab-pane fade" id="vision">
<p>vision</p>
</div>
<div role="tabpanel" class="tab-pane fade" id="mission">
<p>mission</p>
</div>
<div role="tabpanel" class="tab-pane fade " id="members">
<p>members</p>
</div>-->
<div role="tabpanel" class="tab-pane fade " id="login">
<?php include("login.php"); ?>
<!--<div class="container">
<div class="row" style="margin:50">
  <div class="col-md-6 offset-md-3 custom3" style="margin:200"><h2>Login</h2>
    <form method="post" name="myform" style="margin-left:100"onsubmit="validateform()">
    <div class="form-group row">
      <div class="input-group col-sm-8"><span class="input-group-addon"><i class="fa fa-

envelope-o" aria-hidden="true"></i></span>
        <input type="email" class="form-control"placeholder="Enter Email" required>
      </div>
    </div>
      <div class="form-group row">
        <div class="input-group col-sm-8"><span class="input-group-addon"><i class="fa fa-lock" 

aria-hidden="true"></i></span>
          <input type="password" class="form-control" placeholder="Enter Password" 

name="password">
        </div>
      </div>
    <div class="form-group row">
      <div class="col col-sm-4"><button class="btn btn-primary" style="margin-left:100">Forgot 

Password</button></div>
       <div class="col col-sm-4"><button class="btn btn-primary" style="margin-

left:100">Login</button></div>
    </div>
    </form>
  </div>
</div></div>-->
</div>
<div role="tabpanel" class="tab-pane fade " id="signup">
<p>Welcome please fill up the necessary details !</p>
<?php include("signup.php"); ?>
</div>
</div></div>
<footer class="foot">
<div class="container">
<div class="row"><h3><i class="fa fa-train fa-2x" aria-hidden="true"> Railway Reservation 

System</h3></i>
</div>
<!--<?php include(footer.php); ?>-->
<div class=" bottom-footer">
    <div class="col">
    <ul class="footer-nav">
      <li><a href="#">Home </a></li>
      <li><a href="#">Blog </a></li>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">Terms and condtions </a></li>
      <li><a href="#">contact </a></li>
      <li><a href="#">Links</a></li>
      <li><i class="fa fa-copyright" aria-hidden="true"> copyright 2017-2018</i></li>
   </ul>
</div></div>
</div></footer>
</body>
</html>
