<!-- NAVIGATION -->
<link rel="stylesheet" href="<?php echo base_url('css/index.css'); ?>">
<style type="text/css">
	.navbar #nav > .active > a {
    color: brown!important;

    /*dapat nandito kasi internal > external css
     lahat kasi sa index.css naka !important*/
}

</style>

<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-overlay">
		<!-- <a style="color:pink;" class="navbar-brand" href="<?php echo base_url('Home'); ?>">MemoRecap</a> -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
	    <ul  class="navbar-nav navbar-center">    
	        <li class="nav-item ">            
	            <a style="color:pink;"  href="<?php echo base_url('Home'); ?>">
	            	<img class="smol" src="<?php echo base_url('css/images/pageLoader.gif'); ?>"  alt="" />
	        	</a>
	        </li> 
	    </ul>
		<ul id = "nav" class="navbar-nav nav-fill w-50 mx-auto">
	        <li class="nav-item <?php echo (strpos(uri_string(), 'Home')>-1)?'active':''; ?>">
				<a style="color:pink;" class="hed nav-link text-uppercase text-expanded " href="<?php echo base_url('Home'); ?>">
					Home
					<span class="sr-only">(current)</span>
				</a>
	        </li>
			
	        <li class="nav-item <?php echo (strpos(uri_string(), 'Scrapbooks')>-1)?'active':''; ?>" >
				<a style="color:pink;"  class="hed nav-link text-uppercase text-expanded " href="<?php echo base_url('Scrapbooks'); ?>">
					Scrapbooks
				</a>
	        </li>
			
	        <li class="nav-item <?php echo (strpos(uri_string(), 'About')>-1)?'active':''; ?>" >
				<a style="color:pink;" class="hed nav-link text-uppercase text-expanded " href="<?php echo base_url('About'); ?>">About</a>
	        </li>
   		</ul>
    		 <form class="navbar-form navbar-left">
			  <div class="input-group">
			    <input type="text" class="form-control" placeholder="Search">
			    <div class="input-group-btn">
			      
			       <button style="margin-left: 3px;" type="submit" class="btn btn-default">Submit</button>
			      
			    </div>
			  </div>
			</form>
    	<ul class="nav navbar-nav nav-fill">
			<li class="nav-item">
				<a style="color:pink;" class="hed nav-link text-uppercase text-expanded " href="<?php echo base_url('Login/')?>">Log In</a>
			</li>
		<!-- </ul>
		<ul class="nav navbar-nav  "> -->
			<li class="nav-item">
				<a style="color:pink;" class="hed nav-link text-uppercase text-expanded " href="<?php echo base_url('Signup/')?>">Sign Up</a>
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

<script>
     $(function() {
        $('#nav li a').click(function() {
           
           $('#nav li').attr('href').addClass('active');
        });
     });
  </script>
	
