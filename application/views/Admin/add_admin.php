	<form method = "POST" action = "<?php echo base_url('Admin/addAdmin'); ?>">		
		<input type="text" name="username" placeholder = "Username" required /><br />
		<input type="text" name="name" placeholder = "Name" required /><br />
		<input type="password" name="password" placeholder = "Password" required /><br />
		<input type="submit" name="create" value = "Submit" />		
	</form>