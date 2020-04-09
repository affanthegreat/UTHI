<?php
$connect = mysqli_connect("localhost", "root", "","details");
if(isset($_POST['search']))
{
    $id = $_POST['id'];
    $query = "SELECT `fname`, `lname`, `age`, `phonenumber`, `address` FROM `detailsaboutuser` WHERE `id`=$id LIMIT 1";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $users=[];
         $sql="SELECT * FROM `$id`";
	    $query=mysqli_query($connect,$sql);
	    while ($row= mysqli_fetch_array($query,MYSQLI_ASSOC)) {
            $users[]=$row;
        }
      while ($row = mysqli_fetch_array($result))
      {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $age = $row['age'];
        $address=$row['address'];
        $phonenumber=$row['phonenumber'];
      }  
    }
    else {
        echo "Undifined ID";
            $fname = "";
            $lname = "";
            $age = "";
            $address="";
            $phonenumber="";
    }
    mysqli_free_result($result);
    mysqli_close($connect);   
}
else{
    $fname = "";
    $lname = "";
    $age = "";
    $address="";
    $phonenumber="";
}
error_reporting(0);
?>
<!DOCTYPE html>

<html>

    <head>

        <title> UTHI </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type = "text/css" href = "css/style.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    </head>
    <body>
      <div id="container">
            <form action="" method="post" class="form-box" align-self="left">
                <label id="search">
                    <h2>Enter Unique Identification Code</h2><br>
                    <input type="text" name="id" size="90vw
                    " placeholder="your 12-digit number" required>
                </label>
                <input class="search-bar" type="submit" name="search" value="Find">
                <br><br>
                <div class="in-form">
                    <div class="each-element">   
                         <p class="label-name">First Name</p><br><input class="form-detail" type="text" name="fname" size="30%" value="<?php echo $fname;?>">
                    </div>
                    <br><br><br>
                    <div class="each-element">
                        <p class="label-name">Last Name<p><br><input  class="form-detail" type="text" name="lname" size="30%"  value="<?php echo $lname;?>">
                    </div>
                    <br><br>
                    <div class="each-element">
                        <p class="label-name">Age</p><br><input class="form-detail" type="text" size="10%" name="age" value="<?php echo $age;?>">
                    </div>
                    <br><br>
                    <div class="each-element">
                        <p class="label-name">Phone Number</p><br><input class="form-detail" type="text" name="phonenumber" size="30%" value="<?php echo $phonenumber;?>">
                    </div>               
                    <br><br>
                    <div class="each-element">
                        <p class="label-name">Address</p><br><input class="form-detail" type="text" name="address" size="90%" value="<?php echo $address;?>">
                    </div>
                    <br><br>
                </div>
         </form>
        </div>
        <h2>Travel History</h2>
        <table id="tb">
		    <thead>
			    <tr>
                    <th>From Date</th>
                    <th>To Date</th>
				    <th>From</th>
				    <th>To</th>
				    <th>Means of Transport</th>
				    <th>Transport Agency</th>
			    </tr>
		    </thead>
		    <tbody>
                 <?php foreach ($users as $user): 
			    ?>
		            <tr>
                        <td><?php echo $user['fromdate'] ?></td>
                        <td><?php echo $user['todate'] ?></td>
				  	    <td><?php echo $user['intial'] ?></td>
				  	    <td><?php echo $user['final'] ?></td>
				  	    <td><?php echo $user['meansoftransport'] ?></td>
				  	    <td><?php echo $user['transportagency'] ?></td>
				    </tr>
                    <?php endforeach ?>
	    	</tbody>
	    </table>
	<br><br>
	<div class="end">
		<button class="logout"><a href="logout.php">LOGOUT</button>
	</div>
	</body>
</html>
    </body>

</html>