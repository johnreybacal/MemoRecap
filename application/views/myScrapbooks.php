<div class="container">

      <div class=" p-4 my-4 bg-faded">
    <div class="row">
        <div class="userstuff col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4" style="padding:5%;">
                        <img src = "<?php echo base_url('dp/'.$profile['dp']); ?>" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="userstuff" style="margin:5% 0% 5% 25%;">
                        <h4>User details</h4>							                       
                        <p><?php echo $profile['name']; ?></p>
                        <p><?php echo $profile['username']; ?></p>
                        <div >
                            
                                <a  href="<?php echo base_url('Account'); ?>" class="btn btn-default btn-lg" role="button" style="background-color:#e4b4b4; color:#4d2600;">Account Options</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container bg p-4 my-4" >

	<br />

	<br />
	<!-- <center> -->
	<h2 class="landi hedest text-center ">List of Scrapbooks</h2><br />
	<ol class="bg-overlay" style="margin: 3% 10% 3% 10%; height: 50px; padding: 1% 2% 2% 3%;">
		<?php
			echo $list_of_scrapbooks;
		?>
	</ol>	
	<!-- </center> -->
	<!-- <a href="<?php echo base_url('Home'); ?>" class="">Back to Home.</a> -->

</div>
</div>