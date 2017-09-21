<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/jquery-ui.css'); ?>" />
		<link rel = "stylesheet" href = "<?php echo base_url('css/style.css'); ?>" />
		<style type="text/css">
			canvas{ border: solid thin black; }
		</style>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery-ui.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/variables.js'); ?>"></script>	
		<script type = "text/javascript" src = "<?php echo base_url('js/jquery.ui.rotatable.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/FileSaver.min.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/Blob.js'); ?>"></script>
		<script type = "text/javascript" src = "<?php echo base_url('js/canvas-toBlob.js'); ?>"></script>
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
		<a href = '<?php echo base_url('MemoRecap/editor/'.$id); ?>'>Edit</a>
		<button id = 'saveAsImage'>Download as image</button>
		<button id = 'shareToFB'>Share to facebook</button>
		<br />		
		<?php
			echo $script;
		?>
		<script>
			function toHex(n) {
				var hex = n.toString(16);
				while (hex.length < 2) {hex = "0" + hex; }
				return hex;
			}
			function gene(){				
				for(var counter = 0; counter < pageCount; counter++){
					$('body').append('<canvas id = "c-' + counter + '" height = "' + $('#workspace').css('height') + '" width = "' + $('#workspace').css('width') + '"></canvas>');
					var p = $('#p-' + counter);
					var c = document.getElementById('c-' + counter);
					var ctx = c.getContext("2d");
					var rgb = p.css('background-color').replace('rgb(', '').replace(')', '').split(',');
					var hex = '#' + toHex(Number(rgb[0])) + toHex(Number(rgb[1])) + toHex(Number(rgb[2]));
					ctx.fillStyle = hex;
					ctx.fillRect(-2,-2,Number($('#workspace').css('width').replace('px','')) + 2, Number($('#workspace').css('height').replace('px','')) + 2);
					if(assets[counter].length > 0){						
						var assetsInThisPage = assets[counter].substring(0, assets[counter].length - 1).split("/");
						for(var i = 0; i < assetsInThisPage.length; i++){							
							$('#' + assetsInThisPage[i]).children('div.rotate').children('img').attr('id', 'temp');
						    var img = document.getElementById('temp');
						    $('#temp').attr('id', '');			    			    
						    var left = Number($('#' + assetsInThisPage[i]).css('left').replace('px','')) - position.left;
						    var top = Number($('#' + assetsInThisPage[i]).css('top').replace('px','')) - position.top;
						    var width = Number($('#' + assetsInThisPage[i]).css('width').replace('px','')); 
						    var height = Number($('#' + assetsInThisPage[i]).css('height').replace('px',''));
						    if(left < 0){left *= -1;}if(top < 0){top *= -1;}						    
						    ctx.save();
						    ctx.translate(
						    	left + (width / 2), top + (height / 2)
					    	);		    	
						    ctx.rotate($('#' + assetsInThisPage[i]).data('angle') * Math.PI / 180);
						    ctx.drawImage(img, width / -2, height / -2, width, height);			    
						    ctx.restore();					
						}
					}
				}
				
			}

			function downloadAsPNG(){
				var page_counter = 1;
				for(var counter = 0; counter < pageCount; counter++){
					var canvas = document.getElementById('c-' + counter);
					canvas.toBlob(function(blob) {						
					    saveAs(blob, "page-" + (page_counter++) + ".png");
					});
					$('#c-' + counter).remove();
				}
			}

			function facebook(){
				var page_counter = 1;
				for(var counter = 0; counter < pageCount; counter++){
					var canvas = document.getElementById('c-' + counter);
					canvas.toBlob(function(blob) {						
					 	FB.getLoginStatus(function (response) {
					        console.log(response);
					        if (response.status === "connected") {
					            postImageToFacebook(response.authResponse.accessToken, "MemoRecap", "image/png", blob, window.location.href, (page_counter++));
					        } else if (response.status === "not_authorized") {
					            FB.login(function (response) {
					                postImageToFacebook(response.authResponse.accessToken, "MemoRecap", "image/png", blob, window.location.href, (page_counter++));
					            }, {scope: "publish_actions"});
					        } else {
					            FB.login(function (response) {
					                postImageToFacebook(response.authResponse.accessToken, "MemoRecap", "image/png", blob, window.location.href, (page_counter++));
					            }, {scope: "publish_actions"});
					        }
					    });
					});
					$('#c-' + counter).remove();
				}
			}

			function postImageToFacebook(token, filename, mimeType, imageData, message, mes) {
			    var fd = new FormData();
			    fd.append("access_token", token);
			    fd.append("source", imageData);
			    fd.append("no_story", true);

			    // Upload image to facebook without story(post to feed)
			    $.ajax({
			        url: "https://graph.facebook.com/me/photos?access_token=" + token,
			        type: "POST",
			        data: fd,
			        processData: false,
			        contentType: false,
			        cache: false,
			        success: function (data) {
			            console.log("success: ", data);

			            // Get image source url
			            FB.api(
			                "/" + data.id + "?fields=images",
			                function (response) {
			                    if (response && !response.error) {
			                        //console.log(response.images[0].source);

			                        // Create facebook post using image
			                        FB.api(
			                            "/me/feed",
			                            "POST",
			                            {
			                                "message": mes,
			                                "picture": response.images[0].source,
			                                "link": window.location.href,
			                                "name": '',
			                                "description": message,
			                                "privacy": {
			                                    value: 'SELF'
			                                }
			                            },
			                            function (response) {
			                                if (response && !response.error) {
			                                    /* handle the result */
			                                    console.log("Posted story to facebook");
			                                    console.log(response);
			                                }
			                            }
			                        );
			                    }
			                }
			            );
			        },
			        error: function (shr, status, data) {
			            console.log("error " + data + " Status " + shr.status);
			        },
			        complete: function (data) {
			            //console.log('Post to facebook Complete');
			        }
			    });
			}

			$('#saveAsImage').click(function(){
				gene();
				downloadAsPNG();
			});

			$('#shareToFB').click(function(){
				gene();
				facebook();
			});

			$(".page-button").click(function(){					//initialize	lipat ng page
				var page = $(this).attr("id");				//kunin ung pinindot
				$("#p-" + currentPage.toString()).hide();	//hide page and z-order of current page
				$("#z-" + currentPage.toString()).hide();		
				currentPage = page.substring(5);		
				$("#p-" + currentPage.toString()).show();	//show selected page and z-order
				$("#z-" + currentPage.toString()).show();				
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
							$('#' + assetsInThisPage[i]).removeClass('ui-draggable').removeClass('ui-draggable-handle').removeClass('ui-resizable').removeClass('asset');
							$('#' + assetsInThisPage[i]).children('div.rotate').css({'border': 'none'});
							// $('#' + assetsInThisPage[i] + ' div').remove();
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