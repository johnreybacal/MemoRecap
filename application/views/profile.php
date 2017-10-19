<!-- PPPPPPRRRRRRRRRROOOOOOOOOOFFFFFFIIIIIIIIIIILLLLLLLLLLLEEEEEEEEE	 -->
<div id="userReportModal" class="modal">                
  <div class="modal-content" style = "width: 50%;">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h4>Report this user</h4>
    </div>
    <div class="modal-body">
      <h5 style = "color: black">Why are you reporting this user?</h5>
      <form method = "POST" action = "<?php echo base_url('reportUser'); ?>">
        <input type = "text" name = "id" id = "id" readonly /><br />
        Reason: <input type = "text" value = "Abusive" name = "reason" /><br />
        <input type = "submit" value = "Report" />
      </form>
    </div>
    <div class="modal-footer">      
      <h3>We are very sorry that you've experienced this</h3>
    </div>
  </div>
</div>
<div class="container">

      <div class=" p-4 my-4 bg-faded">
    <div class="row">
        <div class="userstuff col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src = "<?php echo base_url('dp/'.$profile['dp']); ?>" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="userstuff">
                        <h4>User details</h4>							                       
                        <p><?php echo $profile['name']; ?></p>
                        <p><?php echo $profile['username']; ?></p>
                        <div >
                            <?php 
                              if($this->session->userdata('username') == $profile['username']){
                                echo '<a href="'.base_url('Account').'">Account Options</a>';
                              }
                            ?>
                                <span class="caret"></span><span class="sr-only">Display Picture</span>
                            <?php 
                              if($this->session->userdata('username') != $profile['username']){
                                echo '<button id = "reportButton" data-id = "'.$profile['username'].'">Report this user</button>';
                              }
                              ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

	
<!-- BBBBBBAAAAAAAAAAADDDDDDDDEEEEEEEEEEHHHHHHHH -->
    <div class="container bg p-4 my-4">

      <div class=" p-4 my-4" style="margin: 0px 50px 0px 50px">
	  
        <div class="card card-inverse">
          <img class="card-img img-fluid w-100" src = "<?php echo base_url('css/images/slider1.jpg'); ?>" alt="">
          <div class="card-img-overlay bg-overlay">
            <h2 class="card-title text-shadow text-white text-uppercase mb-0">Scrapbook Title</h2>
            <p class="text-shadow text-white">March 1, 2017</p>
            <p class="lead card-text text-shadow text-white w-50 d-none d-lg-block">Pinned scrapbook</p>
            <a href="#" class="btn btn-secondary">Check It Out</a>
          </div>
        </div>
      </div>

      <div class=" p-4 my-4" style="margin: 0px 50px 0px 50px">
        <div class="card card-inverse">
          <img class="card-img img-fluid w-100" src = "<?php echo base_url('css/images/slider2.jpg'); ?>" alt="">
          <div class="card-img-overlay bg-overlay">
            <h2 class="card-title text-shadow text-white text-uppercase mb-0">Scrapbook Title</h2>
            <p class="text-shadow text-white">March 1, 2017</p>
            <p class="lead card-text text-shadow text-white w-50 d-none d-lg-block">My latest scrapbook</p>
            <a href="#" class="btn btn-secondary">Check It Out</a>
          </div>
        </div>
      </div>

      <div class=" p-4 my-4" style="margin: 0px 50px 0px 50px">
        <div class="card card-inverse">
          <img class="card-img img-fluid w-100" src = "<?php echo base_url('css/images/slider3.jpg'); ?>" alt="">
          <div class="card-img-overlay bg-overlay">
            <h2 class="card-title text-shadow text-white text-uppercase mb-0">Scrapbook Ttile</h2>
            <p class="text-shadow text-white">March 1, 2017</p>
            <p class="lead card-text text-shadow text-white w-50 d-none d-lg-block">Shared scrapbook</p>
            <a href="#" class="btn btn-secondary">Check It Out</a>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <div class=" p-4 my-4">
        <ul class="pagination justify-content-center mb-0">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
      </div>

    </div>

     <script>
    document.getElementsByClassName("close")[0].onclick = function(){
          document.getElementById('userReportModal').style.display = "none";        
      }      
      $('#reportButton').click(function(){
        var id = $(this).data('id');        
        $('#id').val(id);
        $('#userReportModal').css('display', 'block');
      });
  </script>