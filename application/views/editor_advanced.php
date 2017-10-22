		<div class="container-fluid" >
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12" style="overflow:auto; border:solid gray 2px; height:90vh;">
							<div id="divContent" style="zoom: 100%; height: 100%; width: 100%;">
								<div id = "workspace" data-selected = "">
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
							<li class="active"> <button onclick="show('user_images');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-user"></span></button></li>
							<li><button onclick="show('backgrounds');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-picture"></span></button>	</li>
							<li><button onclick="show('stickers');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-heart"></span></button> </li>
							<li><button onclick="show('shapes');" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-star"></span></button> </li>
							<li><button onclick = "document.getElementById('uploadModal').style.display = 'block';" class="btn btn-default" data-toggle="tab"><span class="glyphicon glyphicon-upload"></span>Upload</button></li>
						</ul>
					</div>
					<div id="assets" class = "row">
						<?php
							echo $ui;
							echo $bg;
							echo $st;
							echo $sh;
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