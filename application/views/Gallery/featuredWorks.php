	<div class="container bg p-4 my-4">
	
	 <h3 class="landi hedest text-center ">Featured Works</h3>
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
            <?php foreach($featured_works as $fw): ?>
              <tr>
                <td><img src = "<?php echo $fw['first_page']; ?>" height = "100px" width = "100px" /></td>
                <td><?php echo $fw['name']; ?></td>
                <td><?php echo $fw['description']; ?></td>
                <td>
                  <a href = "<?php echo base_url('Profile/'.$fw['username']); ?>"><?php echo $fw['username']; ?></a>
                </td>
                <td id = "like-count-<?php echo $fw['scrapbook_id']; ?>">
                  <?php echo $fw['likes']; ?>                  
                </td>
                <td><?php echo $fw['view_counter']; ?></td>
                <td>
                  <a href = "<?php echo base_url('view/'.$fw['scrapbook_id']); ?>">View</a>
                  <?php
                    switch($fw['like']){
                      case 0:
                        break;
                      case 1:
                        echo '<button class = "unlike" data-id = "'.$fw['scrapbook_id'].'">Unlike</button>';
                        break;
                      case 2:
                        echo '<button class = "like" data-id = "'.$fw['scrapbook_id'].'">Like</button>';
                        break;
                    }                    
                  
                  if($this->session->userdata('logged_in')){
                    echo '<button class = "reportButton" data-scid = "'.$fw["scrapbook_id"].'">Report</button>';
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
            <a class="landi hed float-left EPFW" href="<?php echo base_url('Scrapbooks/Editors_Pick'); ?>">Editors Pick</a>
          </li>
          <li class="page-item disabled">
            <a class="landi hed float-left EPFW" href="<?php echo base_url('Scrapbooks/Latest_Works'); ?>">Latest Works</a>
          </li>
        </ul>
      </div>

	  
	</div>