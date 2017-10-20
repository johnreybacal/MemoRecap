<!--signup-->
	<div class="row container" style="margin-top:5%;">
	<div class="col-sm-6 col-md-6 container">
			<img style="width:500px; height:150px; padding-left:25px;" src = "<?php echo base_url('css/images/TAYTEL.png'); ?>" alt=""/>
			<p style="padding-left:50px;">Don't try to stuff all this information into your story. You don't want to overwhelm your readers with a complete background file on your character. The idea is to develop a deep knowledge of your character yourself. Then you can use this knowledge to shape your story and let readers get to know your character in a gradual way.</p>
	</div>
	
	<div class="col-sm-6 col-md-6 container" style="margin-top:20px;">
	<form class="form-signin" method = "POST" action = "<?php echo base_url('Login/'.uri_string()); ?>">
	    <p style="margin-left:30%;">Username</p>
		<label for="inputEmail" class="sr-only" >Username</label>
	    <input type="text" id="inputEmail" style="width:60%; margin:0% 25% 0% 30%;" name = "username" class="form-control" placeholder="(i.e. Howl Pendragon)" required>
		<p style="margin-left:30%; margin-top:1%;">Name</p>
		<label for="inputEmail" class="sr-only" >Name</label>
	    <input type="text" id="inputEmail" style="width:60%; margin:0% 25% 0% 30%;" name = "username" class="form-control" placeholder="(i.e. Howl Jenkins Pendragon)" required>
	    <p style="margin-left:30%; margin-top:1%;">Password</p>
		<label for="inputPassword" class="sr-only">Password</label>
	    <input type="password" id="inputPassword" style="width:60%; margin:0% 25% 3% 30%;" name = "password" class="form-control" placeholder="(i.e. 143sophie)" required>    
	    <input style="background-color:#e4b4b4; width:60%; margin:0% 25% 0% 30%;" name = "submit" type="submit" value = "Sign Up"></input>
	</form>
	</div>
	</div>