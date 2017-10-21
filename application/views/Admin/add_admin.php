<!-- <link href="<?php echo base_url('css/w3.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/w3-theme-black.css'); ?>" rel="stylesheet"> -->

	<!-- <form method = "POST" action = "<?php echo base_url('Admin/addAdmin'); ?>">		
		<input type="text" name="username" placeholder = "Username" required /><br />
		<input type="text" name="name" placeholder = "Name" required /><br />
		<input type="password" name="password" placeholder = "Password" required /><br />
		<input type="submit" name="create" value = "Submit" />		
	</form> -->
<!DOCTYPE html>
<html>
<head>
	<title>BFF Admin</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>

<link rel="icon" type="png/image" href="<?php echo base_url('css/favicon.png'); ?>">
<style>
.vertical-menu {
    width: 200px;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}
li{
	list-style: none;
	margin: 0px;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    
}

tr:nth-child(even){background-color: #d8d8d8
}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body style="background-color: whitesmoke;">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 title">
				<h4 class="text-center">Add an Admin</h4>
				
		</div>
		<div class="col-md-2 vertical-menu">
			<ul>
				<li><a href = "<?php echo base_url('Admin/Users'); ?>">Users</a></li>
				<li><a href = "<?php echo base_url('Admin/Scrapbooks'); ?>">Scrapbooks</a></li>
				<li><a href = "<?php echo base_url('Admin/Assets'); ?>">Assets</a></li>
				<li><a href = "<?php echo base_url('Admin/Reports'); ?>">Reports</a></li>			
				<li><a href = "<?php echo base_url('Admin/Editors_Pick'); ?>">Editor's Pick</a></li>
				<li><a class="active" href = "<?php echo base_url('Admin/Add_Admin'); ?>">Add an Admin</a></li>
				<li><a href = "<?php echo base_url('Admin/Options'); ?>">Account Options</a></li>
				<li><a href = "<?php echo base_url('Admin/Logout'); ?>">Logout</a></li>
			</ul>
		</div>
		<div class="col-md-10">
					<!-- <h1 class="text-center">List of Clients</h1> -->
			<div class="container"  style="height: 700px;""> 
		
				<div class="col-md-3" >
					<fieldset>
					<p><h1> Add an Admin</h1></p>
					<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('Admin/addAdmin'); ?>">
					 
					  <div class="form-group">
					    <label for="name" class="col-md-1 control-label">Userame</label>
					    <div class="col-md-12">
					      <input type="text" class="form-control" name="username" placeholder="Username" required="">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="name" class="col-md-1 control-label">Name</label>
					    <div class="col-md-12">
					      <input type="text" class="form-control" name="name" placeholder="Name" required="">
					    </div>
					  </div>
					  
					  <div class="form-group">
					    <label for="name" class="col-md-1 control-label">Password</label>
					    <div class="col-md-12">
					      <input type="password" class="form-control" name="password" placeholder="Password" required="">
					    </div>
					  </div>

					  <div class="form-group" style="float: right;">
					    <div class="col-md-12 " >
					      <input id="submit" name="create" type="submit" value="Add an Admin" class="btn btn-primary">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-md-12 " >
					    <?php
					        if(isset($Error)){
					            echo '<h3>'.$Error.'</h3>';
							        }
							    ?>
								</div>
							</div>		
							</form>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>
		
</body>
</html>