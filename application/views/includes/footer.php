	<!-- FOOTEEEEEEEERRRR -->
	<div class="bg-overlay ">
	<footer>
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
				<div class = "row">
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-pinterest"></a>
				<a href="#" class="fa fa-tumblr"></a>
				</div>
				<!-- <img class="img-fluid  smol" src = "<?php echo base_url('css/images/T1.png'); ?>" alt=""> -->
				<!-- <img class="img-fluid  smol" src = "<?php echo base_url('css/images/T2.png'); ?>" alt=""> -->
				<!-- <img class="img-fluid  smol" src = "<?php echo base_url('css/images/T3.png'); ?>" alt=""> -->
				<!-- <img class="img-fluid  smol" src = "<?php echo base_url('css/images/T4.png'); ?>" alt=""> -->
			</div>
		</div>
		</div>
    </footer>
	</div>
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
    if(typeof modal !== 'undefined'){
	    if(event.target == modal) {
	        modal.style.display = "none";
	    }
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
    if(typeof document.getElementById('scrapbookReportModal') !== 'undefined'){
    	if (event.target == document.getElementById('scrapbookReportModal')) {
			document.getElementById('scrapbookReportModal').style.display = "none";
		}
	}
	if(typeof document.getElementById('userReportModal') !== 'undefined'){
    	if (event.target == document.getElementById('userReportModal')) {
			document.getElementById('userReportModal').style.display = "none";
		}
	}
	if(typeof document.getElementById('editDescModal') !== 'undefined'){
    	if (event.target == document.getElementById('editDescModal')) {
			document.getElementById('editDescModal').style.display = "none";
		}
	}
	if(typeof document.getElementById('deleteModal') !== 'undefined'){
    	if (event.target == document.getElementById('deleteModal')) {
			document.getElementById('deleteModal').style.display = "none";
		}
	}
}
</script>

</body>
</html>