<!DOCTYPE html>
<html lang="en">

<head>
 <?php include "includes/head.php"; ?>
 

</head>

<body>
	<!-- NAVIGATION -->
	<?php include 'includes/navi.php'; ?>
	
	
	<!--login-->
					<ul class="dropdown-menu text-expanded drpbttn">
					<form class="form-signin" method = "POST" action = "<?php echo base_url(' '); ?>">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name = "email" class="form-control" placeholder="Email address" required>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name = "password" class="form-control" placeholder="Password" required>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name = "submit" type="submit">Sign in</button>
      </form>
	  </li>
			</ul>
        </div>
		</div>
    </nav>
	
	
	<!-- MODALSHIT -->

		<div class="modal fade" id="mymodal" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">New</h4>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
		</div>
		<div class="modal-body">
		<form action = "<?php echo base_url('MemoRecap/editor/new'); ?>" method = "POST">	
			Name:<input type="text" name="name" required /><br />
		Number of pages:<input type="number" name="pages" min = "3" max = "999" required /><br />
		Size:<br />
		<input type = "radio" name = "size" value = "512x768" required checked />512x768<br />
		<input type = "radio" name = "size" value = "640x512" required />640x512<br />
		<input type = "radio" name = "size" value = "512x512" required />512x512<br />
		<input type = "radio" name = "size" value = "640x768" required />640x768<br />
		</form>
		</div> <!--end modal body-->
		<div class="modal-footer">
			<input type="submit" name="create" value = "Create" />
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		</div>
	</div>
		</div>
		</div>

		<!-- END OF MODALSHIT -->
	

	<img class="d-block img-fluid w-50 titel" src="img/TAYTEL.png" alt="" >
    <div class="tagline-lower text-center text-expanded text-shadow ">
		<p style="font-size: 25px">Create. Share. Inspire.
		<br />Unleash the Artist within.</p>
	</div>
    <div class="container">
		<div class="bg-overlay p-4 my-4">
        <!-- CAROUSEL -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
				<img class="d-block img-fluid w-100" src="img/slider1.jpg" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h3 class="text-shadow">Keeping up</h3>
					<p class="text-shadow">with every season.</p>
				</div>
            </div>
            <div class="carousel-item">
				<img class="d-block img-fluid w-100" src="img/slider2.jpg" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h3 class="text-shadow">Have fun</h3>
					<p class="text-shadow">customizing stuff.</p>
				</div>
            </div>
            <div class="carousel-item">
				<img class="d-block img-fluid w-100" src="img/slider3.jpg" alt="">
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
		
		
	  
	<!-- BAAAADEEEEEEHHH  -->
		<!-- 1st SECTION  -->
		<div class="container bg p-4 my-4">
			<br />
	  		<div class=" container bg-faded p-4 my-4">
				<br />
				<h2 class="landi hedest text-center ">Come and Visit Our Galleries </h2>
					<div class="pic row">
						<div class="col-md-4 mb-4 mb-md-0">
							<img class="card-img-top" src="img/ep1.jpg" alt=""/>
						</div>
						<div class="col-md-4 mb-4 mb-md-0">
							<img class="card-img-top" src="img/ep2.jpg" alt="">			
						</div>
						<div class="col-md-4">
							<img class="card-img-top" src="img/ep3.jpg" alt="">
						</div>
					</div>
					<div  >
	  					<div >
							<div>
								<a class="nav-link float-right VM landi" href="#">
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
						<div class="col-md-4 mb-3 mb-md-0"> <img class="card-img-top" src="img/FW1.jpg" alt=""> </div>
						<div class="col-md-4 mb-3 mb-md-0"> <img class="card-img-top" src="img/FW2.jpg" alt=""> </div>
						<div class="col-md-4 mb-3 mb-md-0"> <img class="card-img-top" src="img/FW3.jpg" alt=""> </div>
					</div>
					<div  >
				  		<div >
				  			<div>
								<h6 class=" landi hed float-left EPFW" href="">Featured Works</h6>
							</div>
				  			<div>
								<a class="nav-link float-right VM landi" href="#">
									<p>View More...</p>
								</a>
							</div>
				  		</div>
					</div>
	  			</table>
	  		</div>
			<!-- 3rd SECTION  -->
			<div class = "container">
				<br />
				<br />
				<h3 class="landi hedest text-center ">Create Your Own</h3><BR/>
			<!-- 3.1 (!!!) -->
			<div class=" p-4 my-4">
			<div class="row">
				<div class="col-md-4">
				<img class="tilt tablet img-fluid mb-4 mb-lg-0" src="img/f1.jpg" alt="" width="300" height="300"/>
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
				<img class="img-fluid mb-4 mb-lg-0 tilt2 tablet2" src="img/f2.jpg" alt="" width="300" height="300"/>
				</div>
			</div>
			</div>	
			<!-- 3.3 (!!!) -->
			<div class=" p-4 my-4">
				<div class="row">
					<div class="col-md-4">
					<img class="tilt tablet img-fluid mb-4 mb-lg-0" src="img/f3.jpg" alt="" width="300" height="300"/>
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
		</div>
    </div>
	
	<!-- FOOTEEEEEEEERRRR -->
	<div class="bg-overlay p-2">
	<?php include "includes/foot.php"; ?>
	</div>
	
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
