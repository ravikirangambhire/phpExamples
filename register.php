<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<br/><br/><br/>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div style="box-shadow: 2px 10px #888888;" class="jumbotron">
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-6">
							<img src="login.jpg"  width="100" height="100"/>
						</div>
					</div>
					<br/><br/>
					<form method="post" action="register.php" name="reg_user">
					    <div class="form-group">
					      
					      <input type="text" class="form-control" id="usr"name="username" placeholder="User Name">
					    </div>
					    <div class="form-group">
					      <input type="password" class="form-control" id="pwd" name="password_1" placeholder="Password">
					    </div>
					    <div class="form-group">
					      <input type="password" class="form-control" id="pwd" name="password_2" placeholder="Confirm Pasword">
					    </div>
					    <div class="form-group">
					      <input type="text" class="form-control" id="role" placeholder="Role" name="role">
					    </div>
					    <div class="row">
					    	<div class="col-sm-2"></div>
					    	
					    	<div class="col-sm-3">
					    		<button type="submit" name="reg_user" class="btn btn-success" >Register</button>
					    	</div>
					    </div>
					    
					   
					    
					  </form>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>