
<!-- 
	<form class="form-signin" method = "POST" action = "<?php echo base_url('loginAction'); ?>">
	    <label for="inputEmail" class="sr-only">Username</label>
	    <input type="text" id="inputEmail" name = "username" class="form-control" placeholder="Username" required>
	    <label for="inputPassword" class="sr-only">Password</label>
	    <input type="password" id="inputPassword" name = "password" class="form-control" placeholder="Password" required>    
	    <input style="background-color:#e4b4b4; width:100%;" name = "submit" type="submit" value = "Sign in"></input>
	</form> -->
	<style type="text/css">
		body{
			background-image: url ("<?php echo base_url('css/images/TAYTEL.png'); ?>");
		}
	</style>
 <div class="container"  style="height: 700px;">
	<div class="row">
		<div class="col-md-8">
				<div class="col-md-10 ">
					<img style="width:100%; height:auto; margin:7% 0 0 0;" src = "<?php echo base_url('css/images/TAYTEL.png'); ?>" alt=""/>
				</div>
		</div>
		<div class="col-md-4" style="float:right; margin:7% 0 0 0;">
			<fieldset>
				<p><h1> Login</h1></p>
				<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('loginAction/'); ?>">
				 
				  <div class="form-group">
				    <label for="name" class="col-md-1 control-label">Userame</label>
				    <div class="col-md-12">
				      <input type="text" class="form-control" name="username" placeholder="Username" required="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="name" class="col-md-1 control-label">Password</label>
				    <div class="col-md-12">
				      <input type="password" class="form-control" name="password" placeholder="Password" required="">
				    </div>
				  </div>

				  <div class="form-group" style="float: right;">
				    <div class="col-md-12 " >
				      <input id="submit" name="submit" type="submit" value="Login" class="btn btn-primary">
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