<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-overlay ">
<div style="margin-left:20px;">
	<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none landi2 hed" href="<?php echo base_url('Home'); ?>">MemoRecap</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
	<ul class="navbar-nav mx-auto" >
        <li class="nav-item ">
            <a href="#" class="navbar-link">
            <img class="smol" src="<?php echo base_url('css/images/pageLoader.gif'); ?>"  alt="" ></a>
        </li> 
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'Home')>-1)?'active':''; ?>">
          <a style="color:#dddddd;" class="hed nav-link text-uppercase text-expanded" href="<?php echo base_url('Home'); ?>">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'myScrapbooks')>-1)?'active':''; ?>">
		<a style="color:#dddddd;" class="hed nav-link text-uppercase text-expanded" href="<?php echo base_url('myScrapbooks'); ?>">Scrapbooks</a>
        </li>
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'About')>-1)?'active':''; ?>">
          <a style="color:#dddddd;" class="hed nav-link text-uppercase text-expanded" href="<?php echo base_url('About'); ?>">About</a>
        </li>
        
		<li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'Profile')>-1)?'active':''; ?>" style="margin-left:280px;">
		<a style="color:#dddddd; font-size:1.5em;" class="nav-link text-expanded text-uppercase" href="<?php echo base_url('Profile'); ?>"><strong>Profile</strong></a>
        </li>
		<li class="hed" style="color:#dddddd;">|</li>
        <li class="nav-item" >
          <a style="color:#dddddd; font-size:1.5em;" class="nav-link text-uppercase text-expanded" href="<?php echo base_url('Logout'); ?>">Signout</a>
        </li>
	</ul>
    </div>
</div>
</nav>