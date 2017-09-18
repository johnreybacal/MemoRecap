<form method= "POST" enctype= "multipart/form-data" action = "<?php echo base_url('MemoRecap/uploadAsset/'.uri_string()); ?>">
	<br/>
	<input type = "file" name = "image" accept = "image/*" id = "imageChooser" required />
	<br/>
	<input type = "submit" name = "imageSubmit" value = "Upload" id = "imageSubmit"/>
</form>