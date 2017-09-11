<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery-ui.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/style.css'); ?>" />
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/variables.js'); ?>"></script>		
		<?php
			echo $assignAssets;
		?>
	</head>
	<body onload = "onload()">
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
		<a href = '<?php echo site_url('MemoRecap/editor/'.$id); ?>'>Edit</a>
		<?php
			echo $script;
		?>
		<script>
			$(".page-button").click(function(){					//initialize	lipat ng page
				var page = $(this).attr("id");				//kunin ung pinindot
				$("#p-" + currentPage.toString()).hide();	//hide page and z-order of current page
				$("#z-" + currentPage.toString()).hide();		
				currentPage = page.substring(5);		
				$("#p-" + currentPage.toString()).show();	//show selected page and z-order
				$("#z-" + currentPage.toString()).show();
				$("#currentPage").html($(this).attr('id'));
			});
			function onload(){
				var getBack = currentPage;				
				for(var p = 0; p < pageCount; p++){
					if(currentPage != p){
						$("#p-" + currentPage.toString()).hide();
						$("#z-" + currentPage.toString()).hide();
						$("#p-" + p.toString()).show();
						$("#z-" + p.toString()).show();
					}
					currentPage = p;					
					if(assets[p].length > 0){							
						var assetsInThisPage = assets[p].substring(0, assets[p].length - 1).split("/");
						for(var i = 0; i < assetsInThisPage.length; i++){							
							$('#' + assetsInThisPage[i]).removeClass('ui-draggable');
							$('#' + assetsInThisPage[i]).removeClass('ui-draggable-handle');							
							$('#' + assetsInThisPage[i]).removeClass('ui-resizable');
							$('#' + assetsInThisPage[i] + ' div').remove();
						}
					}
				}
				$("#p-" + currentPage.toString()).hide();
				$("#z-" + currentPage.toString()).hide();
				currentPage = getBack;
				$("#p-" + currentPage.toString()).show();
				$("#z-" + currentPage.toString()).show();
			}			
		</script>
	</body>
</html>