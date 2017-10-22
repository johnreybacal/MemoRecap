<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('css/images/page3_big_pic1.jpg');
    min-height: 400px;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("css/images/page3_big_pic2.jpg");
    min-height: 115%;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("css/images/page3_big_pic3.jpg");
    min-height: 400px;
}

/* 4th image (Contact) */
.bgimg-4 {
    background-image: url("css/images/page3_big_pic4.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.pointer {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
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
  .stepdown {
    
    white-space: normal;      /* CSS3 */   
    background-color:#fed7aa;
   
}
.border1{
  -moz-border-radius: 15px 50px 30px 5px;
   border-radius: 15px 50px 30px 5px;
}
.border2{
  height: 280px;
  -moz-border-radius: 30px;
   border-radius: 30px;
}
.border3{
  -moz-border-radius: 15px 50px ;
   border-radius: 15px 50px ;
}
.stepsize{
  font-size: 50px;
  color: #632c25;
}
.fontw{
  font-weight: 900;
  }


</style>
<div class="bgimg-2 w3-display-container w3-opacity-min" ">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <!-- <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Memo <span class="w3-hide-small">Recap</span> </span> -->
    <!--style="background-color: rgba(236,161,166,0.5);"--> 
    <div style="margin: 8% 0 0 0;"> 
      <button id="myBtn" class="hed landi" style="padding:10px 55px;margin:0 0 0 43%;font-size:3em;border-radius:15px;background-color:#ffe6b3;">
        Create
      </button>
    </div>
    <center>
      
      <h1 class="hedest landi w3-black w3-extended" style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">Create your own Scrapbooks in three easy steps</h1>
    
      <!-- step 1 2 3 -->
      <div class="container" style="margin: 2% 0 0 0;">
        <div class="row">
          <div class="col-md-1"></div>
          <!-- step 1 -->
            <div class="col-md-3 stepdown border1 " >
                <h1 class="brody stepsize fontw">1.Select</h1> 
                <p  class="fontw" style = "color:black; white-space: normal;">Select what you want to beautify, be it a simple selfie or a scenery or candid shots. Just about every photo that you have taken.</p>             
            </div>
            <div class="col-md-1"></div>
            <!-- step 2 -->
            <div class="col-md-3 stepdown border2" >              
                <h1 class="brody stepsize fontw">2. Style</h1> 
                <p class="fontw" style = "color:black; white-space: normal;">Express yourself with the way that you style your photos. Want to add more sunshine on a smiling face? Go for it!</p> 
            </div>
            <div class="col-md-1"></div>
            <!-- step 3 -->
            <div class="col-md-3 stepdown border3 ">              
                <h1 class="brody stepsize fontw">3.Save</h1> 
                <p class="fontw" style = "color:black;white-space: normal;">When done, treasure the memories by easily clicking save, and you have it with you forever, with cool portability.</p>               
            </div>
            
        </div>
      </div>
    </center>
  </div>
</div>
<div class="container" style="margin-top: 5%;">
    <div class="row" >		
      <div class="col-sm-3 col-md-3 "></div>
		  <div class="col-sm-6 col-md-6 container">
		
    		<div class="tagline-lower text-expanded text-shadow ">
    			<p  class=" fontw " style="font-size: 1em text-align:center;white-space: nowrap;">&nbsp;Create. Share. Inspire.
    			Unleash the Artist within.</p>
    		</div>
        <div style="height: 8%; padding-bottom: 5%;">&nbsp;</div>
      </div>
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


<div class="bgimg-1 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Scrapbooks</span>
  </div>
</div>

  
  <!-- might use w3-margin-bottom na class -->
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
<!-- end of 1st -->

   </div>


   <div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">About Us</span>
  </div>

</div>





<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal " onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" style="margin-top: 60px;" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-opacity w3-transparent ">
    <img id="img01" class="w3-round-xlarge w3-image" style="width: auto;">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

  <div style="position:relative;">
    <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
      <p ><h1> MemoRecap</h1> <span style="font-size: 22px;">(Memory Recaptured) is a website where users can freely mess around with their photos and recreate something refreshing; where they can express their artistic side and bring art justice to the sceneries or persons they have captured with their camera lense; where they can easily revisit their memories in a unique way. Remember, Redesign, Recapture.</span></p>
    </div>
  </div>
<div class="bgimg-4 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Contact Us</span>
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