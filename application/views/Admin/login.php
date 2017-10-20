	<form method = "POST" action = "<?php echo base_url('Admin/login'); ?>">
		<input type="text" name = "username" placeholder = "Username" /><br />
		<input type="password" name = "password" placeholder = "Password" /><br />
		<input type="submit" value = "Login" /><br />
	</form>
	<?php
		if(isset($error)){
			echo $error;
		}
	?>