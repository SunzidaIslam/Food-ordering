<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style12.css">
</head>

<body>
<form action="contact.php" method = "POST">
	<div class="contact">
		<h1>Contact Us</h1>
		<div class="txtb">
			<label>Full Name</label>
			<input type="text" name="name" value="" placeholder="Enter your name">
		</div>
		<div class="txtb">
			<label>Email</label>
			<input type="email" name="email" value="" placeholder="Enter your name">
		</div>
		<div class="txtb">
			<label>Message</label>
			<input type="text" name="message" value="" placeholder="Enter your message">
			<textarea></textarea>
		</div>
		<input type="submit" name="submit" class="btn" value="Send Message">
			<a href="home.php" color="#fff"><b>Back</b></a>
	</div>
	</form>
</body>
</html>
<?php

include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
       $name=$_POST['name'];
       $email=$_POST['email'];
       $message=$_POST['message'];
       

       $res = $crud->execute("insert into contact1(Name,Email,Message) values('$name','$email','$message')");

       if($res){
        

           echo("Successful!!!");
           echo("<br/>");
       }
       else{
           echo("OOPPS!!! Something wrong");
           echo("<br/>");
       }

   }

?>

