<!-- BAAAADEEEEEEHHH  -->

  <div class="container bg p-4 my-4">
  
   <h3 class="landi hedest text-center ">Editors Pick</h3>
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
            <?php foreach($editors_pick as $ep): ?>
              <tr>
                <td><img src = "<?php echo $ep['first_page']; ?>" height = "100px" width = "100px" /></td>
                <td><?php echo $ep['name']; ?></td>
                <td><?php echo $ep['description']; ?></td>
                <td>
                  <a href = "<?php echo base_url('Profile/'.$ep['username']); ?>"><?php echo $ep['username']; ?></a>
                </td>
                <td id = "like-count-<?php echo $ep['scrapbook_id']; ?>">
                  <?php echo $ep['likes']; ?>                  
                </td>
                <td><?php echo $ep['view_counter']; ?></td>
                <td>
                  <a href = "<?php echo base_url('view/'.$ep['scrapbook_id']); ?>">View</a>
                  <?php
                    switch($ep['like']){
                      case 0:
                        break;
                      case 1:
                        echo '<button class = "unlike" data-id = "'.$ep['scrapbook_id'].'">Unlike</button>';
                        break;
                      case 2:
                        echo '<button class = "like" data-id = "'.$ep['scrapbook_id'].'">Like</button>';
                        break;
                    }                    
                  
                  if($this->session->userdata('logged_in')){
                    echo '<button class = "reportButton" data-scid = "'.$ep["scrapbook_id"].'">Report</button>';
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
            <a class="landi hed float-left EPFW" href="<?php echo base_url('Scrapbooks/Featured_Works'); ?>">Featured Works</a>
          </li>
          <li class="page-item disabled">
            <a class="landi hed float-left EPFW" href="<?php echo base_url('Scrapbooks/Latest_Works'); ?>">Latest Works</a>
          </li>
        </ul>
      </div>

    
  </div>
  