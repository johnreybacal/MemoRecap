<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/style.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery-ui.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery.ui.rotatable.css'); ?>" />
		<script type = "text/javascript" src = "<?php echo base_url('js/script.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/globals.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/variables.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery-ui.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/initialization.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.ui.rotatable.min.js'); ?>"></script>
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
			<li data-action = "frontSend">Send to front</li>
			<li data-action = "backSend">Send to back</li>
		</ul>
		<div id = "assets">
			<ul id = "asset-picker">				
			<?php
				echo $displayAssets;
			?>
			</ul>
			<button id="addTxt">Add Text</button>					
		</div>
		<div class="row">
	      <div class="col-md-3">
	         <select class="form-control" onchange="execCommandWithArg('fontName', this.value);">
	            <datalist>
	              <option id="Arial">Arial</option>
	              <option id="Cooper">Cooper</option>
	              <option id="Helvetica">Comic Sans</option>
	              <option id="Helvetica">Georgia</option>
	              <option id="Courier">Courier New</option>
	              <option id="Tnr">Times New Roman</option>
	              <option id="Verdana">Verdana</option>
	            </datalist>
	         </select>
	      </div>
	      <div class="col-md-2">
	         <select class="form-control" onchange="execCommandWithArg('fontSize', this.value);">
	            <datalist>
	              <option>1</option>
	              <option>10</option>
	              <option>12</option>
	              <option>14</option>
	              <option>16</option>
	              <option>18</option>
	              <option>20</option>
	              <option>24</option>
	              <option>28</option>
	              <option>32</option>
	            </datalist>
	         </select>
	      </div>
	      <div class="col-md-7">
	         <button class="btn btn-primary" onclick="execCmd('bold')"><b>B </b></button>
	         <button class="btn btn-primary" onclick="execCmd('italic')"><i>I</i></button>
	         <button class="btn btn-primary" onclick="execCmd('underline')"><u>U</u></button>
	         <button class="btn btn-primary" onclick="execCmd('strikeThrough')"><u>Strike Through</u></button>
	         <button class="btn btn-primary" onclick="execCmd('justifyLeft')"><u>Align Left</u></button>
	         <button class="btn btn-primary" onclick="execCmd('justifyCenter')"><u>Align Center</u></button>
	         <button class="btn btn-primary" onclick="execCmd('justifyRight')"><u>Align Right</u></button>
	         <button class="btn btn-primary" onclick="execCmd('justifyFull')"><u>Align Justify</u></button>
	         <button class="btn btn-primary" onclick="execCmd('indent')"><u>Indent</u></button>
	         <button class="btn btn-primary" onclick="execCmd('outdent')"><u>Outdent</u></button>
	      </div>
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
		<div id = "asset-attribute">
			ID: <text id = "selectedAsset" class = 'attr'></text><br />
			Position:<br /><text id = "pos" class = 'attr'></text><br />
			Size:<br /><text id = "siz" class = 'attr'></text><br />
			Angle:<text id = "ang" class = 'attr'></text>					
			<button id = "delete-asset">Delete asset</button>
		</div>
		<div id = "page-attribute">
			Page: <text id = "currentPage">1</text><br />
			R: <input type = "number" id = "R" min = "0" max = "255"/><br />
			G: <input type = "number" id = "G" min = "0" max = "255"/><br />
			B: <input type = "number" id = "B" min = "0" max = "255"/><br />
			<button id = "changeBG">change Bg</button>
			<button id = "delete-page">Delete page</button>
		</div>
		<div style = "float: left;">
			Selected asset in asset-picker: <text id = "wtf"></text><br />			
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
		<script>
			$(document).ready(function(){
				$('#addTxt').click(function(){
					var id = assetID + "-TEXT";
					$('#p-' + currentPage).append('<div class = "text-asset" id = "' + id + '"><div class = "rotate rotatable"><iframe name="texty" placeholder="Enter text ..."></iframe></div></div>');
					enableEditMode();
					// $('#' + id).resizable();
					// $('#' + id).children('div.rotate').draggable().rotatable();
					// <div class = "asset" id = "' + id + '"><div class = "rotate rotatable">
					// $('#p-' + currentPage).append('<iframe name = "texty"></iframe>');
					assetInteractability(id);
		   			//$("#z-" + currentPage).prepend("<li id = \"" + id + "-z\">" + id + "</li>");
				   	//$("#z-" + currentPage).children('#' + id + '-z').mousedown(function(){
					// 	displayAssetAttributes($('#' + id));
					// });			
					// alert('lol');
					
				});
			});
			function enableEditMode(){
         		texty.document.designMode = "on";
         		alert("Enable Edit Mode On");
         		// texty.document.designMode = "off";
         		// alert("Enable Edit Mode off");
      		}

		   function execCmd(command){
		      texty.document.execCommand(command, false, null);
      		alert("Butbut click");
		   }

		   function execCommandWithArg(command, arg) {
		      texty.document.execCommand(command, false, arg);
      		alert("Butbut click");
		   }
		</script>
	</body>
</html>