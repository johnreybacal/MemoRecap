<!-- MODALSHIT -->

<!-- Modal -->


	<!-- <a id="myBtn" class="hedest landi"
	style="padding:0.5% 1% 0% 1%;
	box-shadow: 10px 10px 15px #2e2e1f;
	border-radius:15px;
	background-color:#ffe6b3;
	float: right;
	right: 25px;
	bottom:25px;
	position: fixed;z-index:1;
	">
	Create
	</a> -->
	<a href = "<?php echo base_url('Create'); ?>" class="hedest landi" style="padding:0.5% 1% 0% 1%;
	box-shadow: 10px 10px 15px #2e2e1f;
	border-radius:15px;
	background-color:#ffe6b3;
	float: right;
	right: 25px;
	bottom:25px;
	position: fixed;z-index:1;
	">Create</a>

<!-- <div id="myModal" class="modal">

  
  <div class="modal-content" style = "width: 30%;">
    <div class="modal-header" style="background-color:#ffe6b3;">
      <span id = "xclose" class="close">&times;</span>
      <center>
	      <h2>Enter scrapbook details</h2>
	  </center>
    </div>
    <div class="modal-body">
    	<center>
		    <form action = "<?php echo base_url('editor/new'); ?>" method = "POST">
				<br />
				<input type="text" name="name" placeholder = "Title" required />
				<input type="number" name="pages" placeholder = "Pages" min = "3" max = "999" required /><br />
				<br />
				<input type = "text" name = "description" placeholder = "description" /><br />
				Size:<br />
				<input type = "radio" name = "size" value = "512x768" required checked />512x768<br />
				<input type = "radio" name = "size" value = "640x512" required />640x512<br />
				<input type = "radio" name = "size" value = "512x512" required />512x512<br />
				<input type = "radio" name = "size" value = "640x768" required />640x768<br />
				<br />
				Privacy:<br />
				<input type = "radio" name = "privacy" value = "private" required />Private<br />
				<input type = "radio" name = "privacy" value = "public" required />Public<br />
				<?php
					if($logged_in){
						echo '<input type="submit" name="create" value = "Create" />';
					}else{
						echo '<h5>Please login first</h5>';
					}
				?>
			</form>      
		</center>
    </div>
    <div class="modal-footer" style="background-color:#ffe6b3;">
    	<center>
		    <h4>Let your creativity do the rest</h4>
		</center>
    </div>
  </div>

</div> 
 -->
	

	<!-- END OF MODALSHIT -->
