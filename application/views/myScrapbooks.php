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

    	<h2 class="landi hedest text-center ">List of Scrapbooks</h2><br />
    	
    		<div class=" wrapper" style ="width: 80%; margin: auto;">
                <div class="row">   
                  <div class="col-md-12">   
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead><tr><th>Name</th><th></th><th></th><th></th></tr></thead>
                      <tbody>
                      <?php foreach($list_of_scrapbooks as $display): ?>
                        <tr>
                          <td><?php echo $display['name'] ?></td>
                          <td><?php echo $display['edit'] ?></td>
                          <td><?php echo $display['view'] ?></td>
                          <td><?php echo $display['delete'] ?></td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
    	
    	<!-- </center> -->
    	<!-- <a href="<?php echo base_url('Home'); ?>" class="">Back to Home.</a> -->

    </div>
</div>
