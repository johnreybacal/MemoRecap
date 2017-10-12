<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg navbar-light bg-overlay  nav-row">
	<div class="container">
		<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none landi2 hed" href="<?php echo base_url('Home'); ?>">MemoRecap</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-4">            
            <img class="smol" src="<?php echo base_url('css/images/logo_sana.png'); ?>"  alt="" ></a>
        </li> 
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'Home')>-1)?'active':''; ?>">
			<a class="hed nav-link text-uppercase text-expanded landi2 " href="<?php echo base_url('Home'); ?>">
				Home
				<span class="sr-only">(current)</span>
			</a>
        </li>
		<!-- <li class="nav-item px-lg-4">
			<a class="hed nav-link text-uppercase text-expanded landi2 " href="">Create</a>
        </li> -->
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'Assets')>-1)?'active':''; ?>">
			<a class="hed nav-link text-uppercase text-expanded landi2 " href="<?php echo base_url('Assets'); ?>">
				Box of Assets
			</a>
        </li>
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'Scrapbooks')>-1)?'active':''; ?>">
			<a class="hed nav-link text-uppercase text-expanded landi2 " href="<?php echo base_url('Scrapbooks'); ?>">
				Scrapbooks
			</a>
        </li>
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'About')>-1)?'active':''; ?>">
			<a class="hed nav-link text-uppercase text-expanded landi2 " href="<?php echo base_url('About'); ?>">About</a>
        </li>
		<li class="dropdown">
			<a class="dropdown-toggle nav-link text-expanded text-uppercase landi2 login" data-toggle="dropdown"><strong>Log In<span class="caret"></span></strong></a>
			<!--login-->
				<ul class="dropdown-menu" style="padding:10px 10px 10px 10px; width:150px;">
	<li>			
	<form class="form-signin" method = "POST" action = "<?php echo base_url('Login/'.uri_string()); ?>">
	    <label for="inputEmail" class="sr-only">Username</label>
	    <input type="text" id="inputEmail" name = "username" class="form-control" placeholder="Username" required>
	    <label for="inputPassword" class="sr-only">Password</label>
	    <input type="password" id="inputPassword" name = "password" class="form-control" placeholder="Password" required>    
	    <input style="background-color:#e4b4b4;" name = "submit" type="submit" value = "Sign in"></input>
	</form>
	<button id="SignLink" style="font-size:15px; text-align: center;">Sign Up</button>
	</li>
</ul>
<div id="SignModal" class="modal">
<div class="container" style="width: 500px;">
  <div class="modal-content">
  <div class="modal-header" style="background-color:#ffe6b3;">
    <span class="close" id = "sclose">&times;</span>
	</div>
    <form action = "<?php echo base_url('Signup/'); ?>" method = "POST">
		<br /><center>
		<input type="text" name="username" placeholder = "Username" required /><br /><br />
		<input type="text" name="name" placeholder = "Name" required /><br /><br />
		<input type="password" name="password" placeholder = "Password" required /><br /><br />
		</center>
		<div class="modal-footer" style="background-color:#ffe6b3;">
		<input type="submit" name="create" value = "Submit" />
		</div>
	</form>  
  </li>
		</ul>
		</li>
	</div>
	</div>
</nav>

<script src="<?php echo base_url('js/popper.min.js'); ?>"></script>

<script>
var smodal = document.getElementById('SignModal');
var sbtn = document.getElementById("SignLink");
var sspan = document.getElementById("sclose");
sbtn.onclick = function() {
    smodal.style.display = "block";
}
sspan.onclick = function() {
    smodal.style.display = "none";
}
</script>
	