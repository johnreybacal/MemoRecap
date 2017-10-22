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
			<div class="col-md-3">
				
				<img src = "<?php echo base_url('dp/'.$profile['dp']); ?>" id = "imgHERE" border = "1" />
				<form action = "<?php echo base_url('changeDP'); ?>" enctype= "multipart/form-data" method = "POST">
					<input type="file" name="image" required accept = "image/*" id = "imageChooser" />
					<input type = "submit" name = "submit" value = "change dp" />
				</form>

				<!--  <div id = "imgHERE" style= "width:125px; height:125px; border:solid thin black;">
                <img style="width:100%;height:100%;" src = "" alt="new pic" class="img-rounded img-responsive" style="margin-top:25px;"/>
	            </div> -->
               
                	
			</div>
			<div class="col-md-5">
				<fieldset>
					<p><h1> Edit Account</h1></p>
					<form class="form-horizontal" role="form" action = "<?php echo base_url('updateAccount'); ?>" method = "POST" >						
					  <div class="form-group">
					    <label for="name" class="col-md-1 control-label">Userame</label>
					    <div class="col-md-12">
					      <input class="form-control" type="text" name="name" placeholder = "Name" value = "<?php echo $profile['name']; ?>" />					      
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
	</script><!-- 
<div class="container">
<div class=" p-4 my-4 bg-faded">
		 <div class="row">
            <div class="col-sm-6 col-md-4" style="margin-left: 100px;">
					
                <img style= "width:125px; height:125px;" src = "<?php echo base_url('dp/'.$profile['dp']); ?>" alt="" class="img-rounded img-responsive" style="margin-top:25px;"/>
                <div id = "imgHERE" style= "width:125px; height:125px; border:solid thin black;">
                <img style="width:100%;height:100%;" src = "" alt="new pic" class="img-rounded img-responsive" style="margin-top:25px;"/>
	            </div>
                <form action = "<?php echo base_url('changeDP'); ?>" enctype= "multipart/form-data" method = "POST">
                	<input type="file" name="image" required accept = "image/*" id = "imageChooser" /><br />
                	<input type = "submit" name = "submit" value = "change dp" />
                </form>
				</div>				
			<div class="userstuff">
			<form action = "<?php echo base_url('updateAccount'); ?>" method = "POST" style="margin-left:150px;" >
			<br />
			<input type="text" name="name" placeholder = "Name" value = "<?php echo $profile['name']; ?>" /><br />			
			<input required type="password" name="curpassword" placeholder= "Current Password" /><br />
			<input type="password" name="newpassword" placeholder= "New Password" /><br />
			<input class="btn btn-lg btn-primary" style="background-color:#e4b4b4; float:right;" name = "submit" type="submit" />
			</form><br />
		</div>
		</div>
		
   <br /><br />
</div>
</div>
<script>
$(document).ready(function(){
	$("#imageChooser").change(function(event){		
		var tgt = event.target || window.event.srcElement, files = tgt.files;		
		var fr = new FileReader();
		fr.onload = function(){
			// $("#imgHERE").children().remove();
			$("#imgHERE").css('border', 'none').children('img').attr('src', fr.result);
		}
		fr.readAsDataURL(files[0]);
	});
});
</script> -->

