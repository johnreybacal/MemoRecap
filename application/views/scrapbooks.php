<br/>
<style type="text/css">
	.pointer{
		cursor: pointer;
	}
</style>	
<!-- start of editors -->
	<div class="w3-row-padding w3-center">
      <div class="card-img-overlay ">
	        <h2 class="card-title text-shadow text-white text-uppercase ">Editors Picks</h2>
	        <p class="parabooks text-shadow text-white">The works featured here are chosen by the editors as those best shows
				or endorses the beauty and functionalities of this website.
				</p>
			<a href="<?php echo base_url('Scrapbooks/Editors_Pick'); ?>" class="btn btn-secondary">View this gallery!</a>
		</div>
      <div class="w3-col m4">
        <img src = "<?php echo base_url('css/images/feps.jpg'); ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge w3-margin-bottom" alt="pic 1">
        <div class="w3-container">
        <h4><b>Title</b></h4>
        <a href="#"><h6>Owner</h6></a>
          <div class="row">
            <div class="w3-col m6" style="float: left;">          
              <p>
            32&nbsp;<span class="glyphicon glyphicon-heart" style="margin: 0 30px 0 0;"></span>
            31&nbsp;<span class= "glyphicon glyphicon-eye-open"></span>
            </p>
            </div>
          </div>
          <div>
            <h5>Description</h5>
          </div>
        </div>
      </div>
<!-- end of 1st -->
   </div> <!--close tag -->

   <!-- start of featured -->

   <div class="w3-row-padding w3-center">
      <div class="card-img-overlay">
        <h2 class="card-title text-shadow text-white text-uppercase mb-0">Featured Works</h2>
        <p class="parabooks text-shadow text-white">The works featured here have the most views/likes by fellow users of this website,
			all of which shows aesthetics and life.
			</p>
        <a href="<?php echo base_url('Scrapbooks/Featured_Works'); ?>" class="btn btn-secondary">View this gallery!</a>
      </div>
      <div class="w3-col m4">
        <img src = "<?php echo base_url('css/images/feps.jpg'); ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge w3-margin-bottom" alt="pic 1">
        <div class="w3-container">
        <h4><b>Title</b></h4>
        <a href="#"><h6>Owner</h6></a>
          <div class="row">
            <div class="w3-col m6" style="float: left;">          
              <p>
            32&nbsp;<span class="glyphicon glyphicon-heart" style="margin: 0 30px 0 0;"></span>
            31&nbsp;<span class= "glyphicon glyphicon-eye-open"></span>
            </p>
            </div>
          </div>
          <div>
            <h5>Description</h5>
          </div>
        </div>
      </div>
<!-- end of 1st fw-->
   </div> <!--close tag -->

   <!-- start of Recent -->

   <div class="w3-row-padding w3-center">
      <div class="card-img-overlay">
        <h2 class="card-title text-shadow text-white text-uppercase mb-0">Latest Works</h2>
			        <p class="parabooks text-shadow text-white">The works featured here are the latest products from the users
						and are rising to the top.
						</p>
			        <a href="<?php echo base_url('Scrapbooks/Latest_Works'); ?>" class="btn btn-secondary">View this gallery!</a>
      </div>
      <div class="w3-col m4">
        <img src = "<?php echo base_url('css/images/feps.jpg'); ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge w3-margin-bottom" alt="pic 1">
        <div class="w3-container">
        <h4><b>Title</b></h4>
        <a href="#"><h6>Owner</h6></a>
          <div class="row">
            <div class="w3-col m6" style="float: left;">          
              <p>
            32&nbsp;<span class="glyphicon glyphicon-heart" style="margin: 0 30px 0 0;"></span>
            31&nbsp;<span class= "glyphicon glyphicon-eye-open"></span>
            </p>
            </div>
          </div>
          <div>
            <h5>Description</h5>
          </div>
        </div>
      </div>
<!-- end of 1st lw-->      
   </div> <!--close tag -->


<!-- Modal for full size images on click-->
   <div id="modal01" class="w3-modal " onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" style="margin-top: 60px;" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-opacity w3-display-right w3-transparent ">
    <img id="img01" class=" cursor w3-round-xlarge w3-image" style="width: auto;">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

 
<script type="text/javascript">
	function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>