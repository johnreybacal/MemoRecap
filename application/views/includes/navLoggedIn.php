<body>
<!-- Navbar -->
<div class="w3-top">
    <div id="nav" class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);"    onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="<?php echo base_url('Home')?>" class="w3-bar-item w3-button <?php echo (strpos(uri_string(), 'Home')>-1)?'w3-red':''; ?>">MemoRecap<i class="fa fa-home w3-margin-left"></i></a>

        <a href="<?php echo base_url('Logout')?>" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-user-plus"></i> Log Out</a>
        <a href="<?php echo base_url('Profile/'.$profile['username'])?>" class="w3-bar-item w3-button w3-hide-small w3-right <?php echo (strpos(uri_string(), 'Profile')>-1)?'w3-red':''; ?>"><i class="fa fa-sign-in"></i> Profile</a>
        <a href="<?php echo base_url('About')?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-right <?php echo (strpos(uri_string(), 'About')>-1)?'w3-red':''; ?>">About</a>

        <a href="<?php echo base_url('Scrapbooks')?>" class="w3-bar-item w3-button w3-hide-small w3-right <?php echo (strpos(uri_string(), 'Scrapbooks')>-1)?'w3-red':''; ?>"><i class="fa fa-envelope"></i> Scrapbooks</a>
        
        <a href="<?php echo base_url('Search')?>" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal <?php echo (strpos(uri_string(), 'Search')>-1)?'w3-red':''; ?>" title="Search"><i class="fa fa-search"></i></a>
  </div>
 
 
 </div>
 

  <!-- Navbar on small screens -->
  <div id="nav" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="<?php echo base_url('Logout')?>" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-user-plus"></i> Log Out</a>
    <a href="<?php echo base_url('Profile/'.$profile['username'])?>" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-sign-in"></i> Profile</a>
    <a href="#about" class="w3-bar-item w3-button">About</a>
   
   
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>

<script type="text/javascript">
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}



</script>