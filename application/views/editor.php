<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery-ui.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/style.css'); ?>" />
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery-ui.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/variables.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/script.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/initialization.js'); ?>"></script>
		<?php
			echo $assignAssets;
		?>
	</head>
	<body>
		<div id = "assets">
			<ul id = "asset-picker">				
			<?php
				echo $displayAssets;
			?>
			</ul>					
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
		<!-- <input type = "file" id = "fileChooser" accept = "image/*" /> -->
		<div style = "float: left;">
			Position:<text id = "pos"></text><br />
			Size:<text id = "siz"></text><br />
			Selected Asset: <text id = "selectedAsset"></text><br />
			Current Page: <text id = "currentPage"></text><br />
		</div>
		<div style = "float: left;">
			Selected asset in asset-picker: <text id = "wtf"></text><br />
			<button id = "getAssetAtt">Get asset attributes</button>			
			<button id = "delete-asset">Delete asset</button>
			<button id = "delete-page">Delete page</button>
			<?php include "includes/imageUpload.php" ?>
			<button id = "save">Save</button>
		</div>
		<?php
			echo $script;
		?>
		<script>
			$('#save').click(function(){	//get x y and size of all assets in all pages
				var attr = "{";		
				var getBack = currentPage;
				for(var p = 0; p < pageCount; p++){//loop ng pages
					if(currentPage != p){//lilipat ng page kasi hindi makukuha ung x at y kapag hidden ung page na naglalaman sa asset
						$("#p-" + currentPage.toString()).hide();
						$("#z-" + currentPage.toString()).hide();
						$("#p-" + p.toString()).show();
						$("#z-" + p.toString()).show();
					}
					currentPage = p;
					if(p > 0){
						attr += ',';
					}
					attr += '"' + p + '":{';
					// alert(assets[p]);
					if(assets[p].length > 0){//check kung merong asset sa page
						//kunin lahat ng assets sa isang page
						var assetsInThisPage = assets[p].substring(0, assets[p].length - 1).split("/");				
						//assets[p] => 0-1-2- => substring(0, assets[p].length - 1) => 0-1-2 => split("-") => [0, 1, 2]
						//		string 						inalis ung - sa dulo 					ginawang array
						for(var i = 0; i < assetsInThisPage.length; i++){//loop ng assets
							//alert(p + " " + assetsInThisPage[i]);
							if(i > 0){
								attr += ',';
							}
						 	attr += '"' + assetsInThisPage[i] + '":{';
					 		var $this = $('#' + assetsInThisPage[i]);
						 	var thisPos = $this.position();
						 	var parPos = $this.parent().position();
						 	var x = thisPos.left - parPos.left;
						 	var y = thisPos.top - parPos.top;
				     		attr += '"x": "' + x + '", "y": "' + y + '", ';
				     		attr += '"w": "' + $this.css('width') + '", "h": "' + $this.css('height') + '", ';
				     		attr += '"z": "' + $this.css('z-index') + '" }'
						}
					}
					attr += '}';
				}
				attr += '}';
				//get back to current page
				$("#p-" + currentPage.toString()).hide();
				$("#z-" + currentPage.toString()).hide();
				currentPage = getBack;
				$("#p-" + currentPage.toString()).show();
				$("#z-" + currentPage.toString()).show();
				// var obj = JSON.parse(attr);
				// alert(attr);
				//alert(attrjson);
				//alert(JSON.stringify(attrjson));		
				var c = getParameterByName();
			    $.ajax({
			    	url: "<?php echo base_url('index.php/MemoRecap/save'); ?>",
			    	type: 'POST',
			    	contentType: 'application/json',
			    	data: c + attr,
			    	dataType: 'json'
			    });	    
			});

			function getParameterByName(url) {
			    if (!url) url = window.location.href;
			    // name = name.replace(/[\[\]]/g, "\\$&");
			    // alert(name + ' ' + url);
			    // var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
			    //     results = regex.exec(url);
			    // if (!results) return null;
			    // if (!results[2]) return '';
				return url.substring(url.length-4, url.length);		
			    // return decodeURIComponent(results[2].replace(/\+/g, " "));
			}

		</script>
	</body>
</html>