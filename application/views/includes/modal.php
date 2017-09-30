<!-- MODALSHIT -->

	<div class="modal fade" id="mymodal" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-header">
		<h4 class="modal-title">New</h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
	</div>
	<div class="modal-body">
	<form action = "<?php echo base_url('editor/new'); ?>" method = "POST">
		Name:<input type="text" name="name" required /><br />
		Number of pages:<input type="number" name="pages" min = "3" max = "999" required /><br />
		Size:<br />
		<input type = "radio" name = "size" value = "512x768" required checked />512x768<br />
		<input type = "radio" name = "size" value = "640x512" required />640x512<br />
		<input type = "radio" name = "size" value = "512x512" required />512x512<br />
		<input type = "radio" name = "size" value = "640x768" required />640x768<br />
		<input type="submit" name="create" value = "Create" />
	</form>
	</div> <!--end modal body-->
	<div class="modal-footer">
		<input type="submit" name="create" value = "Create" />
		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	</div>
</div>
	</div>
	</div>

	<!-- END OF MODALSHIT -->
