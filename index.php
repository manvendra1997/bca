<?php
if(!empty($_POST["submit"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$phone =$_POST["phone"];
	$subject = "Response From:" . $_POST["phone"] . ".\r\n";
	$content = $_POST["content"];
	$toEmail = "manvendramonu445@gmail.com"; //put your mail here
	$mailHeaders = "From: " . $_POST["userName"] . "<". $email.">.\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	$message = "<h3 style=color:green;>".$name.",Thank you !</h3>";
	}
}
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
</head>
<body>
    <center><h3>Enquiry Now</h3></center>
    <form name="frmContact" method="post" action="">
        <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
    <div class="md-form">
  <i class="fas fa-user prefix"></i>
  <input type="text" id="inputIconEx1" name="userName" placeholder="NAME" class="form-control">
</div>
<div class="md-form">
  <i class="fas fa-envelope prefix"></i>
  <input type="email" id="inputValidationEx" name="userEmail" placeholder="EMAIL" class="form-control validate">
</div>
<div class="md-form">
  <i class="fas fa-mobile prefix"></i>
  <input type="tel" id="inputValidationEx" name="phone" placeholder="PHONE" class="form-control validate">
</div>
<div class="md-form">
  <i class="fas fa-pencil-alt prefix"></i>
  <textarea id="form10" placeholder="MESSAGE" name="content" class="md-textarea form-control" rows="2"></textarea>
</div>
<center><input type="submit" name="submit" value="Submit"></center>
</form>
</body>
</html>