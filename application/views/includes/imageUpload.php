<form method= "POST" enctype= "multipart/form-data" action = "<?php echo base_url('uploadAsset'); ?>">
	<br/>
	<input type = "file" name = "image" accept = "image/*" id = "imageChooser" required /><br/>
	Choose a category for this asset:<br />
	<input type = "radio" name = "category" value = "user_images/" required />Personal Image<br />
	<input type = "radio" name = "category" value = "backgrounds/" required />Background<br />
	<input type = "radio" name = "category" value = "stickers/" required />Sticker<br />
	<input type = "radio" name = "category" value = "shapes/" required />Shape<br />
	Privacy:<br />
	<input type = "radio" name = "privacy" value = "public" required />Public<br />
	<input type = "radio" name = "privacy" value = "private" required checked = "true"/>Private<br />
	<input type = "submit" name = "imageSubmit" value = "Upload" id = "imageSubmit"/>
</form>