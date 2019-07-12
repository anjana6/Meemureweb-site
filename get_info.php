<?php
$con = mysqli_connect("localhost","root","","meemure");
	if(isset($_POST['submit'])){
		$gender = $_POST['gender'];
		$name = $_POST['name'];
		$gmail = $_POST['gmail'];
        $message = $_POST['message'];
        
		
		$insert_details =  "insert into details(Name,Gmail,Gender,Message) values('$name','$gmail','$gender','$message')";
		
		mysqli_query($con,$insert_details); 
		
		return header("Location: contactus.php");
    }

		
	
?> 
