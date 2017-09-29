<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery-ui.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/style.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/bootstrap.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/bootstrap.min.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery.ui.rotatable.css'); ?>" />
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery-ui.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.ui.rotatable.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/variables.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/globals.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/script.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/initialization.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
		<?php
			echo $assignAssets;
		?>
		<style>
		body{
			background-color: #73bdbe;
			}
			</style>
	</head>
	<body>

		<ul class='context-menu'>
			<li data-action = "copy">Copy</li>
			<li data-action = "cut">Cut</li>
			<li data-action = "paste">Paste</li>
			<li data-action = "delete">Delete</li>
			<li data-action = "frontsend">Send to front</li>
			<li data-action = "backsend">Send to back</li>

		</ul>	

		<div class="container-fluid">
			<div class="row">
			
			<div class="col-md-2">
			<button type="button" onclick="tools()" class="btn btn-default" style="float:right;" >>></button>
			<div id="asst">	
			<div id = "assets">
				<ul id = "asset-picker">				
				<?php
					echo $displayAssets;
				?>
				</ul>					
			</div>
			</div>
			</div>
			
			<div class="col-md-7">	
			<!-- <fieldset style="overflow: auto; border:1px solid blue;background-color:gray; height:600px; ">	 -->
			<div id="divContent" style="zoom: 100%">
			<div class="row">
			<div id = "workspace">
				<?php
					echo $loadWorkspace;
				?>			
			</div>
			</div>
			</div>
			<div style=" float:right;">	
			<div id = "pagination-container">
				<ol id = "pagination">
					<?php					
						echo $loadPagination;
					?>				
				</ol>
			</div>
			&nbsp;<button type="button" id = "addPage" class="btn btn-primary btn-sm">Add Page</button>&nbsp;	
			<button type="button" value="Zoom In" OnClick="return ZoomIn();" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button>
			<button type="button" value="Orignal Size" OnClick="return Zoomorg();"class="btn btn-default btn-sm">Original Size</button>
		    <button type="button" value="Zoom out" OnClick="return ZoomOut();" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-minus"></span></button>	
			</div>
			<!-- </fieldset> -->
			</div>

			<!-- <div class="col-md-1">
			
			<br/>	

			</div> -->

			<div class="col-md-3">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button onclick="tool_1()" class="btn btn-default"><<</button>	
			<div id="tool">	
			<div id = "asset-attribute">
				<label>ID:</label> <text id = "selectedAsset" class = 'attr'></text><br />
				<label>Position:</label><br /><text id = "pos" class = 'attr'></text><br />
				<label>Size:</label><br /><text id = "siz" class = 'attr'></text><br />
				<label>Angle:</label><text id = "ang" class = 'attr'></text><br/>					
				<button id = "delete-asset" class="btn btn-danger btn-sm">Delete asset</button>
			</div>
			<div id = "page-attribute">
				<label>Page:</label> <text id = "currentPage">1</text><br />
				<label>R:</label> <input type = "number" id = "R" min = "0" max = "255"/><br />
				<label>G:</label> <input type = "number" id = "G" min = "0" max = "255"/><br />
				<label>B:</label> <input type = "number" id = "B" min = "0" max = "255"/><br />
				<button id = "changeBG" class="btn btn-primary btn-sm">Change Bg</button>
				<button id = "delete-page" class="btn btn-danger btn-sm">Delete page</button>
			</div>
			<div id = "z-order-container">Z-order
				<?php				
					echo $loadZOrder;
				?>
			</div>
			<div id="asset-attribute">
				<br/>Selected asset in asset-picker: <text id = "wtf"></text><br />
				<?php include "includes/imageUpload.php" ?>
				<button id = "save" class="btn btn-success btn-sm">Save</button>
			</div>
			<?php
				echo $script;			
			?>
			</div>
			</div>
			</div>
			</div>
		</div>		
		<script>
			function getSaveURL(){
				return "<?php echo base_url('MemoRecap/save'); ?>";
			}
		</script>
		<script type = "text/javascript" src = "<?php echo base_url('js/editor.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/Zoom.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/HideShow.js'); ?>"></script>
	</body>
</html>
