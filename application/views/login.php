
<!-- 
	<form class="form-signin" method = "POST" action = "<?php echo base_url('loginAction'); ?>">
	    <label for="inputEmail" class="sr-only">Username</label>
	    <input type="text" id="inputEmail" name = "username" class="form-control" placeholder="Username" required>
	    <label for="inputPassword" class="sr-only">Password</label>
	    <input type="password" id="inputPassword" name = "password" class="form-control" placeholder="Password" required>    
	    <input style="background-color:#e4b4b4; width:100%;" name = "submit" type="submit" value = "Sign in"></input>
	</form> -->


<div class="container" style="margin-top: 5%;">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-8">
			<fieldset>
				<p><h1> Log In</h1></p>
				<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('loginAction/'); ?>">
				 
				  <div class="form-group">
				    <label for="name" class="col-sm-2 control-label">Userame</label>
				    <div class="col-sm-5">
				      <input type="text" class="form-control" name="username" placeholder="Username" required="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="name" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-5">
				      <input type="password" class="form-control" name="password" placeholder="Password" required="">
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-10 col-sm-offset-2">
				      <input name="create" type="submit" value="Log In" class="btn btn-primary">
				    </div>
				  </div>
				</form>
				<?php
			        if(isset($Error)){
			            echo '<h3>'.$Error.'</h3>';
			        }
			    ?>
			</fieldset>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
