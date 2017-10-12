<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-overlay  nav-row">
<div class="container">
	<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none landi2 hed" href="<?php echo base_url('Home'); ?>">MemoRecap</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
	<ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-4">
            <a href="#" class="navbar-link">
            <img class="smol" src="<?php echo base_url('css/images/logo_sana.png'); ?>"  alt="" ></a>
        </li> 
	<!-- <li class="nav-item px-lg-4">
		<a href="#" class="navbar-link">
		<img class="d-block img-fluid w-50" src="<?php echo base_url('css/images/TAYTEL.png'); ?>" alt="" ></a>
	</li> -->
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'Home')>-1)?'active':''; ?>">
          <a class="hed landi2 nav-link text-uppercase text-expanded" href="<?php echo base_url('Home'); ?>">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
	<!-- <li class="nav-item px-lg-4">
		<a class="hed nav-link text-uppercase text-expanded landi2 " href="">Create</a>
        </li> -->
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'Assets')>-1)?'active':''; ?>">
    		<a class="hed nav-link text-uppercase text-expanded landi2 " href="<?php echo base_url('Assets'); ?>">Box of Assets</a>
        </li>
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'myScrapbooks')>-1)?'active':''; ?>">
		<a class="hed nav-link text-uppercase text-expanded landi2 " href="<?php echo base_url('myScrapbooks'); ?>">My Scrapbooks</a>
        </li>
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'About')>-1)?'active':''; ?>">
          <a class="hed landi2 nav-link text-uppercase text-expanded" href="<?php echo base_url('About'); ?>">About</a>
        </li>
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'Profile')>-1)?'active':''; ?>">
		<a class="nav-link text-expanded text-uppercase landi2 hed" href="<?php echo base_url('Profile'); ?>"><strong>Profile</strong></a>
        </li>
        <li class="nav-item">
          <a class="hed landi2 nav-link text-uppercase text-expanded" href="<?php echo base_url('Logout'); ?>">Logout</a>
        </li>
	</ul>
    </div>
</div>
</nav>