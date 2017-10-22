</div>
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
				<h1>First things first</h1>
				<form action = "<?php echo base_url('create'); ?>" method = "POST">					
					<div class="form-group">
					    <label for="name" class="col-md-1 control-label">Title</label>
					    <div class="col-md-12">
							<input type="text" class="form-control" name="name" placeholder = "Title" required />
					    </div>
					</div>
					<div class="form-group">
					    <label for="name" class="col-md-1 control-label">Pages</label>
					    <div class="col-md-12">							
							<input type="number" class="form-control" name="pages" placeholder = "Pages" min = "1" max = "999" required />
					    </div>
					</div>
					<div class="form-group">
					    <label for="name" class="col-md-1 control-label">Description</label>
					    <div class="col-md-12">							
							<textarea style = "height: 80px;" class="form-control" type = "textarea" name = "description" placeholder = "description"></textarea>
					    </div>
					</div>
					<div class="form-group">
					    <label for="name" class="col-md-1 control-label">Size</label>
					    <div class="col-md-12">
							<input type = "radio" name = "size" value = "512x768" required checked />512x768<br />
							<input type = "radio" name = "size" value = "640x512" required />640x512<br />
							<input type = "radio" name = "size" value = "512x512" required />512x512<br />
							<input type = "radio" name = "size" value = "640x768" required />640x768<br />
					    </div>
					</div>
					<div class="form-group">					    
					    <div class="col-md-12">
							<?php
								if($logged_in){
									echo '<input type="submit" class = "btn btn-success" name="create" value = "Create" />';
								}else{
									echo '<a href = "'.base_url('Login').'">Please login first</a>';
								}
							?>
						</div>
					</div>
				</form>
			</fieldset>
		</div>
	</div>
</div>