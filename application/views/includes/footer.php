
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Footer -->
<style type="text/css">
footer {
    clear: both;
    position: relative;
    z-index: 10;
    height: 17em;
    margin-top: -3em;
}
</style>
<footer class="w3-center w3-padding-64 footer" style="background-color: #282E34!important;">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="container">
        <div class= "row" >
			<div class = "col-md-4" style="margin-top:10px;">
				<p class="puter">Copyright &copy; MemoRecap 2017
				<br />All Rights Reserved.
				<br />Powered by <strong>Motivation</strong>
				</p>
			</div>
			<div class = "col-md-4" style="margin-top:10px;">
				<p class="puter"><strong>Contact Us</strong>
				<br />221 B. Baker St.
				<br />City of Weep 
				<br />8-7001 
				</p>
			</div>
			<div class = "col-md-4" style="margin-top:10px;">
				<p class="puter"><strong>Connect with us</strong>
				<br />@MemoRecap
				</p>
				<div class="w3-xlarge w3-section">
				    <i class="fa fa-facebook-official w3-hover-opacity"></i>
				    <i class="fa fa-instagram w3-hover-opacity"></i>
				    <i class="fa fa-snapchat w3-hover-opacity"></i>
				    <i class="fa fa-pinterest w3-hover-opacity"></i>
				    <i class="fa fa-twitter w3-hover-opacity"></i>
				    <i class="fa fa-linkedin w3-hover-opacity"></i>
				</div>
  
			</div>
		</div>
		</div>

</footer>
	<br />
    <!-- Bootstrap core JavaScript -->    
    <script src="<?php echo base_url('js/popper.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    
<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
btn.onclick = function() {
    modal.style.display = "block";
}
document.getElementById("xclose").addEventListener("click", function(){
    modal.style.display = "none";
});

window.onclick = function(event) {
    if(event.target == modal) {
        modal.style.display = "none";
    }
    if(typeof umodal !== 'undefined'){
    	if(event.target == umodal) {
	        umodal.style.display = "none";
	    }
    }
    if(typeof smodal !== 'undefined'){
		if(event.target == smodal) {
		    smodal.style.display = "none";
		}
	}
}

window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>