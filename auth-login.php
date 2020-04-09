<?php
$connect = mysqli_connect("localhost", "root", "","login");
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = "select * from authlogin where username='".$username."'
	and password='".$password."'";

	$query = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);

   if($row){
   	$_SESSION['id']= $row['id'];
   	$_SESSION['name'] = $row['name'];

   	echo "<script> 
    window.location.href='register.php';
    </script>";
   }
   else{
   	echo "Incorrect username or password";
   }

}

?>

<!DOCTYPE html>

<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "css/stylesheet.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<title>Agency LOGIN</title>
</head>
<body>	
		<h1 text-align="center">LOGIN</h1>
		<h2 text-align="center">AS TRAVELAGENCY</h2>
		<div id="container">
			<form method="post" id="form-box-2">
				<br><br>
				Username : <input type="text" name="username" class="input" placeholder="Enter username">
				<br><br>
				Password : <input type="password" name="password" class="input" placeholder="Enter password">
				<br><br>
				<input type="submit" name="login" value="LOGIN" class="register">
				<br><br>
				
			</form>
		</div>
</body>
</html>