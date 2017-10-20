	<div class="container bg p-4 my-4">
	
	<h3 class="landi hedest text-center ">Latest Works</h3>
	   <!--<img class="d-block img-fluid w-50 paddy" src="<?php echo base_url('css/images/yato5.gif'); ?>" alt="" >-->
	  <div class="wrapper" style="width: 80%; margin: auto;">
	  <table>
      <thead>
        <tr>
          <td>Cover</td>
          <td>Title</td>
          <td>Description</td>
          <td>Owner</td>
          <td>Likes</td>
          <td>Views</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
          <?php foreach($latest_works as $lw): ?>
            <tr>
              <td><img src = "<?php echo $lw['first_page']; ?>" height = "100px" width = "100px" /></td>
              <td><?php echo $lw['name']; ?></td>
              <td><?php echo $lw['description']; ?></td>
              <td>
                <a href = "<?php echo base_url('Profile/'.$lw['username']); ?>"><?php echo $lw['username']; ?></a>
              </td>
              <td id = "like-count-<?php echo $lw['scrapbook_id']; ?>">
                <?php echo $lw['likes']; ?>                
              </td>
              <td><?php echo $lw['view_counter']; ?></td>
              <td>
                <a href = "<?php echo base_url('view/'.$lw['scrapbook_id']); ?>">View</a>
                <?php
                  switch($lw['like']){
                    case 0:
                      break;
                    case 1:
                        echo '<button class = "unlike" data-id = "'.$lw['scrapbook_id'].'">Unlike</button>';
                        break;
                      case 2:
                        echo '<button class = "like" data-id = "'.$lw['scrapbook_id'].'">Like</button>';
                        break;
                  }                    
                
                  if($this->session->userdata('logged_in')){
                    echo '<button class = "reportButton" data-scid = "'.$lw["scrapbook_id"].'">Report</button>';
                  }
                ?>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
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