<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery-ui.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/style.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery.ui.rotatable.css'); ?>" />
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery-ui.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.ui.rotatable.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/variables.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/script.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/initialization.js'); ?>"></script>
		<?php
			echo $assignAssets;
		?>
	</head>
	<body>
		<ul class='context-menu'>
			<li data-action = "copy">Copy</li>
			<li data-action = "cut">Cut</li>
			<li data-action = "paste">Paste</li>
			<li data-action = "delete">Delete</li>
		</ul>	
		<div id = "assets">
			<ul id = "asset-picker">				
			<?php
				echo $displayAssets;
			?>
			</ul>					
		</div>
		<div id = "workspace">
			<?php
				echo $loadWorkspace;
			?>			
		</div>		
		<div id = "pagination-container">
			<ol id = "pagination">
				<?php					
					echo $loadPagination;
				?>				
			</ol>
		</div>
		<div id = "z-order-container">Z-order
			<?php				
				echo $loadZOrder;
			?>
		</div>
		<button id = "addPage">Add Page</button>
		<!-- <input type = "file" id = "fileChooser" accept = "image/*" /> -->
		<div id = "asset-attribute">
			ID: <text id = "selectedAsset"></text><br />
			Position:<br /><text id = "pos"></text><br />
			Size:<br /><text id = "siz"></text><br />
			Angle:<text id = "ang"></text>					
			<button id = "delete-asset">Delete asset</button>
		</div>
		<div id = "page-attribute">
			Current Page: <text id = "currentPage"></text><br />
			R: <input type = "number" id = "R" min = "0" max = "255"/><br />
			G: <input type = "number" id = "G" min = "0" max = "255"/><br />
			B: <input type = "number" id = "B" min = "0" max = "255"/><br />
			<button id = "changeBG">chnage Bg</button>
			<button id = "delete-page">Delete page</button>
		</div>
		<div style = "float: left;">
			Selected asset in asset-picker: <text id = "wtf"></text><br />
			<?php include "includes/imageUpload.php" ?>
			<button id = "save">Save</button>
		</div>
		<?php
			echo $script;			
		?>
		<script>
			function getSaveURL(){
				return "<?php echo base_url('MemoRecap/save'); ?>";
			}
		</script>
		<script type = "text/javascript" src = "<?php echo base_url('js/editor.js'); ?>"></script>
	</body>
</html>