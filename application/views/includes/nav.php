<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg navbar-light bg-overlay  nav-row">
	<div class="container">
		<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none landi2 hed" href="<?php echo base_url('Home'); ?>">Navigation</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav mx-auto">
        <li class="nav-item active px-lg-4">
			<a class="hed nav-link text-uppercase text-expanded landi2 " href="<?php echo base_url('Home'); ?>">Home
				<span class="sr-only">(current)</span>
			</a>
        </li>
		<li class="nav-item px-lg-4">
			<a class="hed nav-link text-uppercase text-expanded landi2 " href="">Create</a>
        </li>
        <li class="nav-item px-lg-4">
			<a class="hed nav-link text-uppercase text-expanded landi2 " href="<?php echo base_url('Assets'); ?>">Assets</a>
        </li>
        <li class="nav-item px-lg-4">
			<a class="hed nav-link text-uppercase text-expanded landi2 " href="<?php echo base_url('Scrapbooks'); ?>">Scrapbooks</a>
        </li>
        <li class="nav-item px-lg-4">
			<a class="hed nav-link text-uppercase text-expanded landi2 " href="<?php echo base_url('About'); ?>">About</a>
        </li>
		<li class="dropdown nav-item px-lg-4">
			<a class="dropdown-toggle nav-link text-expanded text-uppercase landi2 login" data-toggle="dropdown" href=""><strong>Log In</strong></a>
			<!--login-->
				<ul class="dropdown-menu text-expanded drpbttn">
				<form class="form-signin" method = "POST" action = "">
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" name = "email" class="form-control" placeholder="Email address" required>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name = "password" class="form-control" placeholder="Password" required>

    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" name = "submit" type="submit">Sign in</button>
  </form>
  </li>
		</ul>
    </div>
	</div>
</nav>