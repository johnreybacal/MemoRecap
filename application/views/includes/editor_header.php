<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery-ui.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/style.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/editor.css'); ?>" />
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
			#uploadModal{
				color: black;
			}
		</style>
	</head>
	<?php
		if($normal){
			echo '<body onbeforeunload = "saveScrapbookBeforeUnload()" onload = "show(\'first\'); show(\'user_images\');">';
		}else{
			echo '<body onbeforeunload = "saveScrapbookBeforeUnload()" onload = "show(\'user_images\');">';
		}
	?>
		<div class="loader"></div>
		<div id="uploadModal" class="modal">
			<div class="container" style="width: 500px;">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#ffe6b3;">
						<span id = "uclose" class="close">&times;</span>
						<h4>Sharing is caring</h4>
					</div>
					<form method= "POST" id = "uploadForm" enctype= "multipart/form-data" action = "<?php echo base_url('uploadAsset'); ?>">
						<br/>
						<center>
						<div id = "imgHERE" style = "border:solid thin black; height:150px; width: 150px;"><img src = '' alt = "pick an image" style = "width: 100%; height: 100%" /></div>
						<input type = "file" name = "image" accept = "image/*" id = "imageChooser" required /><br/>
						Choose a category for this asset:<br />
						<input type = "radio" name = "category" value = "user_images/" required checked = "true" />Personal Image<br />
						<input type = "radio" name = "category" value = "backgrounds/" required />Background<br />
						<input type = "radio" name = "category" value = "stickers/" required />Sticker<br />
						<input type = "radio" name = "category" value = "shapes/" required />Shape<br />
						Privacy:<br />
						<input type = "radio" name = "privacy" value = "public" required />Public<br />
						<input type = "radio" name = "privacy" value = "private" required checked = "true"/>Private<br />
						</center>
						<div class="modal-footer" style="background-color:#ffe6b3;">
							<input type = "submit" name = "imageSubmit" value = "Upload" id = "imageSubmit"/>							
						</div>
					</form>
				</div>
			</div>
		</div>
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
			    <span class="close" id = "bclose">&times;</span>
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
