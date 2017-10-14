<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg navbar-light bg-overlay">
	<div style="margin-left:2%;">
		<a style="color:#dddddd;" class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none hed" href="<?php echo base_url('Home'); ?>">MemoRecap</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-4">            
            <img class="smol" src="<?php echo base_url('css/images/pageLoader.gif'); ?>"  alt="" ></a>
        </li> 
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'Home')>-1)?'active':''; ?>">
			<a style="color:#dddddd;" class="hed nav-link text-uppercase text-expanded " href="<?php echo base_url('Home'); ?>">
				Home
				<span class="sr-only">(current)</span>
			</a>
        </li>
		
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'Scrapbooks')>-1)?'active':''; ?>" >
			<a style="color:#dddddd;" class="hed nav-link text-uppercase text-expanded " href="<?php echo base_url('Scrapbooks'); ?>">
				Scrapbooks
			</a>
        </li>
		
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'About')>-1)?'active':''; ?>" >
			<a style="color:#dddddd;" class="hed nav-link text-uppercase text-expanded " href="<?php echo base_url('About'); ?>">About</a>
        </li>
		<li class="nav-item px-lg-4" style="margin-left:280px;">
			<a style="color:#dddddd; font-size:1.5em;" class="nav-link text-expanded text-uppercase ">Log In</a>
			</li>
		<li class="hed" style="color:#dddddd;">|</li>
	<li class="nav-item px-lg-4" >
			<a style="color:#dddddd; font-size:1.5em;" class="nav-link text-expanded text-uppercase ">Sign Up</a>
	</li>
</ul>

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
	