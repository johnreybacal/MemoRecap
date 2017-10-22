<!DOCTYPE html>
<html>
<head>	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>

</head>
<style type="text/css">
body{
background-color: white;
	
}	
</style>
	<fieldset>
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
				  <form  method = "POST" action = "<?php echo base_url('Admin/login'); ?>">
				    <h4 class="form-signin-heading">MemoRecap<br/><br/><b>Sign in</b></h4>
				    <label class="sr-only">Admin Name</label>
				    <input type="text" id="Adminname" name = "username" class="form-control" placeholder="Username" required>

				    <label for="inputPassword" class="sr-only">Password</label>
				    <input type="password" name = "password" class="form-control" placeholder="Password" required> 
				    <?php
				        if(isset($error)){
				            echo $error;
				        }
				    ?>
				    <input class="btn btn-lg btn-primary btn-block" name = "submit" type="submit"></button>
				    <a href="<?php echo base_url('Home'); ?>">Back to home </a>
				  </form>
				</div>
			</div>
		</div> <!-- /container -->
	</fieldset>
</body>
</html>
<!--  -->
<!-- 	<form method = "POST" action = "<?php echo base_url('Admin/login'); ?>">
		<input type="text" name = "username" placeholder = "Username" /><br />
		<input type="password" name = "password" placeholder = "Password" /><br />
		<input type="submit" value = "Login" /><br />
	</form>
	<?php
		if(isset($error)){
			echo $error;
		}
	?> -->