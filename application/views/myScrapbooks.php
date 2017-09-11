<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
</head>
<body>
	<p>Temporarily signed is as user 0001</p>
	<form action = "<?php echo site_url('MemoRecap/editor/new'); ?>" method = "POST">
		Name:<input type="text" name="name" required /><br />
		Number of pages:<input type="number" name="pages" min = "3" max = "999" required /><br />
		<input type="submit" name="create" value = "Create" />
	</form>
	List of scrapbooks
	<ul>
		<?php
			echo $list_of_scrapbooks;
		?>
	</ul>
</body>
</html>