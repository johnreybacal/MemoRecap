<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery-ui.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/style.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/modal.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/bootstrap.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery.ui.rotatable.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/iconfont/material-icons.css'); ?>" />
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery-ui.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.ui.rotatable.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/popper.min.js'); ?>"></script>		
		<script type = "text/javascript" src = "<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/Blob.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/canvas-toBlob.js'); ?>"></script>
		<script>
			$(".loader").fadeIn("fast");
			$(document).ready(function() {
				$(".loader").fadeOut(2000);
			});
		</script>
		<script type = "text/javascript" src = "<?php echo base_url('js/Zoom.js'); ?>"></script>
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
			}
			legend{
				color:white;
			}		    		
		</style>
	</head>
	<body onbeforeunload = "saveScrapbookBeforeUnload()" onload = "show('1')">
		<div class="loader"></div>
		<ul class='context-menu clear'>
 			<li data-action = "copy"><span class= "glyphicon glyphicon-copy"></span>Copy</li>
			<li data-action = "cut"><span class= "glyphicon glyphicon-scissors"></span>Cut</li>
			<li data-action = "paste"><span class= "glyphicon glyphicon-paste"></span>Paste</li>
			<li data-action = "delete"><span class= "glyphicon glyphicon-remove"></span>Delete</li>
			<li data-action = "frontSend"><i class="material-icons">flip_to_front</i>Send to front</li>
			<li data-action = "backSend"><i class="material-icons">flip_to_back</i>Send to back</li>
		</ul>
		<div id="backModal" class="modal">							  
		  <div class="modal-content">
			  <div class="modal-header">
			    <span class="close">&times;</span>
			    <h4>Save your work!</h4>
			  </div>
			  <div class="modal-body">
			    <h5 style = "color: black">Do you want to save your changes before leaving?</h5>
			  </div>
			  <div class="modal-footer">
			    <button class = "btn btn-warning" id = "backYes">Yes</button>
			    <button class = "btn btn-warning" id = "backNo">No</button>
			    <button class = "btn btn-warning" id = "backCancel">Cancel</button>
			  </div>
			</div>
		</div>
		<div class="container-fluid" >
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12" style="overflow:auto; border:solid gray 2px; height:90vh;">	
							<div id="divContent" style="zoom: 100%; height: 100%; width: 100%;">
								<div id = "workspace">
									<?php
										echo $loadWorkspace;
									?>			
								</div>
							</div>
							<div style="left: 10px; top: 50vh; z-index: 999; position: fixed;">		
							    <button type="button" value="Zoom out" OnClick="zoomOut();" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-minus"></span></button>
							    <hr />
								<button type="button" value="Orignal Size" OnClick="zoomOrig(true);"class="btn btn-default btn-sm">Original Size</button>
							    <hr />
								<button type="button" value="Zoom In" OnClick="zoomIn();" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-plus"></span></button>
							</div>
						</div>					
					</div>
					<div class = "row">						
						<div class = "row" id = "pagination-container">							
							<div class = "col-sm-1">
								<button style = "float: left;" class="btn btn-default" id = "prevPage">&laquo;</button>
							</div>
							<div class = "col-lg-10">
								<center>
									<ol style = "float: left; margin:auto;" id = "pagination" class = "pagination"></ol>
								</center>
							</div>
							<div class = "col-sm-1">
								<button style = "float: left;"  class="btn btn-default" id = "nextPage">&raquo;</button>
							</div>							
						</div>
						<div class = "row">
							<center>
								<button style = "display: inline-block;" type="button" class="btn btn-default btn-md" id = "addPage">Add Page</button>					
							</center>
						</div>
					</div>		
				</div>
				<div class="col-lg-2" style="/*height:10vh;*/">
					<div class="row">
						<ul class="nav nav-tabs">
							<li class="active"> <button onclick="show('1');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-user"></span></button></li>
							<li><button onclick="show('2');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-picture"></span></button>	</li>
							<li><button onclick="show('3');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-heart"></span></button> </li>
							<li><button onclick="show('4');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-star"></span></button> </li>
						</ul>
					</div>
					<div id="assets" class = "row">
						<?php
							echo $displayAssets;
						?>
					</div>
				</div>
				<div class="col-md-2">
					<div class="row">
						<ul style = "list-style: none">
							<li style = "float: left">
								<button class = "btn btn-warning" onclick = "back()">Back</button>
							</li>
							<li style = "float: right">
								<button type="button" class="btn btn-success center-block" onclick = "saveScrapbook(false)">Save</button>						
							</li>
						</ul>
					</div>
					<div class="row">	
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
								Selected asset in asset-picker: <text id = "wtf"></text><br/>
								<div align="center">
									<button type="button" class="btn btn-danger btn-md" id = "delete-asset">Delete asset</button>
								</div>	
							</li>
							<li id="page-attribute">
								<label>Page:</label> <text id = "currentPage">1</text><br />
								<input type = "color" id = 'bgc' value = "#ffddcc" />
								<div id="hexcolor" align="center">#ffddcc</div><br/> 			
								<div align="center">
								<button type="button" class="btn btn-primary btn-md" id = "changeBG">change Bg</button>&nbsp;<br/>
								<button type="button" class="btn btn-danger btn-md" id = "delete-page">Delete page</button>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="container-fluid"> -->
		<!-- </div>			 -->
		<?php					
			echo $loadPagination;
		?>				
		<?php
			echo $script;			
		?>
		<script>		
			saveBeforeUnload = true;
			function saveScrapbook(leaveFlag){
				console.log('save, leaveFlag: ' + leaveFlag);
				save("<?php echo base_url('MemoRecap/save'); ?>", leaveFlag);
			}
			function saveScrapbookBeforeUnload(){
				console.log('save before unload: ' + saveBeforeUnload);
				if(saveBeforeUnload){
					saveScrapbook(false);
				}
			}										
			function back(){
			    document.getElementById('backModal').style.display = "block";
			}
			$('#backYes').click(function(){
				saveBeforeUnload = false;
				saveScrapbook(true);				
			});
			$('#backNo').click(function(){
				saveBeforeUnload = false;
				window.history.back();
			});
			$('#backCancel').click(function(){
				closeModal();
			});
			document.getElementsByClassName("close")[0].onclick = closeModal;
			function closeModal(){
			    document.getElementById('backModal').style.display = "none";				
			}
			window.onclick = function(event) {
			    if (event.target == document.getElementById('backModal')) {
			        document.getElementById('backModal').style.display = "none";
			    }
			}
			function show(elementId) { 
				$('#' + elementId).show().siblings().hide();
			}
		</script>
		<script type = "text/javascript" src = "<?php echo base_url('js/editor.js'); ?>"></script>
	</body>
</html>