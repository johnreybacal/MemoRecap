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
          <h2 class=" text-shadow text-white text-uppercase ">Featured Works</h2>
              <p class="parabooks text-shadow text-white">The works featured here have the most views/likes by fellow users of this website,
      all of which shows aesthetics and life.
            </p>          
    </div>
      <?php foreach($featured_works as $fw): ?>
      <div class="w3-col m4 w3-border" style="background-color: #fefefe!important;">
          <!-- <div class="col-md-10" >&nbsp;</div> -->
          <div class="col-md-1 " >
            <?php 
              if($this->session->userdata('logged_in')){
                echo '<button style ="border:none; background-color: rgba(0,0,0,0);" class = "reportButton" data-scid = "'.$fw["scrapbook_id"].'"><i class="fa fa-exclamation" style="font-size:36px ;color:red"></i></button>';
              }
            ?>    
          </div>
        <img src = "<?php echo $fw['first_page']; ?>" style="width:80%" onclick="onClick(this)" class="pointer w3-round-xlarge" alt="The mist over the mountains">
        
        <div class="w3-container w3-margin-top">
        <h3><b><?php echo $fw['name']; ?></b></h3>
         <h1><a class="user left" href = "<?php echo base_url('Profile/'.$fw['username']); ?>"><?php echo $fw['username']; ?></a></h1>
          <div class="row">
                 
            <div class="w3-col m12" style="float: left;">          
              <h3>
                <?php
                    switch($fw['like']){
                      case 0:
                        break;
                      case 1:
                        echo '<button style="float:left; border:none; background-color: rgba(0,0,0,0);" class = "unlike" data-id = "'.$fw['scrapbook_id'].'"><span class="glyphicon glyphicon-heart left" style="color: red;"></span></button>';
                        break;
                      case 2:
                        echo '<button style="float:left; border:none; background-color: rgba(0,0,0,0);" class = "like" data-id = "'.$fw['scrapbook_id'].'"><span class="glyphicon glyphicon-heart-empty left" style="color: red;"></span></button>';
                        break;
                    }                                  
                ?>                
                <span id = "like-count-<?php echo $fw['scrapbook_id']; ?>" class="w3-margin-left left" style="color: #111111;"><?php echo $fw['likes']; ?></span>
                <span class="glyphicon glyphicon-eye-open right w3-margin-left" style="color: black;"></span>
                <span class="right"><?php echo $fw['view_counter']; ?></span>&nbsp;</h3>
            </div>
          </div>
          <div>
            <h5><i><?php echo $fw['description']; ?></i></h5>
          </div>
        </div>
      </div>
    <?php endforeach; ?> 
<!-- end of 1st -->
   </div> <!--close tag -->
               
    </div>
   
   
   <div class=" p-4 my-4">
        <ul class="pagination justify-content-center mb-0">
          <li class="page-item">
            <a class="landi hed float-left EPFW" href="<?php echo base_url('Scrapbooks/Editors_Pick'); ?>">Editor's Pick</a>
          </li>
          <li class="page-item ">
            <a class="landi hed float-left EPFW" href="<?php echo base_url('Scrapbooks/Latest_Works'); ?>">Recent Works</a>
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



<!-- HIIIIIIIIIINDIIIIIIIIIII ITTTTTTTTOOOOOOOOOOOOOO NAKA TABLE PA ITO -->
<!-- 	<div class="container bg p-4 my-4">
	
	 <h3 class="landi hedest text-center ">Featured Works</h3>
    
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

	  
	</div> -->