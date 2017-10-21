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
				<h4 class="text-center">Account Options</h4>
				
			</div>
			<div class="col-md-2 vertical-menu">
				<ul>
					<li><a href = "<?php echo base_url('Admin/Users'); ?>">Users</a></li>
					<li><a href = "<?php echo base_url('Admin/Scrapbooks'); ?>">Scrapbooks</a></li>
					<li><a href = "<?php echo base_url('Admin/Assets'); ?>">Assets</a></li>
					<li><a href = "<?php echo base_url('Admin/Reports'); ?>">Reports</a></li>			
					<li><a href = "<?php echo base_url('Admin/Editors_Pick'); ?>">Editor's Pick</a></li>
					<li><a href = "<?php echo base_url('Admin/Add_Admin'); ?>">Add an Admin</a></li>
					<li><a class="active"href = "<?php echo base_url('Admin/Options'); ?>">Account Options</a></li>
					<li><a href = "<?php echo base_url('Admin/Logout'); ?>">Logout</a></li>
				</ul>
			</div>
			<div class="col-md-2">
				<!-- <h1 class="text-center">List of Clients</h1> -->
				<img src = "<?php echo base_url('dp/'.$admin['dp']); ?>" id = "imgHERE" border = "1" />
				<form action = "<?php echo base_url('Admin/changeDP'); ?>" enctype= "multipart/form-data" method = "POST">
					<input type="file" name="image" required accept = "image/*" id = "imageChooser" />
					<input type = "submit" name = "submit" value = "change dp" />
				</form>
			</div>
			<div class="col-md-3">
				<fieldset>
					<p><h1> Edit Account</h1></p>
					<form class="form-horizontal" role="form" action = "<?php echo base_url('Admin/editAdmin'); ?>" method = "POST" >						
					  <div class="form-group">
					    <label for="name" class="col-md-1 control-label">Userame</label>
					    <div class="col-md-12">
					      <input class="form-control" type="text" name="name" placeholder = "Name" value = "<?php echo $admin['name']; ?>" />					      
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="name" class="col-md-1 control-label">Current Password</label>
					    <div class="col-md-12">
					      <input type="password" class="form-control" name="curpassword" placeholder= "Current Password">					     
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="name" class="col-md-1 control-label">New Password</label>
					    <div class="col-md-12">
					     <input type="password" class="form-control" name="newpassword" placeholder= "New Password" />				     
					    </div>
					  </div>

					  <div class="form-group" style="float: right;">
					    <div class="col-md-12 " >
					      <input id="submit" name="submit" type="submit" value="Save" class="btn btn-primary">
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
	
</body>
</html>
	
	

	
	

	<script>
		$(document).ready(function(){
			$("#imageChooser").change(function(event){		
				var tgt = event.target || window.event.srcElement, files = tgt.files;		
				var fr = new FileReader();
				fr.onload = function(){
					// $("#imgHERE").children().remove();
					$("#imgHERE").css('border', 'none').attr('src', fr.result);
				}
				fr.readAsDataURL(files[0]);
			});
		});
	</script>