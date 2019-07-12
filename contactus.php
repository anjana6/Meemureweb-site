<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Meemure</title>
<link rel="stylesheet" href="contactus.css">
</head>

<body>
	<div class="main">
		<div class="header">
    		<img src="images/7.jpg" alt="" id="p1">
            <div class="heading">
            	<p>Sri Lankan Beautiful Nature</p>
            </div>
            <div class="nev">
            	<ul>
                	<li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Meemure</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
    	</div>
        <div class="content">
        	<div class="topic">
            	<p>Request tour prices.Availabilty.booking instruction or ask us a question</p>
            </div>
        	<div class="form">
            	<form action="contactus.php" method="post">
                	<fieldset>
                    <legend>Personal information</legend>
                	<span>Title:</span>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="femail">Femail<br>
                	Name:<br>
                    <input type="text" name="name" ><br>
                    Email:<br>
                    <input type="gmail" name="gmail"><br>
                    Message:<br>
                    <textarea name="message" id="" cols="30" rows="10"></textarea><br>
                    <input type="submit" name="submit" value="Send Message">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

 <?php
$con = mysqli_connect("localhost","root","","meemure");
	if(isset($_POST['submit'])){
		$gender = $_POST['gender'];
		$name = $_POST['name'];
		$gmail = $_POST['gmail'];
        $message = $_POST['message'];
        
		
		$insert_details =  "insert into details(Name,Gmail,Gender,Message) values('$name','$gmail','$gender','$message')";
		
        mysqli_query($con,$insert_details);    
    }

		
	
?> 


