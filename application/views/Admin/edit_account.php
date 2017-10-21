	<form action = "<?php echo base_url('Admin/editAdmin'); ?>" method = "POST" style="margin-left:150px;" >		
		<input type="text" name="name" placeholder = "Name" value = "<?php echo $admin['name']; ?>" /><br />
		<input required type="password" name="curpassword" placeholder= "Current Password" /><br />
		<input type="password" name="newpassword" placeholder= "New Password" /><br />
		<input name = "submit" type="submit" />
	</form>
	<img src = "<?php echo base_url('dp/'.$admin['dp']); ?>" id = "imgHERE" border = "1" />
	<form action = "<?php echo base_url('Admin/changeDP'); ?>" enctype= "multipart/form-data" method = "POST">
		<input type="file" name="image" required accept = "image/*" id = "imageChooser" /><br />
		<input type = "submit" name = "submit" value = "change dp" />
	</form>

	<script>
		$(document).ready(function(){
			$("#imageChooser").change(function(event){		
				var tgt = event.target || window.event.srcElement, files = tgt.files;		
				var fr = new FileReader();
				fr.onload = function(){
					// $("#imgHERE").children().remove();
					$("#imgHERE").css('border', 'none').attr('src', fr.result);
				}
				fr.readAsDataURL(files[0]);
			});
		});
	</script>