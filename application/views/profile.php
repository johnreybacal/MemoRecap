<!-- PPPPPPRRRRRRRRRROOOOOOOOOOFFFFFFIIIIIIIIIIILLLLLLLLLLLEEEEEEEEE	 -->
<!-- start of modal -->
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
<!-- end of modal -->
<div class="container-fluid " style="margin-top: 10%;height: 700px; border: 2px solid red;">
  <div class="row">
    <div class="col-md-4"  style=" border: 2px solid red;">
    
            
      <div class="row">
          <div class="col-md-4">
              <img src = "<?php echo base_url('dp/'.$profile['dp']); ?>" alt="" class="img-rounded img-responsive" />
          </div>
          <div class="userstuff">
            				                       
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
    <!-- dito na bacs yung scrapbook niya -->
    <div class="col-md-8">
    </div>
  </div>
   <!--  <div class="w3-row-padding w3-center" style="margin: 7% 0 0 0;">
      <div class="card-img-overlay ">
          <h2 class=" text-shadow text-white text-uppercase ">Editors Picks</h2>
          <p class="parabooks text-shadow text-white">The works featured here are chosen by the editors as those best shows
        or endorses the beauty and functionalities of this website.
        </p>
      
    </div>
      <?php foreach($scrapbook as $scrapbook): ?>
      <div class="w3-col m4 w3-border" style="background-color: #fefefe!important;">
        <img src = "<?php echo $scrapbook['first_page']; ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge" alt="The mist over the mountains">
        <div class="w3-container w3-margin-top">
        <h3><b><?php echo $scrapbook['name']; ?></b></h3>
         <h1><a class="user left" href = "<?php echo base_url('Profile/'.$scrapbook['username']); ?>"><?php echo $scrapbook['username']; ?></a></h1>
          <div class="row">
            <div class="w3-col m12" style="float: left;">          
              <h3 >
                <span class="glyphicon glyphicon-heart-empty left" style="color: red;"></span>
                <span class="w3-margin-left left" style="color: #111111;"><?php echo $scrapbook['likes']; ?></span>
                <span class="glyphicon glyphicon-eye-open right w3-margin-left" style="color: black;"></span>
                <span class="right"><?php echo $scrapbook['view_counter']; ?></span>&nbsp;</h3>
            </div>
          </div>
          <div>
            <h5><i><?php echo $scrapbook['description']; ?></i></h5>
          </div>
        </div>
      </div>
    <?php endforeach; ?> 
    <a  class="right w3-xlarge w3-black w3-hover-white w3-wide w3-animate-opacity" href="<?php echo base_url('Scrapbooks/Editors_Pick'); ?>">View this gallery!</a>

   </div>  -->
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