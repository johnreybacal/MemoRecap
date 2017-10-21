<div>
	<h1>First things first</h1>
	<form action = "<?php echo base_url('create'); ?>" method = "POST">
		<br />
		<input type="text" name="name" placeholder = "Title" required />
		<input type="number" name="pages" placeholder = "Pages" min = "3" max = "999" required /><br />
		<br />
		<input type = "text" name = "description" placeholder = "description" /><br />
		Size:<br />
		<input type = "radio" name = "size" value = "512x768" required checked />512x768<br />
		<input type = "radio" name = "size" value = "640x512" required />640x512<br />
		<input type = "radio" name = "size" value = "512x512" required />512x512<br />
		<input type = "radio" name = "size" value = "640x768" required />640x768<br />
		<br />		
		<?php
			if($logged_in){
				echo '<input type="submit" name="create" value = "Create" />';
			}else{
				echo '<h5>Please login first</h5>';
			}
		?>
	</form>
</div>