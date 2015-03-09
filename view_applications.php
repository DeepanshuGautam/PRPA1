<!DOCTYPE html>
<html>
	<head>
		<title>View Applications</title>
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<script type="text/javascript" src="js/jquery.min.js"></script>	
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="view_applicationsCSS.css">
	</head>
	<body id="body">
		<?php include("adheader.php");?>
		<!-- <?php //include("navigation_bar.php");?> -->
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="adminHome.php">Home</a></li>
			<li role="presentation"><a href="set_criteria.php">Set Criteria</a></li>
			<li role="presentation" class="active"><a href="view_applications.php">View Applications</a></li>
			<li role="presentation"><a href="create_database.php">Create Database</a></li>
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
		<?php 
			if(isset($_POST['submit']))
			{
				$stream = $_POST['discipline'];
				
				function get_all_apps($stream){
					//echo "hey ". $stream;
				}
				get_all_apps($stream);
			}		
		?>

		<form method='post' action='view_applications.php'>
			<div id='content'>
				<label id='discipline_label'>Discipline: </label>	

				<select id='discipline' name='discipline' class='discipline_options'>
					<option value='Computer Engineering'<?php if(isset($_POST['submit'])) if($_POST['discipline'] == 'Computer Engineering') echo "selected";?> >Computer Engineering</option>
					<option value='Electronics'<?php if(isset($_POST['submit'])) if($_POST['discipline'] == 'Electronics') echo "selected";?>>Electronics</option>
					<option value='Mechanical'<?php if(isset($_POST['submit'])) if($_POST['discipline'] == 'Mechanical') echo "selected";?>>Mechanical</option>
					<option value='Mathematics'<?php if(isset($_POST['submit'])) if($_POST['discipline'] == 'Mathematics') echo "selected";?>>Mathematics</option>
					<option value='Physics'<?php if(isset($_POST['submit'])) if($_POST['discipline'] == 'Physics') echo "selected";?>>Physics</option>
				</select>

				<input type='submit' name='submit' value='Submit' id='submitB'></input>
				<p id="appNoTag" >No of applications received : 	
				</p>
			</div>


		</form>
	</body>
</html>