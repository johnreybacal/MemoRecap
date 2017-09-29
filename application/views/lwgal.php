<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="memstyle" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>MemoRecap</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- fonts (???) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- styles (!!!) -->
    <link href="css/memstyle.css" rel="stylesheet">

</head>

<body>
	<!-- NAVIGATION -->
	<nav class="navbar navbar-expand-lg navbar-light bg-overlay  nav-row">
		<div class="container">
			<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none landi2 hed" href="#">Navigation</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
				<a class="hed nav-link text-uppercase text-expanded landi2 " href="index.html">Home
					<span class="sr-only">(current)</span>
				</a>
            </li>
			<li class="nav-item px-lg-4">
				<a class="hed nav-link text-uppercase text-expanded landi2 " href="">Create</a>
            </li>
            <li class="nav-item px-lg-4">
				<a class="hed nav-link text-uppercase text-expanded landi2 " href="assets.com">Assets</a>
            </li>
            <li class="nav-item active px-lg-4">
				<a class="hed nav-link text-uppercase text-expanded landi2 " href="scrapbooks.html">Scrapbooks</a>
            </li>
            <li class="nav-item px-lg-4">
				<a class="hed nav-link text-uppercase text-expanded landi2 " href="about.html">About</a>
            </li>
			<li class="dropdown nav-item px-lg-4">
				<a class="dropdown-toggle nav-link text-expanded text-uppercase landi2 login" data-toggle="dropdown" href=""><strong>Log In</strong></a>
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
	
	<!-- BAAAADEEEEEEHHH  -->
	<div class="container bg p-4 my-4">
	<br /> 
	<h3 class="landi hedest text-center ">Latest Works</h3>
	  <br /> <div class="wrapper">
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
  <div class="column">
    <div class="inner"></div>
  </div>
</div>
   
   
   <div class=" p-4 my-4">
        <ul class="pagination justify-content-center mb-0">
          <li class="page-item">
            <a class="landi hed float-left EPFW" href="epgal.html">Editors Picks</a>
          </li>
          <li class="page-item disabled">
            <a class="landi hed float-left EPFW" href="fwgal.html">Featured Works</a>
          </li>
        </ul>
      </div>

	  
	</div>
	
	<!-- FOOTEEEEEEEERRRR -->
	<div class="bg-overlay p-2">
	<footer>
		<div class="container">
        <div class= "row">
			<div class = "col-md-4">
				<p class="puter">Copyright &copy; MemoRecap 2017
				<br />All Rights Reserved.
				<br />Powered by <strong>Motivation</strong>
				</p>
			</div>
			<div class = "col-md-4">
				<p class="puter"><strong>Contact Us</strong>
				<br />221 B. Baker St.
				<br />City of Weep 
				<br />8-7001 
				</p>
			</div>
			<div class = "col-md-4">
				<p class="puter"><strong>Connect with us</strong>
				<br />@MemoRecap
				</p>
				<div class = "row">
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-pinterest"></a>
				<a href="#" class="fa fa-tumblr"></a>
				</div>
			</div>
		</div>
		</div>
    </footer>
	</div>
	
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
