<script>
  function like($this){ 
    var id = $this.data('id');
    $.ajax({
      url : "<?php echo base_url('likeScrapbook/'); ?>"+id,
      success: function(data){
        $('#like-count-' + id).html(data);
      }
    });
    $this.removeClass('like').addClass('unlike').html('Unlike').off().on('click', function(){
      unlike($this);
    });
  }
  function unlike($this){      
    var id = $this.data('id');
    $.ajax({
      url : "<?php echo base_url('unlikeScrapbook/'); ?>"+id,
      success: function(data){
        $('#like-count-' + id).html(data);
      }
    });      
    $this.removeClass('unlike').addClass('like').html('Like').off().on('click', function(){
      like($this);
    });
  }
  $('.like').click(function(){
    like($(this));
  });
  $('.unlike').click(function(){
    unlike($(this));
  });
</script>