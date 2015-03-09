<!DOCTYPE html>
<html>
	<head>
		<title>Welcome Admin</title>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">


		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<script src="js/jquery.min.js" type="text/javascript"></script>	
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="adminLoginCSS.css" media="screen, projection">	
		<!-- <script type="text/javascript" src="adminLogin.js"></script> -->

	</head>
	<body id="body">
		<?php include("adLoginHeader.php");?>
		
		<form class="col-md-offset-4 col-md-4 topMargin" method="post" action="adminLogin.php">
			<div class="panel panel-info">	
				<?php
								if(isset($_POST['submit']))
								{
									//echo "hi";
									echo "";
									$email = $_POST['emailId'];	
									if(empty(trim($email)))									
									{
										echo "<div class='col-md-8 alert alert-danger' role='alert'>
											<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
											<span class='sr-only'>Error:</span>


											Email-Id can not be empty
											</div>";
									}
									elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
									{
									  echo "Invalid email format";
									}
									else
									{
										
									}										
								}									
				?>			 
				<div class="panel-heading center">LOGIN</div>
				<div class="panel-body">
					<p class="requireTag">*require fields</p>
					<div class="form-group topMargin">
						<div class="row">
							<label class="col-md-4">Email address*</label>																		
						</div>	
						<input id="emailId" name="emailId" type="email" class="form-control" placeholder="Enter email">
					</div>
					<div class="form-group">
						<div class="row">
							<label class="col-md-6" for="exampleInputPassword1">Password*</label>
							<label class="col-md-6"></label>
						</div>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>							
					<div class="center topMargin">
						<button name="submit" type="submit" class="btn btn-block btn-success">Submit</button>	
					</div>					
				</div>			
			</div>			
		</form>					
		
	</body>
</html>