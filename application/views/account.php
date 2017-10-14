<!-- BBBBBBAAAAAAAAAAADDDDDDDDEEEEEEEEEEHHHHHHHH -->
<div class="container">
<div class=" p-4 my-4 bg-faded">
		 <div class="row">
            <div class="col-sm-6 col-md-4" style="margin: 5% 0% 2% 10%;">
					
                <img style= "width:125px; height:125px;" src = "<?php echo base_url('dp/'.$profile['dp']); ?>" alt="" class="img-rounded img-responsive" style="margin-top:25px;"/>
                <div id = "imgHERE" style= "width:125px; height:125px; border:solid thin black; margin-top:5%;">
                <img style="width:100%;height:100%; padding:35% 5% 5% 25%;" src = "" alt="new pic" class="img-rounded img-responsive" style="margin-top:25px;"/>
	            </div>
                <form action = "<?php echo base_url('changeDP'); ?>" enctype= "multipart/form-data" method = "POST">
                	<input type="file" name="image" required accept = "image/*" id = "imageChooser" style="margin-top:5%; "/><br />
                	<input type = "submit" name = "submit" value = "Change DP" style="width:125px; background-color:#e4b4b4; margin-top:1.5%;"/>
                </form>
				</div>				
			<div class="userstuff">
			<form action = "<?php echo base_url('updateAccount'); ?>" method = "POST" style="margin-left:50%;" >
			<br /><br />
			<input type="text" name="name" placeholder = "Name" value = "<?php echo $profile['name']; ?>" style="width:350%;" /><br /><br />	
			<input required type="password" name="curpassword" placeholder= "Current Password" style="width:350%;"/><br /><br />
			<input type="password" name="newpassword" placeholder= "New Password" style="width:350%;"/><br /><br />
			<input class="btn btn-lg btn-primary" style="background-color:#e4b4b4; margin-left:240%;" name = "submit" type="submit" />
			</form><br />
		</div>
		</div>
		
   <br /><br />
</div>
</div>
<script>
$(document).ready(function(){
	$("#imageChooser").change(function(event){		
		var tgt = event.target || window.event.srcElement, files = tgt.files;		
		var fr = new FileReader();
		fr.onload = function(){
			// $("#imgHERE").children().remove();
			$("#imgHERE").css('border', 'none').children('img').attr('src', fr.result);
		}
		fr.readAsDataURL(files[0]);
	});
});
</script>

