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
	</head>
	<body onload = "onload()">
		<div class="loader"></div>
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '1969380923309252',
		      xfbml      : true,
		      version    : 'v2.10'
		    });
		    FB.AppEvents.logPageView();
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="container-fluid">
			<div class="row" style="margin: 0px auto; height:90vh;">
				<div class="col-md-10"  class="scrollbar" id="style-1" style="overflow:auto; height:90vh;">
					<div class="row" >
						<div class="col-md-11" >
							<div id="divContent" style="zoom: 100%">
								<div id = "workspace" style="margin: 10% auto; position:relative; height:80vh;">
									<?php
										echo $loadWorkspace;
									?>			
								</div>
							</div>
						</div>
								

						<div  class="col-md-1" style="border: solid thin white;z-index:1000; position:relative; left: 20px; top: 20px">
							<!-- <br/><br/><br/><br/><br/> -->
						    <button type="button" value="Zoom out" OnClick="zoomOut();" class="btn btn-default btn-md"><span class="glyphicon glyphicon-minus"></span></button>
						    <hr />
							<button type="button" value="Orignal Size" OnClick="zoomOrig();"class="btn btn-default btn-sm">Original Size</button>
						    <hr />
							<button type="button" value="Zoom In" OnClick="zoomIn();" class="btn btn-default btn-md"><span class="glyphicon glyphicon-plus"></span></button>
						</div>
					</div>
				</div>
	
				<div class="col-md-2" style="height:90vh;">	
					<div class="row" style="height:45vh;">
						<div style="margin: auto;">							
							<a href = '<?php echo base_url('editor/'.$id); ?>'  class="btn btn-success btn-lg" role="button">Edit</a>
							<button type="button" id = 'saveAsImage' class="btn btn-info btn-lg">Download as image</button>						
							<button type="button" id = 'shareToFB' class="btn btn-primary btn-lg">Share to facebook</button>
						</div>							
					</div>
					<div class="row" align="center" style="height:45vh;">
					</div>
						<div style="margin: auto;">
					</div>								
				</div>
				<div class="row" style="height:10vh;">
					<div id = "pagination-container" class="col-md-10" align="center">
						<button class="btn btn-default" id = "prevPage">&laquo;</button>&nbsp;
						<ol id = "pagination" class = "pagination">
				
						</ol>
						<button class="btn btn-default" id = "nextPage">&raquo;</button>					
					</div>	
				</div>
			</div>

		<!-- 	<div class="container-fluid" style="height:10vh;"> -->
				<!-- <div class="row">
				<div class="col-md-10" align="center"> -->
					<!-- <center>
					<button class="btn btn-default" id = "prevPage">&laquo;</button>
					<ol class = "pagination">
						<?php					
							echo $loadPagination;
						?>				
					</ol>
					<button class="btn btn-default" id = "nextPage">&raquo;</button>
					</center> -->
			<!-- 	</div>
				</div>
		</div> -->
			<!-- </div> -->	
		<?php					
			echo $loadPagination;
		?>
		<?php
			echo $script;
		?>		
		<script type = "text/javascript" src = "<?php echo base_url('js/view.js'); ?>"></script>
	</body>
</html>