<!--login-->
	<div class="col-sm-6 col-md-6 container">
			<img style="width:500px; height:150px; padding-left:25px;" src = "<?php echo base_url('css/images/TAYTEL.png'); ?>" alt=""/>
	</div>
	<div style="margin-top:20px;">
	<form class="form-signin" method = "POST" action = "<?php echo base_url('Login/'.uri_string()); ?>">
	    <p style="margin-left:35%;">Username</p>
		<label for="inputEmail" class="sr-only" >Username</label>
	    <input type="text" id="inputEmail" style="width:25%; margin:0% 25% 0% 35%;" name = "username" class="form-control" placeholder="(i.e. Howl Pendragon)" required>
	    <p style="margin-left:35%; margin-top:1%;">Password</p>
		<label for="inputPassword" class="sr-only">Password</label>
	    <input type="password" id="inputPassword" style="width:25%; margin:0% 25% 3% 35%;" name = "password" class="form-control" placeholder="(i.e. 143sophie)" required>    
	    <input style="background-color:#e4b4b4; width:25%; margin:0% 25% 0% 35%;" name = "submit" type="submit" value = "Sign in"></input>
	</form>
	</div>