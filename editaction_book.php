<?php
	
	include_once 'crud.php';
	
	$Crud = new crud();
	
	if(isset($_POST['update'])){
	$id = $_POST['id'];
       $f_name=$_POST['first'];
       $l_name=$_POST['last'];
       $mobile=$_POST['mobile'];
       $email = $_POST['email']; 
       $Address=$_POST['Address'];
       $date=$_POST['date'];
		
		$result = $Crud->execute("Update info SET First_Name='$f_name',Last_Name='$l_name',Mobile_Number='$mobile',Email='$email',Address='$Address',Date='$date' where id=$id");
		
		if($result){
			header("Location:admin.php");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>
