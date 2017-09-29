<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery-ui.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/style.css'); ?>" />		
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.js'); ?>"></script>
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
		<a href = '<?php echo base_url('editor/'.$id); ?>'>Edit</a>
		<button id = 'saveAsImage'>Download as image</button>
		<button id = 'shareToFB'>Share to facebook</button>
		<br />		
		<?php
			echo $script;
		?>		
		<script type = "text/javascript" src = "<?php echo base_url('js/view.js'); ?>"></script>
	</body>
</html>