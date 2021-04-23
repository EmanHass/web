<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LogIn</title>
    <style type="text/css">
    	.content{margin-top: 50px}
    	h2{
    		text-align: center;
    	}
    	h4{
		    padding-top: 26px;
    	}
    	h2,h4{
    		color: red
    	}
    	.log_emp{
    		background-color: white;
    		margin-left: 34%;
            margin-right: 27%;
            margin-top:50px ;
            padding-left: 62px;
            padding-bottom: 60px
    	}
    	form{
    		padding-left: 20px
    	}
    	.log{
    		margin-top: 20px;
		    border: navajowhite;
		    border-bottom: 1px solid #ddd;
		    font-size: 16px;
		    width: 88%;
		    padding-bottom: 16px;
		    padding-top: 12px
    	}
    	.check{
    		margin-top: 20px;
    		margin-right: 10px
    	}
    	.submit{
		    text-align: center;
		    background-color: #39d839;
		    padding: 10px;
		    width: 71px;
		    margin-left: 33%;
		    margin-top: 30px;
		    border: none;
		    border-radius: 2px;
		    cursor: pointer;
    	}
    </style>
</head>

<body style="background-color:#9e9e9e14">
	<div class="content">
		<h2>Leave Managment System</h2>

		<div class="log_emp">
			<h4>EMPLOYEE LOGIN</h4>
			<form method="post" action="login.php">
				<input required class="log" type="text" id="name" name="name" placeholder="Enter Employee UserName"><br>
				<input required class="log" type="password" id="pass" name="pass" placeholder="Enter Password"><br>
				<input class="check" type="checkbox" name="remmeber"><label>remmemer Login?</label><br>
				<input class="submit" type="submit" name="sub" value="LOGIN">

			</form>
		</div>			
	</div>
</body>
</html>
<?php
session_start();
	$username="";
	$password ="";
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$username =	$_POST['name'];
		$password = $_POST['pass'];
}
// created connectin	
  $conn = mysqli_connect("localhost","root","","log");

  if($conn){
  	echo "yes"."<br>";
  }
  $sql  = "CREATE TABLE users (username VARCHAR(50) PRIMARY KEY,password INT(50), firstname VARCHAR(50) NOT NULL, lastname VARCHAR(50) NOT NULL ,email VARCHAR(50), mobilenumber INT(15) ,sex VARCHAR(50),deparments VARCHAR(50),city VARCHAR(50), country VARCHAR(50),dateOfBirth datetime)";

  if(mysqli_query($conn,$sql)){
  	echo "Table users created";
  }
  else{
  	echo "Table users not created";
  }

 $ins ="INSERT INTO users (username,password,firstname,lastname,email,mobilenumber,sex,deparments,city,country,dateOfBirth) VALUES ('EmanHass','20180293','Eman','Hassouna','eman@gmail.com','0596541234','female','information technology','Gaza','Palestine','2000-10-22')";
$in ="INSERT INTO users (username,password,firstname,lastname,email,mobilenumber,sex,deparments,city,country,dateOfBirth) VALUES ('AsalaElqeeq','20183333','Asala','Elqeeq','Asala@gmail.com','0595749621','female','information technology','Gaza','Palestine','2000-2-2')";
if(mysqli_query($conn,$ins)){
	echo "<br>"."New record created successfully";
}
else{
	echo "<br>"."New record Not created";
}
if(mysqli_query($conn,$in)){
	echo "<br>"."New record created successfully";
}
else{
	echo "<br>"."New record Not created";
}
$select = "select * from users where username='$username' and password ='$password' ";

$result = mysqli_query($conn,$select);

$row = mysqli_fetch_assoc($result);

if($row){
	echo "<br>"." row Not null";
}
else{
	echo "<br>"." row null";
}
echo "<br>".$row['username'];
echo "<br>".$row['firstname'];
echo "<br>".$row['lastname'];
	if(isset($_POST['sub'])){
		if ($row['username'] == $username  and $row['password'] == $password) {
			
			if(isset($_POST['remmeber'])){
				setcookie('user',$username,time()+(86400 * 30),"/");
				setcookie('password',$password,time()+(86400 * 30),"/");
					
					if(isset($_COOKIE['user']) and isset($_COOKIE['password'])){
						$user =$_COOKIE['user'];
						$pass =$_COOKIE['password'];
						echo "<script>
						document.getElementById('pass').value=$pass;
						document.getElementById('name').value=$user;
									  		
						</script>";
					}					    
			}
					$_SESSION['username']= $_POST['name'];
				    echo  "<h2>Welcome ".$_POST['name']." We Will transfer to your page</h2>";
				    header("refresh:3;URL=profile_employee.php");
		}
		else{
				echo "<div>";
					echo "<h2>Failed You can't to login</h2>";
				echo "</div>";			
		}		
	}
?>
