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
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("css/images/page3_big_pic2.jpg");
    min-height: 400px;
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
</style>
<div class="bgimg-1 w3-display-container w3-opacity-min" >
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Memo <span class="w3-hide-small">Recap</span> </span>
  </div>
</div>
<div class="container" style="margin-top: 100px;">
    <div class="row" >
		<!--<div class="container bg-overlay col-md-4" style="margin:3% 0% 3% 5%; width:350px; height:350px;">
         CAROUSEL 
        
		<div id="carouselExampleIndicators" class="carousel slide" style="padding:25px 10px 0px 10px;" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
				<img class="d-block img-fluid w-100" src = "<?php echo base_url('css/images/yato.gif'); ?>" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h3 class="text-shadow">Keeping up</h3>
					<p class="text-shadow">with every season.</p>
				</div>
            </div>
            <div class="carousel-item">
				<img class="d-block img-fluid w-100" src = "<?php echo base_url('css/images/yato3.gif'); ?>" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h3 class="text-shadow">Have fun</h3>
					<p class="text-shadow">customizing stuff.</p>
				</div>
            </div>
            <div class="carousel-item">
				<img class="d-block img-fluid w-100" src = "<?php echo base_url('css/images/yato4.gif'); ?>" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h3 class="text-shadow">Digital</h3>
					<p class="text-shadow">basic, chill, easy.</p>
				</div>
            </div>
			</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		-->
		
		<div class="col-sm-6 col-md-6 container">
			<!-- <img style="width:500px; height:150px; padding-left:25px;" src = "<?php echo base_url('css/images/TAYTEL.png'); ?>" alt=""/> -->
			
			
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
	      <h2 class="hed" style="color: #705239;">Enter scrapbook details</h2>
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

	  
	<!-- BAAAADEEEEEEHHH  -->
	<div class=" "> <!--style="background-color: rgba(236,161,166,0.5);"--> 
	
			<div class=" p-4 my-4"> <!-- style="background-color:#f4d7d7;" -->
			<h1 class="hedest landi">Create your own Scrapbooks in three easy steps</h1>
		
			<div class=" p-4 my-4">
				
			<div class="row">
						<div class="col-md-4 ">
							<img class="card-img-top" style="height:100%;" src = "<?php echo base_url('css/images/step1.png'); ?>" alt=""/>
						</div>
						<div class="col-md-4 ">
							<img class="card-img-top" style="height:100%;" src = "<?php echo base_url('css/images/step2.png'); ?>" alt="">			
						</div>
						<div class="col-md-4">
							<img class="card-img-top" style="height:100%;" src = "<?php echo base_url('css/images/step3.png'); ?>" alt="">
						</div>
					</div>
			</div>
	</div>
		<!-- 1st SECTION  -->
		</div>

<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">Scrapbooks</span>
  </div>
</div>

<!-- <div id="section2" class="container-fluid">
    <div class="row">
      <div class="col-md-6" style="border: 1px solid blue;">
        <h1>Recent</h1>
        <div class="col-md-8">
        	
        <img class="roundrec" src = "<?php echo base_url('css/images/ep2.jpg'); ?>" alt="Sample image"/>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-6">
            <a href="#">Username</a>
          </div>
          <div class="col-md-3" >
            <p style="float: right">heart votes</p>
          </div>
        </div>
        
        <div class="col-md-8 text-center" style="border: 1px solid yellow">
          <h2>Scrap Title</h2>
          <p>Scrapdescgfkbdbhgghbhgfugvdfgf
          gkhdbdghjdghaidgvdifgdiavg
          gdjlbdgfgbfdgfblgbgg</p>
        </div>
        <div>
          <h2>Browse</h2>

        </div>
      </div>
     
      <div class="col-md-6" style="border: 1px solid red;">
        
        <h1>Featured Work</h1>
        
        <img class="roundrec" src = "<?php echo base_url('css/images/ep1.jpg'); ?>" alt=""/>
        <div class="row">
          <div class="col-md-6">
            <a href="#">Username</a>
          </div>
          <div class="col-md-3" >
            <p style="float: right;">heart votes</p>
          </div>
        </div>
        <div class="col-md-8 text-center" style="border: 1px solid yellow">
          <h2>Scrap Title</h2>
          <p>Scrapdesc</p>
        </div>
        <div>
          <h2>Browse</h2>

        </div>
      </div>

      
    </div>
  </div>
   -->
    <!-- might use w3-margin-bottom na class -->
    <div class="w3-row-padding w3-center">
      <h1>Recent</h1>
      <div class="w3-col m4">
        <img src = "<?php echo base_url('css/images/ep1.jpg'); ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge" alt="The mist over the mountains">
        <div class="w3-container">
        <h4><b>Title</b></h4>
        <h6>Owner</h6>
          <div class="row">
            <div class="w3-col m6" style="float: left;">          
              <p>likes</p>
            </div>
            <div>
              <p>views</p>
            </div>
          </div>
          <div>
            <h5>Description</h5>
          </div>
        </div>
      </div>

      <div class="w3-col m4">
        <img src = "<?php echo base_url('css/images/p2.jpg'); ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge" alt="Coffee beans">
        <div class="w3-container">
          <h4><b>Title</b></h4>
          <p>Desc</p>
        </div>
      </div>

      <div class="w3-col m4">
        <img src = "<?php echo base_url('css/images/p3.jpg'); ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge" alt="Bear closeup">
        <div class="w3-container">
          <h4><b>Title</b></h4>
          <p>Desc</p>
        </div>
      </div>

       <div class="w3-col m4">
        <img src = "<?php echo base_url('css/images/ep1.jpg'); ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge" alt="The mist over the mountains">
        <div class="w3-container">
          <h4><b>Title</b></h4>
          <p>Desc</p>
        </div>
      </div>

      <div class="w3-col m4">
        <img src = "<?php echo base_url('css/images/p2.jpg'); ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge" alt="Coffee beans">
        <div class="w3-container">
          <h4><b>Title</b></h4>
          <p>Desc</p>
        </div>
      </div>

      <div class="w3-col m4">
        <img src = "<?php echo base_url('css/images/p3.jpg'); ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge" alt="Bear closeup">
        <div class="w3-container">
          <h4><b>Title</b></h4>
          <p>Desc</p>
        </div>
      </div>
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
      <p>Memorecap is blah blah blah blah.</p>
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