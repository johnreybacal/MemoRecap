<!-- Navbar -->

<div class="w3-top" style = "padding-bottom: 7%;">
 	<div id="nav" class="w3-bar w3-theme-d2 w3-left-align">
		<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" 	onclick="openNav()"><i class="fa fa-bars"></i></a>
		<a href="<?php echo base_url('Home')?>" class="w3-bar-item w3-button">MemoRecap<i class="fa fa-home w3-margin-left"></i></a>

		<a href="<?php echo base_url('Signup')?>" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-user-plus"></i> Sign Up</a>
		<a href="<?php echo base_url('Login')?>" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-sign-in"></i> Log In</a>
		<a href="<?php echo base_url('About')?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-right">About</a>

    	<a href="<?php echo base_url('Scrapbooks')?>" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-envelope"></i> Scrapbooks</a>
  		
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
  </div>
 
 
 </div>
 

  <!-- Navbar on small screens -->
  <div id="nav" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium" style = "padding-bottom: 7%;">
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
