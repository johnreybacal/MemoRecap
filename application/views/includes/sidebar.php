<!-- SAYDFAKENGBAR -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color:white"><p>x</p></a><br />
  <a class="landi2 hed" href="<?php echo base_url('Account/activities'); ?>">Activities</a>
  <a class="landi2 hed" href="<?php echo base_url('Account/dp'); ?>">Profile Picture</a>
  <a class="landi2 hed" href="<?php echo base_url('Account/username'); ?>">Username</a>
  <a class="landi2 hed" href="<?php echo base_url('Account/password'); ?>">Password</a>
  <a class="landi2 hed" href="<?php echo base_url('Account/manage'); ?>">Manage Account</a>
</div>


<div class="container"><br />
	<h3 class="landi hedest text-center ">Your Account Settings</h3>
<span class="landi hed" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; OPTIONS</span>
</div>

<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "20%";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
</script>