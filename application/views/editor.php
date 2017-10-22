	  <div class="container-fluid">
			<div class="row">
				<div class="col-md-8" >
					<div class="row">
						<div class="col-md-12" style="overflow:auto; border:solid gray 2px; height:80vh;">
							<div id="divContent" style="zoom: 100%; height: 100%; width: 100%;">
								<div id = "workspace" data-selected = "">
									<?php
										echo $loadWorkspace;
									?>			
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
					<div class = "row">				
						<div class="col-md-12">	
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
		
		<div class="col-md-4" style="height:90vh;">
			<div id="first">
				<h2>Step&nbsp;<span class="label label-default" style=" border-radius: 40px;">1</span></h2>	
				<h1  align="center">Select</h1>
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
							<div class="box bgcolorbtn" data-color = '#5271ff' data-toggle="tooltip" title="#5271ff" style="background:#5271ff;"></div>
							<div class="box bgcolorbtn" data-color = '#b760e6' data-toggle="tooltip" title="#b760e6" style="background:#b760e6;"></div>
							<div class="box bgcolorbtn" data-color = '#ff63b1' data-toggle="tooltip" title="#ff63b1" style="background:#ff63b1;"></div>
							<div class="box bgcolorbtn" data-color = '#000000' data-toggle="tooltip" title="#000000" style="background:#000000;"></div>
							<div class="box bgcolorbtn" data-color = '#666666' data-toggle="tooltip" title="#666666" style="background:#666666;"></div>
							<div class="box bgcolorbtn" data-color = '#a8a8a8' data-toggle="tooltip" title="#a8a8a8" style="background:#a8a8a8;"></div>
							<div class="box bgcolorbtn" data-color = '#d9d9d9' data-toggle="tooltip" title="#d9d9d9" style="background:#d9d9d9;"></div>
							<div class="box bgcolorbtn" data-color = '#ffffff' data-toggle="tooltip" title="#ffffff" style="background:#ffffff;"></div>
							<input type = "color" id = 'bgc' value = "#ffddcc" data-toggle="tooltip" title="Color Picker" style="width:40px; height:40px; margin: 5px;  border: 1px solid rgba(0, 0, 0, .2);" />
						</div>						
					</div>
				</div>
				<div class="row" style=" margin:auto; height:35vh;">
					<h4>Background Pictures:</h4>
					<div id="bac">
						<?php echo $bg; ?>
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
				<h2>Step&nbsp;<span class="label label-default" style=" border-radius: 40px;">2</span></h2>
				<h1 align="center">Style your Scrapbook.</h1>
				<ul class="nav nav-tabs">
							<li class="active"> <button onclick="show('user_images');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>User Image</button></li>
							<li><button onclick="show('stickers');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-heart"></span>Stickers</button></li>
							<li><button onclick="show('shapes');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-star"></span>Shapes</button></li>
							<li><button onclick = "document.getElementById('uploadModal').style.display = 'block';" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-upload"></span>Upload</button></li>
						</ul>
					<div id="assets" data-selected = "">
						<?php
							echo $ui;
							echo $st;
							echo $sh;
						?>
					</div>
					<div class="row" align="center" style="height:25vh; padding-top:10px;" >
					<button class="accordion" >Layers</button>
						<div class="panel" id = "z-order-container">
							<?php echo $loadZOrder; ?>
						</div>
					</div>
						<div class="row" style="height:5vh;">	
								<div class="col-md-6" align="center">
									<button type="button" class="btn btn-danger btn-sm" id = "delete-asset" >Delete asset</button>
								</div>
								<div class="col-md-6" align="center">
									<button type="button" class="btn btn-danger btn-sm" id = "delete-page">Delete page</button>
								</div>
						</div>		
				<div class="pager" style="float:right; height:10vh;">
  				<li><a onclick="show('first');" data-toggle="tab">Previous</a></li>
				<li><a onclick="show('third');" data-toggle="tab">Next</a></li>
			</div>				
			</div>

			<!-- </div> end ng second -->
			<div id="third">
				<h2>Step&nbsp;<span class="label label-default" style=" border-radius: 40px;">3</span></h2>
				<h1 align="center">Save your work!</h1>
				<div class="row" style="height:40vh;">						
				<br/><br/><br/><button type="button" class="btn btn-success btn-lg" onclick = "saveScrapbook(false)">Save<span class="glyphicon glyphicon-save"></span></button>
				</div>
				<div class = "row" style="height:5vh;">
					<a href = "<?php echo base_url('editor/advanced/'.$id); ?>">Use our advanced editor</a>
				</div>
				<div class="row" style="height:20vh;">
					<div class="col-md-6">	
						<button type="button" id = 'saveAsImage' class="btn btn-info btn-lg">Download as image<span class="glyphicon glyphicon-download"></span></button>			
					</div>				
					<div class="col-md-6">	
						<button type="button" id = 'shareToFB' class="btn btn-primary btn-lg">Share to facebook<span class="glyphicon glyphicon-share-alt"></span></button>
					</div>			
				</div>			
				<div class="pager" style="float:right; height:10vh;">
  				<li><a onclick="show('second');" data-toggle="tab">Previous</a></li>				
			</div>
			</div>
			</div>
		</div> <!--end ng overall row-->
	</div> <!--end ng cointainer-->
		<?php					
			echo $loadPagination;
		?>				
<script>
var acc = document //z-orders
.getElementsByClassName("accordion");

var i;

for (i = 0; i < acc.length; i++) {
acc[i].onclick = function(){
  this.classList.toggle("active");
  this.nextElementSibling.classList
  .toggle("show");
  }
}
</script>		