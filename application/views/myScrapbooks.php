<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
</head>
<body>
	<p>Temporarily signed is as user 0001</p>
	<form action = "<?php echo base_url('editor/new'); ?>" method = "POST">
		Name:<input type="text" name="name" required /><br />
		Number of pages:<input type="number" name="pages" min = "3" max = "999" required /><br />
		Size:<br />
		<input type = "radio" name = "size" value = "512x768" required checked />512x768<br />
		<input type = "radio" name = "size" value = "640x512" required />640x512<br />
		<input type = "radio" name = "size" value = "512x512" required />512x512<br />
		<input type = "radio" name = "size" value = "640x768" required />640x768<br />
		<input type="submit" name="create" value = "Create" />
	</form>
	List of scrapbooks
	<ol>
		<?php
			echo $list_of_scrapbooks;
		?>
	</ol>
	<?php
		include 'includes/imageUpload.php';
	?>
</body>
</html>