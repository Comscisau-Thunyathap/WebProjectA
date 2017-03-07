<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign In Process</title>
</head>
<body>
<?php
		//เขียนข้อมูล PHP เอาข้อมูลทีส่งไป Select ใน DB ว่ามีหรือไม่ ถ้าไม่มีแสดงข้อความบอก ถ้ามีต้องดูว่าเป้น admin->admin.php หรือ member->member.php

		$uname = $_POST['uname'];
		$upassword = $_POST['upassword'];

		$host = "localhost";
		$userdb = "root";
		$passworddb = "";
		$dbname = "comscia_db";

		//connect database
		$conn = mysqli_connect($host, $userdb, $passworddb, $dbname);
		//create sql command
		$strsql = "select * from user_tb where uname ='" . $uname . "'and upassword ='".$upassword."'";
		//query data
		$result = mysqli_query($conn, $strsql);		

		if($result = mysqli_fetch_array($result))
		{
			//have
			echo "ok";
		}
		else
		{
			//don't have
			echo "Username or Password Incorrect !!!";
		}
		
?>	
</body>
</html>