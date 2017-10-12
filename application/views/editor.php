<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery-ui.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/style.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/bootstrap.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery.ui.rotatable.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/iconfont/material-icons.css'); ?>" />
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery-ui.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.ui.rotatable.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/popper.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/Zoom.js'); ?>"></script>
		<script>
			$(".loader").fadeIn("fast");
			$(document).ready(function() {
				$(".loader").fadeOut(4000);
			});
		</script>
		<script type = "text/javascript" src = "<?php echo base_url('js/variables.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/globals.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/script.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/initialization.js'); ?>"></script>
		<?php
			echo $assignAssets;
		?>
		<style>
			body{
				background-color: #282828;
				color:white;
				font-size:16px;
			}
			legend{
				color:white;
			}		    		
		</style>
	</head>
	<body onload = "show('1')">
		<div class="loader"></div>
		<ul class='context-menu clear'>
 			<li data-action = "copy"><span class= "glyphicon glyphicon-copy"></span>Copy</li>
			<li data-action = "cut"><span class= "glyphicon glyphicon-scissors"></span>Cut</li>
			<li data-action = "paste"><span class= "glyphicon glyphicon-paste"></span>Paste</li>
			<li data-action = "delete"><span class= "glyphicon glyphicon-remove"></span>Delete</li>
			<li data-action = "frontSend"><i class="material-icons">flip_to_front</i>Send to front</li>
			<li data-action = "backSend"><i class="material-icons">flip_to_back</i>Send to back</li>
		</ul>
		<div class="container-fluid" >
			<div class="row" style="height:90vh;">

				<div class="col-md-10">
					<div class="row">
						<div class="col-md-10" style="overflow:auto; padding: 8% 8%; border:solid gray 2px; height:90vh;">	
							<div id="divContent" style="zoom: 100%">
								<div style = "margin: auto;" id = "workspace">
									<?php
										echo $loadWorkspace;
									?>			
								</div>
							</div>
						</div>

						<div style="margin:23% 65%; z-index:1000; position:fixed;">
							<br/><br/><br/><br/><br/>
						    <button type="button" value="Zoom out" OnClick="return ZoomOut();" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-minus"></span></button><br/><br/>	
							<!-- <button type="button" value="Orignal Size" OnClick="return Zoomorg();"class="btn btn-default btn-sm">Original Size</button> -->
							<button type="button" value="Zoom In" OnClick="return ZoomIn();" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-plus"></span></button>
						</div>

						<div class="col-md-2" style="height:10vh;">
							<!-- <div class="row"> -->
								<ul class="nav nav-tabs">
									<li class="active"> <button onclick="show('1');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-user"></span></button></li>
									<li><button onclick="show('2');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-picture"></span></button>	</li>
									<li><button onclick="show('3');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-heart"></span></button> </li>
									<li><button onclick="show('4');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-star"></span></button> </li>
								</ul>
							<!-- </div> -->
							<!-- <div id="assets" class = "row"> -->
								<?php
									echo $displayAssets;
								?>
							<!-- </div> -->
						</div>
					
					</div>
				</div>

				<div class="col-md-2"style=" height:90vh;">
					<!-- <div class="row" style="margin:auto;">	 -->
						<button type="button" class="btn btn-success btn-lg center-block" id = "save">Save</button>
						<br/>
						<ul style="list-style:none;" id = "tools">
							<li id="z-order-container"><legend style="text-align:center;">Z-order</legend> 
								<?php				
									echo $loadZOrder;
								?>
							</li>					
							<li id="asset-attribute">
								<label>ID:</label> <text id = "selectedAsset" class = 'attr'></text><br />
								<label>Position:</label>&nbsp;<text id = "pos" class = 'attr'></text><br />
								<label>Size:</label>&nbsp;<text id = "siz" class = 'attr'></text><br />
								<label>Angle:</label>&nbsp;<text id = "ang" class = 'attr'></text><br/>					
								Selected asset in asset-picker: <text id = "wtf"></text><br/><br/>
								<div align="center">
									<button type="button" class="btn btn-danger btn-lg" id = "delete-asset">Delete asset</button>
								</div>	
							</li>
							<li id="page-attribute">
								<label>Page:</label> <text id = "currentPage">1</text><br />
								<input type = "color" id = 'bgc' value = "#ffddcc" />
								<div id="hexcolor" align="center">#ffddcc</div><br/> 			
								<div align="center">
								<button type="button" class="btn btn-primary btn-lg" id = "changeBG">change Bg</button>&nbsp;<br/>
								<button type="button" class="btn btn-danger btn-lg" id = "delete-page">Delete page</button>
								</div>
							</li>
						</ul>
					<!-- </div> -->
				</div>
			<!-- <div class = "row"> -->
				<div class="col-md-10" style="height:10vh;">
					<div id = "pagination-container" class="col-md-8" align="center">
						<button class="btn btn-default" id = "prevPage">&laquo;</button>&nbsp;
						<ol id = "pagination" class = "pagination">
								<?php					
									echo $loadPagination;
								?>				
						</ol>
						<button class="btn btn-default" id = "nextPage">&raquo;</button>
						&nbsp;&nbsp;<button type="button" class="btn btn-default btn-lg" id = "addPage">Add Page</button>
					</div>	
				</div>		
			<!-- </div> -->
			</div>
		</div>
		<?php
			echo $script;			
		?>
		<script>
			function getSaveURL(){
				return "<?php echo base_url('MemoRecap/save'); ?>";
			}
			function show(elementId) { 
			 document.getElementById("1").style.display="none";
			 document.getElementById("2").style.display="none";
			 document.getElementById("3").style.display="none";
			 document.getElementById("4").style.display="none";
			 document.getElementById(elementId).style.display="block";
			}
		</script>
		<script type = "text/javascript" src = "<?php echo base_url('js/editor.js'); ?>"></script>
	</body>
</html>