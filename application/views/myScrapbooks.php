<div id="editDescModal" class="modal">                
  <div class="modal-content" style = "width: 50%;">
    <div class="modal-header">
      <span class="close" id = "editClose">&times;</span>
      <h4>Edit scrapbook descrition</h4>
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
<div class="container bg-faded">
	<!-- <center> -->
	List of scrapbooks
	<table>
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
                    <button class = "deleteButton" data-id = "<?php echo $scrapbook['scrapbook_id']; ?>">Delete</button>
                </td>
    		</tr>
		<?php endforeach; ?>
	</tbody>
	</table>	
	<!-- </center> -->
	<!-- <a href="<?php echo base_url('Home'); ?>" class="">Back to Home.</a> -->

</div>
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
