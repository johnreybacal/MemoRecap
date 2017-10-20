<div id="scrapbookReportModal" class="modal">                
  <div class="modal-content" style = "width: 50%;">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h4>Report this scrapbook</h4>
    </div>
    <div class="modal-body">
      <h5 style = "color: black">Why are you reporting this scrapbook?</h5>
      <!-- <form method = "POST" action = "<?php echo base_url('reportScrapbook'); ?>"> -->
        <input type = "text" name = "id" id = "id" readonly /><br />
        Reason: <input type = "text" id = "reason" value = "Inappropriate content" name = "reason" /><br />
        <!-- <input type = "submit" value = "Report" /> -->
        <button id = "submitReport">Submit report</button>
      </form>
    </div>
    <div class="modal-footer">      
      <h3>We are very sorry that you've experienced this</h3>
    </div>
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
    $('#submitReport').click(function(){
      $.post("<?php echo base_url('reportScrapbook'); ?>",{
        id: $('#id').val(),
        reason: $('#reason').val()        
      }, function(data, status, xhr){
        alert(status);
      });      
      $('#scrapbookReportModal').css('display', 'none');
    });
</script>