
<div class="container" style="margin-top: 5%;">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-8">
			<fieldset>
				<p><h1> Sign Up</h1></p>
				<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('signupAction/'); ?>">
				 
				  <div class="form-group">
				    <label for="name" class="col-sm-2 control-label">Userame</label>
				    <div class="col-sm-5">
				      <input type="text" class="form-control" name="username" placeholder="Username" required="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="name" class="col-sm-2 control-label">Name</label>
				    <div class="col-sm-5">
				      <input type="text" class="form-control" name="name" placeholder="Name" required="">
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
				      <input id="submit" name="create" type="submit" value="Sign Up" class="btn btn-primary">
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
