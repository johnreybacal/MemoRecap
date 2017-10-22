		<?php
			echo $script;			
		?>
		<script>		
			saveBeforeUnload = true;
			function saveScrapbook(leaveFlag){
				console.log('save, leaveFlag: ' + leaveFlag);
				save("<?php echo base_url('save'); ?>", "<?php echo $id; ?>", leaveFlag);
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
				closeModal('back');
			});
			document.getElementById("bclose").onclick = closeModal('back');
			document.getElementById("uclose").onclick = closeModal('upload');
			function closeModal(what){
			    document.getElementById(what + 'Modal').style.display = "none";				
			}
			window.onclick = function(event) {
			    if (event.target == document.getElementById('backModal')) {
			        document.getElementById('backModal').style.display = "none";
			    }
			    if (event.target == document.getElementById('uploadModal')) {
			        document.getElementById('uploadModal').style.display = "none";
			    }
			}
			function show(elementId){ 
				$('#' + elementId).show().siblings().hide();
				if(elementId == 'first'){
					$('.asset').fadeOut();
				}else{
					$('.asset').fadeIn();
				}
			}

			function openNav() {
			    document.getElementById("mySidenav").style.width = "250px";
			    document.getElementById("first").style.marginLeft = "250px";
			}

			function closeNav() {
			    document.getElementById("mySidenav").style.width = "0";
			    document.getElementById("first").style.marginLeft= "0";
			}

			$("#imageChooser").change(function(event){						
				// console.log($(this).val().toString().substring($(this).val().toString().lastIndexOf('\\') + 1));
				var tgt = event.target || window.event.srcElement, files = tgt.files;		
				var fr = new FileReader();
				fr.onload = function(){
					// $("#imgHERE").children().remove();
					// alert(fr.result);
					$("#imgHERE").children('img').attr('src', fr.result);
				}
				fr.readAsDataURL(files[0]);
			});
			$('#uploadForm').submit(function(evt){	
				var cat = $('input[name="category"]:checked').val();
				var val = $('#imageChooser').val().toString().substring($('#imageChooser').val().toString().lastIndexOf('\\') + 1);		
				evt.preventDefault();
				// alert(cat + val);
				var url = $(this).attr('action');
				var formData = new FormData($(this)[0]);
				$.ajax({
					url: url,
					type: "POST",
					data: formData,
					processData: false,
					contentType: false,
					success: function(data){
						console.log('upload: ' + data);
						if(cat.substring(0, cat.length - 1) == 'backgrounds'){
							$('#' + cat.substring(0, cat.length - 1)).children('ul.asset-picker').append('<li><div class="bg-asset box" id="' + data + '"><img src = "' + '<?php echo base_url('uploaded_assets/'); ?>' + cat + val + '" /></div></li>');
							$('#' + data).click(function(){								
								$('#p-' + currentPage).css({'background-image': 'url("' + $('#' + data).children('img').attr('src') + '")'});
								$('#p-' + currentPage).attr('data-bg', data);
							});
						}else{
							$('#' + cat.substring(0, cat.length - 1)).children('ul.asset-picker').append('<li><div class="first ui-draggable ui-draggable-handle" id="' + data + '"><img src = "' + '<?php echo base_url('uploaded_assets/'); ?>' + cat + val + '" /></div></li>');							
							$('#' + data).draggable({
								helper: "clone", revert: "invalid", zIndex: 999,
								scroll: false,//para mag-clone from asset picker to workspace
								start: function(){
									zoomOrig(false);
								}
						    }).mousedown(function(){
						    	$("#assets").attr("data-selected", data);
						    });
						}
					},
					error: function(data){
						console.log('upload: ' + data);
					}
				});
				$('#uploadModal').hide();
			});

		</script>
		<script type = "text/javascript" src = "<?php echo base_url('js/editor.js'); ?>"></script>
	</body>
</html>
