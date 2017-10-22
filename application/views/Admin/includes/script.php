<script>
	function block($this){ 
		var id = $this.data('id');
		var YouAreIll = 'Admin/block' + $this.data('table');	
		$.ajax({
			url : "<?php echo base_url('"+YouAreIll+"/'); ?>"+id,
			success: function(data){
				$this.html(data);
			}
			});
		$this.removeClass('block').addClass('unblock').off().on('click', function(){
			unblock($this);
		});
	}
	function unblock($this, $block){      
		var id = $this.data('id');
		var YouAreIll = 'Admin/unblock' + $this.data('table');		
		$.ajax({
			url : "<?php echo base_url('"+YouAreIll+"/'); ?>"+id,			
			success: function(data){
				$this.html(data);
			}
		});      
		$this.removeClass('unblock').addClass('block').off().on('click', function(){
			block($this);
		});
	}
	$('.block').click(function(){
		block($(this));
	});
	$('.unblock').click(function(){
		unblock($(this));
	});
</script>