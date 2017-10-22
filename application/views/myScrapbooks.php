
<style type="text/css">
    body{
        min-height: 700px;
    }
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
<!-- modalstart -->
<div id="editDescModal" class="modal ">                
  <div class="modal-content" style = "width: 50%;">
    <div class="modal-header">
      <span class="close" id = "editClose">&times;</span>
      <h4>Edit Scrapbook Description</h4>
    </div>
    <div class="modal-body">      
      <!-- <form method = "POST" action = "<?php echo base_url('editDescription'); ?>" id = "editDescForm"> -->
      	<input type = "text" id = "scid" name = "id" readonly />
        Description: <input type = "text" id = "id" name = "description" /><br />
      <!-- </form> -->
    </div>
    <div class="modal-footer">      
    	<!-- <input type = "submit" value = "Save" form = "editDescForm" />       -->
      <button id = "saveDesc">Save</button>
    </div>
  </div>
</div>
<div id="deleteModal" class="modal">                
  <div class="modal-content" style = "width: 50%;">
    <div class="modal-header">
      <span class="close" id = "deleteClose">&times;</span>
      <h4 style = "font-family: arial;">Delete scrapbook <strong id = "scrapbook-id"></strong></h4>
    </div>
    <div class="modal-body">      
      <h3>Are you sure you want to delete this scrapbook?</h3><br />
      <h4>You can't undo this</h4>
    </div>
    <div class="modal-footer">              
      <button id = "deleteYes">Yes</button>
      <button id = "deleteNo">No</button>
    </div>
  </div>
</div>

<!-- modal end -->
<div class="w3-row-padding w3-center" style="margin: 7% 0 0 0;">
    <?php foreach($scrapbooks as $scrapbook): ?>
        <div class = "row" style = "margin: auto;">
      <div id = "sc-row-<?php echo $scrapbook['scrapbook_id']; ?>" class="w3-col m4 w3-border" style="background-color: #fefefe!important;">
            <img src = "<?php echo $scrapbook['first_page']; ?>" height = "100px" width = "100px" onclick="onClick(this)" class="pointer w3-round-xlarge" alt="Alternative"/>
        <div class="w3-container w3-margin-top">
        <h3><b><?php echo $scrapbook['name']; ?></b></h3>
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
            <font class="left">
                
                <button class = "togglePrivacy" data-id = "<?php echo $scrapbook['scrapbook_id']; ?>"><?php echo $scrapbook['privacy']; ?></button>
                <button class = "btn btn-info editDesc" data-id = "<?php echo $scrapbook['scrapbook_id']; ?>"><span class="glyphicon glyphicon-edit"></span></button>
            </font>
            <font class="right">
                <a href = "<?php echo base_url('editor/'.$scrapbook['scrapbook_id']); ?>">Edit</a>
                <a href = "<?php echo base_url('view/'.$scrapbook['scrapbook_id']); ?>">View</a>
                        <!-- <a href = "<?php echo base_url('delete/'.$scrapbook['scrapbook_id']); ?>">Delete</a> -->
                <button style="border: none;" class="btn btn-info deleteButton" data-id = "<?php echo $scrapbook['scrapbook_id']; ?>"><span class="glyphicon glyphicon-trash"></span></button>
            </font><br/><br/>
            <i><p style=" font-weight: italic;" id = "desc-<?php echo $scrapbook['scrapbook_id']; ?>"><?php echo $scrapbook['description']; ?></p>  </i>                 
            
                   
          </div>
        </div>
      </div>
 
  </div>

    <?php endforeach; ?> 
    
<!-- end of 1st -->
</div> <!--close tag -->
<!-- <div class="container" style="min-height: 700px;">
	
	List of scrapbooks
	<div>
	<thead>
		<tr>
			<td>Cover</td>
			<td>Title</td>
			<td>Desctiption</td>
			<td>Likes</td>
      <td>Views</td>
			<td>Privacy</td>
			<td>Actions</td>
		</tr>
	</thead>	
	<tbody>
		<?php foreach($scrapbooks as $scrapbook): ?>
			<tr id = "sc-row-<?php echo $scrapbook['scrapbook_id']; ?>">
    			<td>
                    <img src = "<?php echo $scrapbook['first_page']; ?>" height = "100px" width = "100px" />
                </td>
                <td><?php echo $scrapbook['name']; ?></td>
                <td>
            	   <p id = "desc-<?php echo $scrapbook['scrapbook_id']; ?>"><?php echo $scrapbook['description']; ?></p>                	
            	   <button class = "editDesc" data-id = "<?php echo $scrapbook['scrapbook_id']; ?>">Edit description</button>
                </td>
                <td><?php echo $scrapbook['likes']; ?></td>
                <td><?php echo $scrapbook['view_counter']; ?></td>
                <td>
                    <button class = "togglePrivacy" data-id = "<?php echo $scrapbook['scrapbook_id']; ?>"><?php echo $scrapbook['privacy']; ?></button>
                </td>
                <td>          
                	<a href = "<?php echo base_url('editor/'.$scrapbook['scrapbook_id']); ?>">Edit</a>
                	<a href = "<?php echo base_url('view/'.$scrapbook['scrapbook_id']); ?>">View</a>
                	<!-- <a href = "<?php echo base_url('delete/'.$scrapbook['scrapbook_id']); ?>">Delete</a> -->
                   <!--  <button class = "deleteButton" data-id = "<?php echo $scrapbook['scrapbook_id']; ?>">Delete</button>
                </td>
    		</tr>
		<?php endforeach; ?>
	</tbody>
	</table>	
</div>  -->
<script>
    document.getElementById("editClose").onclick = function(){
        document.getElementById('editDescModal').style.display = "none";        
    }
    document.getElementById("deleteClose").onclick = function(){
        document.getElementById('deleteModal').style.display = "none";        
    }
    $('.editDesc').click(function(){
        var id = $(this).data('id');
        $('#id').val($('#desc-' + id).html());
        $('#scid').val(id);
        $('#editDescModal').css('display', 'block');
    });
    $('#saveDesc').click(function(){
        $.post("<?php echo base_url('editDescription'); ?>",{
            id: $('#scid').val(),
            description: $('#id').val()        
            }, function(data){
        });
        $('#desc-' + $('#scid').val()).html($('#id').val());
        document.getElementById('editDescModal').style.display = "none";
    });
    $('.togglePrivacy').click(function(){
        var $this = $(this);
        var id = $this.data('id');
        var priv = $this.html();
        $.ajax({
            url: "<?php echo base_url('togglePrivacy/scrapbooks/'); ?>" + id + '/' + priv,
            success: function(data){          
                $this.html(data)
            }
        });
    });
    function hideDelete(){
        $('#deleteModal').css('display', 'none');
    }
    $('.deleteButton').click(function(){
        var id = $(this).data('id');
        $('#scrapbook-id').html(id);
        $('#deleteModal').css('display', 'block');   
    });
    $('#deleteYes').click(function(){
        // alert("<?php echo base_url('delete/'); ?>" + $('#scrapbook-id').html());
        $.ajax({
            url: "<?php echo base_url('delete/'); ?>" + $('#scrapbook-id').html(),
            success: function(data){                
                $('#sc-row-' + $('#scrapbook-id').html()).remove();
            }
        });
        hideDelete();
    });
    $('#deleteNo').click(function(){
        hideDelete();
    });
</script>
