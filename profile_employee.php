<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style_profile_emp.css">
   	<link rel="stylesheet" type="text/css" href="fontawesome.min.css">
</head>
<body>
	<div class="content">
		<h1>Employee Leave Managment System</h1>
	<div class="row">
		<div class="col_one">
			<img src="img1.jpeg" width="50%" height="10%" alt="image">
			<h4><?php echo $_SESSION['username'];?></h4>
			<ul>
				<li><i class="fas fa-user"></i></i>My Profiles</li>
				<li><i class="far fa-sun"></i>Change Password</li>
				<li><i class="fas fa-bars"></i>Leaves</li>
				<li><i class="fas fa-file-import"></i>Layout</li>
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
								<input type="text" name="first_name">								
							</div> 
						    <div>	
								<label>Last name</label><br>
							  	<input type="text" name="last_name">
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
