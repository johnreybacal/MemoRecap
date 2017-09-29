<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery-ui.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/style.css'); ?>" />	
		<link rel = "stylesheet" href = "<?php echo base_url('css/bootstrap.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/bootstrap.min.css'); ?>" />	
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery-ui.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/variables.js'); ?>"></script>	
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.ui.rotatable.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/FileSaver.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/Blob.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/canvas-toBlob.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/globals.js'); ?>"></script>
		<?php
			echo $assignAssets;
		?>
		<style>
			body{
				background-color: #73bdbe;
				}
		</style>
	</head>
	<body onload = "onload()">
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
			<div class="row">
				<div class="col-md-9">
					<div id="divContent" style="zoom: 100%">
						<div id = "workspace">
							<?php
								echo $loadWorkspace;
							?>			
						</div>		
					</div>
				</div>
				<div class="col-md-3">
					<div id = "pagination-container">
						<ol id = "pagination">
							<?php					
								echo $loadPagination;
							?>
						</ol>
					</div>
					&nbsp;<button><a href = '<?php echo base_url('MemoRecap/editor/'.$id); ?>'>Edit</a></button><br/>
					<br/><button id = 'saveAsImage' class="btn btn default">Download as image</button><br/>
					<br/><button id = 'shareToFB' class="btn btn default">Share to facebook</button>
					<br /><br/>
					<button type="button" value="Zoom In" OnClick="return ZoomIn();" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button>
					<button type="button" value="Orignal Size" OnClick="return Zoomorg();"class="btn btn-default btn-sm">Original Size</button>
				    <button type="button" value="Zoom out" OnClick="return ZoomOut();" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-minus"></span></button>			
				</div>
			</div>	
		</div>		
		<?php
			echo $script;
		?>
		<script type = "text/javascript" src = "<?php echo base_url('js/view.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/Zoom.js'); ?>"></script>
	</body>
</html>