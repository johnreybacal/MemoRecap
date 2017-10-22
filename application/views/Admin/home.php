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
				<h4 class="text-center"></h4>
				
			</div>
			<div class="col-md-2 vertical-menu">
				<ul>
					<li><a class="active" href = "<?php echo base_url('Admin/Users'); ?>">Users</a></li>
					<li><a href = "<?php echo base_url('Admin/Scrapbooks'); ?>">Scrapbooks</a></li>
					<li><a href = "<?php echo base_url('Admin/Assets'); ?>">Assets</a></li>
					<li><a href = "<?php echo base_url('Admin/Reports'); ?>">Reports</a></li>					
					<li><a href = "<?php echo base_url('Admin/Editors_Pick'); ?>">Editor's Pick</a></li>
					<li><a href = "<?php echo base_url('Admin/Add_Admin'); ?>">Add an Admin</a></li>
					<li><a href = "<?php echo base_url('Admin/Options'); ?>">Account Options</a></li>
					<li><a href = "<?php echo base_url('Admin/Logout'); ?>">Logout</a></li>
				</ul>
			</div>
			<center>
				<h2>Welcome admin <strong><?php echo $admin['name'] ?></strong>!</h2>
	<img src = "<?php echo base_url('dp/'.$admin['dp']); ?>" />
			</center>
		</div>
	</div>
</body>
</html>
	
<!--  -->
<!-- 	<h2>Welcome admin <strong><?php echo $admin['name'] ?></strong>!</h2>
	<img src = "<?php echo base_url('dp/'.$admin['dp']); ?>" />
	<ul>
		<li><a href = "<?php echo base_url('Admin/Users'); ?>">Users</a></li>
		<li><a href = "<?php echo base_url('Admin/Scrapbooks'); ?>">Scrapbooks</a></li>
		<li><a href = "<?php echo base_url('Admin/Assets'); ?>">Assets</a></li>
		<li><a href = "<?php echo base_url('Admin/Reports'); ?>">Reports</a></li>
		<li><a href = "<?php echo base_url('Admin/Editors_Pick'); ?>">Editor's pick</a></li>
		<li><a href = "<?php echo base_url('Admin/Add_Admin'); ?>">Add an admin</a></li>
		<li><a href = "<?php echo base_url('Admin/Options'); ?>">Account options</a></li>
		<li><a href = "<?php echo base_url('Admin/logout'); ?>">Logout</a></li>
	</ul> -->