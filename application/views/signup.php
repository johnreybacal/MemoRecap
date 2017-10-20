
<div class="container"  style="height: 700px;">
	<div class="row">
		<div class="col-md-8" >
			<div class="col-md-10 ">
				<img style="width:100%; height:auto; margin:7% 0 0 0;" src = "<?php echo base_url('css/images/TAYTEL.png'); ?>" alt=""/>
			</div>
		</div>
		<div class="col-md-4" style="float:right; margin:7% 0 0 0;">
			<fieldset>
				<p><h1> Sign Up</h1></p>
				<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('signupAction/'); ?>">
				 
				  <div class="form-group">
				    <label for="name" class="col-md-1 control-label">Userame</label>
				    <div class="col-md-12">
				      <input type="text" class="form-control" name="username" placeholder="Username" required="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="name" class="col-md-1 control-label">Name</label>
				    <div class="col-md-12">
				      <input type="text" class="form-control" name="name" placeholder="Name" required="">
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
				      <input id="submit" name="create" type="submit" value="Sign Up" class="btn btn-primary">
				    </div>
				  </div>
				</form>
			</fieldset>
		</div>
	</div>
</div>
