<!DOCTYPE html>
<html>
<head>
	<title>MemoRecap - Admin</title>
</head>
<body>
	<form method = "POST" action = "<?php echo base_url('Admin/authorize'); ?>">
		<input type="text" name = "username" placeholder = "Username" /><br />
		<input type="password" name = "password" placeholder = "Password" /><br />
		<input type="submit" value = "Login" /><br />
	</form>
</body>
</html>