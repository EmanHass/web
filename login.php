
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
				<input required class="log" type="text" name="name" placeholder="Enter Employee UserName"><br>
				<input required class="log" type="password" name="pass" placeholder="Enter Password"><br>
				<input class="check" type="checkbox" name="remmeberLogin"><label>remmemer Login?</label><br>
				<input class="submit" type="submit" name="sub" value="LOGIN">

			</form>
		</div>			
	</div>
</body>
</html><?php
	session_start();
	
	$employee = array('Eman','Hala','Heba');
	if(isset($_POST['sub'])){
		if($_SERVER['REQUEST_METHOD']=='POST'){
			if(in_array($_POST['name'], $employee)){

				$_SESSION['user']=$_POST['name'];
				echo  "<h2>Welcome ".$_POST['name']." We Will transfer to your page</h2>";
				header("refresh:1;URL=profile_employee.php");

			}
			else{
				echo "<div>";
					echo "<h2>You can\'t to login</h2>";
				echo "</div>";
			}
			
		}		
	}

?>