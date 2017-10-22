<!-- BAAAADEEEEEEHHH  -->
<style type="text/css">
  .pointer{
    cursor: pointer;
  }
  .user{
    color: #576b95;
  }
  .left{
    float: left;
  }
  .right{
    float: right;
  }
  .size{
    font-size: 4%;
  }
</style>
  <div class="container"> 
             <div class="w3-row-padding w3-center" style="margin: 7% 0 0 0;">
      <div class="card-img-overlay ">
          <h2 class=" text-shadow text-white text-uppercase ">Editors Picks</h2>
          <p class="parabooks text-shadow text-white">The works featured here are chosen by the editors as those best shows
        or endorses the beauty and functionalities of this website.
        </p>
      
    </div>
      <?php foreach($editors_pick as $ep): ?>
      <div class="w3-col m4 w3-border" style="background-color: #fefefe!important;">
          <!-- <div class="col-md-10" >&nbsp;</div> -->
          <div class="col-md-1 " >
            <?php 
              if($this->session->userdata('logged_in')){
                echo '<button style ="border:none; background-color: rgba(0,0,0,0);" class = "reportButton" data-scid = "'.$ep["scrapbook_id"].'"><i class="fa fa-exclamation" style="font-size:36px ;color:red"></i></button>';
              }
            ?>    
          </div>
        <img src = "<?php echo $ep['first_page']; ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge" alt="The mist over the mountains">
        
        <div class="w3-container w3-margin-top">
        <h3><b><?php echo $ep['name']; ?></b></h3>
         <h1><a class="user left" href = "<?php echo base_url('Profile/'.$ep['username']); ?>"><?php echo $ep['username']; ?></a></h1>
          <div class="row">
                 
            <div class="w3-col m12" style="float: left;">          
              <h3>
                <?php
                    switch($ep['like']){
                      case 0:
                        break;
                      case 1:
                        echo '<button style="float:left; border:none; background-color: rgba(0,0,0,0);" class = "unlike" data-id = "'.$ep['scrapbook_id'].'"><span class="glyphicon glyphicon-heart left" style="color: red;"></span></button>';
                        break;
                      case 2:
                        echo '<button style="float:left; border:none; background-color: rgba(0,0,0,0);" class = "like" data-id = "'.$ep['scrapbook_id'].'"><span class="glyphicon glyphicon-heart-empty left" style="color: red;"></span></button>';
                        break;
                    }                    
                  
                  // if($this->session->userdata('logged_in')){
                  //   echo '<button class = "reportButton" data-scid = "'.$ep["scrapbook_id"].'">Report</button>';
                  // }
                ?>
                <!-- <span class="glyphicon glyphicon-heart-empty left" style="color: red;"></span> -->
                <span id = "like-count-<?php echo $ep['scrapbook_id']; ?>" class="w3-margin-left left" style="color: #111111;"><?php echo $ep['likes']; ?></span>
                <span class="glyphicon glyphicon-eye-open right w3-margin-left" style="color: black;"></span>
                <span class="right"><?php echo $ep['view_counter']; ?></span>&nbsp;</h3>
            </div>
          </div>
          <div>
            <h5><i><?php echo $ep['description']; ?></i></h5>
          </div>
        </div>
      </div>
    <?php endforeach; ?> 
<!-- end of 1st -->
   </div> <!--close tag -->
               
    </div>
   
   
   <div class=" text-center">
        <ul class="pagination justify-content-center mb-0">
          <li class="page-item">
            <a class="landi hed" href="<?php echo base_url('Scrapbooks/Featured_Works'); ?>">Featured Works</a>
          </li>
          <li class="page-item">
            <a class="landi hed " href="<?php echo base_url('Scrapbooks/Latest_Works'); ?>">Latest Works</a>
          </li>
        </ul>
      </div>

    
  </div>
  
  <div id="modal01" class="w3-modal " onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" style="margin-top: 60px;" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-opacity w3-transparent ">
    <img id="img01" class="w3-round-xlarge w3-image" style="width: auto;">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<script type="text/javascript">
  function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>