<!--login-->
				
	<form class="form-signin" method = "POST" action = "<?php echo base_url('Login/'.uri_string()); ?>">
	    <label for="inputEmail" class="sr-only">Username</label>
	    <input type="text" id="inputEmail" name = "username" class="form-control" placeholder="Username" required>
	    <label for="inputPassword" class="sr-only">Password</label>
	    <input type="password" id="inputPassword" name = "password" class="form-control" placeholder="Password" required>    
	    <input style="background-color:#e4b4b4; width:100%;" name = "submit" type="submit" value = "Sign in"></input>
	</form>