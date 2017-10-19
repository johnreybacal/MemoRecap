<!-- BAAAADEEEEEEHHH  -->
<div id="scrapbookReportModal" class="modal">                
  <div class="modal-content" style = "width: 50%;">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h4>Report this scrapbook</h4>
    </div>
    <div class="modal-body">
      <h5 style = "color: black">Why are you reporting this scrapbook?</h5>
      <form method = "POST" action = "<?php echo base_url('reportScrapbook'); ?>">
        <input type = "text" name = "id" id = "id" readonly /><br />
        Reason: <input type = "text" value = "Inappropriate content" name = "reason" /><br />
        <input type = "submit" value = "Report" />
      </form>
    </div>
    <div class="modal-footer">      
      <h3>We are very sorry that you've experienced this</h3>
    </div>
  </div>
</div>
  <div class="container bg p-4 my-4">
  
   <h3 class="landi hedest text-center ">Editors Pick</h3>
     <!--<img class="d-block img-fluid w-50 paddy" src="<?php echo base_url('css/images/yato5.gif'); ?>" alt="" >-->
    <div class="wrapper" style="width: 80%; margin: auto;">
      <table>
        <thead>
          <tr>
            <td>Cover</td>
            <td>Title</td>
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
                <td>
                  <a href = "<?php echo base_url('Profile/'.$ep['username']); ?>"><?php echo $ep['username']; ?></a>
                </td>
                <td><?php echo $ep['likes']; ?></td>
                <td><?php echo $ep['view_counter']; ?></td>
                <td>
                  <a href = "<?php echo base_url('view/'.$ep['scrapbook_id']); ?>">View</a>
                  <?php
                    switch($ep['like']){
                      case 0:
                        break;
                      case 1:
                        echo '<a href = "'.base_url('unlikeScrapbook/'.$ep['scrapbook_id']).'">Unlike</a>';
                        break;
                      case 2:
                        echo '<a href = "'.base_url('likeScrapbook/'.$ep['scrapbook_id']).'">Like</a>';
                        break;
                    }                    
                  ?>
                  <button class = "reportButton" data-scid = "<?php echo $ep["scrapbook_id"]; ?>">Report</button>
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

  <script>
    document.getElementsByClassName("close")[0].onclick = function(){
          document.getElementById('scrapbookReportModal').style.display = "none";        
      }      
      $('.reportButton').click(function(){
        var scid = $(this).data('scid');        
        $('#id').val(scid);
        $('#scrapbookReportModal').css('display', 'block');
      });
  </script>