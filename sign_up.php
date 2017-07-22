<?php
	include('config/db.php');
	
	if(isset($_REQUEST['submit'])){
		echo "<pre>";
		print_r($_REQUEST);
		echo "</pre>";
		$name = $_REQUEST['user_name'];
		$password = md5($_REQUEST['password']);
		$query = "INSERT INTO users(name, password) VALUES (?,?)";
		$statement = $db->prepare($query);
		$inserted = $statement->execute(array($name, $password))
		or 
		die("Cann't connect");
		if($inserted) {
			$msg = "Data inserted successfully";
			header('location:login.php');
		}
		
	}
	
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ticket</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="user/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="user/css/font-awesome.min.css">
  <link rel="stylesheet" href="user/css/sign_up.css" >

</head>
	
<body>
	<div class=" container sign_up">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="text-primary">Sign-up</h3>
			</div>
			
			<div class="col-md-5 col-md-offset-3 col-xs-5 col-xs-offset-3">
			<form action="#" method="post" >
				<div class="form-group">
					<label for="user_name">User Name</label>
					<input required type="text" placeholder="your Name" id="user_name" name="user_name" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input required type="password" placeholder="your password" id="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label for="confirm_password">confirm password</label>
					<input required type="password" placeholder="Retype your password" id="confirm_password" name="confirm_password" class="form-control">
				</div>
				<input type="submit" name="submit" class="btn btn-primary form-control" value="Let's Go">
		</form>
			</div>
		</div>
		
	</div>
	
	
	
<!-- jQuery 2.2.3 -->
<script src="user/js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="user/js/bootstrap.min.js"></script>
<!--main js-->
<script src="user/js/main.js"></script>
<script>
	
</script>
</body>
</html>
