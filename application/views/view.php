<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery-ui.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/style.css'); ?>" />	
		<link rel = "stylesheet" href = "<?php echo base_url('css/bootstrap.min.css'); ?>" />		
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery-ui.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/variables.js'); ?>"></script>	
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.ui.rotatable.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/Zoom.js'); ?>"></script>	

		<script>
			$(".loader").fadeIn("fast");
		</script>
		<script type = "text/javascript" src = "<?php echo base_url('js/FileSaver.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/Blob.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/canvas-toBlob.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/globals.js'); ?>"></script>
		<?php
			echo $assignAssets;
		?>
				<style>
			body{
				background-color: #cceaee;
				/*color:white;		*/	
			}
		</style>
	</head>
	<body onload = "onload()">
		<div class="loader"></div>

		<div class="container-fluid">
			<div class="row" style="margin: 0px auto; height:90vh;">
				<div class="col-md-11"  class="scrollbar" id="style-1" style="overflow:auto; height:90vh;">
					<div class="row" >
						<div class="col-md-12" >
							<div id="divContent" style="zoom: 100%">
								<div id = "workspace" style="margin: 10% auto; position:relative; height:80vh;">
									<?php
										echo $loadWorkspace;
									?>			
								</div>
							</div>
						</div>
				<div style="left: 10px; top: 50vh; z-index: 999; position: fixed;">		
							    <button type="button" value="Zoom out" OnClick="zoomOut();" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-zoom-out"></span></button>
							    <hr />
								<button type="button" value="Orignal Size" OnClick="zoomOrig(true);"class="btn btn-default btn-sm">Original Size</button>
							    <hr />
								<button type="button" value="Zoom In" OnClick="zoomIn();" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-zoom-in"></span></button>
				</div>	
					</div>
				</div>
				<div class="col-md-1">		
						<button class = "btn btn-warning btn-md" onclick = "back()" style="float:right;">Back</button>					
					</div>
			</div>
					<div class = "row" style="height:10vh;">				
						<div class="col-md-11">	
							<div class = "row" id = "pagination-container">							
								<div class = "col-md-2" style="padding-top:25px;">
									<button class="btn btn-default" id = "prevPage">&laquo;</button>
								</div>
								<div class = "col-md-8">
										<div id = "pagination" class = "pagination"></div>
								</div>
								<div class = "col-md-2" style="padding-top:25px;">
									<button  class="btn btn-default" id = "nextPage">&raquo;</button>
								</div>							
							</div>
						</div>	
				
					</div>	
		</div>
		<?php					
			echo $loadPagination;
		?>
		<?php
			echo $script;
		?>		
		<script type = "text/javascript" src = "<?php echo base_url('js/view.js'); ?>"></script>
	</body>
</html>