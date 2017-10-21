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
			.sidenav {
			    height: 100%;
			    width: 0;
			    position: fixed;
			    z-index: 1;
			    top: 20;
			    left: 0;
			    background-color: #111;
			    overflow-x: hidden;
			    transition: 0.5s;
			    padding-top: 60px;
			}

			.sidenav a {
			    padding: 8px 8px 8px 32px;
			    text-decoration: none;
			    font-size: 25px;
			    color: #818181;
			    display: block;
			    transition: 0.3s;
			}

			.sidenav a:hover {
			    color: #f1f1f1;
			}

			.sidenav .closebtn {
			    position: absolute;
			    top: 0;
			    right: 25px;
			    font-size: 36px;
			    margin-left: 50px;
			}

			#main {
			    transition: margin-left .5s;
			    padding: 16px;
			}

			@media screen and (max-height: 450px) {
			  .sidenav {padding-top: 15px;}
			  .sidenav a {font-size: 18px;}
			}  		
.box {
  float: left;
  width: 50px;
  height: 50px;
  margin: 5px;
  border: 1px solid rgba(0, 0, 0, .2);
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

			<!-- 	<div id="mySidenav" class="sidenav">
				  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				  <h3>Assets</h3>
				  <a onclick="show('1');" ><span class="glyphicon glyphicon-user" data-toggle="tooltip" title="User Image"></a>
				  <a onclick="show('2');"><span class="glyphicon glyphicon-picture" data-toggle="tooltip" title="Background">Background</a>
				  <a onclick="show('3');"><span class="glyphicon glyphicon-heart" data-toggle="tooltip" title="Stickers">Stickers</a>
				  <a onclick="show('4');"><span class="glyphicon glyphicon-star" data-toggle="tooltip" title="Shapes">Shapes</a>
				  <a onclick="show('4');"><span class="glyphicon glyphicon-upload" data-toggle="tooltip" title="Uploads">Uploads</a>
			</div>
				<div class="col-md-2">
			  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&gt;</span> -->
					<!-- <div class="row" >
						<ul class="nav nav-tabs">
							<li class="active"> <button onclick="show('1');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-user"></span></button></li>
							<li><button onclick="show('2');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-picture"></span></button>	</li>
							<li><button onclick="show('3');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-heart"></span></button> </li>
							<li><button onclick="show('4');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-star"></span></button> </li>
						</ul>
					</div> -->
<!-- 				</div> -->

				<div class="col-md-8" >
					<div class="row">
						<div class="col-md-12" style="overflow:auto; border:solid gray 2px; height:80vh;">	
							<div id="divContent" style="zoom: 100%; height: 100%; width: 100%;">
								<div id = "workspace">
									<?php
										echo $loadWorkspace;
									?>			
								</div>
							</div>
							
						</div>					
					</div>
					<div class = "row">				
						<div class="col-md-12">	
							<div class = "row" id = "pagination-container">							
								<div class = "col-md-2">
									<button class="btn btn-default" id = "prevPage">&laquo;</button>
								</div>
								<div class = "col-md-8">
										<div id = "pagination" class = "pagination"></div>
								</div>
								<div class = "col-md-2">
									<button  class="btn btn-default" id = "nextPage">&raquo;</button>
								</div>							
							</div>
						</div>	
				
					</div>	
				</div>
		
		<div class="col-md-4" style="height:90vh;">
			<div id="first">
			<h2 align="center">Step<span class="label label-default">1</span></h2>	
			<h1>Select</h1>
			<div class="row">
				<div class="col-md-12">
					<div class="row" style="margin:auto; height:30vh; display:inline-block;">
						<h4>Background colors:</h4>
						<div class="box bgcolorbtn" data-color = '#ff5c5c' data-toggle="tooltip" title="#ff5c5c" style="background:#ff5c5c;"></div>
						<div class="box bgcolorbtn" data-color = '#ffbd4a' data-toggle="tooltip" title="#ffbd4a" style="background:#ffbd4a;"></div>
						<div class="box bgcolorbtn" data-color = '#fff952' data-toggle="tooltip" title="#fff952" style="background:#fff952;"></div>
						<div class="box bgcolorbtn" data-color = '#99e265' data-toggle="tooltip" title="#99e265" style="background:#99e265;"></div>
						<div class="box bgcolorbtn" data-color = '#35b729' data-toggle="tooltip" title="#35b729" style="background:#35b729;"></div>
						<div class="box bgcolorbtn" data-color = '#44d9e6' data-toggle="tooltip" title="#44d9e6" style="background:#44d9e6;"></div>
						<div class="box bgcolorbtn" data-color = '#2eb2ff' data-toggle="tooltip" title="#2eb2ff" style="background:#2eb2ff;"></div>
						<div class="box bgcolorbtn" data-color = '#5271ff' data-toggle="tooltip" title="#5271ff" style="background:#5271ff;"></div><br/><br/><br/>
						<div class="box bgcolorbtn" data-color = '#b760e6' data-toggle="tooltip" title="#b760e6" style="background:#b760e6;"></div>
						<div class="box bgcolorbtn" data-color = '#ff63b1' data-toggle="tooltip" title="#ff63b1" style="background:#ff63b1;"></div>
						<div class="box bgcolorbtn" data-color = '#000000' data-toggle="tooltip" title="#000000" style="background:#000000;"></div>
						<div class="box bgcolorbtn" data-color = '#666666' data-toggle="tooltip" title="#666666" style="background:#666666;"></div>
						<div class="box bgcolorbtn" data-color = '#a8a8a8' data-toggle="tooltip" title="#a8a8a8" style="background:#a8a8a8;"></div>
						<div class="box bgcolorbtn" data-color = '#d9d9d9' data-toggle="tooltip" title="#d9d9d9" style="background:#d9d9d9;"></div>
						<div class="box bgcolorbtn" data-color = '#ffffff' data-toggle="tooltip" title="#ffffff" style="background:#ffffff;"></div>
						<input type = "color" id = 'bgc' value = "#ffddcc" data-toggle="tooltip" title="Color Picker" style="width:100px; height:50px; margin: 5px;  border: 1px solid rgba(0, 0, 0, .2);" />
					</div>	
				</div>
			</div>
			<div class="row" style=" margin:auto; height:30vh;">
				<h4>Background Pictures:</h4>
					<div id="bac">
					</div>
					</div>		
					<div class = "row" style="height:10vh;">
						<div class="col-md-6">
							<button type="button" class="btn btn-default btn-md" id = "addPage">Add Page</button>					
						</div>
						<div class="col-md-6">
							<div class="pager" style="float:right;">
								<li><a onclick="show('second');" data-toggle="tab">Next</a></li>
							</div>	
						</div>
					</div>
			</div>	
			<div id="second">
				<h2 align="center">Step<span class="label label-default">2</span></h2>
				<ul class="nav nav-tabs">
							<li class="active"> <button onclick="show('1');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>User Image</button></li>
							<li><button onclick="show('3');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-heart"></span>Stickers</button></li>
							<li><button onclick="show('4');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-star"></span>Shapes</button></li>
							<li><button onclick="show('2');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-upload"></span>Uploads</button></li>
						</ul>
					<div id="assets">
						<?php
							echo $displayAssets;
						?>
					</div>
				<div class="pager" style="float:right; height:10vh;">
  				<li><a onclick="show('first');" data-toggle="tab">Previous</a></li>
				<li><a onclick="show('third');" data-toggle="tab">Next</a></li>
			</div>				
			</div>
	<!-- 			<div class="row">
				<div class="col-md-2" style="list-style:none;">
				<li id="z-order-container"><legend style="text-align:center;">Layers</legend> 
								<?php				
									echo $loadZOrder;
								?>
							</li>	
				</div>	
				<div class="col-md-8" >
						
				</div>
		
				<div class="col-md-2">
					<div class="row" style="height:2vh; margin-left:90px;">
								<button class = "btn btn-warning btn-sm" onclick = "back()">Back</button>
					</div> -->
				<!-- 	<div class="row">	
						<ul style="list-style:none;" id = "tools">					
							<li id="asset-attribute">
								<label>ID:</label> <text id = "selectedAsset" class = 'attr'></text><br />
								<label>Position:</label>&nbsp;<text id = "pos" class = 'attr'></text><br />
								<label>Size:</label>&nbsp;<text id = "siz" class = 'attr'></text><br />
								<label>Angle:</label>&nbsp;<text id = "ang" class = 'attr'></text><br/>		
								Selected asset in asset-picker: <text id = "wtf"></text><br/>
								<center>
									<button type="button" class="btn btn-danger btn-sm" id = "delete-asset" >Delete asset</button>
								</center>	
							</li>
							<li id="page-attribute">
								<label>Page:</label> <text id = "currentPage">1</text><br />
								<center>
									<input type = "color" id = 'bgc' value = "#ffddcc" style="width:50px; height:25px;" />
								</center>
								<div id="hexcolor" align="center">#ffddcc</div><br/> 			
									<div class="col-md-5">
										<button type="button" class="btn btn-primary btn-sm" id = "changeBG">Change Bg</button>&nbsp;<br/>
									</div>
									<div class="col-md-5">
										<button type="button" class="btn btn-danger btn-sm" id = "delete-page">Delete page</button>
									</div>
							</li>
						</ul>
						<div style="left: 10px; top: 50vh; z-index: 999; position: fixed;">		
							    <button type="button" value="Zoom out" OnClick="zoomOut();" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-minus"></span></button>
							    <hr />
								<button type="button" value="Orignal Size" OnClick="zoomOrig(true);"class="btn btn-default btn-sm">Original Size</button>
							    <hr />
								<button type="button" value="Zoom In" OnClick="zoomIn();" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button>
						</div>
					</div> -->
				<!-- </div> -->
<!-- 			</div>
			</div> -->
			<!-- </div> end ng second -->
			<div id="third">
				<h2 align="center">Step<span class="label label-default">3</span></h2>
				<div class="row" style="height:45vh;">
						<div class="col-md-6">							
							<button type="button" class="btn btn-success btn-lg" onclick = "saveScrapbook(false)">Save</button>
						</div>
						<div class="col-md-6">	
							<a href = '<?php echo base_url('editor/'.$id); ?>'  class="btn btn-success btn-lg" role="button">Edit</a>
						</div>
				</div>		
						<div class="row" style="height:45vh;">
						<div class="col-md-6">	
							<button type="button" id = 'saveAsImage' class="btn btn-info btn-lg">Download as image</button>			
						</div>				
						<div class="col-md-6">	
							<button type="button" id = 'shareToFB' class="btn btn-primary btn-lg">Share to facebook</button>
						</div>			
						</div>			
					</div>
			</div>
		</div> <!--end ng overall row-->
	</div> <!--end ng cointainer-->
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

			function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("first").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("first").style.marginLeft= "0";
}



		</script>
		<script type = "text/javascript" src = "<?php echo base_url('js/editor.js'); ?>"></script>
	</body>
</html>