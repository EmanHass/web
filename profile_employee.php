<?php
	session_start();
    $username="";
    $password="";

	// conect to the server and select database
	$conn =mysqli_connect("localhost", "root", "", "log");

	//Query the database for user

	$sql="select * from users where username='$username' and password ='$password'";
	$result =mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if($row){
	echo "<br>"." row Not null";
}
else{
	echo "<br>"." row null";
}

echo "<br>".$row['firstname'] ."firstname";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style_profile_emp.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>

	<div class="content">
		<h1>Employee Leave Managment System</h1>
	<div class="row">
		<div class="col_one">
			<i class="fas fa-id-card"></i><br>
			<span>firstname lastname</span><br>
			<span><?php echo $_SESSION['username'];?></span><br><br>
			<ul>
				<li><i class="fas fa-user"></i></i><a href="#">My Profiles</a></li>
				<li><i class="far fa-sun"></i><a href="#">Change Password</a></li>

				<li><i class="fas fa-bars"></i><a href="#">Leaves</a>
				   <div class="menu">
				   	 <ul>
				   	 	<li><a href="#">Apply leave</a></li>
				   	 	<li><a href="#">leave History</a></li>
				   	 </ul>
				   </div>
			    </li>
				<li><i class="fas fa-file-import"></i><a href="login.php">Layout</a></li>
			</ul>
		</div>
		<div class="col">
			<h4>UPDATE EMPLOYEE DETAILS</h4>
			<div class="update">
				<form method="post">
					<div class="col1">	
						<label>Employee username</label><br>
						<input class="username" disabled type="text" name="username" value="<?php echo $_SESSION['username'];?>"><br> 
						<div class="fullnamee">
							<div>
								<label>First name</label><br>
								<input type="text" name="first_name" value="<?php echo $row['firstname'];?>">
														
							</div> 
						    <div>	
								<label>Last name</label><br>
							  	<input type="text" name="last_name" value="<?php echo $row['lastname'];?>">
						   </div>
						</div><br>
						<label>Email</label><br>
						<input type="email" name="email"><br>
						<label>Mobile Number</label><br>
						<input type="number" name="mobile">
					</div>
					<div class="col2">
						<label></label><br>
			     		<select>
							<option>Male</option>
							<option>Female</option>
						</select>
						<label></label><br>
						<select>
							<option>information technology </option>
							<option>operations </option>
							<option>human resources</option>
						</select><br>
						<label>City/Town</label><br>
						<input type="text" name="city">
					</div>
					<div class="col3">
						<label>Date OF Birth</label><br>
						<input type="date" name="date"><br>
						<label>Country</label><br>
						<input type="text" name="country">
					</div>
				</form>				
			</div>
		</div>
	</div>	
	</div>
</body>
</html>    
