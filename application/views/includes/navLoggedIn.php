<!-- NAVIGATION -->
<link rel="stylesheet" href="<?php echo base_url('css/index.css'); ?>">
<style type="text/css">
    .navbar #nav > .active > a {
    color: #f0664c!important;

    /*dapat nandito kasi internal > external css
     lahat kasi sa index.css naka !important*/
}

</style>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-overlay">
        <a class="navbar-brand" href="<?php echo base_url('Home'); ?>">MemoRecap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul id = "nav" class="navbar-nav mr-auto">
            <li class="nav-item ">            
                <img class="smol" src="<?php echo base_url('css/images/logo_sana.png'); ?>"  alt="" />
            </li>
            <li class="nav-item  <?php echo (strpos(uri_string(), 'Home')>-1)?'active':''; ?>">
                <a class=" nav-link  " href="<?php echo base_url('Home'); ?>">
                    Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
        
        <!-- <li class="nav-item px-lg-4">
            <a class="hed nav-link text-uppercase text-expanded landi2 " href="">Create</a>
        </li> 
        <li class="nav-item px-lg-4 <?php echo (strpos(uri_string(), 'Assets')>-1)?'active':''; ?>" style="margin-left:20px;">
            <a style="color:#dddddd;" class="hed nav-link text-uppercase text-expanded " href="<?php echo base_url('Assets'); ?>">
                Box of Assets
            </a>
        </li>-->
            <li class="nav-item  <?php echo (strpos(uri_string(), 'Scrapbooks')>-1)?'active':''; ?>" >
                <a class=" nav-link " href="<?php echo base_url('Scrapbooks'); ?>">
                    Scrapbooks
                </a>
            </li>
        
            <li class="nav-item <?php echo (strpos(uri_string(), 'About')>-1)?'active':''; ?>" >
                <a class=" nav-link " href="<?php echo base_url('About'); ?>">About</a>
            </li>
        </ul>
            <form class="navbar-form navbar-left">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                  
                   <button style="margin-left: 3px;" ty type="submit" class="btn btn-default">Submit</button>
                  
                </div>
              </div>
            </form>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url('Profile/')?>">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url('Logout/')?>">Logout</a>
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
           $('#nav li').removeClass();
           $($(this).attr('href')).addClass('active');
        });
     });
  </script>
    