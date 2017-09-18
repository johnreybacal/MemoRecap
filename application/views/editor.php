<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery-ui.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/style.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery.ui.rotatable.css'); ?>" />
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery-ui.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.ui.rotatable.min.js'); ?>"></script>
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
			R: <input type = "number" id = "R" min = "0" max = "255"/><br />
			G: <input type = "number" id = "G" min = "0" max = "255"/><br />
			B: <input type = "number" id = "B" min = "0" max = "255"/><br />
			<button id = "changeBG">chnage Bg</button>
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
			echo $functionalityScript;
		?>
		<script>							
			$('#save').click(function(){	//get x y and size of all assets in all pages
				var attr = '{"height":"' + $('#workspace').css('height') + '", "width":"' + $('#workspace').css('width') + '" , "pages":{';		
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
					attr += '"bg":"' + $('#p-' + p.toString()).css("background-color") + '"';
					// alert(assets[p]);
					if(assets[p].length > 0){//check kung merong asset sa page
						//kunin lahat ng assets sa isang page
						var assetsInThisPage = assets[p].substring(0, assets[p].length - 1).split("/");				
						//assets[p] => 0-1-2- => substring(0, assets[p].length - 1) => 0-1-2 => split("-") => [0, 1, 2]
						//		string 						inalis ung - sa dulo 					ginawang array
						for(var i = 0; i < assetsInThisPage.length; i++){//loop ng assets
							//alert(p + " " + assetsInThisPage[i]);							
							attr += ',';
						 	attr += '"' + assetsInThisPage[i] + '":{';
					 		var $this = $('#' + assetsInThisPage[i]);
						 	var thisPos = $this.position();
						 	var parPos = $this.parent().position();
						 	var x = thisPos.left - parPos.left;
						 	var y = thisPos.top - parPos.top;
						 	var angle;
					        var matrix = $this.children('div.rotate').css("-webkit-transform") ||
					            $this.css("-moz-transform") ||
					            $this.css("-ms-transform") ||
					            $this.css("-o-transform") ||
					            $this.css("transform");
					        if (matrix && matrix !== 'none'){
					            var values = matrix.split('(')[1].split(')')[0].split(',');
					            var a = values[0];
					            var b = values[1];
					            angle = Math.round(Math.atan2(b, a) * (180 / Math.PI));
					        }
					        else{
					            angle = 0;
					        }
					        if(angle < 0){
					        	angle = (180 + angle) + 180;
					        }
				     		attr += '"x": "' + x + '", "y": "' + y + '", ';
				     		attr += '"w": "' + $this.css('width') + '", "h": "' + $this.css('height') + '", ';
				     		attr += '"z": "' + $this.css('z-index') + '",';
				     		attr += '"a": "' + angle + '"}';
						}
					}
					attr += '}';
				}
				attr += '}}';
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
				var c = getScrapbookID();
			    $.ajax({
			    	url: "<?php echo base_url('MemoRecap/save'); ?>",
			    	type: 'POST',
			    	contentType: 'application/json',
			    	data: c + attr,
			    	dataType: 'json',
			    	success: function(data){
			    		alert(data);
			    	}
			    });	    
			});

			function getScrapbookID(url) {
			    if (!url) url = window.location.href;			    
				return url.substring(url.length-4, url.length);
			}

		</script>
	</body>
</html>