	<div class="container bg p-4 my-4">
	
	<h3 class="landi hedest text-center ">Latest Works</h3>
	   <!--<img class="d-block img-fluid w-50 paddy" src="<?php echo base_url('css/images/yato5.gif'); ?>" alt="" >-->
	 <div class="wrapper" style="width: 80%; margin: auto;">
      <div class="container-fluid">
        <div class="row">   
          <div class="col-md-12">   
            <div class="table-responsive">
              <table class="table table-hover">
                <thead><tr><th>Name</th><th>Owner</th><th>Action</th></tr></thead>
              <tbody>
              <?php foreach($lw as $display): ?>
                <tr>
                  <!-- dito yung image thumbnail lang siguro yun -->
                  <td><?php echo $display['name'] ?></td>
                  <td><?php echo $display['username'] ?></td>
                  <td><?php echo $display['view'] ?></td>
                </tr>
              <?php endforeach; ?>
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

   
   
   <div class=" p-4 my-4">
        <ul class="pagination justify-content-center mb-0">
          <li class="page-item">
            <a class="landi hed float-left EPFW" href="<?php echo base_url('Scrapbooks/Editors_Pick'); ?>">Editors Picks</a>
          </li>
          <li class="page-item disabled">
            <a class="landi hed float-left EPFW" href="<?php echo base_url('Scrapbooks/Featured_Works'); ?>">Featured Works</a>
          </li>
        </ul>
      </div>

	  
	</div>
