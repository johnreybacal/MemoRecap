<br/>
<style type="text/css">
	.pointer{
		cursor: pointer;
	}
  .user{
    color: #576b95;
  }
  .left{
    float: left;
  }
  .right{
    float: right;
  }
  .size{
    font-size: 4%;
  }
  .bgimg-4, .bgimg-5, .bgimg-6 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-4 {
    background-image: url('css/images/4.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-5 {
    background-image: url("css/images/5.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-6 {
    background-image: url("css/images/6.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-4, .bgimg-5, .bgimg-6 {
        background-attachment: scroll;
    }
}
</style>	
<!-- start of editors -->
	<div class="w3-row-padding w3-center" style="margin: 7% 0 0 0;">
      <div class="card-img-overlay ">
	        <h2 class=" text-shadow text-white text-uppercase ">Editors Picks</h2>
	        <p class="parabooks text-shadow text-white">The works featured here are chosen by the editors as those best shows
				or endorses the beauty and functionalities of this website.
				</p>
			
		</div>
      <?php foreach($editors_pick as $ep): ?>
      <div class="w3-col m4 w3-border" style="background-color: #fefefe!important;">
        <img src = "<?php echo $ep['first_page']; ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge" alt="The mist over the mountains">
        <div class="w3-container w3-margin-top">
        <h3><b><?php echo $ep['name']; ?></b></h3>
         <h1><a class="user left" href = "<?php echo base_url('Profile/'.$ep['username']); ?>"><?php echo $ep['username']; ?></a></h1>
          <div class="row">
            <div class="w3-col m12" style="float: left;">          
              <h3 >
                <span class="glyphicon glyphicon-heart-empty left" style="color: red;"></span>
                <span class="w3-margin-left left" style="color: #111111;"><?php echo $ep['likes']; ?></span>
                <span class="glyphicon glyphicon-eye-open right w3-margin-left" style="color: black;"></span>
                <span class="right"><?php echo $ep['view_counter']; ?></span>&nbsp;</h3>
            </div>
          </div>
          <div>
            <h5><i><?php echo $ep['description']; ?></i></h5>
          </div>
        </div>
      </div>
    <?php endforeach; ?> 
    <a  class="right w3-xlarge w3-black w3-hover-white w3-wide w3-animate-opacity" href="<?php echo base_url('Scrapbooks/Editors_Pick'); ?>">View this gallery!</a>
<!-- end of 1st -->
   </div> <!--close tag -->


<div class="bgimg-6 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Featured<span class="w3-hide-small">&nbsp;</span>Scrapbooks</span>
    
  </div>
</div>
   <!-- start of featured -->

   <div class="w3-row-padding w3-center" style="margin: 5% 0 0 0;">
      <div class="card-img-overlay">
        <h2 class="card-title text-shadow text-white text-uppercase mb-0">Featured Works</h2>
        <p class="parabooks text-shadow text-white">The works featured here have the most views/likes by fellow users of this website,
			all of which shows aesthetics and life.
			</p>
        
      </div>
     <?php foreach($featured_works as $fw): ?>
      <div class="w3-col m4 w3-border" style="background-color: #fefefe!important;">
        <img src = "<?php echo $fw['first_page']; ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge" alt="The mist over the mountains">
        <div class="w3-container">
        <h3 class="w3-margin-top"><b><?php echo $fw['name']; ?></b></h3>
         <h1><a class="user left" href = "<?php echo base_url('Profile/'.$fw['username']); ?>"><?php echo $fw['username']; ?></a></h1>
          <div class="row">
            <div class="w3-col m12" style="float: left;">          
              <h3 >
                <span class="glyphicon glyphicon-heart-empty left" style="color: red;"></span>
                <span class="w3-margin-left left" style="color: #111111;"><?php echo $fw['likes']; ?></span>
                <span class="glyphicon glyphicon-eye-open right w3-margin-left" style="color: black;"></span>
                <span class="right"><?php echo $fw['view_counter']; ?></span>&nbsp;</h3>
            </div>
          </div>
          <div>
            <h5><i><?php echo $fw['description']; ?></i></h5>
          </div>
        </div>
      </div>
    <?php endforeach; ?> 
<!-- end of 1st fw-->
        <a  class="right w3-xlarge w3-black w3-hover-white  w3-wide w3-animate-opacity" href="<?php echo base_url('Scrapbooks/Featured_Works'); ?>">View this gallery!</a>
   </div> <!--close tag -->

   <div class="bgimg-5 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
   <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Recent<span class="w3-hide-small">&nbsp;</span>Scrapbooks</span>
  </div>
</div>
   <!-- start of Recent -->

   <div class="w3-row-padding w3-center" style="margin: 5% 0 0 0;">
      <div class="card-img-overlay">
        <h2 class="card-title text-shadow text-white text-uppercase mb-0">Recent Works</h2>
			        <p class="parabooks text-shadow text-white">The works featured here are the latest products from the users
						and are rising to the top.
						</p>
			       
      </div>
      <?php foreach($latest_works as $lw): ?>
      <div class="w3-col m4 w3-border" style="background-color: #fefefe!important;"">
        <img src = "<?php echo $lw['first_page']; ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge" alt="The mist over the mountains">
        <div class="w3-container">
        <h3 class="w3-margin-top"><b><?php echo $lw['name']; ?></b></h3>
         <h1><a class="user left" href = "<?php echo base_url('Profile/'.$lw['username']); ?>"><?php echo $lw['username']; ?></a></h1>
          <div class="row">
            <div class="w3-col m12" style="float: left;">          
              <h3 >
                <span class="glyphicon glyphicon-heart-empty left" style="color: red;"></span>
                <span class="w3-margin-left left" style="color: #111111;"><?php echo $lw['likes']; ?></span>
                <span class="glyphicon glyphicon-eye-open right w3-margin-left" style="color: black;"></span>
                <span class="right"><?php echo $lw['view_counter']; ?></span>&nbsp;</h3>
            </div>
          </div>
          <div>
            <h5><?php echo $lw['description']; ?></h5>
          </div>
        </div>
      </div>
    <?php endforeach; ?> 
<!-- end of 1st lw-->    
      <a  class="right w3-xlarge w3-black w3-hover-white w3-wide w3-animate-opacity" href="<?php echo base_url('Scrapbooks/Latest_Works'); ?>">View this gallery!</a>  
   </div> <!--close tag -->

<div class="bgimg-6 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">END <span class="w3-hide-small">OF</span> SCRAPBOOKS</span>
  </div>
</div>

<!-- Modal for full size images on click-->
   <div id="modal01" class="w3-modal " onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" style="margin-top: 60px;" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-opacity w3-transparent ">
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