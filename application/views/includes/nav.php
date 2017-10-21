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
		<li class="nav-item px-lg-4">
			<a class="hed nav-link text-uppercase text-expanded landi2 " href="<?php echo base_url('Login'); ?>">
				Login
				<span class="sr-only">(current)</span>
			</a>
        </li>
        <li class="nav-item px-lg-4">
			<a class="hed nav-link text-uppercase text-expanded landi2 " href="<?php echo base_url('Signup'); ?>">
				Signup
				<span class="sr-only">(current)</span>
			</a>
        </li>
		</ul>
		
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
	