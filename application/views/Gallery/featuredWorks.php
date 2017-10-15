	<div class="container bg p-4 my-4">
	
	 <h3 class="landi hedest text-center ">Featured Works</h3>
     <!--<img class="d-block img-fluid w-50 paddy" src="<?php echo base_url('css/images/yato5.gif'); ?>" alt="" >-->
    <div class="wrapper" style="width: 80%; margin: auto;">
      <div class="container-fluid">
        <div class="row">   
          <div class="col-md-12">   
            <div class="table-responsive">
              <table class="table table-hover">
                <thead><tr><th>Name</th><th>Owner</th><th>Views</th><th>Action</th></tr></thead>
              <tbody>
              <?php foreach($fw as $items): ?>
                <tr>
                  <td><?php echo $items['name'] ?></td>
                  <td><?php echo $items['username'] ?></td>
                  <td><?php echo $items['view_counter'] ?></td>
                  <td><?php echo $items['view'] ?></td>
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
            <a class="landi hed float-left EPFW" href="<?php echo base_url('Scrapbooks/Editors_Pick'); ?>">Editors Pick</a>
          </li>
          <li class="page-item disabled">
            <a class="landi hed float-left EPFW" href="<?php echo base_url('Scrapbooks/Latest_Works'); ?>">Latest Works</a>
          </li>
        </ul>
      </div>

	  
	</div>
