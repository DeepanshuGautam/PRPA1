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

		<link rel="stylesheet" type="text/css" href="adminHomeCSS.css" media="screen, projection">
		<script type="text/javascript" src="prompt.js"></script>


	</head>
	<body id="body">
		<?php include("adheader.php");?>

		<ul class="nav nav-tabs">
		 	<li role="presentation" class="active"><a href="adminHome.php">Home</a></li>
			<li class="navbar-right" role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
					Settings <span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu">					
			 		<li><a href="change_pwd.php">Change Password</a></li>		
			 		<li><a href="log_out.php">Log Out</a></li>
				</ul>
			</li>  
		</ul>

		<h1 id="welcome_tag">Welcome Administrator</h1><br />
		<div id="all_options">
			<a href="set_criteria.php"><button class="options">Set Criteria</button></a>
			<a href="view_applications.php"><button class="options">View Applications</button></a>
			<a href="create_database.php"><button class="options">Create Database</button></a>
			<a href=""><button id="activateClientB" class="options">Activate Client</button></a>		
			<a href=""><button id="deactivateClientB" class="options">Deactivate Client</button><br /></a>
		</div>		
	</body>
</html>