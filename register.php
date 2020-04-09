<?php
$con = mysqli_connect("localhost", "root", "","details");
if (isset($_POST['insert'])) {
	$id = $_POST['id'];
	$fromdate = $_POST['fromdate'];
	$todate = $_POST['todate'];
	$final = $_POST['final'];
	$intial = $_POST['intial'];
	$meansoftransport = $_POST['meansoftransport'];
	$travelagency = $_POST['travelagency'];

	$sql = "INSERT INTO `$id`(`fromdate`,`todate`, `intial`, `final`, `meansoftransport`, `transportagency`) VALUES ('$fromdate','$todate','$intial','$final','$meansoftransport','$travelagency')";
    
    $query=mysqli_query($con,$sql);
    if($query){
      echo "Success";
    }else{
    	echo mysqli_error($con);
    }
 
   
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Data</title>
	<link rel="stylesheet" href="css/reg-css.css" type="text/css"
</head>
<body>

	<div id="container" style=">

		<div style="font-style:italic; font-size: 50px; text-align: center;"><p>PREVENTION IS BETTER THEN CURE</p></div>

		<form method="post" enctype="multipart/form-data" id="form-box" style="font-size:40px; text-align: center;">
			<label > 
				Unique Identification Number : <input style="height:25px; width: 300px;" type="text" name="id"  class="input" required/> <br/><br/>
			</label>
			<label style="position:relative;right:12vw;">
				To Date : <input style="position:relative;left:24vw;height:25px; width: 300px;" type="date" name="todate" placeholder="DD/MM/YYYY" class="input" required/> <br/><br/>
			</label>
			<label style="position:relative;right:10vw;">
				From Date : <input style="position:relative;left:20.5vw;height:25px; width: 300px;" type="date" name="fromdate" placeholder="DD/MM/YYYY" class="input" required/> <br/><br/>
			</label>
			<label style="position:relative;right:14.5vw;">
				To : <input style="position:relative;left:29vw;height:25px; width: 300px;" type="text" name="final" placeholder="Enter city name" class="input" required/> <br/><br/>
			</label>
			<label style="position:relative;right:12.9vw;">
				From : <input style="position:relative;left:26vw;height:25px; width: 300px;" type="text" name="intial" placeholder="Enter city name"class="input" required/> <br/><br/>
			</label style="position:relative;right:13.5vw;">
			<label style="position:relative;right:5.5vw;">
				Means of Transport : <input style="position:relative;left:11vw;height:25px; width: 300px;" type="text" name="meansoftransport" placeholder="Enter Means of transport" class="input" required/> <br/><br/>
			</label>
			<label style="position:relative;right:8.5vw;">	
				Travel Agency : <input style="position:relative;left:16.5vw;height:25px; width: 300px;"  type="text" name="travelagency" placeholder="Enter agency name" class="input" required/> <br/><br/>
			</label>

			<input class="register" type="submit" name="insert" value="REGISTER" style="height: 50px;width:150px; background-color: #27AE60; font-size: 25px; font-style:italic;">

			<button class="back" style="font-size: 25px; font-style: italic; height: 50px; width: 150px; background-color: #27AE60; " ><a href="logout.php">LOGOUT</a></button>
		</form>
	</div>
</body>
</html>