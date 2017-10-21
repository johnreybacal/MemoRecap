<div class="bgimg-1 w3-display-container w3-opacity-min" >
  <div class="w3-display-middle" style="white-space:nowrap;">
    <!-- <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Memo <span class="w3-hide-small">Recap</span> </span> -->
    <!--style="background-color: rgba(236,161,166,0.5);"--> 
      <h1 class="hedest landi">Create your own Scrapbooks in three easy steps</h1>
    
      <div class=" p-4 my-4">
        
      <div class="row">
            <div class="col-md-4 ">
              <img class="card-img-top" style="width: :100%;" src = "<?php echo base_url('css/images/1.png'); ?>" alt=""/>
            </div>
            <div class="col-md-4 ">
              <img class="card-img-top" style="height:100%;" src = "<?php echo base_url('css/images/2.png'); ?>" alt="">      
            </div>
            <div class="col-md-4">
              <img class="card-img-top" style="height:100%;" src = "<?php echo base_url('css/images/3.png'); ?>" alt="">
            </div>
          </div>
      </div>
  
    <!-- 1st SECTION  -->
    </div>
  </div>
</div>
<div class="container" style="margin-top: 100px;">
    <div class="row" >		
		<div class="col-sm-6 col-md-6 container">
		
		<div class="tagline-lower text-expanded text-shadow " style="margin-left:25%;">
			<p  style="font-size: 1em text-align:center;">&nbsp;Create. Share. Inspire.
			<br />Unleash the Artist within.</p>
		</div>	</div>
		
		
	<div style="margin:1% 0% 1% 40%;"><button id="myBtn" class="hed landi"
	style="font-size:3em;padding:10px 55px 10px 55px;
	border-radius:15px;
	background-color:#ffe6b3;
	margin:auto;">
	Create
	</button></div>
</div> 

	
		</div>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style = "width: 30%;">
    <div class="modal-header" style="background-color:#ffe6b3;">
      <span id = "xclose" class="close">&times;</span>
      <center>
	      <h2 class="hed" style="color: #705239;">Enter Scrapbook Details</h2>
	  </center>
    </div>
    <div class="modal-body">
    	<center>
		    <form action = "<?php echo base_url('editor/new'); ?>" method = "POST">
				<br />
				<input type="text" name="name" placeholder = "Title" required />
				<input type="number" name="pages" placeholder = "Pages" min = "3" max = "999" required /><br />
				<br />
				Size:<br />
				<input type = "radio" name = "size" value = "512x768" required checked />512x768<br />
				<input type = "radio" name = "size" value = "640x512" required />640x512<br />
				<input type = "radio" name = "size" value = "512x512" required />512x512<br />
				<input type = "radio" name = "size" value = "640x768" required />640x768<br />
				<br />
				Privacy:<br />
				<input type = "radio" name = "privacy" value = "private" required />Private<br />
				<input type = "radio" name = "privacy" value = "public" required />Public<br />
				<?php
					if($logged_in){
						echo '<input type="submit" name="create" value = "Create" />';
					}else{
						echo '<p style="color: #cc0000;">Please login first</p>';
					}
				?>
			</form>      
		</center>
    </div>
    <div class="modal-footer" style="background-color:#ffe6b3;">
    	<center>
		    <h4 class="hed" style="color: #705239;">Let your creativity do the rest</h4>
		</center>
    </div>
  </div>
</div>


<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">Scrapbooks</span>
  </div>
</div>

    <!-- might use w3-margin-bottom na class -->
    <div class="w3-row-padding w3-center">
      <h1>Recent</h1>
      <div class="w3-col m4">
        <img src = "<?php echo base_url('css/images/ep1.jpg'); ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge w3-margin-bottom" alt="The mist over the mountains">
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
      <div class="w3-col m4">
        <img src = "<?php echo base_url('css/images/f1.jpg'); ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge w3-margin-bottom" alt="The mist over the mountains">
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
<!-- end of 2nd -->
      <div class="w3-col m4">
        <img src = "<?php echo base_url('css/images/feps.jpg'); ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge w3-margin-bottom" alt="The mist over the mountains">
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
      <!-- end of 3rd -->
      <h3 style="float: right;">Log in to See More</h3>
   </div>

   <div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">About Us</span>
  </div>

</div>





<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal " onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" style="margin-top: 60px;" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-opacity w3-display-right w3-transparent ">
    <img id="img01" class="w3-round-xlarge w3-image" style="width: auto;">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

  <div style="position:relative;">
    <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
      <p><h1> MemoRecap</h1> (Memory Recaptured) is a website where users can freely mess around with their photos and recreate something refreshing; where they can express their artistic side and bring art justice to the sceneries or persons they have captured with their camera lense; where they can easily revisit their memories in a unique way. Remember, Redesign, Recapture.</p>
    </div>
  </div>
<div class="bgimg-4 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">About Us</span>
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