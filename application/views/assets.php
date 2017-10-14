<div class="container bg p-4 my-4" >

	<br />

	<br />


	<h2 class="landi hedest text-center ">User Images</h2><br />
	
	<div class="col-md-10 bg-overlay" style = " padding: 7px; overflow: auto; margin-left:10%; margin-right:10%; width: 90%; height:167px;  list-style: none;">
		<?php foreach($user_images as $ui): ?>
			<li style = "float: left;">
				<div style = "width:150px;height:150px;border:solid thin black; margin: 3px;">
					<img style = "width:150px;height:150px;" src = "<?php echo base_url('uploaded_assets/'.$ui['category'].$ui['file']); ?>" />
				</div>
			</li>
		<?php endforeach;?>
		
		</div>
	<br />

<h2 class="landi hedest text-center ">Stickers</h2><br />
	<div class="col-md-10 bg-overlay" style = " padding: 7px; overflow: auto; margin-left:10%; margin-right:10%; width: 90%; height:167px;  list-style: none;">
		<?php foreach($stickers as $st): ?>
			<li style = "float: left;">
				<div style = "width:150px;height:150px;border:solid thin black; margin: 3px">
					<img style = "width:150px;height:150px;" src = "<?php echo base_url('uploaded_assets/'.$st['category'].$st['file']); ?>" />
				</div>
			</li>
		<?php endforeach; ?>
	</div>
<br />
	
<h2 class="landi hedest text-center ">Backgrounds</h2><br />
	<div class="col-md-10 bg-overlay" style = " padding: 7px; overflow: auto; margin-left:10%; margin-right:10%; width: 90%; height:167px;  list-style: none;">
		<?php foreach($backgrounds as $bg): ?>
			<li style = "float: left;">
				<div style = "width:150px;height:150px;border:solid thin black; margin: 3px">
					<img style = "width:150px;height:150px;" src = "<?php echo base_url('uploaded_assets/'.$bg['category'].$bg['file']); ?>" />
				</div>
			</li>
		<?php endforeach; ?>
	</div>
	<br />
	
<h2 class="landi hedest text-center ">Shapes</h2><br />
	<div class="col-md-10 bg-overlay" style = " padding: 7px; overflow: auto; margin-left:10%; margin-right:10%; width: 90%; height:167px;  list-style: none;">
		<?php foreach($shapes as $sh): ?>
			<li style = "float: left;">
				<div style = "width:150px;height:150px;border:solid thin black; margin: 3px">
					<img style = "width:150px;height:150px;" src = "<?php echo base_url('uploaded_assets/'.$sh['category'].$sh['file']); ?>" />
				</div>
			</li>
		<?php endforeach; ?>
	</div>
	<br />

	<!-- <h2>Upload your very own.</h2>
	<h4>Sharing is caring.</h4> -->
	
</div>	
	
	<button id="uploadButton" class="hed landi"
	style="padding:1% 3% 1% 3%;
	box-shadow: 10px 10px 15px #2e2e1f;
	border-radius:15px;
	background-color:#ffe6b3;
	float: right;
	right: 25px;
	bottom:150px;
	position: fixed;
	z-index:0;">
	Upload
	</button>
	<div id="uploadModal" class="modal">
		<div class="container" style="width: 500px;">
			<div class="modal-content">
			<div class="modal-header" style="background-color:#ffe6b3;">
				<span id = "uclose" class="close">&times;</span>
				<h4 class="hed">Sharing is caring</h4>
			</div>
			<form method= "POST" enctype= "multipart/form-data" action = "<?php echo base_url('uploadAsset'); ?>">
			<br/>
			<center>
			<div id = "imgHERE" style = "border:solid thin black; height:150px; width: 150px;"><img src = '' alt = "pick an image" style = "width: 100%; height: 100%" /></div>
			<input type = "file" name = "image" accept = "image/*" id = "imageChooser" required /><br/>
			Choose a category for this asset:<br />
			<input type = "radio" name = "category" value = "user_images/" required />Personal Image<br />
			<input type = "radio" name = "category" value = "backgrounds/" required />Background<br />
			<input type = "radio" name = "category" value = "stickers/" required />Sticker<br />
			<input type = "radio" name = "category" value = "shapes/" required />Shape<br />
			Privacy:<br />
			<input type = "radio" name = "privacy" value = "public" required />Public<br />
			<input type = "radio" name = "privacy" value = "private" required checked = "true"/>Private<br />
			</center>
			<div class="modal-footer" style="background-color:#ffe6b3;">
				<?php
					if($logged_in){
						echo '<input type = "submit" name = "imageSubmit" value = "Upload" id = "imageSubmit"/>';
					}else{
						echo '<h5>Please login first</h5>';
					}
				?>			
			</div>
			</form>
		</div>
	</div>
	</div>
	
	<script>// When the user clicks the button, open the modal 
// Get the modal
var umodal = document.getElementById('uploadModal');

// Get the button that opens the modal
var ubtn = document.getElementById("uploadButton");

// Get the <span> element that closes the modal
var uspan = document.getElementById("uclose");
ubtn.onclick = function() {
    umodal.style.display = "block";
}
uspan.onclick = function() {
    umodal.style.display = "none";
}	
</script>
<script>
$(document).ready(function(){
	$("#imageChooser").change(function(event){		
		var tgt = event.target || window.event.srcElement, files = tgt.files;		
		var fr = new FileReader();
		fr.onload = function(){
			// $("#imgHERE").children().remove();
			$("#imgHERE").children('img').attr('src', fr.result);
		}
		fr.readAsDataURL(files[0]);
	});
});
</script>
