<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo base_url('css/w3-theme-black.css'); ?>" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css"> -->
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="<?php echo base_url('css/index.css'); ?>">
<style type="text/css">
    .w3-bar-item #nav > .active > a {
    color: #f0664c!important;

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}


.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>
<!-- Navbar -->
<div class="w3-top">
 	<div id="nav" class="w3-bar w3-theme-d2 w3-left-align">
		<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" 	onclick="openNav()"><i class="fa fa-bars"></i></a>
		<a href="<?php echo base_url('Home')?>" class="w3-bar-item w3-button">MemoRecap<i class="fa fa-home w3-margin-left"></i></a>

		<a href="<?php echo base_url('Signup')?>" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-user-plus"></i> Sign Up</a>
		<a href="<?php echo base_url('Login')?>" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-sign-in"></i> Log In</a>
		<a href="#about" class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-right">About</a>

    	<a href="<?php echo base_url('Scrapbooks')?>" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-envelope"></i> Scrapbooks</a>
  		
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
  </div>
 
 
 </div>
 

  <!-- Navbar on small screens -->
  <div id="nav" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="<?php echo base_url('Signup/')?>" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-user-plus"></i> Sign Up</a>
    <a href="<?php echo base_url('SignIn/')?>" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-sign-in"></i> Sign In</a>
    <a href="#about" class="w3-bar-item w3-button">About</a>
   
   
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>


<!-- <div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>

      
   
    <a href="#home" class="w3-bar-item w3-button"><i class="fa fa-home w3-margin-right"></i>MemoRecap</a>    
    <a href="<?php echo base_url('Signup/')?>" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-user-plus"></i> Sign Up</a>
    <a href="<?php echo base_url('SignIn/')?>" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-sign-in"></i> Sign In</a>
    <a href="#about" class="w3-bar-item w3-button  w3-right"><i class="fa fa-th"></i> About</a>
    <a href="#recent" class="w3-bar-item w3-button  w3-right"><i class="fa fa-envelope"></i> Recent</a>
    <a href="#featured" class="w3-bar-item w3-button  w3-right"><i class="fa fa-envelope"></i> Featured</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red"><i class="fa fa-search"></i></a>
    
    
     
   
   
  </div>

  <!-- Navbar on small screens -->
 <!--  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div> -->

<script type="text/javascript">
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}



</script>


 <script>
     $(function() {
        $('#nav a').click(function() {
           
           $('#nav a').attr('href').addClass('active');
        });
     });
  </script>
</body>
</html>
