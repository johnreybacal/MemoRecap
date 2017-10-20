<script>
	function addToEP($this){ 
		var id = $this.data('id');			
		$.ajax({
			url : "<?php echo base_url('Admin/addToEP/'); ?>"+id,
			success: function(data){
				$this.html(data);
			}
			});
		$this.removeClass('addToEP').addClass('removeFromEP').off().on('click', function(){
			removeFromEP($this);
		});
	}
	function removeFromEP($this){
		var id = $this.data('id');			
		$.ajax({
			url : "<?php echo base_url('Admin/RemoveFromEP/'); ?>"+id,			
			success: function(data){
				$this.html(data);
			}
		});      
		$this.removeClass('removeFromEP').addClass('addToEP').off().on('click', function(){
			addToEP($this);
		});
		if($this.hasClass('removeWhenRemoved')){
			$this.parent().parent().remove();
		}
	}
	$('.addToEP').click(function(){
		addToEP($(this));
	});
	$('.removeFromEP').click(function(){
		removeFromEP($(this));
	});
</script>