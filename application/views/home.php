

<div class="container">
    <div class="row" >
		<div class="container bg-overlay col-md-4" style="margin:3% 0% 3% 5%; width:350px; height:350px;">
        <!-- CAROUSEL -->
        
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
		
		<div class="col-sm-6 col-md-6 container">
			<img style="width:500px; height:150px; padding-left:25px;" src = "<?php echo base_url('css/images/TAYTEL.png'); ?>" alt=""/>
						
	
		<div class="tagline-lower text-expanded text-shadow " style="margin-left:25%;">
			<p style="font-size: 1em text-align:center;">&nbsp;Create. Share. Inspire.
			<br />Unleash the Artist within.</p>
			
		</div><p class="tagline-lower text-expanded text-shadow " style="font-size:35px; text-align:center;">Start making your scrapbooks<br />right here!</p>
		
		
	<div style="margin-left:30%;"><button id="myBtn" class="hedest landi"
	style="font-size:3em;padding:0.5% 15% 0% 15%;
	border-radius:15px;
	background-color:#ffe6b3;
	margin:auto;">
	Create
	</button></div>

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

	
		</div></div></div>
	  
	<!-- BAAAADEEEEEEHHH  -->
	<div class="container bg p-4 my-4"> <!--style="background-color: rgba(236,161,166,0.5);"--> 
	<!-- 3rd SECTION  -->
	<br />
			<div class = "container">
				<br />
				<br />
				<h3 class="landi hedest text-center ">Create Your Own</h3><BR/>
			<!-- 3.1 (!!!) -->
			<div class=" p-4 my-4">
			<div class="row">
				<div class="col-md-4">
				<img class="tilt tablet img-fluid mb-4 mb-lg-0" src = "<?php echo base_url('css/images/f1.jpg'); ?>" alt="" width="300" height="300"/>
				</div>
				<div class="col-md-8"><h6 class=" landi tilt hed"><strong >Just Drag 'n Drop!</strong></h6>
					<p class="para1 ">You build up the conflict to a crisis point, where things just can't continue the way
					they are. A decision has to be made or some thing has to change. This point is called the
					story climax. If the story is a road map, this is the major fork in the road. The character
					can turn left and wind up in Alabama with her ex-lover or turn right and end up back
					in Illinois with her husband and kids.
					</p>
				</div>
			</div>
			</div>
			<!-- 3.2 (!!!) -->
			<div class=" p-4 my-4">
			<div class="row">
				<div class="col-md-8"><h6 class="landi tilt2 hed"><strong  >Access your Scrapbooks<br />anytime, anywhere</strong>
				</h6>
					<p class="para2">Farcical: Comedy based on improbable coincidences and with satirical elements,
					punctuated at times with overwrought, frantic action. (It, like screwball comedy
					— see below — shares many elements with a comedy of errors.) Movies and
					plays featuring the Marx Brothers are epitomes of farce. The adjective also
					refers to incidents or proceedings that seem too ridiculous to be true.
					</p>
				</div>
				<div class="col-md-4">
				<img class="img-fluid mb-4 mb-lg-0 tilt2 tablet2" src = "<?php echo base_url('css/images/f2.jpg'); ?>" alt="" width="300" height="300"/>
				</div>
			</div>
			</div>	
			<!-- 3.3 (!!!) -->
			<div class=" p-4 my-4">
				<div class="row">
					<div class="col-md-4">
					<img class="tilt tablet img-fluid mb-4 mb-lg-0" src = "<?php echo base_url('css/images/f3.jpg'); ?>" alt="" width="300" height="300"/>
					</div>
				<div class="col-md-8"><h6 class="landi tilt hed text-center"> <strong  >Share it to the world</strong></h6>
					<p class="para3 ">Don't get too colorful with the dialogue tags. "Hello," she shouted;
					"Hi there," he cried; "How are you?" she queried," "Fine thanks," he shrilled"...
					too much of this stuff gets distracting fast. Put your thesaurus away. The basic
					dialogue verbs "say," "tell," and "ask," have the advantage of fading in the back
					ground, letting the reader focus on what your character is saying.
					</p>
				</div>
				</div>
			</div>
			</div>
	
		<!-- 1st SECTION  -->
		
			<br />
	  		<div class=" container bg-faded p-4 my-4">
				<br />
				<h2 class="landi hedest text-center ">Come and Visit Our Galleries </h2>
					<div class="pic row">
						<div class="col-md-4 mb-4 mb-md-0">
							<img class="card-img-top" src = "<?php echo base_url('css/images/ep1.jpg'); ?>" alt=""/>
						</div>
						<div class="col-md-4 mb-4 mb-md-0">
							<img class="card-img-top" src = "<?php echo base_url('css/images/ep2.jpg'); ?>" alt="">			
						</div>
						<div class="col-md-4">
							<img class="card-img-top" src = "<?php echo base_url('css/images/ep3.jpg'); ?>" alt="">
						</div>
					</div>
					<div  >
	  					<div >
							<div>
								<a class="nav-link float-right VM landi" href="<?php echo base_url('Scrapbooks/Editors_Pick'); ?>">
									<p>View More...</p>
								</a>
							</div>
				  			<div>
								<h6 class=" landi hed float-left EPFW" href="">Editor's Picks</h6>
							</div>
				  		</div>
					</div>
			</div>
			<!-- 2nd SECTION  -->
	  		<div class="bg-faded p-4 my-4">
	  			<table >
					<br />
					<h2 class="landi hedest text-center ">Check Out<br />What Your Friends Made </h2>
        			<div class="pic row">
						<div class="col-md-4 mb-3 mb-md-0"> <img class="card-img-top" src = "<?php echo base_url('css/images/FW1.jpg'); ?>" alt=""> </div>
						<div class="col-md-4 mb-3 mb-md-0"> <img class="card-img-top" src = "<?php echo base_url('css/images/FW2.jpg'); ?>" alt=""> </div>
						<div class="col-md-4 mb-3 mb-md-0"> <img class="card-img-top" src = "<?php echo base_url('css/images/FW3.jpg'); ?>" alt=""> </div>
					</div>
					<div  >
				  		<div >
				  			<div>
								<h6 class=" landi hed float-left EPFW" href="">Featured Works</h6>
							</div>
				  			<div>
								<a class="nav-link float-right VM landi" href="<?php echo base_url('Scrapbooks/Featured_Works'); ?>">
									<p>View More...</p>
								</a>
							</div>
				  		</div>
					</div>
	  			</table>
	  		</div>
			<br /><br /><br />
		</div>
    </div>